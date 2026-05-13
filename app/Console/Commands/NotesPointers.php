<?php

namespace App\Console\Commands;

use App\Models\NotesPointer;
use App\Models\Topic;
use App\Services\NotesPointersServices;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('notes:pointers')]
#[Description('Generate note pointers that act as outline')]
class NotesPointers extends Command
{
    /**
     * Execute the console command.
     */
    public function __construct(protected NotesPointersServices $notes_pointers_services)
    {
        parent::__construct();
    }

    public function handle()
    {
        $topics = Topic::with([
            'section:id,name,school_id',
            'section.school:id,name',
        ])
            ->doesntHave('pointers')
            ->take(1)
            ->get(['id', 'name', 'section_id']);

        if (! $topics) {
            return;
        }

        foreach ($topics as $key => $topic) {
            $pointers = $this->notes_pointers_services->generate($topic->name, $topic->section->name, $topic->section->school->name);
            NotesPointer::updateOrCreate(
                ['topic_id' => $topic->id], // condition to check existence
                [
                    'status' => 'created',
                    'pointers' => '"'.implode('","', $pointers['message']).'"',
                ]
            );
            $this->info('Created!');
        }

    }
}
