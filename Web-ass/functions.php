<?php 
    function check_login($con){
        if(isset($_SESSION['id']))
        {
            $id = $_SESSION['id'];
            $query = "SELECT * FROM login WHERE id='$id' limit 1";
            //result set
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        //redirect to login
        header("Location: account1.php");
        die;
    }
    function random_num($length){
        $text = "";
        //check if lenght is less than 5
        if($length<5){
            //make sure it's never less than 5
            $length=5;
        }
        //assign random variable
        $len = rand(4,$length);//len is the new actual length
        for($i=0; $i<$len; $i++){//repeat random number
            #code...add another random number to text for diff user id
            $text .= rand(0,6);
        }
        //return text value
        return $text;
    }
?>