<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExamDataSeeder extends Seeder
{
    protected string $directoryPath;

    protected array $schoolCache = [];

    protected array $examCache = [];

    protected array $questionsBatch = [];

    protected int $batchSize = 500;

    public function __construct()
    {
        $this->directoryPath = database_path('csv/questions');
    }

    public function run(): void
    {
        $csvFiles = glob($this->directoryPath . '/*.csv');

        if (empty($csvFiles)) {
            $this->command->error("No CSV files found in: {$this->directoryPath}");

            return;
        }

        $this->command->info('Starting stable CSV import for ' . count($csvFiles) . ' file(s).');

        DB::disableQueryLog();

        foreach ($csvFiles as $filePath) {
            $this->processFile($filePath);
        }

        $this->command->info('✓ Import completely finished for all files.');
    }

    protected function processFile(string $filePath): void
    {
        $this->command->info('Processing: ' . basename($filePath));

        DB::beginTransaction();

        try {
            $handle = fopen($filePath, 'r');

            $headers = fgetcsv($handle);
            if (!$headers) {
                throw new \Exception('Failed to read CSV headers in ' . basename($filePath));
            }

            $headers[0] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $headers[0]);
            $headers = array_map('trim', $headers);

            $rowCount = 0;
            $importedCount = 0;
            $skippedCount = 0;

            while (($row = fgetcsv($handle)) !== false) {
                $rowCount++;

                if (empty(array_filter($row))) {
                    continue;
                }

                if (count($headers) !== count($row)) {
                    $row = array_pad($row, count($headers), null);
                }
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
                    $this->command->warn("Row {$rowCount} skipped in " . basename($filePath) . ': ' . $e->getMessage());
                }

                if ($rowCount % 500 === 0) {
                    $this->command->info("Processed {$rowCount} rows from " . basename($filePath) . '...');
                }
            }

            $this->insertQuestionsBatch();

            fclose($handle);

            DB::commit();
            $this->command->info('✓ Finished file: ' . basename($filePath) . " ({$importedCount} queued, {$skippedCount} skipped).");

        } catch (\Exception $e) {
            DB::rollBack();
            $this->questionsBatch = [];
            $this->command->error('Failed processing ' . basename($filePath) . ': ' . $e->getMessage());
        }
    }

    protected function processRow(array $data): bool
    {
        if (empty($data['question'])) {
            return false;
        }

        $schoolName = $data['school'] ?? '';
        $examName = $data['exam'] ?? '';

        if (empty($schoolName) || empty($examName)) {
            return false;
        }

        $schoolId = $this->getOrCreateSchool($schoolName);

        $examId = $this->getOrCreateExam($schoolId, $examName);

        $this->queueQuestion($examId, $data);

        return true;
    }

    protected function getOrCreateSchool(string $name): int
    {
        $slug = Str::slug($name);

        if (isset($this->schoolCache[$slug])) {
            return $this->schoolCache[$slug];
        }

        $record = DB::table('schools')->where('slug', $slug)->first();

        if ($record) {
            $this->schoolCache[$slug] = $record->id;

            return $record->id;
        }

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

        $record = DB::table('exams')->where('slug', $slug)->where('school_id', $schoolId)->first();

        if ($record) {
            $this->examCache[$cacheKey] = $record->id;

            return $record->id;
        }

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

        $baseUrl = 'https://usexamprep.com/questions/';
        $baseText = $data['question'] ?? 'question';
        $cleanSlug = Str::slug(substr($baseText, 0, 60));

        $randomSuffix = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $urlPath = $cleanSlug . '-' . $randomSuffix;
        $fullUrl = $baseUrl . $urlPath;

        if (strlen($fullUrl) > 105) {
            $maxSlugLength = 105 - strlen($baseUrl) - 7;
            $truncatedSlug = substr($cleanSlug, 0, $maxSlugLength);
            $fullUrl = $baseUrl . $truncatedSlug . '-' . $randomSuffix;
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
