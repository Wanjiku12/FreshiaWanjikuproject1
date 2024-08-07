<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .service {
            background-color: white;
            margin: 10px;
            padding: 20px;
            flex: 1 1 30%; /* Flex-grow, flex-shrink, flex-basis */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .service h2 {
            text-align: center;
            font-size: 24px;
            margin-top: 0;
        }

        .service p {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="navbar">
  <a href="indexx.php">Home</a> |
        <a href="About.us.php">About</a> |
        <a href="Services.php">Services</a> |
       <a href="Helpline.php">Helpline</a>|
        <a href="Learn.php">Learn about Abuse</a>|
        <a href="Get.involved.php">Get Involved</a>
        <a href="Contact.us.php"class= "split">Contact.us</a>|
    </div>

     <!-- Header Section -->
     <header style="background: #007bff; color: white; text-align: center; padding: 40px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h1 style="font-size: 3em; margin: 0;">Our Services</h1>
        <p style="font-size: 1.2em; margin-top: 10px;">Comprehensive Support and Resources</p>
    </header>


    <div class="content">
      
        <!-- 24/7 Hotline Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 20px;">24/7 Crisis Hotline</h2>
            <p style="text-align: center; max-width: 900px; margin: 0 auto; font-size: 1.1em; line-height: 1.8;">
                Our dedicated team is available around the clock to provide immediate support and intervention for individuals in crisis. Our hotline is confidential and free of charge.
            </p>
        </section>

        <!-- Online Chat Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 20px;">Online Chat Support</h2>
            <p style="text-align: center; max-width: 900px; margin: 0 auto; font-size: 1.1em; line-height: 1.8;">
                Our online chat service offers a safe and confidential way to communicate with our counselors. Available 24/7, this service provides real-time support for those who prefer not to call.
            </p>
        </section>
        <div class="service">
            <h2>Emergency Response</h2>
            <p>Immediate assistance for those in crisis. Our team is ready to help you at any moment.</p>
        </div>
        <!-- Counseling Services Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 20px;">Counseling Services</h2>
            <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                <div style="margin: 20px; text-align: center; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 300px;">
                    <h3 style="font-size: 1.5em; margin-bottom: 10px;">Individual Counseling</h3>
                    <p style="font-size: 1.1em; color: #555;">One-on-one sessions with our professional counselors to address personal mental health challenges.</p>
                </div>
                <div style="margin: 20px; text-align: center; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 300px;">
                    <h3 style="font-size: 1.5em; margin-bottom: 10px;">Group Counseling</h3>
                    <p style="font-size: 1.1em; color: #555;">Supportive group sessions to connect with others facing similar challenges, guided by a professional counselor.</p>
                </div>
                <div style="margin: 20px; text-align: center; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 300px;">
                    <h3 style="font-size: 1.5em; margin-bottom: 10px;">Family Counseling</h3>
                    <p style="font-size: 1.1em; color: #555;">Sessions aimed at supporting families in crisis, promoting understanding and healing within family dynamics.</p>
                </div>
            </div>
        </section>

<!-- Educational Programs Section -->
<section style="margin-bottom: 60px;">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 20px;">Educational Programs</h2>
            <p style="text-align: center; max-width: 900px; margin: 0 auto; font-size: 1.1em; line-height: 1.8;">
                We offer a range of educational programs designed to raise awareness about mental health and suicide prevention. These programs are available to schools, workplaces, and community organizations.
            </p>
        </section>

        <!-- Resource Library Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 20px;">Resource Library</h2>
            <p style="text-align: center; max-width: 900px; margin: 0 auto; font-size: 1.1em; line-height: 1.8;">
                Our comprehensive resource library includes articles, videos, and self-help tools to support mental health and wellness. These resources are available online and are accessible to everyone.
            </p>
        </section> </div>
 <?php include_once("templates/footer.php"); ?>  
</body>
</html>