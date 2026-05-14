<?php

namespace App\Console\Commands;

use App\Models\Notes;
use App\Models\NotesPointer;
use App\Models\Topic;
use App\Services\NotesGeneratorServices;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

#[Signature('notes:generate')]
#[Description('Generate notes')]
class NotesGenerate extends Command
{
    /**
     * Execute the console command.
     */
    public function __construct(protected NotesGeneratorServices $notes_generator_services)
    {
        parent::__construct();
    }

    public function handle()
    {
        $topics = Topic::with([
            'notes',
            'section:id,name,school_id',
            'section.school:id,name',
        ])
        ->whereDoesntHave('notes')
            ->take(1)
            ->get(['id', 'name', 'section_id']);

        if (! $topics) {
             $this->error("❌ FAILED: There are no topics avaliable.");
            return;
        }

        foreach ($topics as $key => $topic) {

            $this->line('------------------------------------------------');
            $this->info("🚀 STARTING TOPIC #{$key}");
            $this->line("Topic: {$topic->name}");
            $this->line("Section: {$topic->section->name}");
            $this->line("School: {$topic->section->school->name}");
            $this->line('------------------------------------------------');

            try {
                $this->comment('⏳ Generating AI notes...');

                $notes = $this->notes_generator_services->generate(
                    $topic->section->school->name,
                    $topic->section->name,
                    $topic->name,
                );



                $this->comment('💾 Saving to database...');
                DB::transaction(function () use($topic,$notes) {
                    // NotesPointer::where('id',$topic->pointers->id)->update(['status'=>'published']);
                    Notes::updateOrCreate(
                        ['topic_id' => $topic->id],
                        [
                            'content' => $notes['message'],
                        ]
                    );
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
