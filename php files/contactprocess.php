<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Set the recipient email address
    $to = "info@yourwebsite.com";

    // Set the email subject
    $subject = "New Contact Form Submission from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Email sent successfully
        echo "<p>Thank you for your message, $name. We will get back to you shortly.</p>";
    } else {
        // Email sending failed
        echo "<p>Oops! Something went wrong and we couldn't send your message.</p>";
    }
} else {
    echo "<p>There was a problem with your submission, please try again.</p>";
}
?>
