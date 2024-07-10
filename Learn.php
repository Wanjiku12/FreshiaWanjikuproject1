<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("templates/nav.php"); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystylee.css">
    <title>Learn about Abuse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        h1 {
            font-size: 2em;
            color: #007bff;
            text-align: center;
        }
        h2 {
            font-size: 1.5em;
            color: #007bff;
        }
        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        ul li::before {
            content: "•";
            color: #007bff;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        .profile {
            text-align: center;
            margin-top: 20px;
        }
        .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .profile h1 {
            font-size: 1.8em;
            margin: 10px 0;
        }
    </style>
</head>
<body>
  

    <main>
        <div class="content">
            <h1>About Us</h1>
            <p>Learn more about the suicide hotline and its mission to provide support to those in need.</p>
            <div class="info-section">
                <h2>Our History</h2>
                <p>Founded in [year] by [founder's name], the suicide hotline was established to provide a safe and confidential space for individuals to seek help.</p>
                <ul>
                    <li>Where: Nairobi, Kenya</li>
                    <li>When: March 2000</li>
                    <li>Why: It's a battle that you do not need to fight alone we are here for you</li>
                </ul>
            </div>
            <div class="info-section">
                <h2>Our Founder</h2>
                <p>Wanjiku Macharia is a dedicated individual who has worked tirelessly to make a difference in the lives of others.</p>
                <ul>
                    <li>Bio: Name (Wanjiku Macharia, Helping Hands) - Passionate about industry that is dedicated to saving and changing lives.</li>
                      Wanjiku Macharia brought Helping Hands to life in March 2000. Driven by hope in reach, we offer support and resources to prevent suicide and build hope for a brighter future. 
                     <li>Quote: It's a battle that you do not need to fight alone we are here for you</li>
                </ul>
            </div>
            <div class="info-section">
                <h2>Our Accomplishments</h2>
                <p>Since our founding, we have achieved many milestones and made a significant impact in the lives of those we serve.</p>
                <ul>
                    <li>Saving Lives: While it's difficult to measure definitively, helplines are credited with saving countless lives by providing emotional support and crisis intervention during a vulnerable time.
                    <li>Reduced Stigma: By openly discussing suicide and offering support, helplines help reduce the stigma surrounding mental health struggles. This encourages more people to seek help.
                    </li>
                    <li> Increased Help-Seeking: Helplines make it easier for people in crisis to connect with resources and mental health professionals. This can be a crucial first step towards recovery.
                    </li>
                    <li>Improved Training: Helplines play a role in advocating for and providing training for crisis counselors and mental health professionals. This improves the quality of care available.
                    </li>
                    <li> Data Collection: Helplines collect valuable data on suicide trends and risk factors. This data helps researchers and policymakers develop more effective prevention strategies.</li>
                  </li>

                </ul>
            </div>
            <div class="profile">
                <img src="profile-image.jpg" alt="Suicide Hotline Logo">
                <h1>Suicide Hotline</h1>
            </div>
        </div>
    </main>
    <?php include_once("templates/footer.php"); ?>  
</body>
</html>
