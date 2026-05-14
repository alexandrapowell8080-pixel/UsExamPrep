<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExamDataSeeder extends Seeder
{
    protected string $directoryPath;

    // Caches to prevent duplicate DB queries for Schools and Exams
    protected array $schoolCache = [];

    protected array $examCache = [];

    protected array $questionsBatch = [];

    // Batch size to prevent memory issues and MySQL timeouts
    protected int $batchSize = 500;

    public function __construct()
    {
        // Adjust this path to where your CSV files are located
        $this->directoryPath = database_path('csv/questions');
    }

    public function run(): void
    {
        $csvFiles = glob($this->directoryPath.'/*.csv');

        if (empty($csvFiles)) {
            $this->command->error("No CSV files found in: {$this->directoryPath}");

            return;
        }

        $this->command->info('Starting stable CSV import for '.count($csvFiles).' file(s).');

        DB::disableQueryLog();

        foreach ($csvFiles as $filePath) {
            $this->processFile($filePath);
        }

        $this->command->info('✓ Import completely finished for all files.');
    }

    protected function processFile(string $filePath): void
    {
        $this->command->info('Processing: '.basename($filePath));

        // Start transaction PER FILE to keep connection fresh and stable
        DB::beginTransaction();

        try {
            $handle = fopen($filePath, 'r');

            $headers = fgetcsv($handle);
            if (! $headers) {
                throw new \Exception('Failed to read CSV headers in '.basename($filePath));
            }

            // Clean BOM or weird characters from first header
            $headers[0] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $headers[0]);
            $headers = array_map('trim', $headers);

            $rowCount = 0;
            $importedCount = 0;
            $skippedCount = 0;

            while (($row = fgetcsv($handle)) !== false) {
                $rowCount++;

                // Skip empty rows
                if (empty(array_filter($row))) {
                    continue;
                }

                // Ensure row matches header count (pad with nulls if short)
                if (count($headers) !== count($row)) {
                    $row = array_pad($row, count($headers), null);
                }

                // Normalize encoding and trim whitespace
                $cleanRow = array_map(function ($value) {
                    $value = trim((string) $value);
                    if ($value === '') {
                        return null;
                    }

                    if (mb_check_encoding($value, 'UTF-8')) {
                        return $value;
                    }

                    $encoding = mb_detect_encoding($value, 'UTF-8, ISO-8859-1, Windows-1252', true) ?: 'UTF-8';

                    return mb_convert_encoding($value, 'UTF-8', $encoding);
                }, $row);

                $data = array_combine($headers, $cleanRow);

                try {
                    if ($this->processRow($data)) {
                        $importedCount++;
                    } else {
                        $skippedCount++;
                    }
                } catch (\Exception $e) {
                    $skippedCount++;
                    $this->command->warn("Row {$rowCount} skipped in ".basename($filePath).': '.$e->getMessage());
                }

                if ($rowCount % 500 === 0) {
                    $this->command->info("Processed {$rowCount} rows from ".basename($filePath).'...');
                }
            }

            // Flush any remaining questions in the batch for this specific file
            $this->insertQuestionsBatch();

            fclose($handle);

            // Commit the transaction for this file
            DB::commit();
            $this->command->info('✓ Finished file: '.basename($filePath)." ({$importedCount} queued, {$skippedCount} skipped).");

        } catch (\Exception $e) {
            // Rollback only the current file if it fails, allowing others to continue
            DB::rollBack();
            // Clear the batch so corrupted data doesn't spill into the next file
            $this->questionsBatch = [];
            $this->command->error('Failed processing '.basename($filePath).': '.$e->getMessage());
        }
    }

    protected function processRow(array $data): bool
    {
        // Validate required fields based on your CSV headers
        if (empty($data['question'])) {
            return false;
        }

        $schoolName = $data['school'] ?? '';
        $examName = $data['exam'] ?? '';

        if (empty($schoolName) || empty($examName)) {
            return false;
        }

        // Get or Create School
        $schoolId = $this->getOrCreateSchool($schoolName);

        // Get or Create Exam linked to that School
        $examId = $this->getOrCreateExam($schoolId, $examName);

        // Queue the question for bulk insert
        $this->queueQuestion($examId, $data);

        return true;
    }

    protected function getOrCreateSchool(string $name): int
    {
        $slug = Str::slug($name);

        if (isset($this->schoolCache[$slug])) {
            return $this->schoolCache[$slug];
        }

        // Check DB
        $record = DB::table('schools')->where('slug', $slug)->first();

        if ($record) {
            $this->schoolCache[$slug] = $record->id;

            return $record->id;
        }

        // Insert New
        $id = DB::table('schools')->insertGetId([
            'name' => $name,
            'slug' => $slug,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->schoolCache[$slug] = $id;

        return $id;
    }

    protected function getOrCreateExam(int $schoolId, string $name): int
    {
        $slug = Str::slug($name);
        $cacheKey = "{$schoolId}:{$slug}";

        if (isset($this->examCache[$cacheKey])) {
            return $this->examCache[$cacheKey];
        }

        // Check DB (must match school_id AND slug)
        $record = DB::table('exams')->where('slug', $slug)->where('school_id', $schoolId)->first();

        if ($record) {
            $this->examCache[$cacheKey] = $record->id;

            return $record->id;
        }

        // Insert New
        $id = DB::table('exams')->insertGetId([
            'school_id' => $schoolId,
            'name' => $name,
            'slug' => $slug,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->examCache[$cacheKey] = $id;

        return $id;
    }

    protected function queueQuestion(int $examId, array $data): void
    {
        // Generate URL: https://usexamprep.com/questions/{slug}-{6-digits}
        // Total length must be 105 chars.

        $baseUrl = 'https://usexamprep.com/questions/';
        $baseText = $data['question'] ?? 'question';

        // Create a slug from the first ~50-60 chars of the question
        $cleanSlug = Str::slug(substr($baseText, 0, 60));

        // Generate random 6 digits
        $randomSuffix = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        // Construct initial URL
        $urlPath = $cleanSlug.'-'.$randomSuffix;
        $fullUrl = $baseUrl.$urlPath;

        // Enforce 105 character limit
        if (strlen($fullUrl) > 105) {
            // Calculate max length for the slug part
            // 105 - len(baseUrl) - 1 (hyphen) - 6 (digits)
            $maxSlugLength = 105 - strlen($baseUrl) - 7;
            $truncatedSlug = substr($cleanSlug, 0, $maxSlugLength);
            $fullUrl = $baseUrl.$truncatedSlug.'-'.$randomSuffix;
        }

        $this->questionsBatch[] = [
            'exam_id' => $examId,
            'extract' => $data['extract'] ?? '',
            'question' => $data['question'],
            'choiceA' => $data['choiceA'] ?? '',
            'choiceB' => $data['choiceB'] ?? '',
            'choiceC' => $data['choiceC'] ?? '',
            'choiceD' => $data['choiceD'] ?? '',
            'choiceE' => $data['choiceE'] ?? null,
            'choiceF' => $data['choiceF'] ?? null,
            'choiceG' => $data['choiceG'] ?? null,
            'correct_answer' => $data['correct_answer'] ?? '',
            'rationale' => $data['rationale'] ?? '',
            'question_type' => $data['question_type'] ?? 'multiple_choice',
            'image' => $data['image'] ?? '',
            'url' => $fullUrl,
            // wrong_answer is handled by separate script, so we set to null or empty
            'wrong_answer' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        if (count($this->questionsBatch) >= $this->batchSize) {
            $this->insertQuestionsBatch();
        }
    }

    protected function insertQuestionsBatch(): void
    {
        if (count($this->questionsBatch) > 0) {
            DB::table('questions')->insert($this->questionsBatch);
            $this->questionsBatch = [];
        }
    }
}
