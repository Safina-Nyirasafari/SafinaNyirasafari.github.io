<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

sleep(2);
header('location: ../index.php');    
?>

</body>
</html>
