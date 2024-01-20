<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set your email address
    $to = 'thejask074@gmail.com';

    // Set the email subject
    $subject = 'New Message from your website';

    // Build the email content
    $message_content = "Name: $name\n";
    $message_content .= "Email: $email\n";
    $message_content .= "Subject: $subject\n\n";
    $message_content .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $message_content);

    // Optionally, you can redirect the user to a thank you page
    header('Location: thank-you.html');
    exit;
}
?>
