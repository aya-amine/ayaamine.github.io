<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Replace "your_email@example.com" with your email address to receive the form submissions
    $to = "aa8915@nyu.edu";
    $headers = "From: $email";
    $body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
