<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = 'ezazalamahmed@gmail.com'; // Replace with your email address
$subject = 'New Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage:\n$message";

// Send email
if (mail($to, $subject, $body)) {
    echo json_encode(array('status' => 'success', 'message' => 'Email sent successfully!'));
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Failed to send email.'));
}
?>
