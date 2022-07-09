<?php require 'sql/server.php'?>
<!DOCTYPE html>
<html>
<head>
    <style> .submit{ background-color:blue } </style>
<title>Customer's details</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div id="w1">
    <p>Customer Basic Details</p>
    <form id="form2" action="sql/details.php" method="post" onsubmit="registervalidation1.js">
<!--  Create 2 divs for the different type of data to be collected -->
        <div id="q2">
      <label for="Company">First Name</label><br>
      <input type="text" id="Name" name="FirstName" placeholder="" required><br>
	  <label for="Company">Last Name</label><br>
      <input type="text" id="Name" name="LastName" placeholder="" required><br>
	  <label for="nrc">NRC</label><br>
      <input type="text" id="nrc" name="nrc" required><br>
	  <label for="dob">DOB</label><br>
      <input type="date" id="dob" name="dob" required><br>
      <label for="Address">Country</label><br>
      <input type="text" id="Country" name="Country" placeholder="" required><br>
      <label for="City">Province</label><br>
      <input type="text" id="Province" name="Province" placeholder="" required><br>
      <label for="Region">Town</label><br>
      <input type="text" id="Town" name="Town" placeholder="" required><br>
      <label type="text">Street</label><br>
      <input type="number" id="Street" name="Street" placeholder="" required><br>
      <label for="Country">Area</label><br>
      <input type="text" id="Area" name="Area" placeholder="" required><br>
	  <label for="sex" id="sex" name="sex">sex</label><br>
          <select name="sex">
          <option>Male</option>
          <option>Female</option>
          </select>
       <label for="Client" name="Type of client">Client</label><br>
          <select name="Client">
          <option>Student</option>
          <option>Worker</option>
		  <option>Business person</option>
          </select>
        </div>
        <!-- Client Bank detaisS -->
      <div id="q3">
  <label for="bank">Name of Bank</label><br>
      <input type="text" id="Bank" name="NameofBank" placeholder="" required><br>
	  <label for="Bank">Bank Account No</label><br>
      <input type="text" id="Bank" name="BankAccountNo" placeholder="" required><br>
	  <label for="Branch">Branch of Bank</label><br>
      <input type="text" id="Bank" name="BranchofBank" required><br>
      <label for="Address">Address of Bank</label><br>
      <input type="text" id="Bank" name="AddressofBank" placeholder="" required><br>
      <label for="phone">Phone Number</label><br>
      <input type="text" id="Phone" name="PhoneNumber" placeholder="" required><br>
      <label for="email">email</label><br>
      <input type="email" id="email" name="email" placeholder="" required><br>
<!-- Final Submit button -->
        <button type="submit" name="Submit">Submit</button>
    </form>
    </div>

</body>
</html>