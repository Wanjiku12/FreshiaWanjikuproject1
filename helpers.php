<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? ''; // Ensure to hash the password later for security
$message = $_POST['message'] ?? '';
 

 

 

// Create connection
$conn = new mysqli('localhost', 'root', '','helpline');

// Check connection
if ($conn->connect_error) {
    die("Sorry, there was an error submitting your message. Please try again." . $conn->connect_error);
}
     else {
        $stmt= $conn->prepare("insert into helper(name, email, phone, message )
        values(? ,? ,? ,?  )");
        $stmt->bind_param("ssis", $name, $email, $phone, $message);
        $stmt->execute();

        echo "Thank you for reaching out! We\'ll respond immediately." . $stmt->error;
    }

    $stmt->close();

$conn->close();




?>