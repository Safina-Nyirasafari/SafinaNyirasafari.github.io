<?php
session_start();
//include other files
include("connection.php");
include("functions.php");
include("details.php");
include("connect.php");
//to collect user data create a variable called user data
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="loggo.png">
    </head>
    <body>
    <div class="container" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-20%,-60%);
    width: 600px;
    background: #ffff;
    border-radius: 8px; 
    justify-content:center;align-content:center;
    align-items:center;">
    <!--Header-->
    <h1>Patient data</h1><br/><br/>
    <!--Print user details-->
    <div class="iii container">
        <p>FirstName: <?php echo $user_data['FirstName'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>nrc: <?php echo $user_data['nrc'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>dob: <?php echo $user_data['dob'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>Country: <?php echo $user_data['Country'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>PhoneNumber: <?php echo $user_data['PhoneNumber'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>email: <?php echo $user_data['email'];?></p>
    </div>
    <div class="iii">
    <a href="logout.php" style="padding: 10px 20px;
    color:#fff;
    background: dodgerblue;
    text-decoration: none; border-radius:8px;">Log out</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>
      </html>