<?php

namespace App\Http\Controllers;

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
     *
     * @param School $school
     * @return View
     */
    public function index(School $school): View
    {
        if (! $school) {
            abort(404, 'School Not found!!');
        }
        $sections = $school->sections()->with('topics')->get();
        return view('study-notes.index', compact('sections','school'));
    }

    /**
     * Display the notes content
     *
     * @param School $school
     * @param Section $section
     * @param Topic $topic
     * @return View
     */
    public function show(School $school, Section $section, Topic $topic): View
    {
      
        $notes = Notes::where('topic_id',$topic->id)->first();
        if(!$notes){
            abort(404,'No notes found');
        }
        $sections = $school->sections()->with('topics')->get();
        return view('study-notes.chapter',compact('notes','sections','topic','section','school'));
    }
}
