<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ExamDataSeeder extends Seeder
{
    protected string $csvBasePath = 'database/csv/questions/';

    protected array $schoolCache = [];

    protected array $examCache = [];

    protected array $questionsBatch = [];

    protected int $batchSize = 500;

    public function run(): void
    {
        $certifications = [
            ['name' => 'Certified Nursing Assistant', 'slug' => 'certified-nursing-assistant', 'type' => 'nursing'],
            ['name' => 'Nurse Aide', 'slug' => 'nurse-aide', 'type' => 'nursing'],
            ['name' => 'Hospice & Palliative Care', 'slug' => 'hospice-palliative-care', 'type' => 'nursing'],
            ['name' => 'Certified Emergency Nurse', 'slug' => 'certified-emergency-nurse', 'type' => 'nursing'],
            ['name' => 'Family Nurse Practitioner', 'slug' => 'family-nurse-practitioner', 'type' => 'nursing'],
            ['name' => 'Medical Assistant', 'slug' => 'medical-assistant', 'type' => 'ma', 'groups' => ['CCMA', 'AAMA']],
            ['name' => 'Pharmacy Technician', 'slug' => 'pharmacy-technician', 'type' => 'pharmacy', 'groups' => ['PTCE', 'ExCPT']],
            ['name' => 'Phlebotomy Technician Certification', 'slug' => 'phlebotomy-technician-certification', 'type' => 'ma'],
            ['name' => 'National Counselor Examination', 'slug' => 'national-counselor-examination', 'type' => 'counselling'],
        ];

        DB::disableQueryLog();

        foreach ($certifications as $cert) {
            $this->processCertification($cert);
        }

        $this->command->info('✓ Import completely finished for all certifications.');
    }

    protected function processCertification(array $cert): void
    {
        $schoolId = $this->getOrCreateSchool($cert['name'], $cert['slug']);

        $examNamesToProcess = [];
        if (isset($cert['groups'])) {
            foreach ($cert['groups'] as $group) {
                $examNamesToProcess[] = $group.' Practice Exam';
            }
        } else {
            $examNamesToProcess[] = $cert['name'].' Practice Exam';
        }

        foreach ($examNamesToProcess as $examName) {
            // CSV filename is based on SCHOOL SLUG, not type
            // e.g., certified-nursing-assistant_questions.csv
            $csvFileName = $cert['slug'].'_questions.csv';
            $csvFilePath = base_path($this->csvBasePath.$csvFileName);

            if (! File::exists($csvFilePath)) {
                $this->command->warn("CSV file not found: {$csvFileName}. Skipping exam: {$examName}");

                continue;
            }

            $this->processExamCsv($csvFilePath, $schoolId, $examName);
        }
    }

    protected function processExamCsv(string $filePath, int $schoolId, string $examName): void
    {
        $this->command->info('Processing: '.basename($filePath)." → {$examName}");

        DB::beginTransaction();

        try {
            $handle = fopen($filePath, 'r');

            if (! $handle) {
                throw new \Exception('Could not open file: '.basename($filePath));
            }

            $headers = fgetcsv($handle);
            if (! $headers) {
                throw new \Exception('Failed to read CSV headers in '.basename($filePath));
            }

            $headers = array_map('trim', $headers);
            $expectedHeaders = [
                'extract', 'question', 'choiceA', 'choiceB', 'choiceC', 'choiceD',
                'choiceE', 'choiceF', 'choiceG', 'correct_answer', 'rationale',
                'question_type', 'image', 'url', 'wrong_answer',
            ];

            $examId = $this->getOrCreateExam($schoolId, $examName);
            $importedCount = 0;

            while (($row = fgetcsv($handle)) !== false) {
                if (empty(array_filter($row))) {
                    continue;
                }

                if (count($row) < count($expectedHeaders)) {
                    $row = array_pad($row, count($expectedHeaders), '');
                } elseif (count($row) > count($expectedHeaders)) {
                    $row = array_slice($row, 0, count($expectedHeaders));
                }

                $data = array_combine($expectedHeaders, $row);

                if (empty(trim($data['question'] ?? '')) || empty(trim($data['correct_answer'] ?? ''))) {
                    continue;
                }

                $choices = [];
                foreach (range('A', 'G') as $letter) {
                    $val = trim($data["choice{$letter}"] ?? '');
                    if ($val !== '') {
                        $choices[$letter] = $val;
                    }
                }

                if (count($choices) < 4) {
                    continue;
                }

                $this->queueQuestion($examId, [
                    'extract' => trim($data['extract'] ?? ''),
                    'question' => trim($data['question']),
                    'choices' => $choices,
                    'correct_answer' => strtoupper(trim($data['correct_answer'])),
                    'rationale' => trim($data['rationale'] ?? ''),
                    'question_type' => trim($data['question_type'] ?? 'General'),
                    'image' => trim($data['image'] ?? ''),
                    'url' => trim($data['url'] ?? ''),
                    'wrong_answer' => trim($data['wrong_answer'] ?? ''),
                ]);

                $importedCount++;
            }

            fclose($handle);
            $this->insertQuestionsBatch();
            DB::commit();

            $this->command->info("✓ Finished: {$examName} ({$importedCount} questions imported).");

        } catch (\Exception $e) {
            DB::rollBack();
            $this->questionsBatch = [];
            $this->command->error('Failed processing '.basename($filePath).': '.$e->getMessage());
        }
    }

    protected function getOrCreateSchool(string $name, string $slug): int
    {
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
        $this->questionsBatch[] = [
            'exam_id' => $examId,
            'extract' => $data['extract'],
            'question' => $data['question'],
            'choiceA' => $data['choices']['A'] ?? null,
            'choiceB' => $data['choices']['B'] ?? null,
            'choiceC' => $data['choices']['C'] ?? null,
            'choiceD' => $data['choices']['D'] ?? null,
            'choiceE' => $data['choices']['E'] ?? null,
            'choiceF' => $data['choices']['F'] ?? null,
            'choiceG' => $data['choices']['G'] ?? null,
            'correct_answer' => $data['correct_answer'],
            'rationale' => $data['rationale'],
            'question_type' => $data['question_type'],
            'image' => $data['image'],
            'url' => $data['url'],
            'wrong_answer' => $data['wrong_answer'],
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
