<?php

session_start();

    include  "connection.php";
    include  "functions.php";

    // $user_data = check_login($connection);


    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['signup'])){
        //SOMETHING POSTED OR SUMITED

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];


        $data_exist = false;

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) ){

            $check_username_sql   = "select * from users where user_name = '$user_name'  " ;
            $result =  mysqli_query($connection,$check_username_sql);
   
            if($result && mysqli_num_rows($result) > 0 ){
                $data_exist = true;
                $user_data = mysqli_fetch_assoc($result);
                //   checing if username exists;
                if( $user_data['user_name'] === $user_name){
                    
                    $data = [
                        'error' => 'The username already exist refresh'
                    ];

                    $response = json_encode($data);
                    echo($response);

                    // die; 
                }
            }
            else {
                $data_exist = false;
                    //save to database;\\
                $user_id = random__num(20);
                $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
                mysqli_query($connection,$query);
                header("Location: login.php");
                die;
                
            }

        }       
    }
    else {
            echo("please fill in the details ");
    }



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Signup</title>
</head>
<body>    

    <div id="box">

        <form action="" method="POST">
           <div class="" style="font-size: 20px; margin: 10px; color:white;">Signup</div>
           <input  id="text" type="text" name="user_name" placeholder="Enter Username" required>  <br><br>   
           <input id="text" type="password" name="password" placeholder="Enter password" required><br><br>
           <input  id="button" type="submit" name="signup" value="signup">
           <!-- <p>Dont have an account yet ?</p> -->
           <a href="login.php">Login</a>

        </form>

    </div>




</body>
</html>