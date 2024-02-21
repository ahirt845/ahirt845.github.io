//Note: This script is not used on this website. I created it for the contact form, 
// but GitHub Pages doesn't allower server side processing so this is not used. I am using 
// Formspre instead. If I move the website away from GitHub Pages we can use this script.

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
