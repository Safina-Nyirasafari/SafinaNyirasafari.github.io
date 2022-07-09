<?php 
//connect to database
require 'server.php';

//create varaibles to hold data for basic
$firstName = mysqli_real_escape_string($conn, $_REQUEST['FirstName']);
$lastName = mysqli_real_escape_string($conn, $_REQUEST['LastName']);
$nrc = mysqli_real_escape_string($conn, $_REQUEST['nrc']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
$country = mysqli_real_escape_string($conn, $_REQUEST['Country']);
$province = mysqli_real_escape_string($conn, $_REQUEST['Province']);
$town = mysqli_real_escape_string($conn, $_REQUEST['Town']);
$street = mysqli_real_escape_string($conn, $_REQUEST['Street']);
$area = mysqli_real_escape_string($conn, $_REQUEST['Area']);
$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
$client = mysqli_real_escape_string($conn, $_REQUEST['Client']);

//create varaibles to hold data for payment
$nameofBank = mysqli_real_escape_string($conn, $_REQUEST['NameofBank']);
$bankAccountNo = mysqli_real_escape_string($conn, $_REQUEST['BankAccountNo']);
$branchofBank = mysqli_real_escape_string($conn, $_REQUEST['BranchofBank']);
$phoneNumber = mysqli_real_escape_string($conn, $_REQUEST['PhoneNumber']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
//insert data basic
$sql = "INSERT INTO customer_basic (FirstName, LastName, nrc, dob, Country, Province,Town,Street,Area,sex,Client)
VALUES ('$firstName', '$lastName', '$nrc', '$dob', '$country', '$province', '$town', '$street', '$area', '$sex', '$client')";

//insert data payment
$sql2 = "INSERT INTO customer_payment (NameofBank, BankAccountNo, BranchofBank, PhoneNumber, email)
VALUES ('$nameofBank','$bankAccountNo','$branchofBank','$phoneNumber','$email')";


if (($conn->query($sql) === TRUE) && ($conn->query($sql2) === TRUE)) {
    echo "New record created successfully";
    header("Location: ../Welcome.php");
//    header("Location: ../details.php");
} else {
    echo "Error: " . "<br>" . $conn->error;
}

$conn->close();

?>