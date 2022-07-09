<?php
include("connection.php");
include("functions.php");
include("details.php");
require 'connect.php';
session_start(); // Starting Session 
// To protect MySQL injection for Security purpose 
$email = mysqli_real_escape_string($conn, $_POST['email']); 
$password = mysqli_real_escape_string($conn, $_POST['password']); 

$query = "SELECT * from login where password='$password' AND email='$email'";

$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result); if ($rows == 1) {	 
//$_SESSION['email']=$email;
while($row = $result->fetch_assoc()) {
//    echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["nrc"]. "<br>";
    $_SESSION['email']=$row["email"];
    $_SESSION['name']= $row["names"];
    $_SESSION['password']=$row["password"];
  }
// Initializing Session 
sleep(1);
header('location: ../account1.php'); 
// Redirecting To Other Page 

} else {	 
echo '<script language="javascript">';
echo 'alert("login failed invalid credentials")';
echo '</script>';
sleep(2);
//header('location: ../login.php');     
}	 
mysqli_close($conn); // Closing Connection 	 
?> 
