<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Question;
use App\Models\School;
use Illuminate\Database\Seeder;

class ExamDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->createCnaData();
        $this->createLpnData();
        $this->createRnData();
        $this->createNnaapData();
    }

    private function createCnaData(): void
    {
        $school = School::create([
            'name' => 'CNA',
            'slug' => 'cna',
        ]);

        $practiceExam = Exam::create([
            'school_id' => $school->id,
            'name' => 'CNA Practice Test',
            'slug' => 'cna-practice-test',
        ]);

        $patientCareExam = Exam::create([
            'school_id' => $school->id,
            'name' => 'CNA Patient Care Exam',
            'slug' => 'cna-patient-care',
        ]);

        $safetyExam = Exam::create([
            'school_id' => $school->id,
            'name' => 'CNA Safety & Infection Control',
            'slug' => 'cna-safety-infection',
        ]);

        $this->seedQuestions($practiceExam->id, $this->getCnaPracticeQuestions());
        $this->seedQuestions($patientCareExam->id, $this->getPatientCareQuestions());
        $this->seedQuestions($safetyExam->id, $this->getSafetyQuestions());
    }

    private function createLpnData(): void
    {
        $school = School::create([
            'name' => 'LPN',
            'slug' => 'lpn',
        ]);

        $exam = Exam::create([
            'school_id' => $school->id,
            'name' => 'LPN Practice Test',
            'slug' => 'lpn-practice-test',
        ]);

        $this->seedQuestions($exam->id, $this->getLpnQuestions());
    }

    private function createRnData(): void
    {
        $school = School::create([
            'name' => 'RN',
            'slug' => 'rn',
        ]);

        $exam = Exam::create([
            'school_id' => $school->id,
            'name' => 'RN NCLEX Practice',
            'slug' => 'rn-nclex-practice',
        ]);

        $this->seedQuestions($exam->id, $this->getRnQuestions());
    }

    private function createNnaapData(): void
    {
        $school = School::create([
            'name' => 'NNAAP',
            'slug' => 'nnaap',
        ]);

        $writtenExam = Exam::create([
            'school_id' => $school->id,
            'name' => 'NNAAP Written Exam',
            'slug' => 'nnaap-written',
        ]);

        $skillsExam = Exam::create([
            'school_id' => $school->id,
            'name' => 'NNAAP Skills Evaluation',
            'slug' => 'nnaap-skills',
        ]);

        $this->seedQuestions($writtenExam->id, $this->getNnaapWrittenQuestions());
        $this->seedQuestions($skillsExam->id, $this->getNnaapSkillsQuestions());
    }

    private function seedQuestions(int $examId, array $questions): void
    {
        foreach ($questions as $q) {
            Question::create([
                'exam_id' => $examId,
                'extract' => $q['extract'] ?? '',
                'question' => $q['question'],
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
                'url' => '/cert/cna/cna-practice-test/question/{id}',
                'wrong_answer' => $q['common_mistake'] ?? '',
            ]);
        }
    }

    private function getCnaPracticeQuestions(): array
    {
        return [
            [
                'question' => 'A CNA is assisting a resident with eating. The resident begins to cough while eating. What should the CNA do first?',
                'extract' => 'A CNA is assisting a resident with eating. The resident begins to cough while eating.',
                'choices' => [
                    'Stop feeding and call the nurse immediately',
                    'Encourage the resident to continue eating slowly',
                    'Stop feeding, have the resident lean forward, and encourage coughing',
                    'Give the resident water to wash down the food',
                ],
                'correct_answer' => 'C',
                'rationale' => 'When a resident coughs during eating, the CNA should stop feeding immediately and encourage the natural cough reflex. Leaning forward helps clear the airway. Calling the nurse is important but the immediate action is to address the choking risk.',
                'category' => 'Patient Care',
                'common_mistake' => 'Many students choose option A because calling the nurse sounds like the safest choice. However, in emergency situations, the CNA must act immediately to protect the airway BEFORE notifying the nurse. Remember: ABCs (Airway, Breathing, Circulation) always come first.',
            ],
            [
                'question' => 'Which of the following is the most important reason for a CNA to wash hands before and after patient contact?',
                'extract' => 'Hand hygiene is a critical infection control measure.',
                'choices' => [
                    'To make the patient feel comfortable',
                    'To prevent the spread of infection',
                    'To comply with hospital policy only',
                    'To avoid getting the hands dirty',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Hand washing is the single most effective way to prevent the spread of pathogens in healthcare settings. It protects both the patient and the healthcare worker from cross-contamination.',
                'category' => 'Infection Control',
            ],
            [
                'question' => 'A resident with dementia becomes agitated during bathing. What is the best approach for the CNA?',
                'extract' => 'Behavioral management in dementia care.',
                'choices' => [
                    'Force the resident to complete the bath quickly',
                    'Stop the bath and report to the nurse immediately',
                    'Speak calmly, use distraction, and try again later',
                    'Skip the bath and document the refusal',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Residents with dementia respond best to calm, patient approaches. Distraction and trying again later respects the resident\'s dignity while still meeting care needs. Forcing care can increase agitation and cause injury.',
                'category' => 'Mental Health',
            ],
            [
                'question' => 'What is the normal adult respiratory rate per minute?',
                'extract' => 'Vital signs assessment.',
                'choices' => [
                    '8-12 breaths',
                    '12-20 breaths',
                    '20-30 breaths',
                    '30-40 breaths',
                ],
                'correct_answer' => 'B',
                'rationale' => 'The normal adult respiratory rate is 12-20 breaths per minute. Rates outside this range may indicate respiratory distress, infection, or other medical conditions requiring assessment.',
                'category' => 'Vital Signs',
            ],
            [
                'question' => 'When transferring a resident from bed to wheelchair, the CNA should:',
                'extract' => 'Safe patient transfer techniques.',
                'choices' => [
                    'Pull the resident by the arms',
                    'Use a gait belt and proper body mechanics',
                    'Ask another CNA to lift the resident alone',
                    'Have the resident stand without assistance',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Using a gait belt and proper body mechanics protects both the resident and the CNA from injury. Pulling by the arms can cause shoulder injury, and improper lifting techniques can cause back strain.',
                'category' => 'Safety',
            ],
        ];
    }

    private function getPatientCareQuestions(): array
    {
        return [
            [
                'question' => 'A resident complains of pain. What should the CNA do FIRST?',
                'extract' => 'Pain assessment and reporting.',
                'choices' => [
                    'Give the resident pain medication from the cart',
                    'Assess the pain using the facility\'s pain scale',
                    'Tell the resident to rest and it will go away',
                    'Document the complaint and wait for rounds',
                ],
                'correct_answer' => 'B',
                'rationale' => 'The CNA should first assess the pain using the facility\'s standardized pain scale (0-10, faces, etc.) to gather objective data. This information is then reported to the nurse for appropriate intervention. CNAs cannot administer medications.',
                'category' => 'Patient Care',
            ],
            [
                'question' => 'Which position is best for a resident with difficulty breathing?',
                'extract' => 'Positioning for respiratory comfort.',
                'choices' => [
                    'Supine (lying flat on back)',
                    'Prone (lying on stomach)',
                    'Fowler\'s or Semi-Fowler\'s position',
                    'Trendelenburg position',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Fowler\'s position (head of bed elevated 45-90 degrees) or Semi-Fowler\'s (30-45 degrees) allows for maximum lung expansion and eases breathing. Supine position can worsen respiratory distress.',
                'category' => 'Patient Care',
            ],
            [
                'question' => 'When providing oral care to an unconscious resident, the CNA should:',
                'extract' => 'Oral care for unconscious patients.',
                'choices' => [
                    'Use a regular toothbrush and toothpaste',
                    'Place the resident in supine position',
                    'Use a suction toothbrush and position resident on side',
                    'Skip oral care to avoid aspiration risk',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Unconscious residents cannot protect their airway. Using a suction toothbrush and positioning the resident on their side prevents aspiration of secretions or cleaning solution. Oral care remains essential to prevent infection.',
                'category' => 'Patient Care',
            ],
            [
                'question' => 'A resident with diabetes has a blood sugar reading of 55 mg/dL. The CNA should:',
                'extract' => 'Hypoglycemia recognition and response.',
                'choices' => [
                    'Give the resident their scheduled insulin dose',
                    'Offer a fast-acting carbohydrate like juice or glucose tablets',
                    'Wait for the nurse to assess at next medication round',
                    'Encourage the resident to exercise to lower sugar further',
                ],
                'correct_answer' => 'B',
                'rationale' => 'A blood sugar of 55 mg/dL indicates hypoglycemia. The CNA should immediately offer 15g of fast-acting carbohydrate (4 oz juice, glucose tablets) per protocol, then recheck in 15 minutes and report to the nurse. Never give insulin for low blood sugar.',
                'category' => 'Patient Care',
            ],
            [
                'question' => 'Which sign is an early indicator of a pressure injury?',
                'extract' => 'Pressure injury prevention.',
                'choices' => [
                    'Open wound with drainage',
                    'Non-blanchable redness on bony prominence',
                    'Black, necrotic tissue',
                    'Swelling and warmth in the area',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Non-blanchable erythema (redness that doesn\'t turn white when pressed) is the earliest sign of a Stage 1 pressure injury. Early recognition allows for intervention before tissue breakdown occurs.',
                'category' => 'Patient Care',
            ],
        ];
    }

    private function getSafetyQuestions(): array
    {
        return [
            [
                'question' => 'What is the correct sequence for removing PPE after patient care?',
                'extract' => 'PPE removal protocol.',
                'choices' => [
                    'Gloves, gown, mask, eye protection',
                    'Gown, gloves, mask, eye protection',
                    'Gloves, eye protection, gown, mask',
                    'Mask, gown, gloves, eye protection',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Remove gloves first (most contaminated), then eye protection, then gown (untie neck then waist), then mask/respirator. Perform hand hygiene immediately after. This sequence minimizes self-contamination.',
                'category' => 'Infection Control',
            ],
            [
                'question' => 'A spill of blood occurs on the floor. The CNA should:',
                'extract' => 'Blood spill cleanup procedure.',
                'choices' => [
                    'Wipe it up with a regular paper towel',
                    'Cover with absorbent material, then clean with EPA-registered disinfectant',
                    'Call housekeeping and leave the area',
                    'Pour bleach directly on the spill',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Blood spills require specific protocol: contain with absorbent material, clean with an EPA-registered hospital disinfectant effective against bloodborne pathogens, then dispose of materials in biohazard waste. Never use bleach undiluted.',
                'category' => 'Infection Control',
            ],
            [
                'question' => 'Which action best prevents falls in a healthcare facility?',
                'extract' => 'Fall prevention strategies.',
                'choices' => [
                    'Keep all side rails up at all times',
                    'Answer call lights promptly and keep pathways clear',
                    'Restrain residents who are at high risk',
                    'Encourage residents to stay in bed',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Prompt response to call lights and maintaining clear, well-lit pathways are evidence-based fall prevention strategies. Restraints increase fall risk and injury severity. Side rails should be used judiciously per facility policy.',
                'category' => 'Safety',
            ],
            [
                'question' => 'When using a fire extinguisher, the acronym PASS stands for:',
                'extract' => 'Fire safety protocol.',
                'choices' => [
                    'Pull, Aim, Squeeze, Sweep',
                    'Push, Alert, Secure, Save',
                    'Prepare, Activate, Stop, Signal',
                    'Protect, Assess, Suppress, Secure',
                ],
                'correct_answer' => 'A',
                'rationale' => 'PASS: Pull the pin, Aim at the base of the fire, Squeeze the handle, Sweep side to side. This is the standard technique for operating a fire extinguisher effectively.',
                'category' => 'Safety',
            ],
            [
                'question' => 'A resident is found on the floor. The CNA\'s FIRST action should be to:',
                'extract' => 'Response to a fall.',
                'choices' => [
                    'Help the resident stand up immediately',
                    'Call for help and assess the resident without moving them',
                    'Run to get the nurse and leave the resident alone',
                    'Document the fall before providing any care',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Never move a fallen resident without assessment. Call for help, stay with the resident, assess for injury, and follow facility protocol. Moving a resident with a potential spinal or hip injury can cause further harm.',
                'category' => 'Safety',
            ],
        ];
    }

    private function getLpnQuestions(): array
    {
        return [
            [
                'question' => 'Which task is within the LPN scope of practice?',
                'extract' => 'LPN scope of practice.',
                'choices' => [
                    'Developing the nursing care plan',
                    'Administering IV push medications',
                    'Collecting data and reporting changes to RN',
                    'Performing initial patient assessment',
                ],
                'correct_answer' => 'C',
                'rationale' => 'LPNs collect data, provide direct care, and report changes to the RN. Developing care plans, initial assessments, and administering IV push medications are typically RN responsibilities, though scope varies by state.',
                'category' => 'Scope of Practice',
            ],
            [
                'question' => 'A patient\'s urine output is 20 mL in 2 hours. The LPN should:',
                'extract' => 'Oliguria recognition.',
                'choices' => [
                    'Document and continue monitoring',
                    'Encourage oral fluids and recheck in 4 hours',
                    'Report to the RN immediately',
                    'Administer a diuretic as ordered',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Normal urine output is 30 mL/hour minimum. 20 mL in 2 hours (10 mL/hr) indicates oliguria and possible renal impairment or dehydration. This requires immediate reporting to the RN for further assessment.',
                'category' => 'Assessment',
            ],
            [
                'question' => 'Which medication route has the fastest onset of action?',
                'extract' => 'Medication administration routes.',
                'choices' => [
                    'Oral',
                    'Intramuscular',
                    'Intravenous',
                    'Subcutaneous',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Intravenous (IV) administration delivers medication directly into the bloodstream, resulting in the fastest onset of action. This route is used when immediate therapeutic effects are needed.',
                'category' => 'Pharmacology',
            ],
        ];
    }

    private function getRnQuestions(): array
    {
        return [
            [
                'question' => 'Which finding requires immediate intervention in a post-operative patient?',
                'extract' => 'Post-op complication recognition.',
                'choices' => [
                    'Temperature of 99.5°F',
                    'Serous drainage on dressing',
                    'Sudden onset of shortness of breath',
                    'Mild pain at incision site',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Sudden shortness of breath post-operatively may indicate pulmonary embolism, pneumonia, or atelectasis. This is a medical emergency requiring immediate assessment and intervention. Low-grade fever and mild pain are expected; serous drainage is normal.',
                'category' => 'Post-Operative Care',
            ],
            [
                'question' => 'The nurse is caring for a patient with heart failure. Which assessment finding indicates worsening condition?',
                'extract' => 'Heart failure monitoring.',
                'choices' => [
                    'Weight gain of 2 lbs in 2 days',
                    'Clear lung sounds bilaterally',
                    'Pedal pulses 2+ and equal',
                    'Patient reports sleeping in recliner',
                ],
                'correct_answer' => 'A',
                'rationale' => 'Rapid weight gain (2-3 lbs in 24-48 hours) is an early sign of fluid retention and worsening heart failure. Sleeping in a recliner (orthopnea) is also concerning, but weight gain is more objective and measurable for early intervention.',
                'category' => 'Cardiovascular',
            ],
            [
                'question' => 'A patient receiving IV potassium chloride complains of burning at the IV site. The nurse should FIRST:',
                'extract' => 'IV potassium administration safety.',
                'choices' => [
                    'Slow the infusion rate',
                    'Stop the infusion and assess the IV site',
                    'Apply a warm compress to the site',
                    'Administer pain medication',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Potassium chloride is a vesicant that can cause tissue damage if it extravasates. Burning at the IV site requires immediate cessation of the infusion and assessment for infiltration or phlebitis before any other intervention.',
                'category' => 'Pharmacology',
            ],
        ];
    }

    private function getNnaapWrittenQuestions(): array
    {
        return [
            [
                'question' => 'During the NNAAP written exam, how many questions are typically on the test?',
                'extract' => 'NNAAP exam structure.',
                'choices' => [
                    '50 multiple choice questions',
                    '70 multiple choice questions',
                    '100 multiple choice questions',
                    '150 multiple choice questions',
                ],
                'correct_answer' => 'B',
                'rationale' => 'The NNAAP written exam typically contains 70 multiple-choice questions. Candidates have 2 hours to complete the exam. A passing score is required to proceed to the skills evaluation portion.',
                'category' => 'Exam Knowledge',
            ],
            [
                'question' => 'Which of the following is a candidate\'s right during the NNAAP skills evaluation?',
                'extract' => 'Skills evaluation rights.',
                'choices' => [
                    'To receive hints from the evaluator',
                    'To have a family member present during testing',
                    'To be informed of the skills to be tested beforehand',
                    'To repeat a skill if they make a mistake',
                ],
                'correct_answer' => 'C',
                'rationale' => 'Candidates are informed of the specific skills they will perform before the evaluation begins. However, evaluators cannot provide hints, family members cannot be present, and skills generally cannot be repeated once started.',
                'category' => 'Exam Knowledge',
            ],
            [
                'question' => 'What is the minimum passing score for the NNAAP written exam?',
                'extract' => 'NNAAP scoring requirements.',
                'choices' => [
                    '60%',
                    '70%',
                    '75%',
                    'Varies by state',
                ],
                'correct_answer' => 'D',
                'rationale' => 'Passing scores for the NNAAP exam vary by state. Candidates should check with their state\'s nurse aide registry for specific requirements. Most states require approximately 70-75% correct answers.',
                'category' => 'Exam Knowledge',
            ],
        ];
    }

    private function getNnaapSkillsQuestions(): array
    {
        return [
            [
                'question' => 'During the handwashing skill evaluation, the CNA candidate must wash hands for at least:',
                'extract' => 'Handwashing skill requirement.',
                'choices' => [
                    '10 seconds',
                    '20 seconds',
                    '30 seconds',
                    '1 minute',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Proper handwashing technique requires at least 20 seconds of scrubbing with soap and water. This duration is necessary to effectively remove pathogens. The candidate must demonstrate all steps: wet, lather, scrub, rinse, dry, and turn off faucet with towel.',
                'category' => 'Skills Evaluation',
            ],
            [
                'question' => 'When performing the "Measure and Record Urinary Output" skill, the candidate must:',
                'extract' => 'Urinary output measurement skill.',
                'choices' => [
                    'Estimate the amount and document',
                    'Pour urine into a calibrated container and read at eye level',
                    'Ask the nurse to measure the output',
                    'Record the output in ounces only',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Accurate measurement requires pouring urine into a calibrated graduate, placing it on a flat surface, and reading the meniscus at eye level. Output is typically recorded in milliliters (mL). Estimation is not acceptable for this skill.',
                'category' => 'Skills Evaluation',
            ],
            [
                'question' => 'During the "Ambulate Using Transfer Belt" skill, the candidate must:',
                'extract' => 'Transfer belt application.',
                'choices' => [
                    'Place the belt over clothing loosely',
                    'Place the belt snugly around the waist under clothing',
                    'Place the belt around the chest for better support',
                    'Skip the belt if the resident is cooperative',
                ],
                'correct_answer' => 'B',
                'rationale' => 'The transfer belt must be placed snugly around the resident\'s waist, under clothing or over a gown, with the buckle positioned off-center for comfort. This provides secure support during ambulation while protecting the resident\'s skin and dignity.',
                'category' => 'Skills Evaluation',
            ],
            [
                'question' => 'When performing the "Brush Teeth" skill, the candidate must:',
                'extract' => 'Oral care skill steps.',
                'choices' => [
                    'Use only water if the resident has no teeth',
                    'Position the resident upright and use a soft-bristled brush',
                    'Let the resident brush independently without supervision',
                    'Use mouthwash instead of brushing',
                ],
                'correct_answer' => 'B',
                'rationale' => 'Residents should be positioned upright (or side-lying if unable to sit) to prevent aspiration. A soft-bristled brush with fluoride toothpaste is used for effective cleaning. The CNA must assist or supervise based on the resident\'s ability.',
                'category' => 'Skills Evaluation',
            ],
        ];
    }
}
