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
                    'bg_light' => 'bg-teal-50',
                    'border_light' => 'border-teal-200',
                    'badge_bg' => 'bg-teal-100',
                    'badge_text' => 'text-teal-700',
                    'gradient' => 'from-teal-400 to-teal-600',
                ],
                'stats' => [
                    'questions' => '350+',
                    'total_exam_q' => '60 questions',
                    'duration' => '90 minutes',
                    'passing_score' => '70%',
                    'provider' => 'Prometric / Pearson VUE',
                    'difficulty' => 'Moderate',
                    'failure_rate' => '28%',
                    'salary_range' => '$28,000 – $42,000',
                    'salary_avg' => '$33,250',
                    'job_growth' => '5% (2022-2032)',
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
                    'bg_light' => 'bg-emerald-50',
                    'border_light' => 'border-emerald-200',
                    'badge_bg' => 'bg-emerald-100',
                    'badge_text' => 'text-emerald-700',
                    'gradient' => 'from-emerald-400 to-cyan-600',
                ],
                'stats' => [
                    'questions' => '280+',
                    'total_exam_q' => '70 questions',
                    'duration' => '90 minutes',
                    'passing_score' => '70%',
                    'provider' => 'Prometric / Pearson VUE',
                    'difficulty' => 'Beginner',
                    'failure_rate' => '22%',
                    'salary_range' => '$26,000 – $38,000',
                    'salary_avg' => '$30,290',
                    'job_growth' => '5% (2022-2032)',
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
          
        ];

        if (!array_key_exists($slug, $certifications)) {
            abort(404);
        }

        return view('pages.service', [
            'certification' => $certifications[$slug]
        ]);
    }
}