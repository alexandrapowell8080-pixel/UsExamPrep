<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Notes;
use App\Models\School;
use App\Models\Section;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolStructureSeeder extends Seeder
{
    // public function run(): void
    // {
    //     // Example: create 1 school
    //     $school = School::create([
    //         'name' => 'Default School',
    //         'slug' => Str::slug('Default School'),
    //     ]);

    //     // Create 13 sections
    //     for ($s = 1; $s <= 13; $s++) {

    //         $section = Section::create([
    //             'school_id' => $school->id,
    //             'name' => "Section $s",
    //             'slug' => "section-$s",
    //         ]);

    //         // Each section gets at least 10 topics
    //         for ($t = 1; $t <= 10; $t++) {

    //             $topic = Topic::create([
    //                 'section_id' => $section->id,
    //                 'name' => "Topic $t (Section $s)",
    //                 'slug' => "section-$s-topic-$t",
    //             ]);

    //             // Each topic gets 1 note (you can increase if needed)
    //             Notes::create([
    //                 'topic_id' => $topic->id,
    //                 'content' => "This is the note content for Topic $t in Section $s",
    //             ]);
    //         }
    //     }
    // }

    public function run(): void
    {

    }

    private function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (Exam::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}
