<?php

// namespace App\Console\Commands;

// use App\Models\Notes;
// use App\Models\Topic;
// use App\Services\NotesRefinementService;
// use Illuminate\Console\Attributes\Description;
// use Illuminate\Console\Attributes\Signature;
// use Illuminate\Console\Command;
// use Illuminate\Support\Facades\DB;

// #[Signature('notes:drefinement')]
// #[Description('Refine notes to have a custom feel')]
// class NotesRefinement extends Command
// {
//     /**
//      * Execute the console command.
//      */
//     public function __construct(protected NotesRefinementService $notes_refinement_service)
//     {
//         return parent::__construct();
//     }

//     public function handle()
//     {

//         $topics = Topic::with([
//             'notes',
//             'section:id,name,school_id',
//             'section.school:id,name',
//         ])
//             ->where(function ($query) {
//                 $query->whereHas('notes', function ($subQuery) {
//                         // Case 2: Notes row exists, but content is empty, null, or blank spaces
//                         $subQuery->whereNotNull('content')->whereNull('refined_content');
//                     });
//             })
//             ->take(1)
//             ->get(['id', 'name', 'section_id']);

//         if (! $topics) {
//             $this->error('❌ FAILED: There are no topics avaliable.');

//             return;
//         }

//         foreach ($topics as $key => $topic) {

//             $this->line('------------------------------------------------');
//             $this->info("🚀 STARTING TOPIC #{$key}");
//             $this->line("Topic: {$topic->name}");
//             $this->line("Section: {$topic->section->name}");
//             $this->line("School: {$topic->section->school->name}");
//             $this->line('------------------------------------------------');
//             try {
//                 $this->comment('⏳ Generating AI notes...');

//                 $notes = $this->notes_refinement_service->refine(
//                     $topic->section->school->name,
//                     $topic->section->name,
//                     $topic->name,
//                     $topic->notes->content,
//                 );

//                 $this->comment('💾 Saving to database...');
//                 DB::transaction(function () use ($topic, $notes) {
//                     Notes::where('topic_id', $topic->id)->update(
//                         [
//                             'refined_content' => $notes['message'],
//                         ]
//                     );
//                 });
//                 $this->info("✅ DONE: {$topic->name}");

//             } catch (\Throwable $e) {
//                 $this->error("❌ FAILED: {$topic->name}");
//                 $this->error($e->getMessage());
//                 logger('--------------------------------');
//                 logger('-----NOTES GENERATION FAILED----');
//                 logger()->error('Notes generation failed', [
//                     'topic_id' => $topic->id,
//                     'topic_name' => $topic->name,
//                     'error' => $e->getMessage(),
//                 ]);
//                 logger('--------------END---------------');

//             }

//             $this->line("\n");
//         }

//     }
// }
