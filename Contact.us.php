<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("templates/nav.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="mystylee.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }
        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: rgb(170, 231, 244);
        }
        .content {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }
        .map {
            width: 100%;
            height: 400px; /* Increased height for larger map */
            border: none;
            border-radius: 10px;
            margin-top: 20px;
        }
        h1, h2 {
           font-family: 'Helvetica Neue', Arial, sans-serif;
           color: #000;
            text-align: center;
        }
        label {
            display: block;
            margin-top: 20px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="number"], input[type="date"], input[type="time"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="radio"], input[type="checkbox"] {
            margin-right: 5px;
        }
        button[type="submit"], input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        .contact-info {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>


    <div class="content">
        <!-- Header Section -->
     <header style="background: #e0f7fa; color: white; text-align: center; padding: 40px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h1 style="font-size: 3em; margin: 0;">Contact Us</h1>
        <h2 style="font-size: 1.2em; margin-top: 10px;">Get in Touch</h2>
    </header>
        
        <p>We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>
        <form action="contactprocess.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="age" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="select">Language:</label><br>
            <div class="custom-select">
                <div class="select-selected">Select an option</div>
                <div class="select-items select-hide">
                    <br>
                </div>
                <select id="select" name="language">
                    <option value="English">English</option>
                    <option value="swahili">Swahili</option>
                    <option value="French">French</option><br>
                    <option value="Chinese">Chinese</option><br>
                    <option value="Armenian">Armenian</option><br>
                    <option value="Dutch">Dutch</option><br>
                </select>
            </div>
          

            <label for="message">Message:</label>
            <textarea id="message" name="message" cols="30" rows="10" required></textarea>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">--Select Gender--</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
     <!-- Map Embed -->
        <h2>Our Location</h2>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9636710782597!2d36.82194641606469!3d-1.2920655860039374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10f9d1f5b7d1%3A0xb3f6d3f4e5d8e488!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1629735113351!5m2!1sen!2sus" 
            class="map" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    <div class="contact-info">
        <h3>Contact Information</h3>
        <p>123 street Nairobi Kenya.</p>
        <p>Moi Avenue, 123 street, Kenya 12345</p>
        <p>Phone:  1-800-123-4567</p>
        <p>Email:  helpinghands@suicidehotline.org</p>
    </div>
    
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
} 



?>
<?php include_once(	"templates/footer.php"); ?>
</body>
</html>
