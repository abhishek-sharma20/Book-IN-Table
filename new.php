<?php
$to = 'sanjeevsharma19622@gmail.com'; // Replace with your email address
$subject = 'Test Email';
$message = 'This is a test email sent using the mail function.';
$headers = 'From: test@example.com';

$success = mail($to, $subject, $message, $headers);

if ($success) {
    echo 'Test email sent successfully!';
} else {
    echo 'Error sending test email. Check your server configuration.';
}
?>