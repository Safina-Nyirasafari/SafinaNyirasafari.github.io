<link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<?php require 'connect.php'?>
<body>
    <div id="e1">
        <h1>Welcome to the sign up page </h1>
    </div>
       <div id="q1">
          <form action="sql/signup.php" method="post" onsubmit="registervalidation.js">
               <label for="name">Full name</label><br>
               <input type="text" id="name" name="name" required><br>
               <label for="email">email</label><br>
               <input type="text" id="email" name="email" required><br>
               <label for="password">Password</label><br>
               <input type="password" id="password" name="password" required><br>
        
             <button type="submit" class="btn btn-primary"onclick="validateLogin()" name="submit"style="font-size: 20px;margin: 20px;color: black;background-color: white blue"> Submit </button><br><br>
          </form>
       </div>
</body>


