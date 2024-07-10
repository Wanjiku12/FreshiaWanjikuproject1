<?php
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? ''; // Ensure to hash the password later for security
$confirm_password = $_POST['confirm_password'] ?? '';
$skills = $_POST['skills'] ?? '';
$availability = $_POST['availability'] ?? '';
$preference =  $_POST['preference'] ?? '';

 

 

// Create connection
$conn = new mysqli('localhost', 'root', '','signup');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     else {
        $stmt= $conn->prepare("insert into persons(firstname, lastname, email, password, confirm_password, skills, availability, preference)
        values(? ,? ,? ,? ,? ,? ,? ,? )");
        $stmt->bind_param("ssssssss", $firstname, $lastname, $email,$password,$confirm_password, $skills, $availability,  $preference);
        $stmt->execute();

        echo "Successfull sign up: " . $stmt->error;
    }

    $stmt->close();

$conn->close();




?>