<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Send email to admin (Optional)
    $to = "support@organdonation.com";
    $headers = "From: " . $email;
    $fullMessage = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Your message has been sent!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Error sending message. Try again.'); window.location.href='contact.php';</script>";
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
