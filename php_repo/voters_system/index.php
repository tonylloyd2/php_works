<?php

require '../libraries/connect.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $query = "insert into user_names values('$username','$id','$email','$password')";
    if(mysqli_query($connect,$query)){
            echo (' success ');
    }
    // echo("hello ".$username);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="js"> 
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label id="label">Enter your name : </label> <br>
        <input type="text" id="mytxt" name="username"><br>

        <label id="label">Enter id no : </label> <br>
        <input type="text" id="id6" name="id"><br>

        <label id="label"> email: </label> <br>
        <input type="email" id="567" name="email"><br>

        <label id="label">password : </label> <br>
        <input type="password" id="id" name="password"><br>

        <button type="submit" name='submit' id = "button">sumbit</button>
        </form>
    </div>



</body>
</html>