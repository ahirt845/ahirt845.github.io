<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $contactInfo = $_POST["contact-info"];
    $to = "support@blockchain-consulting.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\n\nMessage: $message\n\nContact Information: $contactInfo";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. We will get back to you within 24 hours.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>
