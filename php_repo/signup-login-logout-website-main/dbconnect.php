<?php

$localhost = 'localhost';
$username = 'root';
$password = '0220';
$database = 'test_signup_login_logout';


 $connect = mysqli_connect($localhost,$username,$password,$database) or die("connection failed");

//  now check database connection or not using if statement 

 if($connect){
       echo '<script>alert("connection success")</script>';
 }else{
       echo "connection failed";
 }


?>