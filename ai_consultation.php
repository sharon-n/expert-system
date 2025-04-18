<?php
// Google Gemini API Key
$apiKey = 'AIzaSyCXr2E0S5bhvfk_LYaJzJGCuOuVg5-fg6Q';

// Define the endpoint for the Gemini API
$geminiEndpoint = 'https://gemini.googleapis.com/v1/generateText';

// Get the user query from the POST request
$inputData = json_decode(file_get_contents('php://input'), true);
$query = $inputData['query'] ?? '';

// Prepare the payload for the API request
$payload = json_encode([
    'prompt' => "Provide expert business advice for: $query",
    'temperature' => 0.7,  // You can adjust temperature for creativity in responses
    'maxTokens' => 200,    // Limit the response length if needed
]);

// Initialize cURL for making the API request
$ch = curl_init($geminiEndpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Execute the API request and get the response
$response = curl_exec($ch);

// Check if the request failed
if ($response === false) {
    $error = curl_error($ch);
    curl_close($ch);
    echo json_encode(['error' => "API Request failed: $error"]);
    exit;
}

// Close the cURL connection
curl_close($ch);

// Decode the API response
$responseData = json_decode($response, true);

// Extract the AI-generated response
$aiAdvice = $responseData['choices'][0]['text'] ?? "Sorry, I couldn't generate advice at this time.";

// Return the AI response back to the frontend
echo json_encode(['response' => $aiAdvice]);
?>
