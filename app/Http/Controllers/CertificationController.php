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
                'id' => 'hospice',
                'school_slug' => 'nursing',
                'badge' => 'Nursing',
                'title_abbr' => 'Hospice & Palliative Care',
                'title_full' => 'Hospice & Palliative Care',
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
                'categories' => [
                    'Pain Management', 'End-of-Life Care', 'Family Support', 'Symptom Control', 'Ethics & Grief'
                ],
                'topics' => [
                    'Pain Management', 'End-of-Life Care', 'Family Support', 'Symptom Control', 'Ethics', 'Grief Counseling'
                ],
                'learn_points' => [
                    'Pain assessment and management', 'Comfort care techniques', 'Family grief support', 'Ethical decision-making', 'Symptom management', 'Interdisciplinary care coordination'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'cen' => [
                'id' => 'cen',
                'school_slug' => 'nursing',
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
                'categories' => [
                    'Cardiovascular', 'Respiratory', 'Neurological', 'Trauma', 'Toxicology', 'Pediatric Emergencies'
                ],
                'topics' => [
                    'Triage', 'Trauma Care', 'Cardiac Emergencies', 'Respiratory Emergencies', 'Neurological Emergencies', 'Pediatric Emergencies', 'Toxicology'
                ],
                'learn_points' => [
                    'Triage assessment skills', 'Trauma management protocols', 'Cardiac emergency interventions', 'Pediatric emergency care', 'Toxicology management', 'Disaster response'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'fmp' => [
                'id' => 'fmp',
                'school_slug' => 'nursing',
                'badge' => 'Nursing',
                'title_abbr' => 'FNP',
                'title_full' => 'Family Nurse Practitioner',
                'description' => 'Family Nurse Practitioner certification preparation covering the full spectrum of primary care, from pediatrics to geriatrics.',
                'colors' => [
                    'theme_class' => 'theme-fmp',
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
                'categories' => [
                    'Primary Care', 'Preventive Medicine', 'Chronic Disease', 'Pediatrics', 'Women\'s Health'
                ],
                'topics' => [
                    'Primary Care', 'Preventive Medicine', 'Chronic Disease', 'Pediatrics', 'Geriatrics', 'Women\'s Health'
                ],
                'learn_points' => [
                    'Comprehensive patient assessment', 'Preventive care guidelines', 'Chronic disease management', 'Age-specific care approaches', 'Health screening protocols', 'Patient education strategies'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'ptce' => [
                'id' => 'ptce',
                'school_slug' => 'pharmacy',
                'badge' => 'Pharmacy Certification',
                'title_abbr' => 'PTCE',
                'title_full' => 'Pharmacy Technician Certification Exam',
                'description' => 'The PTCE is the leading pharmacy technician certification exam. Our prep covers all four knowledge domains with detailed rationales.',
                'colors' => [
                    'theme_class' => 'theme-ptce',
                ],
                'stats' => [
                    'questions' => '360+',
                    'total_exam_q' => '90 questions',
                    'duration' => '110 minutes',
                    'passing_score' => '1400/1600',
                    'provider' => 'PTCB',
                    'difficulty' => 'High',
                    'failure_rate' => '42%',
                    'salary_range' => '$35,000 – $45,000',
                    'salary_avg' => '$40,300',
                    'job_growth' => '6% (2022-2032)',
                    'study_duration' => '6 weeks',
                    'bank_size' => '1050+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => [
                    'Medications', 'Pharmacy Law', 'Sterile Compounding', 'Medication Safety', 'Inventory Management'
                ],
                'topics' => [
                    'Medications', 'Pharmacy Law', 'Sterile Compounding', 'Medication Safety', 'Pharmacology', 'Inventory Management', 'Insurance & Billing'
                ],
                'learn_points' => [
                    'Top 200 medications', 'Pharmacy law and regulations', 'Sterile and non-sterile compounding', 'Medication safety protocols', 'Inventory management', 'Insurance billing procedures'
                ],
                'deep_dives' => [
                    ['tag' => 'Medications', 'title' => 'Top 200 Drugs: Brand & Generic Names', 'desc' => 'Essential drug name pairs you must know for the PTCE exam.'],
                    ['tag' => 'Pharmacy Law', 'title' => 'DEA Controlled Substance Regulations', 'desc' => 'Federal regulations governing the handling, storage, and dispensing of controlled substances.'],
                    ['tag' => 'Sterile Compounding', 'title' => 'USP 797: Beyond-Use Dating', 'desc' => 'Beyond-use dates for compounded sterile preparations based on risk level.'],
                ]
            ],
            'ccma' => [
                'id' => 'ccma',
                'school_slug' => 'medical-assistant',
                'badge' => 'Medical Assistant',
                'title_abbr' => 'CCMA',
                'title_full' => 'Certified Clinical Medical Assistant',
                'description' => 'The CCMA certification through NHA validates your clinical medical assisting skills. Our prep course covers all tested competencies with real-style questions.',
                'colors' => [
                    'theme_class' => 'theme-ccma',
                ],
                'stats' => [
                    'questions' => '380+',
                    'total_exam_q' => '180 questions (150 scored)',
                    'duration' => '180 minutes',
                    'passing_score' => '390/500',
                    'provider' => 'NHA',
                    'difficulty' => 'Moderate-High',
                    'failure_rate' => '22%',
                    'salary_range' => '$35,000 – $48,000',
                    'salary_avg' => '$42,000',
                    'job_growth' => '14% (2022-2032)',
                    'study_duration' => '6 weeks',
                    'bank_size' => '1200+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => [
                    'Clinical Procedures', 'Patient Intake', 'EKG', 'Phlebotomy Basics', 'Pharmacology', 'Medical Terminology'
                ],
                'topics' => [
                    'Clinical Procedures', 'Patient Intake', 'EKG', 'Phlebotomy Basics', 'Pharmacology', 'Medical Terminology', 'Vital Signs'
                ],
                'learn_points' => [
                    'Clinical procedure techniques', 'Patient intake process', 'EKG interpretation basics', 'Phlebotomy techniques', 'Medical terminology mastery', 'Pharmacology fundamentals'
                ],
                'deep_dives' => [
                    ['tag' => 'EKG', 'title' => '12-Lead EKG Placement Guide', 'desc' => 'Master the exact anatomical landmarks for all 12 EKG lead placements.'],
                    ['tag' => 'Phlebotomy', 'title' => 'Order of Draw & Tube Colors', 'desc' => 'The complete order of draw for evacuated tube collection with rationales for each position.'],
                    ['tag' => 'Patient Intake', 'title' => 'Patient Registration & Insurance Verification', 'desc' => 'Complete guide to the patient intake process including documentation, insurance, and consent.'],
                ]
            ],
            'phlebotomy' => [
                'id' => 'phlebotomy',
                'school_slug' => 'medical-assistant',
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
                'categories' => [
                    'Venipuncture', 'Order of Draw', 'Specimen Handling', 'Patient Safety', 'Infection Control'
                ],
                'topics' => [
                    'Venipuncture', 'Order of Draw', 'Specimen Handling', 'Patient Safety', 'Anatomy & Physiology', 'Infection Control'
                ],
                'learn_points' => [
                    'Venipuncture techniques', 'Order of draw protocols', 'Specimen handling and processing', 'Patient identification', 'Infection control measures', 'Difficult draw techniques'
                ],
                'deep_dives' => [
                    ['tag' => 'Venipuncture', 'title' => 'Vein Selection & Site Preparation', 'desc' => 'The complete guide to selecting the best venipuncture site and proper preparation technique.'],
                    ['tag' => 'Specimen Handling', 'title' => 'Specimen Collection & Processing', 'desc' => 'Proper techniques for specimen collection, labeling, handling, and transport.'],
                ]
            ],
            'dental-assistant' => [
                'id' => 'dental-assistant',
                'school_slug' => 'medical-assistant',
                'badge' => 'Medical Assistant',
                'title_abbr' => 'Dental',
                'title_full' => 'Dental Assistant Certification',
                'description' => 'Dental Assistant certification preparation covering chairside procedures, radiography, infection control, and dental anatomy.',
                'colors' => [
                    'theme_class' => 'theme-dental',
                ],
                'stats' => [
                    'questions' => '270+',
                    'total_exam_q' => '320 questions (CDA total)',
                    'duration' => '255 minutes',
                    'passing_score' => '400/900',
                    'provider' => 'DANB',
                    'difficulty' => 'Moderate-High',
                    'failure_rate' => '30-40%',
                    'salary_range' => '$38,000 – $55,000',
                    'salary_avg' => '$46,540',
                    'job_growth' => '7% (2022-2032)',
                    'study_duration' => '10 weeks',
                    'bank_size' => '1600+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => [
                    'Dental Anatomy', 'Radiography', 'Infection Control', 'Chairside Procedures', 'Dental Materials'
                ],
                'topics' => [
                    'Dental Anatomy', 'Radiography', 'Infection Control', 'Chairside Procedures', 'Dental Materials', 'Patient Management'
                ],
                'learn_points' => [
                    'Dental anatomy and terminology', 'Radiography techniques', 'Chairside assisting procedures', 'Dental materials handling', 'Sterilization protocols', 'Patient management skills'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'slp' => [
                'id' => 'slp',
                'school_slug' => 'medical-assistant', 
                'badge' => 'Speech Pathology', 
                'title_abbr' => 'SLP',
                'title_full' => 'Speech-Language Pathology',
                'description' => 'Speech-Language Pathology certification prep covering the full scope of communication disorders, assessment, and intervention strategies.',
                'colors' => [
                    'theme_class' => 'theme-slp',
                ],
                'stats' => [
                    'questions' => '290+',
                    'total_exam_q' => '132 questions',
                    'duration' => '150 minutes',
                    'passing_score' => '162/200',
                    'provider' => 'ETS Praxis',
                    'difficulty' => 'High',
                    'failure_rate' => '15-20%',
                    'salary_range' => '$70,000 – $110,000',
                    'salary_avg' => '$89,290',
                    'job_growth' => '19% (2022-2032)',
                    'study_duration' => '12 weeks',
                    'bank_size' => '1200+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => [
                    'Speech Disorders', 'Language Development', 'Swallowing Therapy', 'Assessment Tools', 'Neurogenic Disorders'
                ],
                'topics' => [
                    'Speech Disorders', 'Language Development', 'Swallowing Therapy', 'Assessment Tools', 'Pediatric SLP', 'Neurogenic Disorders'
                ],
                'learn_points' => [
                    'Speech disorder assessment', 'Language intervention strategies', 'Swallowing disorder management', 'Pediatric speech therapy', 'Neurogenic communication disorders', 'Augmentative communication'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'counsellor' => [
                'id' => 'counsellor',
                'school_slug' => 'medical-assistant', 
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
                'categories' => [
                    'Therapy Techniques', 'Mental Health Assessment', 'Ethics', 'Crisis Intervention', 'Group Therapy'
                ],
                'topics' => [
                    'Therapy Techniques', 'Mental Health Assessment', 'Ethics', 'Crisis Intervention', 'Group Therapy', 'Substance Abuse'
                ],
                'learn_points' => [
                    'Cognitive-behavioral techniques', 'Mental health assessment tools', 'Ethical decision-making', 'Crisis intervention protocols', 'Group therapy facilitation', 'Substance abuse counseling'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
            'aama' => [
                'id' => 'aama',
                'school_slug' => 'medical-assistant',
                'badge' => 'Medical Assistant',
                'title_abbr' => 'AAMA (CMA)',
                'title_full' => 'American Association of Medical Assistants',
                'description' => 'The CMA (AAMA) exam is the gold standard for medical assistants. Prepare with our comprehensive question bank covering all three exam domains.',
                'colors' => [
                    'theme_class' => 'theme-aama',
                ],
                'stats' => [
                    'questions' => '320+',
                    'total_exam_q' => '200 questions',
                    'duration' => '160 minutes',
                    'passing_score' => '430/800',
                    'provider' => 'AAMA',
                    'difficulty' => 'Moderate-High',
                    'failure_rate' => '35%',
                    'salary_range' => '$35,000 – $48,000',
                    'salary_avg' => '$42,000',
                    'job_growth' => '14% (2022-2032)',
                    'study_duration' => '8 weeks',
                    'bank_size' => '900+ questions',
                    'free_q' => '25 questions',
                ],
                'categories' => [
                    'General Knowledge', 'Administrative Skills', 'Clinical Skills', 'Medical Law & Ethics', 'Insurance & Billing'
                ],
                'topics' => [
                    'General Knowledge', 'Administrative Skills', 'Clinical Skills', 'Patient Communication', 'Medical Law & Ethics', 'Insurance & Billing'
                ],
                'learn_points' => [
                    'Administrative procedures', 'Clinical competencies', 'Medical law and ethics', 'Insurance processing', 'Patient communication', 'Office management'
                ],
                'deep_dives' => [
                    ['tag' => 'Patient Care', 'title' => 'Feeding Assistance & Aspiration Prevention', 'desc' => 'Learn the correct techniques for assisting residents with eating, including positioning, pace, and aspiration prevention.'],
                    ['tag' => 'Infection Control', 'title' => 'Hand Hygiene & Standard Precautions', 'desc' => 'Master the fundamentals of infection control, the single most important skill for preventing healthcare-associated infections.'],
                    ['tag' => 'Safety', 'title' => 'Fall Prevention & Post-Fall Response', 'desc' => 'Understand fall risk factors, prevention strategies, and the correct response protocol when a resident is found on the floor.'],
                ]
            ],
        ];

        if (!array_key_exists($slug, $certifications)) {
            abort(404);
        }

        $currentCert = $certifications[$slug];

        $relatedCerts = array_filter($certifications, function ($cert) use ($currentCert) {
            return $cert['school_slug'] === $currentCert['school_slug'] && $cert['id'] !== $currentCert['id'];
        });
        $relatedCerts = array_slice($relatedCerts, 0, 3);

        return view('pages.service', [
            'certification' => $currentCert,
            'relatedCerts' => $relatedCerts 
        ]);
    }
}