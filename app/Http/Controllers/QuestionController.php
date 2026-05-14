<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request, string $schoolSlug, string $examSlug)
    {
        $exam = Exam::where('slug', $examSlug)
            ->whereHas('school', function ($query) use ($schoolSlug) {
                $query->where('slug', $schoolSlug);
            })
            ->with('school')
            ->firstOrFail();
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

        $metaTitle = substr("{$exam->name} Practice Questions | UsExamPrep", 0, 60);
        $metaDescription = substr("Prepare for {$exam->name} with expert-reviewed practice questions. Test your knowledge with detailed rationales. Start practicing now.", 0, 160);
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
            'canonicalUrl',
            'breadcrumbs'
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
