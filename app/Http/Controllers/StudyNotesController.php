<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Notes;
use App\Models\School;
use App\Models\Section;
use App\Models\Topic;
use Illuminate\View\View;

class StudyNotesController extends Controller
{
    //
    /**
     * Gets the outline
     */
    public function index(School $school): View
    {
        if (! $school) {
            abort(404, 'School Not found!!');
        }
        $sections = $school->exams()->with('topics')->get();

        return view('study-notes.index', compact('sections', 'school'));
    }

    /**
     * Display the notes content
     *
     * @param  Section  $section
     */
    public function show(School $school, Exam $exam, Topic $topic): View
    {
        //   dd($topic->name,$exam->name,$school->name);
        $notes = Notes::where('topic_id', $topic->id)->first();
        if (! $notes) {
            abort(404, 'No notes found');
        }
        $exams = $school->exams()->with('topics')->get();

        return view('study-notes.chapter', compact('notes', 'exams', 'topic', 'exam', 'school'));
    }
}
