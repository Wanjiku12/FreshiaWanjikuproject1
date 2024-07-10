<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("templates/nav.php"); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpline Page</title>
    <link rel="stylesheet" href="mystylee.css">
    <style>
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #89afd5, #e0eafc);
      color: #333;
  }
  .navbar {
      background: #303030;
      padding: 10px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(87, 87, 87, 0.1);
  }
  .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-size: 1.1em;
  }
  .navbar a.split {
      float: right;
  }
  .navbar a:hover, .subnav:hover .subnavbtn {
  background-color: rgb(175, 240, 248);
}
  header {
      background-color: #4f4e4e;
      color: #ebe4e4;
      padding: 1em;
      text-align: center;
  }
  main {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1em;
  }
  section {
      background-color: #fff;
      padding: 2em;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
      border-radius: 10px;
  }
  h2 {
      font-size: 2em;
      margin-top: 0;
      text-align: center;
      color: #007bff;
  }
  p {
      margin-bottom: 20px;
      line-height: 1.6;
      text-align: center;
  }
  label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
  }
  input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
  }
  button {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 1.1em;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
  }
  button:hover {
      background: #0056b3;
  }
  ul {
      list-style: none;
      padding: 0;
      text-align: center;
  }
  ul li {
      display: inline;
      margin-right: 20px;
  }
  ul li a {
      color: #337ab7;
      text-decoration: none;
  }
  footer {
      background-color: #333;
      color: #fff;
      padding: 1em;
      text-align: center;
      position: relative;
      bottom: 0;
      width: 100%;
  }
</style>
</head>

<header>
  <h1>Helpline</h1>
</header>
<body>
    

    
    
        <main>
            <section>
                <h2>Get in Touch with Our Helpline</h2>
                <p>Fill out the form below to get in contact with someone on our helpline. We'll respond immediately.</p>
                <form id="contact-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </section>
    
            <section>
                <h2>Live Chat</h2>
                <p>Chat with us live and get an immediate response.</p>
                <iframe src="https://livechat.example.com" width="100%" height="500" style="border: none;"></iframe>
            </section>
    
            <section>
                <h2>Alternative Contact Methods</h2>
                <p>Alternatively, you can call us at <a href="tel:+1-800-HELP-NOW" style="color: #007bff;">1-800-HELP-NOW</a> or email us at <a href="mailto:help@helpline.org" style="color: #007bff;">help@helpline.org</a>.</p>
            </section>
    
            <section>
                <h2>Contact Us</h2>
                <p>Please use the following contact information for assistance:</p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:help@example.com">helpinghands@suicidehelpline.org</a></li>
                    <li><strong>Phone:</strong> <a href="tel:+1234567890">1-800-123-4567</a></li>
                    <li><strong>Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM EST</li>
                </ul>
            </section>
        </main>
    
        <?php include_once("templates/footer.php"); ?>  
    
        <script>
            const form = document.getElementById('contact-form');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(form);
                fetch('/contact', {
                    method: 'POST',
                    body: formData
                })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    // Display a success message to the user
                    document.getElementById('contact-form').innerHTML = '<p>Thank you for reaching out! We\'ll respond immediately.</p>';
                })
                .catch((error) => {
                    console.error(error);
                    // Display an error message to the user
                    document.getElementById('contact-form').innerHTML = '<p>Sorry, there was an error submitting your message. Please try again.</p>';
                });
            });
        </script>
    </body>
    </html>
    