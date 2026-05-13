<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NotesPointersServices
{
    public function generate(string $topic, string $section, string $school): array
    {
        $prompt = <<<'PROMPT'
Task: Generate a structured, pedagogically sound study roadmap based on a medical textbook hierarchy. The goal is to guide a learner from foundational understanding to advanced clinical application in a logical learning sequence.

Input Context:
- Topic: {$topic}
- Section: {$section}
- Chapter: {$school}

Instructions:

1. Pedagogical Sequencing:
   Organize content in a clear learning progression:
   - Start with foundational definitions and core principles
   - Progress to pathophysiology and mechanisms (if applicable)
   - Move into clinical presentation and assessment
   - Include diagnostic reasoning and interpretation
   - Cover management and treatment principles
   - End with complications, prognosis, and/or clinical practice considerations

2. Scope:
   Provide exactly 5–8 high-level study headers that comprehensively represent the topic for a peer-level medical student.

3. Output Format (STRICT):
   - Return ONLY a valid JSON array of strings
   - No explanations, no commentary, no markdown, no code blocks
   - No numbering, bullets, or nested structures

4. Quality Requirements:
   - Headers must be concise, clinically meaningful, and logically ordered
   - Avoid redundancy or overlapping concepts
   - Ensure academic rigor appropriate for medical education

Example Output:
["Foundational Concepts", "Pathophysiology", "Clinical Presentation", "Diagnostic Evaluation", "Management Principles", "Complications and Prognosis"]

PROMPT;

        $response = Http::withHeaders([
            // Switched to deepseek config
            'Authorization' => 'Bearer '.config('services.deepseek.api_key'),
            'Content-Type' => 'application/json',
        ])->post('https://api.deepseek.com/chat/completions', [
            'model' => 'deepseek-v4-flash', // Updated Model
            'messages' => [

                ['role' => 'system', 'content' => 'You are an expert Medical Educator and Curriculum Architect.'],
                ['role' => 'user', 'content' => $prompt],
            ],

            'temperature' => 0.6,
        ]);

        if ($response->failed()) {
            throw new \Exception('AI Generation failed: '.$response->body());
        }

        $content = $response->json('choices.0.message.content');

        if (! $content) {
            throw new \Exception('Empty response from AI.');
        }

        $json = json_decode($content, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON from AI: '.json_last_error_msg());
        }

        return [
            'message' => $json,
        ];
    }
}
