<?php
session_start();
//include other files
include("connection.php");
include("functions.php");
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
      <nav>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>ZiCARE</h1></div>
        <ul>
        <li><a href="#">Welcome
                    <?php echo $user_data['user_name'];?>
                </a></li>
            <li><a href="zicare.php">Browse</a></li>
            <li><a href="Health.html">Health</a></li>
            <li><a href="police.php">Police</a></li>
            <li><a href="iCare.html">iCare</a></li>
            <li><a href="account.php" class="active">Account</a></li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </nav>
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
        <p>fullname: <?php echo $user_data['fullname'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>Username: <?php echo $user_data['user_name'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>E-mail: <?php echo $user_data['email'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>Bank details: <?php echo $user_data['bankname'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>Phone number: <?php echo $user_data['phone'];?></p>
    </div>
    <div class="iii"style="justify-content:center;align-content:center;
    align-items:center;">
        <p>Bank bank account: <?php echo $user_data['bankaccount'];?></p>
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