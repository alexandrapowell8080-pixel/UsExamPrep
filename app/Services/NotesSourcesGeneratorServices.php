<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NotesSourcesGeneratorServices
{
    public function generate(string $school, string $section, string $topic): array
    {
        
$prompt = <<<PROMPT
Your task is to generate a premium-quality study guide section for healthcare and medical certification exams, complete with professional academic/clinical citations.

The content may cover:
- CNA
- CEN
- FNP
- Hospice and Palliative Care Nursing
- Pharmacy Technician (PTCE)
- Phlebotomy Technician
- Medical Assistant
- Nursing and Allied Health topics
and related healthcare certification programs.

INPUT:
Chapter: {$school}
Section: {$section}
Topic: {$topic}
 

PRIMARY GOAL:
Create highly organized, easy-to-follow study notes that help students:
- understand concepts quickly
- retain information effectively
- prepare for exams confidently
- review material efficiently
- apply concepts in clinical settings when relevant

IMPORTANT:
The output must feel like professionally written healthcare study notes — NOT a textbook chapter or AI essay.

WRITING STYLE:
- Clear
- Structured
- Concise
- Educational
- Exam-focused
- Student-friendly
- Clinically relevant
- Easy to scan and review

CONTENT RULES:
- Use short paragraphs
- Use bullet points frequently
- Use numbered steps when explaining processes
- Break difficult concepts into smaller sections
- Keep information logically organized
- Ensure smooth transitions between sections
- Use simple explanations without losing accuracy
- Prioritize high-yield exam concepts
- Avoid unnecessary complexity and filler
- Avoid giant walls of text
- Avoid repetitive explanations

CITATION REQUIREMENTS:
- You must include professional, real-world clinical or academic citations for the guidelines and facts presented (e.g., CDC guidelines, AHA standards, major nursing textbooks like Saunders, Lewis, or specific certification body blueprints).
- Use in-text citations where appropriate using superscript style format, like this: <sup>[1]</sup>.
- Every in-text citation must link dynamically down to the corresponding anchor in the References list at the bottom of the page (e.g., <a href="#ref-1"><sup>[1]</sup></a>).
- Every section must map to a formal reference list at the very end of the output. 
- Every reference in the bibliography list MUST include a valid, live, hyperlinked URL to its official source (using stable academic link patterns such as [https://doi.org/](https://doi.org/) or [https://pubmed.ncbi.nlm.nih.gov/](https://pubmed.ncbi.nlm.nih.gov/)).

CONTENT FLOW:
1. Topic Overview
   - Brief explanation of the topic
   - Why the topic matters clinically or on exams

2. Key Concepts and Definitions
   - Define important terminology
   - Explain foundational concepts clearly
   - Use bullet points for readability

3. Core Principles or Processes
   - Explain major systems, procedures, workflows, or mechanisms
   - Use step-by-step explanations when appropriate
   - Use numbered lists for sequences and procedures

4. Signs, Symptoms, Features, or Findings (if applicable)
   - Organize clearly using bullet points
   - Highlight important clinical indicators

5. Assessment, Diagnosis, or Evaluation (if applicable)
   - Include tests, procedures, interpretation, or assessment methods
   - Explain what students must recognize for exams

6. Treatment, Interventions, or Patient Care (if applicable)
   - Include medications, procedures, nursing actions, safety measures, or care strategies
   - Explain why interventions are important

7. Safety Precautions and Complications
   - Include warnings, contraindications, risks, and common complications
   - Highlight critical patient safety considerations

8. Exam Tips and High-Yield Points
   - Include commonly tested concepts
   - Add memory aids or quick review points when useful
   - Emphasize what students should remember most

9. References & Sources
   - Provide a structured, numbered list of the academic textbooks, journal articles, or clinical guidelines used to generate this section. Format them cleanly like a professional bibliography/research paper reference list.

FORMATTING REQUIREMENTS:
- Use headings and subheadings consistently
- Use bullet points extensively for readability
- Use numbered lists for procedures and sequences
- Use tables only when they improve understanding
- Bold important terms and high-yield concepts
- Keep paragraphs short and clean
- Make content visually easy to review

QUALITY REQUIREMENTS:
- Content must be medically accurate
- Content must feel professionally edited
- Explanations must flow naturally from basic to advanced understanding
- Maintain coherence throughout the section
- Avoid abrupt topic jumps
- Avoid vague explanations
- Avoid redundancy
- Ensure educational clarity at all times

OUTPUT FORMAT:
Return clean HTML only.

HTML RULES:
- Use semantic HTML tags
- Use <h2> for major sections
- Use <h3> for subsections
- Use <p>, <ul>, <ol>, <li>, <strong>, and <table> appropriately
- Use <sup> tags for your in-text citation numbers (e.g., <sup>[1]</sup>)
- For the References section, use an ordered list (<ol>). Each list item must contain an 'id' attribute corresponding to your in-text links (e.g., <li id="ref-1">).
- Within the reference list items, use the <a> tag with an 'href' attribute to make the DOI or PubMed URL fully clickable.
- Do NOT return markdown
- Do NOT include code blocks
- Do NOT include <html> or <body> tags
- Do NOT include explanations outside the HTML

FINAL OBJECTIVE:
The final output should feel like a premium healthcare exam-prep study guide that is modern, highly organized, visually easy to follow, and optimized for fast learning, academic credibility, and exam success.
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
