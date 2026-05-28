<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NotesRefinementService
{
    public function refine(string $school, string $section, string $topic, string $notes)
    {
        $prompt = <<<PROMPT
**Role:** Senior Educational SEO Editor & Curriculum Architect.

**Task:** You are rewriting the repetitive, templated HTML <h2> headings inside a verified nursing certification study module. The core content, paragraphs, bullet points, list hierarchies, and citations are clinically accurate and must remain 100% unaltered. Your sole job is to transform generic or boilerplate <h2> headers into unique, natural-sounding, contextually descriptive alternatives derived directly from the content inside that specific section.


 INPUT:
Chapter: {$school}
Section: {$section}
Topic: {$topic}
Notes: {$notes}
---

### **Dynamic Execution Steps**

1. **Locate Every <h2> Tag:** Scan the HTML document to find every occurrence of an `<h2>` element. 
2. **Analyze Section Content:** For each `<h2>` found, ignore its current text completely. Instead, read the paragraphs, lists, or bullets directly following it until the next section divider (`<hr />` or next `<h2>`) to extract the actual core clinical theme, regulatory mechanism, or practical focus of that specific block.
3. **Generate a Contextual Title:** Replace the content inside that specific `<h2>` with a newly generated, natural-sounding, 4-to-8-word title based on your analysis.
    * **If the text below outlines high-level summaries/introductions:** Focus the new title on the analytical framework, operational practice models, or professional role foundations of that topic.
    * **If the text below outlines lists, competencies, or classifications:** Focus the new title on the precise clinical architecture, competency benchmarks, or structured parameters of those elements.
    * **If the text below outlines protocols, drug classes, or screenings:** Focus the new title on therapeutic management strategies, clinical reasoning models, or diagnostic applications.
    * **If the text below outlines liabilities or mistakes:** Focus the new title on risk mitigation, malpractice vulnerabilities, or legal/ethical parameters.
4. **Enforce Semantic Variety:** Ensure the new headings feel professional and flow effortlessly into the text. Completely avoid using these boilerplate words anywhere in your titles: "Overview", "Introduction", "Key Concepts", "Definitions", "Basics", "Summary", "Background", "Review", "Tips", "High-Yield", "Points", "Features", "Principles", "Processes", "Precautions".
5. **Exceptions:** Do not touch or modify the final `<h2>References & Sources</h2>` or `<h2>Sources</h2>` section heading at the bottom of the page.

---

### **Strict Operational Constraints**
* **Preserve Text & Code:** Every single `<p>`, `<ul>`, `<ol>`, `<li>`, `<strong>`, `<h3>`, `<hr />`, and `<sup><a href="...">` citation link must remain exactly as originally provided. Do not modify punctuation, spacings, string content, or anchor names inside the body fields.
* **Output Requirements:** Return ONLY the updated, valid HTML block with the brand new <h2> values injected. Do not add introductory conversational text, descriptions, or markdown wrappers outside of the code block like ```html ```.
PROMPT;
        $response = Http::withHeaders([
            // Switched to deepseek config
            'Authorization' => 'Bearer '.config('services.deepseek.api_key'),
            'Content-Type' => 'application/json',

        ])
            ->timeout(120) // Increase from 30s to 120s (2 minutes)
            ->post('https://api.deepseek.com/chat/completions', [
                'model' => 'deepseek-v4-flash', // Updated Model
                'messages' => [

                    ['role' => 'system', 'content' => 'You are an expert healthcare educator, exam-prep instructor, and professional study-guide writer.'],
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

        return [
            'message' => $content,
        ];
    }
}
