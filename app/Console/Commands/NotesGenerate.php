<?php

namespace App\Console\Commands;

use App\Models\Notes;
use App\Models\Topic;
use App\Services\NotesGeneratorServices;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

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
            'pointers',
            'section:id,name,school_id',
            'section.school:id,name',
        ])
            ->whereHas('pointers', function ($query) {
                $query->where('status', 'created');
            })
            ->take(1)
            ->get(['id', 'name', 'section_id']);

        if (! $topics) {
            return;
        }

        foreach ($topics as $key => $topic) {

            $this->line('------------------------------------------------');
            $this->info("🚀 STARTING TOPIC #{$key} {$topic->id}");
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
                    $topic->pointers->pointers
                );

                $this->comment('💾 Saving to database...');

                Notes::updateOrCreate(
                    ['topic_id' => $topic->id],
                    [
                        'content' => $notes['message'],
                    ]
                );

                $this->info("✅ DONE: {$topic->name}");

            } catch (\Throwable $e) {
                $this->error("❌ FAILED: {$topic->name}");
                $this->error($e->getMessage());

                logger()->error('Notes generation failed', [
                    'topic_id' => $topic->id,
                    'error' => $e->getMessage(),
                ]);
            }

            $this->line("\n");
        }

    }
}
