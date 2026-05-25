<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\School;
use App\Models\Section;
use App\Models\Topic;
use Illuminate\Http\Request;
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
        $sections = $school->sections()->with('topics')->get();

        return view('study-notes.index', compact('sections', 'school'));
    }

    /**
     * Display the notes content
     */
    public function show(School $school, Section $section, Topic $topic): View
    {
        $notes = Notes::where('topic_id', $topic->id)->first();
        if (! $notes) {
            abort(404, 'No notes found');
        }
        $sections = $school->sections()->with('topics')->get();
        $previousNoteUrl = null;
        $nextNoteUrl = null;

        if ($notes) {
            // Get the note created immediately before this one
            $previousNote = Notes::with('topic')->where('id', '<', $notes->id)
                ->orderBy('id', 'desc')
                ->first();

            // Get the note created immediately after this one
            $nextNote = Notes::with('topic')->where('id', '>', $notes->id)
                ->orderBy('id', 'asc')
                ->first();

            // Generate your URLs safely if the records exist
            $previousNoteUrl = $previousNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $previousNote->topic->slug]) : null;
            $nextNoteUrl = $nextNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $nextNote->topic->slug]) : null;
        }

        return view('study-notes.chapter', compact('notes', 'sections', 'topic', 'section', 'school', 'previousNoteUrl', 'nextNoteUrl'));
    }

    public function sources(School $school, Section $section, Topic $topic): View
    {
        $notes = Notes::where('topic_id', $topic->id)->first();
        if (! $notes) {
            abort(404, 'No notes found');
        }
        $sections = $school->sections()->with('topics')->get();
        $previousNoteUrl = null;
        $nextNoteUrl = null;

        if ($notes) {
            // Get the note created immediately before this one
            $previousNote = Notes::with('topic')->where('id', '<', $notes->id)
                ->orderBy('id', 'desc')
                ->first();

            // Get the note created immediately after this one
            $nextNote = Notes::with('topic')->where('id', '>', $notes->id)
                ->orderBy('id', 'asc')
                ->first();

            // Generate your URLs safely if the records exist
            $previousNoteUrl = $previousNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $previousNote->topic->slug]) : null;
            $nextNoteUrl = $nextNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $nextNote->topic->slug]) : null;
        }

        return view('study-notes.sources', compact('notes', 'sections', 'topic', 'section', 'school', 'previousNoteUrl', 'nextNoteUrl'));
    }

    public function sourcesEdit(School $school, Section $section, Topic $topic): View
    {
        $notes = Notes::where('topic_id', $topic->id)->first();
        if (! $notes) {
            abort(404, 'No notes found');
        }
        $sections = $school->sections()->with('topics')->get();
        $previousNoteUrl = null;
        $nextNoteUrl = null;

        if ($notes) {
            // Get the note created immediately before this one
            $previousNote = Notes::with('topic')->where('id', '<', $notes->id)
                ->orderBy('id', 'desc')
                ->first();

            // Get the note created immediately after this one
            $nextNote = Notes::with('topic')->where('id', '>', $notes->id)
                ->orderBy('id', 'asc')
                ->first();

            // Generate your URLs safely if the records exist
            $previousNoteUrl = $previousNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $previousNote->topic->slug]) : null;
            $nextNoteUrl = $nextNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $nextNote->topic->slug]) : null;
        }

        return view('study-notes.sources_edit', compact('notes', 'sections', 'topic', 'section', 'school', 'previousNoteUrl', 'nextNoteUrl'));
    }

    /**
     * Edit the notes content
     */
    public function edit(School $school, Section $section, Topic $topic): View
    {
        //   dd($topic->name,$exam->name,$school->name);
        $notes = Notes::where('topic_id', $topic->id)->first();
        if (! $notes) {
            abort(404, 'No notes found');
        }
        $sections = $school->sections()->with('topics')->get();

        return view('study-notes.edit', compact('notes', 'sections', 'topic', 'section', 'school'));
    }

    /**
     * Update the note
     */
    public function update(Request $request, Topic $topic)
    {
        // dd($request->content);
        $request->validate([
            'content' => 'required',
        ]);
        $notes = Notes::where('topic_id', $topic->id)->first();
        if (! $notes) {
            abort(404, 'No notes found');
        } else {
            $notes->content = $request->content;
            $notes->save();

            return redirect()->back()->with('success', $topic->name.' updated successfully');
        }
    }

    /**
     * Update the note - sources col
     */
    public function updateSources(Request $request, Topic $topic)
    {
        // dd($request->content);
        $request->validate([
            'content' => 'required',
        ]);
        Notes::where('topic_id', $topic->id)->update([
            'content_with_sources' => $request->content,
        ]);

        return redirect()->back()->with('success', $topic->name.' updated successfully');
    }
}
