<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Question;
use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExamDataSeeder extends Seeder
{
    public function run(): void
    {
        // This array maps perfectly to the 'classification_slug' values in your CertificationController
        $certifications = [
            ['name' => 'CNA', 'slug' => 'cna', 'type' => 'nursing'],
            ['name' => 'Nurse Aide', 'slug' => 'nurse-aide', 'type' => 'nursing'],
            ['name' => 'Hospice & Palliative Care', 'slug' => 'hospice-and-palliative-care', 'type' => 'nursing'],
            ['name' => 'CEN', 'slug' => 'cen', 'type' => 'nursing'],
            ['name' => 'FNP', 'slug' => 'fnp', 'type' => 'nursing'],
            // Notice the groups here which trigger the smart grouping algorithm in the UI
            ['name' => 'Medical Assistant', 'slug' => 'medical-assistant', 'type' => 'ma', 'groups' => ['CCMA', 'AAMA']],
            ['name' => 'Pharmacy Technician', 'slug' => 'pharmacy-technician', 'type' => 'pharmacy', 'groups' => ['PTCE', 'ExCPT']],
            ['name' => 'Phlebotomy', 'slug' => 'phlebotomy', 'type' => 'ma'],
            ['name' => 'Counsellor', 'slug' => 'counsellor', 'type' => 'counselling'],
        ];

        foreach ($certifications as $cert) {
            // The School model represents the classification_slug in your route structure
            $school = School::firstOrCreate([
                'slug' => $cert['slug'],
            ], [
                'name' => $cert['name'],
            ]);

            // Handle split certifications (e.g. CCMA & AAMA)
            if (isset($cert['groups'])) {
                foreach ($cert['groups'] as $group) {
                    $examNames = $this->generateExamNames($group, rand(3, 5)); // 3-5 exams per sub-group
                    $this->seedExamsAndQuestions($school, $examNames, $this->getQuestions($cert['type']));
                }
            } else {
                // Handle standard certifications
                $examNames = $this->generateExamNames($cert['name'], rand(5, 10)); // 5-10 random exams
                $this->seedExamsAndQuestions($school, $examNames, $this->getQuestions($cert['type']));
            }
        }
    }

    /**
     * Helper to dynamically generate random exam names based on a prefix
     */
    private function generateExamNames(string $prefix, int $count): array
    {
        $suffixes = [
            'Practice Test', 'Mock Exam', 'Diagnostic Evaluation', 'Review Quiz', 
            'Final Assessment', 'Knowledge Check', 'Certification Prep', 
            'Mastery Test', 'Simulation', 'Core Competency'
        ];
        
        shuffle($suffixes);
        $names = [];
        
        for ($i = 0; $i < $count; $i++) {
            // Example: "CCMA Practice Test 1"
            $names[] = $prefix . ' ' . $suffixes[$i] . ' ' . ($i + 1);
        }
        
        return $names;
    }

    /**
     * Creates the exams and triggers the question seeder
     */
    private function seedExamsAndQuestions(School $school, array $examNames, array $baseQuestions): void
    {
        foreach ($examNames as $name) {
            $exam = Exam::create([
                'school_id' => $school->id,
                'name' => $name,
                'slug' => Str::slug($name),
            ]);

            $this->seedQuestions($exam->id, $baseQuestions, 20); // Forces exactly 20 questions per exam
        }
    }

    /**
     * Loops base questions until the target count of 20 is reached.
     * Prevents bloating the seeder file while ensuring the UI logic has enough data to test.
     */
    private function seedQuestions(int $examId, array $baseQuestions, int $targetCount): void
    {
        $currentCount = 0;
        $iteration = 1;

        while ($currentCount < $targetCount) {
            foreach ($baseQuestions as $q) {
                if ($currentCount >= $targetCount) break;

                // Append variation number if it loops, so questions stay technically unique
                $questionText = $iteration > 1 ? $q['question'] . " (Var {$iteration})" : $q['question'];

                Question::create([
                    'exam_id' => $examId,
                    'extract' => $q['extract'] ?? '',
                    'question' => $questionText,
                    'choiceA' => $q['choices'][0],
                    'choiceB' => $q['choices'][1],
                    'choiceC' => $q['choices'][2],
                    'choiceD' => $q['choices'][3],
                    'choiceE' => $q['choices'][4] ?? null,
                    'choiceF' => $q['choices'][5] ?? null,
                    'choiceG' => $q['choices'][6] ?? null,
                    'correct_answer' => $q['correct_answer'],
                    'rationale' => $q['rationale'],
                    'question_type' => $q['category'],
                    'image' => '',
                    'url' => '', // Left empty as clean URLs are generated dynamically in the Blade view
                    'wrong_answer' => $q['common_mistake'] ?? '',
                ]);

                $currentCount++;
            }
            $iteration++;
        }
    }

    /**
     * Returns targeted dummy questions based on the certification type
     */
    private function getQuestions(string $type): array
    {
        if ($type === 'nursing') {
            return [
                [
                    'question' => 'A resident complains of pain. What should the CNA do FIRST?',
                    'extract' => 'Pain assessment protocol.',
                    'choices' => [
                        'Give the resident pain medication from the cart',
                        'Assess the pain using the facility\'s pain scale',
                        'Tell the resident to rest and it will go away',
                        'Document the complaint and wait for rounds',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'The CNA should assess the pain using the standardized scale to gather objective data before reporting to the nurse.',
                    'category' => 'Patient Care',
                ],
                [
                    'question' => 'Which position is best for a resident with difficulty breathing?',
                    'extract' => 'Respiratory positioning.',
                    'choices' => [
                        'Supine (lying flat on back)',
                        'Prone (lying on stomach)',
                        'Fowler\'s or Semi-Fowler\'s position',
                        'Trendelenburg position',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'Fowler\'s position allows for maximum lung expansion and eases breathing.',
                    'category' => 'Patient Care',
                ],
                [
                    'question' => 'A resident with diabetes has a blood sugar reading of 55 mg/dL. The CNA should:',
                    'extract' => 'Hypoglycemia response.',
                    'choices' => [
                        'Give the resident their scheduled insulin dose',
                        'Offer a fast-acting carbohydrate like juice or glucose tablets',
                        'Wait for the nurse to assess at next medication round',
                        'Encourage the resident to exercise to lower sugar further',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'A blood sugar of 55 mg/dL indicates hypoglycemia. Immediately offer 15g of fast-acting carbohydrate.',
                    'category' => 'Emergency Response',
                ],
                [
                    'question' => 'What is the correct sequence for removing PPE after patient care?',
                    'extract' => 'PPE protocol.',
                    'choices' => [
                        'Gloves, gown, mask, eye protection',
                        'Gown, gloves, mask, eye protection',
                        'Gloves, eye protection, gown, mask',
                        'Mask, gown, gloves, eye protection',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'Remove gloves first (most contaminated), then eye protection, then gown, then mask/respirator.',
                    'category' => 'Infection Control',
                ],
                [
                    'question' => 'What is the primary purpose of a gait belt?',
                    'extract' => 'Safety equipment.',
                    'choices' => [
                        'To restrain the resident in their chair',
                        'To help the resident stand up using their own strength',
                        'To provide a safe grip for the CNA during transfers',
                        'To support the resident\'s lower back',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'A gait belt provides a secure hold for the caregiver to safely transfer or ambulate a resident.',
                    'category' => 'Safety',
                ],
            ];
        }

        if ($type === 'ma') {
            return [
                [
                    'question' => 'Which of the following is the correct position for a patient undergoing a pelvic exam?',
                    'extract' => 'Clinical positioning.',
                    'choices' => [
                        'Sims position',
                        'Lithotomy position',
                        'Fowler position',
                        'Trendelenburg position',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'The lithotomy position involves the patient lying on their back with hips and knees flexed, supported by stirrups.',
                    'category' => 'Clinical Procedures',
                ],
                [
                    'question' => 'Which of the following tubes should be drawn first according to the standard order of draw?',
                    'extract' => 'Phlebotomy basics.',
                    'choices' => [
                        'Light blue top (Sodium Citrate)',
                        'Lavender top (EDTA)',
                        'Blood culture tubes (Yellow/SPS)',
                        'Green top (Heparin)',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'Blood cultures or yellow top tubes containing SPS must be drawn first to prevent bacterial contamination.',
                    'category' => 'Phlebotomy',
                ],
                [
                    'question' => 'Where should the V4 electrode be placed when performing a 12-lead EKG?',
                    'extract' => 'EKG placement.',
                    'choices' => [
                        '4th intercostal space, right sternal border',
                        '4th intercostal space, left sternal border',
                        '5th intercostal space, midclavicular line',
                        '5th intercostal space, midaxillary line',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'V4 is placed in the 5th intercostal space at the midclavicular line.',
                    'category' => 'EKG',
                ],
                [
                    'question' => 'What is the normal range for an adult resting heart rate?',
                    'extract' => 'Vital signs.',
                    'choices' => [
                        '40 to 60 beats per minute',
                        '60 to 100 beats per minute',
                        '80 to 120 beats per minute',
                        '100 to 140 beats per minute',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'The normal resting heart rate for a healthy adult is between 60 and 100 beats per minute.',
                    'category' => 'Clinical Procedures',
                ],
                [
                    'question' => 'An ABN (Advance Beneficiary Notice) must be signed by which patient demographic before receiving non-covered services?',
                    'extract' => 'Administrative forms.',
                    'choices' => [
                        'Medicaid patients',
                        'Medicare patients',
                        'Tricare patients',
                        'Private insurance patients',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'An ABN must be signed by Medicare patients prior to receiving services that might not be covered by Medicare.',
                    'category' => 'Administrative Skills',
                ],
            ];
        }

        if ($type === 'pharmacy') {
            return [
                [
                    'question' => 'Under federal law, how many refills are permitted on a Schedule II controlled substance prescription?',
                    'extract' => 'Pharmacy law.',
                    'choices' => [
                        '0 refills',
                        '1 refill within 6 months',
                        '5 refills within 6 months',
                        'Unlimited within 1 year',
                    ],
                    'correct_answer' => 'A',
                    'rationale' => 'Federal law strictly prohibits refills on Schedule II controlled substances.',
                    'category' => 'Pharmacy Law',
                ],
                [
                    'question' => 'Which of the following medications is a generic equivalent for Lipitor?',
                    'extract' => 'Medication identification.',
                    'choices' => [
                        'Simvastatin',
                        'Atorvastatin',
                        'Rosuvastatin',
                        'Pravastatin',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'Atorvastatin is the generic equivalent for the brand-name drug Lipitor.',
                    'category' => 'Medications',
                ],
                [
                    'question' => 'When working in an ISO Class 5 cleanroom compounding sterile preparations, how often must the work surface be cleaned with 70% isopropyl alcohol?',
                    'extract' => 'Sterile environment rules.',
                    'choices' => [
                        'At the beginning of each shift only',
                        'Every 30 minutes during continuous compounding',
                        'Once a day',
                        'Only when visibly soiled',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'USP 797 guidelines require cleaning the ISO Class 5 PEC every 30 minutes during continuous compounding.',
                    'category' => 'Sterile Compounding',
                ],
                [
                    'question' => 'What is the primary indication for Omeprazole (Prilosec)?',
                    'extract' => 'Pharmacology basics.',
                    'choices' => [
                        'Hypertension',
                        'Gastroesophageal Reflux Disease (GERD)',
                        'Type 2 Diabetes',
                        'Asthma',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'Omeprazole is a proton pump inhibitor used to treat GERD and stomach ulcers.',
                    'category' => 'Pharmacology',
                ],
                [
                    'question' => 'What does the abbreviation "SL" mean on a prescription?',
                    'extract' => 'Prescription abbreviations.',
                    'choices' => [
                        'Swallow liquid',
                        'Subcutaneous',
                        'Sublingual (under the tongue)',
                        'Sleep (at bedtime)',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'SL stands for sublingual, meaning the medication should be dissolved under the tongue.',
                    'category' => 'Medication Safety',
                ],
            ];
        }

        if ($type === 'counselling') {
            return [
                [
                    'question' => 'Which of the following is a core goal of Cognitive Behavioral Therapy (CBT)?',
                    'extract' => 'Therapy techniques.',
                    'choices' => [
                        'Exploring early childhood trauma',
                        'Identifying and changing irrational thought patterns',
                        'Achieving self-actualization',
                        'Interpreting dream symbolism',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'CBT focuses on identifying, understanding, and changing destructive or irrational thought patterns that influence behavior.',
                    'category' => 'Therapy Techniques',
                ],
                [
                    'question' => 'In which situation is a professional counsellor legally required to break client confidentiality?',
                    'extract' => 'Ethics and confidentiality.',
                    'choices' => [
                        'The client admits to past drug use',
                        'The client threatens imminent, serious harm to themselves or others',
                        'A family member requests an update on therapy progress',
                        'The client loses their job',
                    ],
                    'correct_answer' => 'B',
                    'rationale' => 'Counsellors have a "duty to warn" and must break confidentiality if there is an imminent threat of harm to the client or a foreseeable victim.',
                    'category' => 'Ethics',
                ],
                [
                    'question' => 'Which statement best demonstrates empathy rather than sympathy?',
                    'extract' => 'Communication skills.',
                    'choices' => [
                        '"I feel so sorry for what happened to you."',
                        '"At least you still have your health."',
                        '"It sounds like you are feeling incredibly overwhelmed right now."',
                        '"I know exactly how you feel because it happened to me."',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'Empathy involves understanding and reflecting the client\'s feelings without judgment or making it about the counsellor.',
                    'category' => 'Mental Health Assessment',
                ],
                [
                    'question' => 'What is the primary purpose of active listening in a counseling session?',
                    'extract' => 'Counseling fundamentals.',
                    'choices' => [
                        'To prepare the next piece of advice',
                        'To diagnose the client quickly',
                        'To build rapport and ensure the client feels understood',
                        'To direct the conversation away from painful topics',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'Active listening builds trust and rapport, validating the client\'s experience and encouraging further exploration.',
                    'category' => 'Group Therapy',
                ],
                [
                    'question' => 'A client who is angry at their boss comes home and yells at their spouse. Which defense mechanism is this?',
                    'extract' => 'Psychological defense mechanisms.',
                    'choices' => [
                        'Denial',
                        'Projection',
                        'Displacement',
                        'Rationalization',
                    ],
                    'correct_answer' => 'C',
                    'rationale' => 'Displacement involves transferring negative feelings from the original source of emotion to a safer, substitute target.',
                    'category' => 'Therapy Techniques',
                ],
            ];
        }

        return [];
    }
}