<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure a message is received
    if (!isset($_POST["message"]) || empty(trim($_POST["message"]))) {
        die("Error: No message received.");
    }

    // Get the user message and sanitize it
    $message = strtolower(trim($_POST["message"]));

    // Predefined chatbot responses
    $responses = [
        "hello" => "Hi there! How can I assist you with organ donation?",
        "how to donate" => "You can register as an organ donor by filling out the form on our website.",
        "eligibility" => "Anyone above 18 years old can register for organ donation.",
        "bye" => "Goodbye! Feel free to ask anytime."
    ];

    // Default reply if no match is found
    $reply = "I'm not sure how to respond to that. Please contact support.";

    // Check if the message matches a predefined response
    foreach ($responses as $key => $value) {
        if (stripos($message, $key) !== false) {
            $reply = $value;
            break;
        }
    }

    // Send chatbot response
    echo "<strong>User:</strong> " . htmlspecialchars($message) . "<br>";
    echo "<strong>Chatbot:</strong> " . $reply;
} else {
    echo "Waiting for a message...";
}
?>
