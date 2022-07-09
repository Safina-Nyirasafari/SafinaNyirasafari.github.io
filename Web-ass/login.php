<link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
<?php require 'connect.php'?>   
</body>
<div id="e1">
    <h1>Welcome to login page</h1>
    </div>
<div id="q1">
    <p>Login</p>
    <form action="welcome.php" method="post" onsubmit="script.js">
<!--    <form>-->
      <label for="email">Email</label><br>
      <input type="text" id="email" name="email" required><br>
        
      <label for="password">Password</label><br>
      <input type="password" id="password" name="password" required><br>
      
      <button type="submit" name="Submit" onclick="validateLogin()">Submit</button>
    </form>
    </div>

</body>

<?php require 'footer.php'?>