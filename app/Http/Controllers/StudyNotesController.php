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

    public function index(School $school): View
    {
        if (! $school) {
            abort(404, 'School Not found!!');
        }
        $sections = $school->sections()->with('topics')->get();

        // dd($sections[0] );
        return view('study-notes.index', compact('sections'));
    }

    public function show(School $school, Section $section, Topic $topic): View
    {
      
        $notes = Notes::where('topic_id',$topic->id)->first();
        if(!$notes){
            abort(404,'No notes found');
        }
        return view('study-notes.chapter',compact('notes'));
    }
}
