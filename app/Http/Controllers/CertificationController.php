<?php

namespace App\Http\Controllers;

class CertificationController extends Controller
{
    public function show($slug)
    {
        $certifications = [
            'cna' => [
                'id' => 'cna',
                'school_slug' => 'nursing',
                'classification_slug' => 'cna',
                'badge' => 'Nursing',
                'title_abbr' => 'CNA',
                'title_full' => 'Certified Nursing Assistant',
                'description' => 'The Certified Nursing Assistant (CNA) examination tests your knowledge and skills in providing basic patient care in healthcare settings. Our prep course covers all domains tested on the state CNA exam.',
                'colors' => [
                    'theme_class' => 'theme-cna', 
                ],
                'stats' => [
                    'questions' => '350+',
                    'total_exam_q' => '60-70 questions + Clinical',
                    'duration' => '120 minutes (Total)',
                    'passing_score' => 'State-dependent (typically 70-80%)',
                    'provider' => 'Prometric, Pearson VUE, Credentia, Headmaster',
                    'difficulty' => 'Moderate',
                    'failure_rate' => '28%',
                    'salary_range' => '$30,000 – $45,000',
                    'salary_avg' => '$38,130',
                    'job_growth' => '4% (2022-2032)',
                    'study_duration' => '4 weeks',
                    'bank_size' => '850+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => ['Activities of Daily Living', 'Basic Nursing Skills', 'Restorative Services', 'Psychosocial Care Skills', 'Role of the Nurse Aide'],
                'topics' => ['Patient Care', 'Infection Control', 'Safety & Emergency', 'Communication', 'Basic Nursing Skills', 'Vital Signs', 'Personal Care', 'Nutrition'],
                'learn_points' => ['Proper patient care techniques', 'Infection control protocols', 'Communication with patients and healthcare team', 'Emergency procedures', 'Vital signs measurement', 'Daily living assistance'],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'nurse-aide' => [
                'id' => 'nurse-aide',
                'school_slug' => 'nursing',
                'classification_slug' => 'nurse-aide',
                'badge' => 'Nursing',
                'title_abbr' => 'Nurse Aide',
                'title_full' => 'Nurse Aide Certification',
                'description' => 'The Nurse Aide certification validates your ability to provide quality care to residents in long-term care facilities. Our course prepares you with real exam-style questions.',
                'colors' => [
                    'theme_class' => 'theme-aide',
                ],
                'stats' => [
                    'questions' => '280+',
                    'total_exam_q' => '70 questions (NNAAP)',
                    'duration' => '120 minutes',
                    'passing_score' => 'State-dependent',
                    'provider' => 'NCSBN, Credentia, Prometric',
                    'difficulty' => 'Moderate',
                    'failure_rate' => '25%',
                    'salary_range' => '$30,000 – $45,000',
                    'salary_avg' => '$38,130',
                    'job_growth' => '4% (2022-2032)',
                    'study_duration' => '3 weeks',
                    'bank_size' => '800+ questions',
                    'free_q' => '20 questions',
                ],
                'categories' => ['Resident Rights', 'Safety & Emergency', 'Personal Care', 'Basic Nursing Skills', 'Communication'],
                'topics' => ['Resident Care', 'Safety Procedures', 'Communication', 'Infection Prevention', 'Personal Care Skills', 'Mental Health'],
                'learn_points' => ['Resident rights and dignity', 'Safe transfer techniques', 'Hygiene and grooming assistance', 'Reporting changes in condition', 'Emotional support techniques', 'Documentation basics'],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'hospice-and-palliative-care' => [
                'id' => 'hospice-and-palliative-care',
                'school_slug' => 'nursing',
                'classification_slug' => 'hospice-and-palliative-care',
                'badge' => 'Nursing',
                'title_abbr' => 'Hospice & Palliative Care',
                'title_full' => 'Hospice & Palliative Care Certification',
                'description' => 'Prepare for hospice and palliative care certification with questions covering compassionate end-of-life care, pain management, and family support systems.',
                'colors' => [
                    'theme_class' => 'theme-hospice',
                ],
                'stats' => [
                    'questions' => '220+',
                    'total_exam_q' => '150 questions',
                    'duration' => '180 minutes',
                    'passing_score' => 'Scaled Score of 75',
                    'provider' => 'HPCC',
                    'difficulty' => 'Advanced',
                    'failure_rate' => '26%',
                    'salary_range' => '$80,000 – $110,000',
                    'salary_avg' => '$89,000',
                    'job_growth' => '6% (2022-2032)',
                    'study_duration' => '8 weeks',
                    'bank_size' => '700+ questions',
                    'free_q' => '20 questions',
                ],
                'categories' => ['Pain Management', 'End-of-Life Care', 'Family Support', 'Symptom Control', 'Ethics & Grief'],
                'topics' => ['Pain Management', 'End-of-Life Care', 'Family Support', 'Symptom Control', 'Ethics', 'Grief Counseling'],
                'learn_points' => ['Pain assessment and management', 'Comfort care techniques', 'Family grief support', 'Ethical decision-making', 'Symptom management', 'Interdisciplinary care coordination'],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'cen' => [
                'id' => 'cen',
                'school_slug' => 'nursing',
                'classification_slug' => 'cen',
                'badge' => 'Nursing',
                'title_abbr' => 'CEN',
                'title_full' => 'Certified Emergency Nurse',
                'description' => 'The Certified Emergency Nurse (CEN) exam is one of the most challenging nursing certifications. Our comprehensive prep covers all emergency care domains.',
                'colors' => [
                    'theme_class' => 'theme-cen',
                ],
                'stats' => [
                    'questions' => '400+',
                    'total_exam_q' => '175 questions',
                    'duration' => '180 minutes',
                    'passing_score' => '106/150 scored items',
                    'provider' => 'BCEN',
                    'difficulty' => 'Very High',
                    'failure_rate' => '45%',
                    'salary_range' => '$75,000 – $110,000',
                    'salary_avg' => '$85,000',
                    'job_growth' => '6% (2022-2032)',
                    'study_duration' => '12 weeks',
                    'bank_size' => '1800+ questions',
                    'free_q' => '30 questions',
                ],
                'categories' => ['Cardiovascular', 'Respiratory', 'Neurological', 'Trauma', 'Toxicology', 'Pediatric Emergencies'],
                'topics' => ['Triage', 'Trauma Care', 'Cardiac Emergencies', 'Respiratory Emergencies', 'Neurological Emergencies', 'Pediatric Emergencies', 'Toxicology'],
                'learn_points' => ['Triage assessment skills', 'Trauma management protocols', 'Cardiac emergency interventions', 'Pediatric emergency care', 'Toxicology management', 'Disaster response'],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'fnp' => [
                'id' => 'fnp',
                'school_slug' => 'nursing',
                'classification_slug' => 'fnp',
                'badge' => 'Nursing',
                'title_abbr' => 'FNP',
                'title_full' => 'Family Nurse Practitioner',
                'description' => 'Family Nurse Practitioner certification preparation covering the full spectrum of primary care, from pediatrics to geriatrics.',
                'colors' => [
                    'theme_class' => 'theme-fnp',
                ],
                'stats' => [
                    'questions' => '300+',
                    'total_exam_q' => '150-175 questions',
                    'duration' => '180-210 minutes',
                    'passing_score' => '500/800 or 350/500',
                    'provider' => 'AANPCB / ANCC',
                    'difficulty' => 'Advanced',
                    'failure_rate' => '15%',
                    'salary_range' => '$100,000 – $140,000',
                    'salary_avg' => '$125,000',
                    'job_growth' => '38% (2022-2032)',
                    'study_duration' => '8 weeks',
                    'bank_size' => '800+ questions',
                    'free_q' => '20 questions',
                ],
                'categories' => ['Primary Care', 'Preventive Medicine', 'Chronic Disease', 'Pediatrics', 'Women\'s Health'],
                'topics' => ['Primary Care', 'Preventive Medicine', 'Chronic Disease', 'Pediatrics', 'Geriatrics', 'Women\'s Health'],
                'learn_points' => ['Comprehensive patient assessment', 'Preventive care guidelines', 'Chronic disease management', 'Age-specific care approaches', 'Health screening protocols', 'Patient education strategies'],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'medical-assistant' => [
                'id' => 'medical-assistant',
                'school_slug' => 'medical-assistant',
                'classification_slug' => 'medical-assistant',
                'badge' => 'Medical Assistant',
                'title_abbr' => 'CCMA & AAMA',
                'title_full' => 'Medical Assistant Certification Exam Prep',
                'description' => 'Comprehensive preparation validation covering clinical and administrative skills for your Certified Clinical Medical Assistant (CCMA) and Certified Medical Assistant (AAMA) credentials.',
                'colors' => [
                    'theme_class' => 'theme-ccma',
                ],
                'stats' => [
                    'questions' => '380+',
                    'total_exam_q' => '180-200 questions',
                    'duration' => '160-180 minutes',
                    'passing_score' => '390/500 or 430/800',
                    'provider' => 'NHA / AAMA',
                    'difficulty' => 'Moderate-High',
                    'failure_rate' => '22-35%',
                    'salary_range' => '$35,000 – $48,000',
                    'salary_avg' => '$42,000',
                    'job_growth' => '14% (2022-2032)',
                    'study_duration' => '6-8 weeks',
                    'bank_size' => '1200+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => ['Clinical Procedures', 'Administrative Skills', 'EKG & Phlebotomy', 'Medical Law & Ethics', 'Insurance & Billing'],
                'topics' => ['Clinical Procedures', 'Administrative Skills', 'Patient Care Intake', 'EKG Interpretation', 'Phlebotomy Basics', 'Medical Law & Ethics'],
                'learn_points' => ['Clinical competency techniques', 'Administrative workflow rules', 'EKG placement landmarks', 'Phlebotomy order of draw', 'Medical laws and privacy ethics', 'Insurance claim verifications'],
                'deep_dives' => [
                    ['tag' => 'EKG', 'title' => '12-Lead EKG Placement Guide', 'desc' => 'Master the exact anatomical landmarks for all 12 EKG lead placements.'],
                    ['tag' => 'Phlebotomy', 'title' => 'Order of Draw & Tube Colors', 'desc' => 'The complete order of draw for evacuated tube collection with rationales for each position.'],
                    ['tag' => 'Patient Intake', 'title' => 'Patient Registration & Insurance Verification', 'desc' => 'Complete guide to the patient intake process including documentation, insurance, and consent.'],
                ]
            ],
            'pharmacy-technician' => [
                'id' => 'pharmacy-technician',
                'school_slug' => 'pharmacy-technician',
                'classification_slug' => 'pharmacy-technician',
                'badge' => 'Pharmacy Certification',
                'title_abbr' => 'PTCE & ExCPT',
                'title_full' => 'Pharmacy Technician Certification Exam (PTCE / ExCPT)',
                'description' => 'The PTCE and ExCPT are the leading pharmacy technician certification exams. Our preparation material covers all core knowledge domains with comprehensive mock systems.',
                'colors' => [
                    'theme_class' => 'theme-ptce',
                ],
                'stats' => [
                    'questions' => '360+',
                    'total_exam_q' => '90 Qs (PTCE) / 100 Qs (ExCPT)',
                    'duration' => '110-120 minutes',
                    'passing_score' => '1400/1600 or 360/500',
                    'provider' => 'PTCB / NHA',
                    'difficulty' => 'High',
                    'failure_rate' => '42%',
                    'salary_range' => '$35,000 – $45,000',
                    'salary_avg' => '$40,300',
                    'job_growth' => '6% (2022-2032)',
                    'study_duration' => '6 weeks',
                    'bank_size' => '1050+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => ['Medications', 'Pharmacy Law', 'Sterile Compounding', 'Medication Safety', 'Inventory Management'],
                'topics' => ['Medications', 'Pharmacy Law', 'Sterile Compounding', 'Medication Safety', 'Pharmacology', 'Inventory Management', 'Insurance & Billing'],
                'learn_points' => ['Top 200 medications', 'Pharmacy law and regulations', 'Sterile and non-sterile compounding', 'Medication safety protocols', 'Inventory management', 'Insurance billing procedures'],
                'deep_dives' => [
                    ['tag' => 'Medications', 'title' => 'Top 200 Drugs: Brand & Generic Names', 'desc' => 'Essential drug name pairs you must know for the PTCE and ExCPT exams.'],
                    ['tag' => 'Pharmacy Law', 'title' => 'DEA Controlled Substance Regulations', 'desc' => 'Federal regulations governing the handling, storage, and dispensing of controlled substances.'],
                    ['tag' => 'Sterile Compounding', 'title' => 'USP 797: Beyond-Use Dating', 'desc' => 'Beyond-use dates for compounded sterile preparations based on risk level.'],
                ]
            ],
            'phlebotomy' => [
                'id' => 'phlebotomy',
                'school_slug' => 'medical-assistant',
                'classification_slug' => 'phlebotomy',
                'badge' => 'Medical Assistant',
                'title_abbr' => 'Phlebotomy',
                'title_full' => 'Phlebotomy Technician Certification',
                'description' => 'Phlebotomy certification validates your blood collection skills. Our prep covers venipuncture techniques, order of draw, and specimen handling.',
                'colors' => [
                    'theme_class' => 'theme-phlebotomy',
                ],
                'stats' => [
                    'questions' => '250+',
                    'total_exam_q' => '100-120 questions',
                    'duration' => '120 minutes',
                    'passing_score' => '390/500 or 400/999',
                    'provider' => 'NHA, ASCP, NCCT, AMT',
                    'difficulty' => 'Moderate',
                    'failure_rate' => '20-30%',
                    'salary_range' => '$38,000 – $48,000',
                    'salary_avg' => '$41,810',
                    'job_growth' => '8% (2022-2032)',
                    'study_duration' => '4 weeks',
                    'bank_size' => '760+ questions',
                    'free_q' => '20 questions',
                ],
                'categories' => ['Venipuncture', 'Order of Draw', 'Specimen Handling', 'Patient Safety', 'Infection Control'],
                'topics' => ['Venipuncture', 'Order of Draw', 'Specimen Handling', 'Patient Safety', 'Anatomy & Physiology', 'Infection Control'],
                'learn_points' => ['Venipuncture techniques', 'Order of draw protocols', 'Specimen handling and processing', 'Patient identification', 'Infection control measures', 'Difficult draw techniques'],
                'deep_dives' => [
                    ['tag' => 'Venipuncture', 'title' => 'Vein Selection & Site Preparation', 'desc' => 'The complete guide to selecting the best venipuncture site and proper preparation technique.'],
                    ['tag' => 'Specimen Handling', 'title' => 'Specimen Collection & Processing', 'desc' => 'Proper techniques for specimen collection, labeling, handling, and transport.'],
                ]
            ],
            'counsellor' => [
                'id' => 'counsellor',
                'school_slug' => 'medical-assistant',
                'classification_slug' => 'counsellor',
                'badge' => 'Counselling',
                'title_abbr' => 'NCE',
                'title_full' => 'Professional Counselling Certification',
                'description' => 'Professional Counselling certification prep covering therapeutic approaches, mental health assessment, ethical practice, and crisis intervention.',
                'colors' => [
                    'theme_class' => 'theme-counsellor',
                ],
                'stats' => [
                    'questions' => '310+',
                    'total_exam_q' => '200 questions (160 scored)',
                    'duration' => '225 minutes',
                    'passing_score' => 'Varies (approx. 60-65%)',
                    'provider' => 'NBCC',
                    'difficulty' => 'High',
                    'failure_rate' => '18-20%',
                    'salary_range' => '$45,000 – $75,000',
                    'salary_avg' => '$53,710',
                    'job_growth' => '18% (2022-2032)',
                    'study_duration' => '10 weeks',
                    'bank_size' => '1400+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => ['Therapy Techniques', 'Mental Health Assessment', 'Ethics', 'Crisis Intervention', 'Group Therapy'],
                'topics' => ['Therapy Techniques', 'Mental Health Assessment', 'Ethics', 'Crisis Intervention', 'Group Therapy', 'Substance Abuse'],
                'learn_points' => ['Cognitive-behavioral techniques', 'Mental health assessment tools', 'Ethical decision-making', 'Crisis intervention protocols', 'Group therapy facilitation', 'Substance abuse counseling'],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ]
        ];

        if (!array_key_exists($slug, $certifications)) {
            abort(404);
        }

        $currentCert = $certifications[$slug];

        $keys = array_keys($certifications);
        $currentIndex = array_search($slug, $keys);
        $totalCerts = count($certifications);

        $otherCerts = [];
        
        for ($i = 1; $i <= 3; $i++) {
            $nextIndex = ($currentIndex + $i) % $totalCerts;
            $nextKey = $keys[$nextIndex];
            $otherCerts[] = $certifications[$nextKey];
        }

        return view('pages.service', [
            'certification' => $currentCert,
            'otherCerts' => $otherCerts 
        ]);
    }
}