<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? ''; // Ensure to hash the password later for security
$message = $_POST['message'] ?? '';
 $age = $_POST['age']?? '';
 $date = $_POST['date'] ?? '';
 $time = $_POST['time'] ?? '';
 $language= $_POST['language'] ??'';
 $gender = $_POST['gender'] ?? '';

 

// Create connection
$conn = new mysqli('localhost', 'root', '','contact');

// Check connection
if ($conn->connect_error) {
    die("There was a problem with your submission, please try again: " . $conn->connect_error);
}
     else {
        $stmt= $conn->prepare("insert into contactform(name, email, password, message, age, date, time, language, gender)
        values(? ,? ,? ,? ,? ,? ,? ,?, ? )");
        $stmt->bind_param("ssssissss", $name, $email, $password, $message, $age, $date, $time, $language, $gender);
        $stmt->execute();

        echo "Thank you for your message, We will get back to you shortly " . $stmt->error;
    }

    $stmt->close();

$conn->close();




?>

