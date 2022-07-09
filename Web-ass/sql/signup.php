<?php 
//connect to database
require 'server.php';
//create varaibles to hold data
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']); 
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

$sql = "INSERT INTO login (name, email, password)
VALUES ('$name','$email','$password')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../details.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>