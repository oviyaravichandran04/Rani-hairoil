<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = 'owner@example.com'; // Replace with your email address
    $subject = 'New Support Message';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Your message has been sent. We will get back to you soon."); window.location.href = "/";</script>';
    } else {
        echo '<script>alert("Failed to send message. Please try again later."); window.location.href = "/contact";</script>';
    }
}
?>
