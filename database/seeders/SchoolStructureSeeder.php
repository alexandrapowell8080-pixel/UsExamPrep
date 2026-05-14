<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Notes;
use App\Models\School;
use App\Models\Section;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolStructureSeeder extends Seeder
{
    // public function run(): void
    // {
    //     // Example: create 1 school
    //     $school = School::create([
    //         'name' => 'Default School',
    //         'slug' => Str::slug('Default School'),
    //     ]);

    //     // Create 13 sections
    //     for ($s = 1; $s <= 13; $s++) {

    //         $section = Section::create([
    //             'school_id' => $school->id,
    //             'name' => "Section $s",
    //             'slug' => "section-$s",
    //         ]);

    //         // Each section gets at least 10 topics
    //         for ($t = 1; $t <= 10; $t++) {

    //             $topic = Topic::create([
    //                 'section_id' => $section->id,
    //                 'name' => "Topic $t (Section $s)",
    //                 'slug' => "section-$s-topic-$t",
    //             ]);

    //             // Each topic gets 1 note (you can increase if needed)
    //             Notes::create([
    //                 'topic_id' => $topic->id,
    //                 'content' => "This is the note content for Topic $t in Section $s",
    //             ]);
    //         }
    //     }
    // }

    public function run(): void
    {
        $data = [
            [
                'name' => 'Family Nurse Practitioner',
                'sections' => [
                    [
                        'name' => 'Foundations of Advanced Practice Nursing',
                        'children' => [
                            'Role of the FNP',
                            'Scope of Practice',
                            'Evidence-Based Practice',
                            'Nursing Theories',
                            'Clinical Decision-Making',
                            'Patient-Centered Care',
                            'Interprofessional Collaboration',
                        ],
                    ],
                    [
                        'name' => 'Health Assessment & Diagnostic Reasoning',
                        'children' => [
                            'Comprehensive Health History',
                            'Physical Examination Techniques',
                            'Differential Diagnosis',
                            'Clinical Reasoning',
                            'Diagnostic Testing',
                            'Laboratory Interpretation',
                            'SOAP Notes & Documentation',
                        ],
                    ],
                    [
                        'name' => 'Advanced Pharmacology',
                        'children' => [
                            'Pharmacokinetics',
                            'Pharmacodynamics',
                            'Drug Classifications',
                            'Prescribing Principles',
                            'Controlled Substances',
                            'Medication Safety',
                            'Drug Interactions',
                            'Patient Education',
                        ],
                    ],
                    [
                        'name' => 'Primary Care & Preventive Medicine',
                        'children' => [
                            'Health Promotion',
                            'Disease Prevention',
                            'Wellness Visits',
                            'Screening Guidelines',
                            'Immunizations',
                            'Lifestyle Counseling',
                        ],
                    ],
                    [
                        'name' => 'Adult & Geriatric Care',
                        'children' => [
                            'Hypertension',
                            'Diabetes Mellitus',
                            'Heart Failure',
                            'COPD',
                            'Asthma',
                            'Thyroid Disorders',
                            'Arthritis',
                            'Dementia',
                            'Polypharmacy',
                            'Fall Prevention',
                        ],
                    ],
                    [
                        'name' => 'Pediatric Care',
                        'children' => [
                            'Growth & Development',
                            'Pediatric Assessment',
                            'Childhood Illnesses',
                            'Immunization Schedules',
                            'Pediatric Emergencies',
                            'Adolescent Health',
                        ],
                    ],
                    [
                        'name' => 'Women’s Health',
                        'children' => [
                            'Prenatal Care',
                            'Gynecological Disorders',
                            'Contraception',
                            'Menopause',
                            'Breast Disorders',
                            'STI Management',
                        ],
                    ],
                    [
                        'name' => 'Men’s Health',
                        'children' => [
                            'Prostate Disorders',
                            'Erectile Dysfunction',
                            'Testosterone Disorders',
                            'Preventive Screening',
                        ],
                    ],
                    [
                        'name' => 'Mental Health & Behavioral Care',
                        'children' => [
                            'Depression',
                            'Anxiety',
                            'Bipolar Disorders',
                            'ADHD',
                            'Substance Abuse',
                            'Suicide Risk Assessment',
                            'Crisis Intervention',
                        ],
                    ],
                    [
                        'name' => 'Infectious Diseases',
                        'children' => [
                            'Respiratory Infections',
                            'Urinary Tract Infections',
                            'Skin Infections',
                            'HIV/AIDS',
                            'STIs',
                            'Antibiotic Stewardship',
                        ],
                    ],
                    [
                        'name' => 'Emergency & Urgent Care',
                        'children' => [
                            'Chest Pain',
                            'Stroke Recognition',
                            'Shock',
                            'Trauma Basics',
                            'Airway Emergencies',
                            'Acute Abdomen',
                        ],
                    ],
                    [
                        'name' => 'Chronic Disease Management',
                        'children' => [
                            'Diabetes Management',
                            'Hypertension Management',
                            'Obesity',
                            'Chronic Kidney Disease',
                            'Cardiovascular Risk Reduction',
                        ],
                    ],
                    [
                        'name' => 'Diagnostics & Procedures',
                        'children' => [
                            'ECG Interpretation',
                            'Spirometry',
                            'Suturing Basics',
                            'Wound Care',
                            'Point-of-Care Testing',
                        ],
                    ],
                    [
                        'name' => 'Ethics, Legal Issues & Professional Practice',
                        'children' => [
                            'Prescriptive Authority',
                            'HIPAA',
                            'Malpractice',
                            'Informed Consent',
                            'Cultural Competence',
                            'Professional Boundaries',
                        ],
                    ],
                    [
                        'name' => 'Clinical Skills & Competencies',
                        'children' => [
                            'Patient Counseling',
                            'Treatment Planning',
                            'Care Coordination',
                            'Referral Management',
                            'Follow-Up Care',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'Hospice & Palliative Care',
                'sections' => [
                    [
                        'name' => 'Foundations of Hospice Care',
                        'children' => [
                            'Philosophy of Hospice',
                            'Palliative vs Curative Care',
                            'Hospice Team Roles',
                            'Patient-Centered Care',
                        ],
                    ],
                    [
                        'name' => 'Pain & Symptom Management',
                        'children' => [
                            'Pain Assessment',
                            'Opioid Management',
                            'Non-Pharmacological Pain Relief',
                            'Symptom Control',
                        ],
                    ],
                    [
                        'name' => 'End-of-Life Care',
                        'children' => [
                            'Signs of Dying',
                            'Comfort Care',
                            'Spiritual Support',
                            'Dignity & Compassion',
                        ],
                    ],
                    [
                        'name' => 'Psychosocial Support',
                        'children' => [
                            'Family Counseling',
                            'Bereavement Support',
                            'Cultural Sensitivity',
                            'Emotional Care',
                        ],
                    ],
                    [
                        'name' => 'Ethical & Legal Considerations',
                        'children' => [
                            'Advance Directives',
                            'DNR Orders',
                            'Patient Autonomy',
                            'Ethical Decision-Making',
                        ],
                    ],
                    [
                        'name' => 'Communication Skills',
                        'children' => [
                            'Difficult Conversations',
                            'Family Meetings',
                            'Grief Communication',
                        ],
                    ],
                    [
                        'name' => 'Interdisciplinary Care',
                        'children' => [
                            'Nursing Roles',
                            'Social Work',
                            'Chaplaincy',
                            'Volunteer Support',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'Phlebotomy Technician Certification',
                'sections' => [
                    [
                        'name' => 'Foundations of Phlebotomy',
                        'children' => [
                            'Role of the Phlebotomist',
                            'Ethics',
                            'Patient Interaction',
                            'Safety Standards',
                        ],
                    ],
                    [
                        'name' => 'Anatomy & Physiology',
                        'children' => [
                            'Circulatory System',
                            'Vein Anatomy',
                            'Blood Composition',
                        ],
                    ],
                    [
                        'name' => 'Infection Control & Safety',
                        'children' => [
                            'PPE',
                            'Biohazard Disposal',
                            'OSHA Standards',
                            'Exposure Protocols',
                        ],
                    ],
                    [
                        'name' => 'Blood Collection Procedures',
                        'children' => [
                            'Venipuncture',
                            'Capillary Collection',
                            'Order of Draw',
                            'Tube Additives',
                        ],
                    ],
                    [
                        'name' => 'Specimen Handling',
                        'children' => [
                            'Labeling',
                            'Transportation',
                            'Centrifugation',
                            'Processing',
                        ],
                    ],
                    [
                        'name' => 'Special Collections',
                        'children' => [
                            'Pediatric Collections',
                            'Geriatric Patients',
                            'Difficult Draws',
                            'Blood Cultures',
                        ],
                    ],
                    [
                        'name' => 'Complications & Errors',
                        'children' => [
                            'Hematomas',
                            'Syncope',
                            'Hemolysis',
                            'Needle Stick Injuries',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'National Counselor Examination',
                'sections' => [
                    [
                        'name' => 'Foundations of Counselling',
                        'children' => [
                            'Counseling Theories',
                            'Therapeutic Alliance',
                            'Ethics & Confidentiality',
                        ],
                    ],
                    [
                        'name' => 'Communication Skills',
                        'children' => [
                            'Active Listening',
                            'Empathy',
                            'Reflection',
                            'Motivational Interviewing',
                        ],
                    ],
                    [
                        'name' => 'Mental Health Assessment',
                        'children' => [
                            'DSM Disorders',
                            'Suicide Risk Assessment',
                            'Crisis Intervention',
                            'Intake Interviewing',
                        ],
                    ],
                    [
                        'name' => 'Therapy Modalities',
                        'children' => [
                            'CBT',
                            'DBT',
                            'Psychodynamic Therapy',
                            'Family Therapy',
                            'Group Therapy',
                        ],
                    ],
                    [
                        'name' => 'Trauma & Crisis Counseling',
                        'children' => [
                            'PTSD',
                            'Grief Counseling',
                            'Domestic Violence',
                            'Substance Abuse',
                        ],
                    ],
                    [
                        'name' => 'Multicultural Counseling',
                        'children' => [
                            'Cultural Competence',
                            'Diversity Issues',
                            'Bias Awareness',
                        ],
                    ],
                    [
                        'name' => 'Ethics & Professional Practice',
                        'children' => [
                            'Boundaries',
                            'Documentation',
                            'Licensing Standards',
                            'Legal Issues',
                        ],
                    ],
                    [
                        'name' => 'Treatment Planning',
                        'children' => [
                            'SMART Goals',
                            'Progress Notes',
                            'Outcome Evaluation',
                        ],
                    ],
                    [
                        'name' => 'Practical Counseling Skills',
                        'children' => [
                            'Case Conceptualization',
                            'Session Structuring',
                            'Intervention Selection',
                        ],
                    ],
                    [
                        'name' => 'Certification Exam Preparation',
                        'children' => [
                            'Case Studies',
                            'Ethics Scenarios',
                            'Mock Exams',
                            'Clinical Simulations',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'Certified Emergency Nurse',
                'sections' => [
                    [
                        'name' => 'Emergency Nursing Foundations',
                        'children' => [
                            'Triage Systems',
                            'Emergency Assessment',
                            'Prioritization',
                            'Legal & Ethical Issues',
                        ],
                    ],
                    [
                        'name' => 'Trauma Emergencies',
                        'children' => [
                            'Head Trauma',
                            'Spinal Injuries',
                            'Chest Trauma',
                            'Abdominal Trauma',
                            'Burns',
                            'Shock',
                        ],
                    ],
                    [
                        'name' => 'Cardiovascular Emergencies',
                        'children' => [
                            'ACS & MI',
                            'Cardiac Dysrhythmias',
                            'Heart Failure',
                            'Stroke',
                            'Cardiac Arrest',
                        ],
                    ],
                    [
                        'name' => 'Respiratory Emergencies',
                        'children' => [
                            'Airway Management',
                            'COPD & Asthma',
                            'Pulmonary Embolism',
                            'Mechanical Ventilation',
                        ],
                    ],
                    [
                        'name' => 'Neurological Emergencies',
                        'children' => [
                            'Seizures',
                            'Increased ICP',
                            'Stroke Management',
                            'Neurological Assessment',
                        ],
                    ],
                    [
                        'name' => 'Pediatric Emergencies',
                        'children' => [
                            'Pediatric Assessment',
                            'Respiratory Distress',
                            'Pediatric Trauma',
                            'Fever & Sepsis',
                        ],
                    ],
                    [
                        'name' => 'Toxicology & Environmental Emergencies',
                        'children' => [
                            'Poisoning',
                            'Overdose',
                            'Heat Stroke',
                            'Hypothermia',
                            'Snake Bites',
                        ],
                    ],
                    [
                        'name' => 'Obstetric & Gynecological Emergencies',
                        'children' => [
                            'Pregnancy Emergencies',
                            'Labor Complications',
                            'Postpartum Emergencies',
                        ],
                    ],
                    [
                        'name' => 'Psychiatric Emergencies',
                        'children' => [
                            'Crisis Intervention',
                            'Suicide Risk',
                            'Violent Patients',
                            'Substance Abuse',
                        ],
                    ],
                    [
                        'name' => 'CEN Exam Review',
                        'children' => [
                            'Rapid Reviews',
                            'Trauma Simulations',
                            'Practice Exams',
                            'Clinical Scenarios',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'Certified Nursing Assistant',
                'sections' => [
                    [
                        'name' => 'Healthcare Foundations',
                        'children' => [
                            'Role of the CNA',
                            'Scope of Practice',
                            'Healthcare Team Collaboration',
                            'Professional Conduct',
                            'Ethics & Legal Responsibilities',
                            'HIPAA & Confidentiality',
                            'Resident Rights',
                        ],
                    ],
                    [
                        'name' => 'Infection Control & Safety',
                        'children' => [
                            'Chain of Infection',
                            'Standard Precautions',
                            'Transmission-Based Precautions',
                            'Hand Hygiene',
                            'PPE Usage',
                            'Fall Prevention',
                            'Fire & Disaster Safety',
                            'Restraint Safety',
                        ],
                    ],
                    [
                        'name' => 'Basic Nursing Skills',
                        'children' => [
                            'Vital Signs',
                            'Height & Weight',
                            'Pain Assessment',
                            'Intake & Output',
                            'Bed Making',
                            'Specimen Collection',
                            'Oxygen Therapy Basics',
                        ],
                    ],
                    [
                        'name' => 'Activities of Daily Living (ADLs)',
                        'children' => [
                            'Bathing',
                            'Grooming',
                            'Oral Care',
                            'Toileting',
                            'Feeding Assistance',
                            'Dressing',
                            'Mobility Assistance',
                        ],
                    ],
                    [
                        'name' => 'Nutrition & Hydration',
                        'children' => [
                            'Basic Nutrition',
                            'Therapeutic Diets',
                            'Feeding Techniques',
                            'Dysphagia Precautions',
                            'Hydration Monitoring',
                        ],
                    ],
                    [
                        'name' => 'Elimination & Comfort',
                        'children' => [
                            'Urinary Elimination',
                            'Bowel Elimination',
                            'Catheter Care',
                            'Incontinence Care',
                            'Comfort Measures',
                        ],
                    ],
                    [
                        'name' => 'Mental Health & Special Care',
                        'children' => [
                            'Dementia Care',
                            'Alzheimer’s Disease',
                            'Depression & Anxiety',
                            'End-of-Life Care',
                            'Behavioral Challenges',
                        ],
                    ],
                    [
                        'name' => 'Restorative Care',
                        'children' => [
                            'ROM Exercises',
                            'Assistive Devices',
                            'Rehabilitation Principles',
                            'Skin Integrity',
                        ],
                    ],
                    [
                        'name' => 'Clinical Skills Competency',
                        'children' => [
                            'Transfers',
                            'Positioning',
                            'Ambulation',
                            'Feeding',
                            'Vital Signs',
                            'Catheter Care',
                            'Specimen Collection',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'Nurse Aide',
                'sections' => []
            ],

            [
                'name' => 'Medical Assistant',
                'sections' => []
            ],

            [
                'name' => 'Pharmacy Technician',
                'sections' => []
            ],

        ];

        foreach ($data as $schoolData) {

            // Create School
            $school = School::create([
                'name' => $schoolData['name'],
                'slug' => Str::slug($schoolData['name']),
            ]);

            foreach ($schoolData['sections'] as $sectionData) {

                // Create Section
                $section = Section::create([
                    'school_id' => $school->id,
                    'name' => $sectionData['name'],
                    'slug' => $this->generateUniqueSlug($sectionData['name']),
                ]);

                foreach ($sectionData['children'] as $topicName) {

                    // Create Topic
                    $topic = Topic::create([
                        'section_id' => $section->id,
                        'name' => $topicName,
                        'slug' => Str::slug($topicName),
                    ]);

                    // Notes::create([
                    //     'topic_id' => $topic->id,
                    //     'content' => "This is the note content for Topic $topic->name in Section $section->name",
                    // ]);

                }
            }
        }

    }

    private function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (Exam::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}
