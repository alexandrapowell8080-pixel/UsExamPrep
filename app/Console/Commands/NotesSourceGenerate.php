<?php

namespace App\Console\Commands;

use App\Models\Notes;
use App\Models\Topic;
use App\Services\NotesSourcesGeneratorServices;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

#[Signature('notes:generate_sources')]
#[Description('Generate notes with sources')]
class NotesSourceGenerate extends Command
{
    /**
     * Execute the console command.
     */
    public function __construct(protected NotesSourcesGeneratorServices $notes_generator_services)
    {
        parent::__construct();
    }

    public function handle()
    {
        // $topics = Topic::with([
        //     'notes',
        //     'section:id,name,school_id',
        //     'section.school:id,name',
        // ])
        // ->whereDoesntHave('notes')
        //     ->take(1)
        //     ->get(['id', 'name', 'section_id']);

        $topics = Topic::with([
            'notes',
            'section:id,name,school_id',
            'section.school:id,name',
        ])
            ->whereDoesntHave('notes', function ($query) {
                // Find any notes that HAVE content
                $query->whereNotNull('content_with_sources')
                    ->where('content_with_sources', '<>', '');
            })
            ->take(1)
            ->get(['id', 'name', 'section_id']);

        if (! $topics) {
            $this->error('❌ FAILED: There are no topics avaliable.');

            return;
        }

        foreach ($topics as $key => $topic) {

            $this->line('------------------------------------------------');
            $this->info("🚀 STARTING TOPIC #{$key}");
            $this->line("Topic: {$topic->name}");
            $this->line("Section: {$topic->section->name}");
            $this->line("School: {$topic->section->school->name}");
            $this->line('------------------------------------------------');

            //  return;

            try {
                $this->comment('⏳ Generating AI notes with sources...');

                $notes = $this->notes_generator_services->generate(
                    $topic->section->school->name,
                    $topic->section->name,
                    $topic->name,
                );

                $this->comment('💾 Saving to database...');
                DB::transaction(function () use ($topic, $notes) {
                    // NotesPointer::where('id',$topic->pointers->id)->update(['status'=>'published']);
                    $note = Notes::where('topic_id', $topic->id)->first();
                    if (! $note) {
                        Notes::create([
                            'content' => '',
                            'content_with_sources' => $notes['message'],
                            'topic_id' => $topic->id,
                        ]);
                    } else {
                        $note->content_with_sources = $notes['message'];
                        $note->save();
                    }

                });

                $this->info("✅ DONE: {$topic->name}");

            } catch (\Throwable $e) {
                $this->error("❌ FAILED: {$topic->name}");
                $this->error($e->getMessage());
                logger('--------------------------------');
                logger('-----NOTES GENERATION FAILED----');
                logger()->error('Notes generation failed', [
                    'topic_id' => $topic->id,
                    'topic_name' => $topic->name,
                    'error' => $e->getMessage(),
                ]);
                logger('--------------END---------------');

            }

            $this->line("\n");
        }

    }
}
