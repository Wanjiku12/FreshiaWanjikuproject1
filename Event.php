<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("templates/nav.php"); ?>

    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystylee.css">
    <title>Upcoming Events</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 20px;">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eee;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #333;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        .navbar a:hover, .subnav:hover .subnavbtn {
            background-color: rgb(170, 231, 244);
        }
        .subnav {
            float: left;
            overflow: hidden;
        }
        .subnav .subnavbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .subnav-content {
            display: none;
            position: absolute;
            left: 0;
            background-color: rgb(173, 236, 247);
            width: 100%;
            z-index: 1;
        }
        .subnav-content a {
            float: left;
            color: #333;
            text-decoration: none;
        }
        .subnav-content a:hover {
            background-color: #eee;
            color: black;
        }
        .subnav:hover .subnav-content {
            display: block;
        }
        main {
            display: flex;
            justify-content: center;
            padding: 2em;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 2em;
            margin: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 800px;
            width: 100%;
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
 

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #333;">Upcoming Events</h1>

        <div style="border-bottom: 1px solid #ddd; padding: 20px 0;">
            <img src="images/event1.jpg" alt="Event 1" style="width: 100%; height: auto; border-radius: 10px;">
            <h2 style="color: #007bff;">Community Outreach Day</h2>
            <p style="color: #777;">Date: July 10, 2024</p>
            <p>Join us for a day of community outreach and support. We will be providing resources and assistance to those in need.</p>
        </div>

        <div style="border-bottom: 1px solid #ddd; padding: 20px 0;">
            <img src="images/event2.jpg" alt="Event 2" style="width: 100%; height: auto; border-radius: 10px;">
            <h2 style="color: #007bff;">Fundraising Gala</h2>
            <p style="color: #777;">Date: August 5, 2024</p>
            <p>Attend our annual fundraising gala to support our mission. Enjoy an evening of dinner, entertainment, and auctions.</p>
        </div>

        <div style="border-bottom: 1px solid #ddd; padding: 20px 0;">
            <img src="images/event3.jpg" alt="Event 3" style="width: 100%; height: auto; border-radius: 10px;">
            <h2 style="color: #007bff;">Mental Health Awareness Walk</h2>
            <p style="color: #777;">Date: September 15, 2024</p>
            <p>Participate in our awareness walk to promote mental health and support those affected by mental illness. Walk with us to make a difference.</p>
        </div>
    </div>

    <!-- Footer -->
    <div style="background-color: #333; color: #fff; padding: 20px; text-align: center; margin-top: 20px;">
        <h3>Contact Information</h3>
        <p>123 street Nairobi Kenya.</p>
        <p>Moi Avenue, 123 street, Kenya 12345</p>
        <p>Phone:  1-800-123-4567</p>
        <p>Email:  helpinghands@suicidehotline.org</p>
    </div>
</body>
</html>
