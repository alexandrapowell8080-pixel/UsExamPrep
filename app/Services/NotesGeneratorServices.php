<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class NotesGeneratorServices
{
    public function generate(string $school, string $section, string $topic, string $pointers): array
    {
        $prompt = <<<PROMPT
You are an expert medical and nursing educator.

Convert the input study pointers into structured, exam-ready revision notes.

INPUT
Chapter: {$school}
Section: {$section}
Topic: {$topic}
Pointers: {$pointers}

OUTPUT RULES
- Return ONLY the notes (no intro, no explanations, no metadata)
- Use structured Markdown formatting with H2 (##) and H3 (###) headings.
- Under each heading, write short explanatory paragraphs (2–5 lines each)
- Use bullet points ONLY when necessary (e.g., symptoms, steps, classifications)
- Do NOT add any extra headings beyond the numbered ones
- Do NOT repeat chapter/section/topic in output

CONTENT STYLE
- Exam-focused and clinically accurate
- Clear, concise, and structured for revision
- Prioritize understanding over listing
- Use professional medical/nursing terminology
- Ensure logical flow within each section

STRICT RULE
Output must contain ONLY the formatted notes.
PROMPT;

        $response = Http::withHeaders([
            // Switched to deepseek config
            'Authorization' => 'Bearer '.config('services.deepseek.api_key'),
            'Content-Type' => 'application/json',
        ])->post('https://api.deepseek.com/chat/completions', [
            'model' => 'deepseek-v4-flash', // Updated Model
            'messages' => [

                ['role' => 'system', 'content' => 'You are a trusted expert medical and nursing educator.'],
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
        // logger($content);
        // $json = json_decode($content, true);

        // if (json_last_error() !== JSON_ERROR_NONE) {
        //     throw new \Exception('Invalid JSON from AI: '.json_last_error_msg());
        // }

        return [
            'message' => $content,
        ];
    }
}
