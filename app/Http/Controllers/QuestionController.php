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

        $questions = Question::where('exam_id', $exam->id)->paginate(10);

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

        return view('questions.show', compact('question'));
    }
}
