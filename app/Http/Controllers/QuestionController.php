<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Section;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    protected function getExamSEOData()
    {
        return [
            'cna' => [
                'pattern' => ['cna', 'nurse aide', 'nnaap', 'state exam'],
                'meta_description' => 'Prepare for the CNA exam with 850+ practice questions, CNA study guides, mock exams, and detailed explanations covering patient care, infection control, safety procedures, and Nurse Aide skills.',
                'keywords' => 'CNA practice test, CNA study guide, Nurse Aide exam prep, CNA questions and answers',
            ],
            'ccma' => [
                'pattern' => ['ccma', 'certified clinical medical assistant', 'nha ccma'],
                'meta_description' => 'Get ready for the CCMA exam with 1200+ practice questions, medical assistant study guides, mock exams, and clinical review materials covering EKG, pharmacology, patient care, and procedures.',
                'keywords' => 'CCMA practice test, CCMA study guide, medical assistant exam prep, Certified Clinical Medical Assistant',
            ],
            'ptce' => [
                'pattern' => ['ptce', 'pharmacy technician certification exam', 'pharmacy tech board'],
                'meta_description' => 'Pass the PTCE with 1050+ pharmacy technician practice questions, PTCE study guides, medication calculations, federal regulations, and pharmacy operations review materials.',
                'keywords' => 'PTCE practice test, PTCE study guide, Pharmacy Technician Certification Exam, pharmacy technician exam prep',
            ],
            'ex cpt' => [
                'pattern' => ['ex cpt', 'pharmacy technician certification', 'pharmacy law'],
                'meta_description' => 'Study for the ExCPT pharmacy technician certification exam with realistic practice tests, study guides, medication safety reviews, and pharmacy law practice questions.',
                'keywords' => 'ExCPT practice test, ExCPT study guide, pharmacy technician certification, ExCPT exam prep',
            ],
            'phlebotomy' => [
                'pattern' => ['phlebotomy', 'venipuncture', 'specimen collection'],
                'meta_description' => 'Prepare for your phlebotomy certification exam with 760+ practice questions, phlebotomy study guides, venipuncture reviews, specimen collection training, and safety procedures.',
                'keywords' => 'phlebotomy practice test, phlebotomy study guide, phlebotomy exam prep, venipuncture practice',
            ],
            'aama' => [
                'pattern' => ['aama', 'cma exam', 'certified medical assistant exam'],
                'meta_description' => 'Master the AAMA CMA exam with 1100+ practice questions, medical assistant study guides, anatomy reviews, pharmacology practice, and administrative procedure training.',
                'keywords' => 'AAMA practice test, AAMA study guide, CMA exam prep, Certified Medical Assistant exam',
            ],
            'fnp' => [
                'pattern' => ['fnp', 'family nurse practitioner', 'aanp'],
                'meta_description' => 'Prepare for the Family Nurse Practitioner certification exam with 2050+ practice questions, FNP study guides, pharmacology reviews, patient assessment training, and diagnosis practice.',
                'keywords' => 'FNP practice questions, FNP study guide, Family Nurse Practitioner exam prep, FNP practice test',
            ],
            'hospice' => [
                'pattern' => ['hospice', 'palliative care', 'end-of-life'],
                'meta_description' => 'Study for hospice and palliative care nursing certification with 950+ practice questions, hospice nursing study guides, symptom management reviews, and end-of-life care preparation.',
                'keywords' => 'hospice nurse certification, hospice nursing study guide, palliative care nursing exam, hospice practice test',
            ],
            'cen' => [
                'pattern' => ['cen', 'certified emergency nurse', 'emergency nursing'],
                'meta_description' => 'Get ready for the Certified Emergency Nurse exam with 1800+ practice questions, CEN study guides, trauma care reviews, emergency nursing scenarios, and critical care preparation.',
                'keywords' => 'CEN practice test, CEN study guide, Certified Emergency Nurse exam, emergency nursing exam prep',
            ],
            'nce' => [
                'pattern' => ['nce', 'national counselor examination', 'counseling exam'],
                'meta_description' => 'Prepare for the National Counselor Examination with 1400+ practice questions, counseling study guides, ethics reviews, counseling theories, and assessment preparation materials.',
                'keywords' => 'NCE practice test, NCE study guide, National Counselor Examination, counseling exam prep',
            ],
        ];
    }

    protected function getMatchingSEOData($examName)
    {
        $seoData = $this->getExamSEOData();
        $examNameLower = strtolower($examName);

        foreach ($seoData as $key => $data) {
            foreach ($data['pattern'] as $pattern) {
                if (strpos($examNameLower, strtolower($pattern)) !== false) {
                    return [
                        'type' => $key,
                        'meta_description' => $data['meta_description'],
                        'keywords' => $data['keywords'],
                    ];
                }
            }
        }

        return null;
    }

    public function index(Request $request, string $schoolSlug, string $examSlug)
    {
        $exam = Exam::where('slug', $examSlug)
            ->whereHas('school', function ($query) use ($schoolSlug) {
                $query->where('slug', $schoolSlug);
            })
            ->with('school')
            ->firstOrFail();

        $sections = null;
        if ($exam) {
            $sections = Section::with(['topics' => function ($query) {
                $query->first();
            }])->where('school_id', $exam->school_id)->take(3)->get();
        }

        $questions = Question::where('exam_id', $exam->id)
            ->orderBy('id', 'asc')
            ->get();

        $questions = $questions->map(function ($question) {
            $choices = [];
            $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

            foreach ($letters as $index => $letter) {
                $choiceColumn = 'choice'.$letter;
                if (! is_null($question->$choiceColumn)) {
                    $choices[] = [
                        'letter' => $letter,
                        'text' => $question->$choiceColumn,
                        'is_correct' => strtoupper($question->correct_answer) === $letter,
                    ];
                }
            }

            return (object) [
                'id' => $question->id,
                'exam_id' => $question->exam_id,
                'extract' => $question->extract,
                'question' => $question->question,
                'choices' => $choices,
                'correct_answer' => strtoupper($question->correct_answer),
                'rationale' => $question->rationale,
                'question_type' => $question->question_type,
                'image' => $question->image,
                'url' => $question->url,
                'wrong_answer' => $question->wrong_answer,
                'created_at' => $question->created_at,
                'updated_at' => $question->updated_at,
            ];
        });

        $totalQuestions = $questions->count();
        $matchedSEO = $this->getMatchingSEOData($exam->name);

        if ($matchedSEO) {
            $metaDescription = $matchedSEO['meta_description'];
            $keywords = $matchedSEO['keywords'];
        } else {
            $metaDescription = "Prepare for {$exam->name} with expert-reviewed practice questions. Test your knowledge with detailed rationales. Start practicing now.";
            $keywords = "{$exam->name} practice test, {$exam->name} study guide";
        }

        $metaTitle = substr("{$exam->name} Practice Questions | UsExamPrep", 0, 60);
        $canonicalUrl = route('questions.index', ['schoolSlug' => $schoolSlug, 'examSlug' => $examSlug]);

        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => $exam->school->name, 'url' => url("/cert/{$schoolSlug}")],
            ['label' => $exam->name, 'url' => $canonicalUrl],
        ];

        return view('questions.index', compact(
            'exam',
            'questions',
            'totalQuestions',
            'metaTitle',
            'metaDescription',
            'keywords',
            'canonicalUrl',
            'breadcrumbs',
            'sections'
        ));
    }

    public function show(string $schoolSlug, string $examSlug, int $id)
    {
        $question = Question::whereHas('exam', function ($query) use ($examSlug, $schoolSlug) {
            $query->where('slug', $examSlug)
                ->whereHas('school', function ($q) use ($schoolSlug) {
                    $q->where('slug', $schoolSlug);
                });
        })->findOrFail($id);

        $choices = [];
        $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

        foreach ($letters as $index => $letter) {
            $choiceColumn = 'choice'.$letter;
            if (! is_null($question->$choiceColumn)) {
                $choices[] = [
                    'letter' => $letter,
                    'text' => $question->$choiceColumn,
                    'is_correct' => strtoupper($question->correct_answer) === $letter,
                ];
            }
        }

        $transformedQuestion = (object) [
            'id' => $question->id,
            'exam_id' => $question->exam_id,
            'extract' => $question->extract,
            'question' => $question->question,
            'choices' => $choices,
            'correct_answer' => strtoupper($question->correct_answer),
            'rationale' => $question->rationale,
            'question_type' => $question->question_type,
            'image' => $question->image,
            'url' => $question->url,
            'wrong_answer' => $question->wrong_answer,
            'created_at' => $question->created_at,
            'updated_at' => $question->updated_at,
        ];

        return view('questions.show', compact('transformedQuestion'));
    }
}
