<?php
require __DIR__ . '/vendor/autoload.php'; // If installed via Composer
// require 'path_to_twilio/autoload.php'; // If installed manually, change path

use Twilio\Rest\Client;

// Twilio credentials (replace these with your Twilio details)
$account_sid = 'your_account_sid';
$auth_token = 'your_auth_token';
$twilio_number = 'your_twilio_phone_number';

// Get phone number from form input
$to_number = $_POST['phone']; // Example: "+918888888888"

// Initialize Twilio client
$client = new Client($account_sid, $auth_token);

try {
    // Send SMS
    $message = $client->messages->create(
        $to_number,
        [
            'from' => $twilio_number, 
            'body' => 'Hello! Your SMS has been sent successfully.'
        ]
    );

    echo "✅ Message sent successfully!";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
