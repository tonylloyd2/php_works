<?php
session_start();

include  "connection.php";
include  "functions.php";


// if($_SERVER['REQUEST_METHOD'] == "POST"){
if(isset($_POST['login'])){
    //SOMETHING POSTED OR SUMITED

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) ){
            //read database;\\
        
        $query  = "select * from  users where user_name = '$user_name' limit 1";
        $result =  mysqli_query($connection,$query);

        if ($result) {
            
            if($result && mysqli_num_rows($result) > 0 ){

                $user_data = mysqli_fetch_assoc($result);
                // password corfirmation
                if( $user_data['password'] === $password){
                    
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die; 
                } 
            }        

        }   
        
        echo("Wrong username or password");
}
    else{

        echo("invalid information ");

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>login</title>
</head>
<body>    

    <div id="box">

        <form action="" method="POST">
           <div class="" style="font-size: 20px; margin: 10px; color:white;">Login</div>
           <input  id="text" type="text" name="user_name" placeholder="Enter Username">  <br><br>   
           <input id="text" type="password" name="password" placeholder="Enter password"><br><br>
           <input  id="button" type="submit" name="login" value="login">
           <!-- <p>Dont have an account yet ?</p> -->
           <a href="signup.php">Signup</a>

        </form>

    </div>




</body>
</html>