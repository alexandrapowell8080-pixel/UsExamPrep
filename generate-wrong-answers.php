<?php

require __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

$envPath = __DIR__.'/.env';
$envContent = file_exists($envPath) ? file_get_contents($envPath) : '';
preg_match_all('/^DEEPSEEK_API_KEY=(.*)$/m', $envContent, $matches);
$DEEPSEEK_API_KEY = trim($matches[1][0] ?? '');

$DEEPSEEK_API_URL = 'https://api.deepseek.com/v1/chat/completions';
$BATCH_SIZE = 10;
$API_DELAY = 2;

$dbConfig = [
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'usexamprep'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
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
              FROM Questions 
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

    $systemPrompt = 'You are an expert educational psychologist and test-prep specialist. Your task is writing a concise, insightful paragraph (approximately 150 words) titled "Students Also Get This Wrong". Analyzing the provided question, all answer choices, correct answer, and rationale. Identifying common misconceptions, tricky distractors, or logical pitfalls that lead students to choose incorrect options. Explaining WHY those wrong answers seem plausible but are ultimately incorrect. Using a supportive, instructional tone. Not using bullet points; writing in a single cohesive paragraph.';

    $userPrompt = "Question: {$questionData['question']}\n\nAvailable Choices:\n{$choicesStr}\n\nCorrect Answer: {$questionData['correct_answer']}\n\nOfficial Rationale: {$questionData['rationale']}\n\nGenerating the 'Students Also Get This Wrong' paragraph now, focusing on why learners commonly select the wrong options despite knowing the rationale.";

    $payload = [
        'model' => 'deepseek-chat',
        'messages' => [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'user', 'content' => $userPrompt],
        ],
        'temperature' => 0.7,
        'max_tokens' => 300,
    ];

    try {
        $client = new Client([
            'timeout' => 30,
            'verify' => false,
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
        if (strpos($content, ':') !== false && strpos($content, ':') < 50) {
            $content = trim(substr($content, strpos($content, ':') + 1));
        }

        return $content;

    } catch (GuzzleException $e) {
        fwrite(STDERR, "API Error for question ID {$questionData['id']}: ".$e->getMessage().PHP_EOL);

        return null;
    }
}

function updateQuestionWrongAnswer($conn, $questionId, $wrongAnswerText)
{
    $query = 'UPDATE Questions SET wrong_answer = ?, updated_at = NOW() WHERE id = ?';
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

    $generatedText = generateWrongAnswerContent($q, $DEEPSEEK_API_KEY, $DEEPSEEK_API_URL);

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
