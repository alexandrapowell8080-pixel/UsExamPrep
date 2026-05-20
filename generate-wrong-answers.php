<?php

require __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

$envPath = __DIR__.'/.env';
$envContent = file_exists($envPath) ? file_get_contents($envPath) : '';
preg_match_all('/^OPENAI_API_KEY=(.*)$/m', $envContent, $matches);
$OPENAI_API_KEY = trim($matches[1][0] ?? '');

$OPENAI_API_URL = 'https://api.openai.com/v1/chat/completions';
$BATCH_SIZE = 1000;
$API_DELAY = 2;

$dbConfig = [
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'usexamprep_db'),
    'username' => env('DB_USERNAME', 'usexamprep_usexamprep'),
    'password' => env('DB_PASSWORD', 'Fleekwebsites@2026'),
];

function getDbConnection($config)
{
    $conn = new mysqli($config['host'], $config['username'], $config['password'], $config['database'], (int) $config['port']);
    if ($conn->connect_error) {
        fwrite(STDERR, 'Database connection error: '.$conn->connect_error.PHP_EOL);
        exit(1);
    }
    $conn->set_charset('utf8mb4');

    return $conn;
}

function fetchPendingQuestions($conn, $batchSize)
{
    $query = 'SELECT id, question, choiceA, choiceB, choiceC, choiceD, choiceE, choiceF, choiceG, correct_answer, rationale 
              FROM questions 
              WHERE wrong_answer IS NULL OR wrong_answer = \'\'
              LIMIT ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $batchSize);
    $stmt->execute();
    $result = $stmt->get_result();
    $questions = [];
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
    $stmt->close();

    return $questions;
}

function generateWrongAnswerContent($questionData, $apiKey, $apiUrl)
{
    $choices = [];
    foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G'] as $letter) {
        $key = 'choice'.$letter;
        if (! empty($questionData[$key])) {
            $choices[] = "{$letter}. {$questionData[$key]}";
        }
    }
    $choicesStr = implode("\n", $choices);

    // Use plain ASCII quotes and remove special characters that can cause PHP parser issues
    $systemPrompt = 'You are a supportive test-prep coach who explains mistakes in plain, encouraging language. Write one tight paragraph (~150 words) that helps a learner quickly understand why tempting wrong answers feel right and exactly how to spot the correct choice next time. Use "you" to speak directly to the learner. Keep language simple and conversational; avoid academic jargon like "conflate" or "semantic overlaps." Start by normalizing the confusion (It\'s easy to mix up X and Y because...), then give a crystal-clear distinction between the correct answer and the strongest distractor using a quick rule, keyword cue, or memorable phrase they can use under time pressure. End with a brief, empowering takeaway that builds confidence. No bullet points. Never use "students also get this wrong" or similar phrases. Every sentence must either clarify a misconception or provide an immediately usable test-taking tip. Tone: warm, direct, and pressure-relieving.';

    $userPrompt = "Question: {$questionData['question']}\n\nAvailable Choices:\n{$choicesStr}\n\nCorrect Answer: {$questionData['correct_answer']}\n\nOfficial Rationale: {$questionData['rationale']}\n\nWrite the supportive, actionable paragraph now.";

    $payload = [
        'model' => 'gpt-4o-mini',
        'messages' => [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'user', 'content' => $userPrompt],
        ],
        'temperature' => 0.7,
        'max_tokens' => 300,
    ];

    try {
        // 🔐 SSL FIX: Point directly to cacert.pem in your project folder
        $client = new Client([
            'timeout' => 30,
            'verify' => __DIR__.'/cacert.pem',
        ]);

        $response = $client->post($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer '.$apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => $payload,
        ]);

        $result = json_decode($response->getBody(), true);
        if (! isset($result['choices'][0]['message']['content'])) {
            return null;
        }

        $content = trim($result['choices'][0]['message']['content']);
        // Optional: strip title prefix if model adds "Students Also Get This Wrong:"
        if (preg_match('/^(Students Also Get This Wrong:?\s*)/i', $content, $m)) {
            $content = trim(substr($content, strlen($m[1])));
        }

        return $content;

    } catch (GuzzleException $e) {
        fwrite(STDERR, "API Error for question ID {$questionData['id']}: ".$e->getMessage().PHP_EOL);

        return null;
    }
}

function updateQuestionWrongAnswer($conn, $questionId, $wrongAnswerText)
{
    $query = 'UPDATE questions SET wrong_answer = ?, updated_at = NOW() WHERE id = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('si', $wrongAnswerText, $questionId);
    $stmt->execute();
    $stmt->close();
}

echo '['.date('Y-m-d H:i:s').'] Starting cron job...'.PHP_EOL;

$conn = getDbConnection($dbConfig);
$questions = fetchPendingQuestions($conn, $BATCH_SIZE);

if (empty($questions)) {
    echo 'No pending questions to process.'.PHP_EOL;
    $conn->close();
    exit(0);
}

echo 'Found '.count($questions).' questions to process.'.PHP_EOL;

$processedCount = 0;
foreach ($questions as $q) {
    echo "Processing Question ID: {$q['id']}".PHP_EOL;

    $generatedText = generateWrongAnswerContent($q, $OPENAI_API_KEY, $OPENAI_API_URL);

    if ($generatedText) {
        updateQuestionWrongAnswer($conn, $q['id'], $generatedText);
        echo "  -> Success. Updated ID {$q['id']}".PHP_EOL;
        $processedCount++;
    } else {
        echo "  -> Failed to generate content for ID {$q['id']}".PHP_EOL;
    }

    sleep($API_DELAY);
}

$conn->close();
echo '['.date('Y-m-d H:i:s')."] Job complete. Processed {$processedCount} questions.".PHP_EOL;
