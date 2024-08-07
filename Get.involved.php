<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystylee.css">
    <title>Get Involved</title>
    <style>
    body{
        font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: #73cdf4;
        color: black;
    }
    .dropdown {
        float: left;
        overflow: hidden;
    }
    .dropdown .dropbtn {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    .dropdown-content a:hover {
        background-color: rgb(116, 196, 237);
        color: black;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .container {
        padding: 20px;
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
    }
    .hero {
            background-color: #e0f7fa;
            padding: 50px 20px;
            text-align: center;
        }
        .hero h1 {
            margin: 0;
            font-size: 36px;
        }
        .hero p {
            font-size: 18px;
        }
        .section {
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
        }
        .section h2 {
            margin-top: 0;
        }
    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        margin-top: 20px;
    }
    .footer p {
            margin: 5px 0;
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
                  
                  <div class="dropdown">
                    <button class="dropbtn">Get Involved 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="Contact.us.php">Volunteer</a>
                        
                        <a href="Event.php">Partner with Us</a>
                    </div>
                </div>
                  <a href="Contact.us.php" class="split">Contact.us</a>|
              </div>
            </div> 
           
           </div>
            
           <!-- Hero Section -->
    <div class="hero">
        <h1>Get Involved</h1>
        <p>Discover how you can make a difference and support our mission.</p>
    </div>
     <!-- About Us Section -->
<section id="about">
    <h2>About Us</h2>
    <p>We are a non-profit organization dedicated to providing support and resources to those affected by suicide.</p>
    <p>Our mission is to create a safe and supportive community where individuals can find help and hope.</p>
  </section>
  
  <!-- Donate Section -->
  <center><section id="donate">
    <h2>Donate</h2>
    <p>Your donation helps us provide critical support and resources to those in need.</p>
    <form>
      <label for="amount">Donation Amount:</label>
      <input type="number" id="amount" name="amount">
      <button type="submit">Donate Now</button>
    </form>
  </section></center>
  
  <!-- Volunteer Section -->
 <center> <section id="volunteer">
    <h2>Volunteer</h2>
    <p>Join our team of dedicated volunteers and help make a difference in your community.</p>
      <center><a href="signup.php" class="button">Sign up here</a></center>
</div>
    
    </section></center>
  </section>
  <center><div class="events-section">
    <h2> Attend Events</h2>
    <div style="text-align: left;">
    <img src= images/event.jpeg style="height: 100px; width: auto;">
    </div>
    <p>Participate in our events to show your support and spread awareness. Check out our upcoming events and find out how you can get involved.</p>
    <a href="Event.php" class="button">See Upcoming Events</a>
</div></center>

  <!-- Contact Us Section -->
  ><center><section id="contact">
    <h2>Contact Us</h2>
    <p>Get in touch with us to learn more about our organization and how you can get involved.</p>
    <ul>
      <a href="mailto:info@suicidehelpline.org">help@suicidehelpline.org</a>
      <a href="tel:1-800-HELP-NOW"> 1-800-123-4567</a><center>
    </ul>
  </section>
  
  <?php include_once(	"templates/footer.php"); ?>


    </body>
</html>