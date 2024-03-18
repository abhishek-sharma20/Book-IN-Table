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

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$subject = $_POST['subject'];
$message = $_POST['body'];
$headers = 'From: info@website.com' . "\r\n" .
           'Reply-To: ' . $_POST['email']. "\r\n" .
           'X-Mailer: PHP/' . phpversion();

           $success=mail('sanjeevsharma19622@gmail.com', $subject, $message, $headers);

if ($success) {
    echo '<p>Thank you for your submission. We will contact you shortly.</p>';
} else {
    echo '<p>There was an error sending your message. Please try again later.</p>';
}

// die('Thank you for your email');
}
?>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission

    // Validate and sanitize form inputs (add more validation as needed)
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient
    $to = 'your-email@example.com';

    // Email headers
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send email
    $success = mail($to, $subject, $email_message, $headers);

    // Check if the email was sent successfully
    if ($success) {
        echo '<p>Thank you for your submission. We will contact you shortly.</p>';
    } else {
        echo '<p>There was an error sending your message. Please try again later.</p>';
    }
}
?>

<?php
if (isset($_POST['email']) && !empty($_POST['email'])){
$subject = "New contact request: $_POST['subject']";
$message = $_POST['body'];
$headers = 'From:' .$_POST['email']. "\r\n" .
           'Reply-To:sanjeevsharma19622@gmail.com ' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('sanjeevsharma19622@gmail.com', $subject, $message, $headers);

die('Thank you for your email');
}
?> 

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = $_POST['subject'];
    $message = $_POST['body'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'abhishekcocid@gmail.com';
        $mail->Password   = 'your-email-password';
        $mail->SMTPSecure = 'tls'; //ssl
        $mail->Port       = 587;  //465

        $mail->setFrom('info@website.com'); //write any
        $mail->addAddress('sanjeevsharma19622@gmail.com');
        $mail->isHTML(false);

        $mail->Subject = $subject;
        $mail->Body    = $message;

        $success = $mail->send();

        if ($success) {
            echo '<p>Thank you for your submission. We will contact you shortly.</p>';
        } else {
            echo '<p>There was an error sending your message. Please try again later.</p>';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'sanjeevsharma19622@gmail.com'; // Replace with the recipient email address
    $subject = $_POST['subject'];
    $message = $_POST['body'];
    $headers = 'From: info@website.com' . "\r\n" .
               'Reply-To: ' . $_POST['email'] . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo '<p>Thank you for your submission. We will contact you shortly.</p>';
    } else {
        echo '<p>There was an error sending your message. Please try again later.</p>';
    }
}

?>

