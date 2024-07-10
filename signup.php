<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("templates/nav.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Signup</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #83a4d4, #b6fbff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            text-align: center;
            margin: 20px;
        }

        .container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .container label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
        }

        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"],
        .container textarea,
        .container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .container textarea {
            height: 100px;
        }

        .container button {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container button:hover {
            background: #218838;
        }

        .container .form-group {
            margin-bottom: 20px;
        }

        .container .preferences {
            text-align: left;
            margin-top: 20px;
        }

        .container .preferences label {
            margin-bottom: 5px;
            display: inline-block;
        }

        .container .preferences input[type="checkbox"] {
            margin-right: 10px;
        }

        .container .form-group select {
            height: 40px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Volunteer Signup</h1>
        <form action="connect.php" method="post">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <label for="skills">Skills and Interests:</label>
                <textarea id="skills" name="skills"></textarea>
                
            </div>
            <div class="form-group">
                <label for="availability">Availability:</label>
                <select id="availability" name="availability">
                    <option value="morning">Morning</option>
                    <option value="afternoon">Afternoon</option>
                    <option value="evening">Evening</option>
                    <option value="weekends">Weekends</option>
                </select>
            </div>
            <div class="preference">
                <p>Volunteer Preferences:</p>
                <label><input type="checkbox" name="preference" value="event-planning"> Event Planning</label><br>
                <label><input type="checkbox" name="preference" value="community-outreach"> Community Outreach</label><br>
                <label><input type="checkbox" name="preference" value="fundraising"> Fundraising</label><br>
                <label><input type="checkbox" name="preference" value="mentoring"> Mentoring</label>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
