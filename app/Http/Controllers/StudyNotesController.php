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
    public function show(School $school, Section $section, string $topic): View
    {
        // 1. Fetch data efficiently using eager loading and database queries
        $topicRecord = $section->topics()->where('slug', $topic)->firstOrFail();
        $notes = Notes::where('topic_id', $topicRecord->id)->firstOrFail();

        // Eager load topics to prevent N+1 queries during sidebar rendering and cross-section logic
        $sections = $school->sections()->with('topics')->get();

        // 2. Fetch adjacent notes within the current section in a single query
        $baseQuery = Notes::with('topic')->whereIn('topic_id', $section->topics->pluck('id'));

        $previousQuery = (clone $baseQuery)->where('id', '<', $notes->id)->orderBy('id', 'desc')->limit(1);

        $adjacentNotes = (clone $baseQuery)->where('id', '>', $notes->id)->orderBy('id', 'asc')->limit(1)
            ->unionAll($previousQuery)
            ->get();

        $previousNote = $adjacentNotes->first(fn ($n) => $n->id < $notes->id);
        $nextNote = $adjacentNotes->first(fn ($n) => $n->id > $notes->id);

        // 3. Determine Previous URL (Current section OR fallback to previous section)
        if ($previousNote) {
            $previousNoteUrl = route('study-notes.content', [$school->slug, $section->slug, $previousNote->topic->slug]);
        } else {
            $prevSection = $sections->where('id', '<', $section->id)->sortBy('id')->last();
            $prevTopic = $prevSection?->topics->sortBy('id')->last();

            $previousNoteUrl = $prevTopic
                ? route('study-notes.content', [$school->slug, $prevSection->slug, $prevTopic->slug])
                : null;
        }

        // 4. Determine Next URL (Current section OR fallback to next section)
        if ($nextNote) {
            $nextNoteUrl = route('study-notes.content', [$school->slug, $section->slug, $nextNote->topic->slug]);
        } else {
            $nextSection = $sections->where('id', '>', $section->id)->sortBy('id')->first();
            $nextTopic = $nextSection?->topics->sortBy('id')->first();

            $nextNoteUrl = $nextTopic
                ? route('study-notes.content', [$school->slug, $nextSection->slug, $nextTopic->slug])
                : null;
        }

        return view('study-notes.chapter', [
            'notes' => $notes,
            'sections' => $sections,
            'topic' => $topicRecord,
            'section' => $section,
            'school' => $school,
            'previousNoteUrl' => $previousNoteUrl,
            'nextNoteUrl' => $nextNoteUrl,
        ]);
    }

    public function refined(School $school, Section $section, string $topic): View
    {
        // 1. Fetch data efficiently using eager loading and database queries
        $topicRecord = $section->topics()->where('slug', $topic)->firstOrFail();
        $notes = Notes::where('topic_id', $topicRecord->id)->firstOrFail();

        // Eager load topics to prevent N+1 queries during sidebar rendering and cross-section logic
        $sections = $school->sections()->with('topics')->get();

        // 2. Fetch adjacent notes within the current section in a single query
        $baseQuery = Notes::with('topic')->whereIn('topic_id', $section->topics->pluck('id'));

        $previousQuery = (clone $baseQuery)->where('id', '<', $notes->id)->orderBy('id', 'desc')->limit(1);

        $adjacentNotes = (clone $baseQuery)->where('id', '>', $notes->id)->orderBy('id', 'asc')->limit(1)
            ->unionAll($previousQuery)
            ->get();

        $previousNote = $adjacentNotes->first(fn ($n) => $n->id < $notes->id);
        $nextNote = $adjacentNotes->first(fn ($n) => $n->id > $notes->id);

        // 3. Determine Previous URL (Current section OR fallback to previous section)
        if ($previousNote) {
            $previousNoteUrl = route('study-notes.content', [$school->slug, $section->slug, $previousNote->topic->slug]);
        } else {
            $prevSection = $sections->where('id', '<', $section->id)->sortBy('id')->last();
            $prevTopic = $prevSection?->topics->sortBy('id')->last();

            $previousNoteUrl = $prevTopic
                ? route('study-notes.content', [$school->slug, $prevSection->slug, $prevTopic->slug])
                : null;
        }

        // 4. Determine Next URL (Current section OR fallback to next section)
        if ($nextNote) {
            $nextNoteUrl = route('study-notes.content', [$school->slug, $section->slug, $nextNote->topic->slug]);
        } else {
            $nextSection = $sections->where('id', '>', $section->id)->sortBy('id')->first();
            $nextTopic = $nextSection?->topics->sortBy('id')->first();

            $nextNoteUrl = $nextTopic
                ? route('study-notes.content', [$school->slug, $nextSection->slug, $nextTopic->slug])
                : null;
        }

        return view('study-notes.refined_chapter', [
            'notes' => $notes,
            'sections' => $sections,
            'topic' => $topicRecord,
            'section' => $section,
            'school' => $school,
            'previousNoteUrl' => $previousNoteUrl,
            'nextNoteUrl' => $nextNoteUrl,
        ]);
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

    // public function sourcesEdit(School $school, Section $section, Topic $topic): View
    // {
    //     $notes = Notes::where('topic_id', $topic->id)->first();
    //     if (! $notes) {
    //         abort(404, 'No notes found');
    //     }
    //     $sections = $school->sections()->with('topics')->get();
    //     $previousNoteUrl = null;
    //     $nextNoteUrl = null;

    //     if ($notes) {
    //         // Get the note created immediately before this one
    //         $previousNote = Notes::with('topic')->where('id', '<', $notes->id)
    //             ->orderBy('id', 'desc')
    //             ->first();

    //         // Get the note created immediately after this one
    //         $nextNote = Notes::with('topic')->where('id', '>', $notes->id)
    //             ->orderBy('id', 'asc')
    //             ->first();

    //         // Generate your URLs safely if the records exist
    //         $previousNoteUrl = $previousNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $previousNote->topic->slug]) : null;
    //         $nextNoteUrl = $nextNote ? route('study-notes.content', ['school' => $school->slug, 'section' => $section->slug, 'topic' => $nextNote->topic->slug]) : null;
    //     }

    //     return view('study-notes.sources_edit', compact('notes', 'sections', 'topic', 'section', 'school', 'previousNoteUrl', 'nextNoteUrl'));
    // }

    // /**
    //  * Edit the notes content
    //  */
    // public function edit(School $school, Section $section, Topic $topic): View
    // {
    //     $notes = Notes::where('topic_id', $topic->id)->first();
    //     if (! $notes) {
    //         abort(404, 'No notes found');
    //     }
    //     $sections = $school->sections()->with('topics')->get();

    //     return view('study-notes.edit', compact('notes', 'sections', 'topic', 'section', 'school'));
    // }

    // /**
    //  * Update the note
    //  */
    // public function update(Request $request, School $school, Section $section, string $topic)
    // {

    //     $request->validate([
    //         'content' => 'required',
    //     ]);

    //     $topic = $school->sections->where('slug', $section->slug)->first()->topics->where('slug', $topic)->first();
    //     if (! $topic) {
    //         abort(404);
    //     }
    //     // findOrFail automatically throws a 404 if not found, eliminating the if/else
    //     $notes = Notes::where('topic_id', $topic->id)->firstOrFail();

    //     $notes->update([
    //         'content' => $request->content,
    //     ]);

    //     return redirect()->back()->with('success', "{$topic->name} updated successfully");
    // }

    // /**
    //  * Update the note - sources col
    //  */
    // public function updateSources(Request $request, Topic $topic)
    // {

    //     $request->validate([
    //         'content' => 'required',
    //     ]);
    //     Notes::where('topic_id', $topic->id)->update([
    //         'content_with_sources' => $request->content,
    //     ]);

    //     return redirect()->back()->with('success', $topic->name.' updated successfully');
    // }

    public function sitemap()
    {
        $schools = School::with(['sections'=>function($query){
            $query->select('id','school_id','slug','updated_at');
        }])->get(['id','slug', 'updated_at']);
        $urls = [];
        foreach ($schools as $key => $value) {

            $urls[] = [
                'url' => url('/study-notes/'.$value->slug),
                'lastmod' => $value->updated_at,
                'priority' => 0.8
            ];
             

            foreach($value->sections as $section){
                $urls[] = [
                'url' => url('/study-notes/'.$value->slug.'/'.$section->slug),
                'lastmod' => $value->updated_at,
                'priority' => 0.64
            ];
            }
        }

        return response()->view('study-notes.sitemap', compact('urls'))->header('Content-Type', 'text/xml');
    }
}
