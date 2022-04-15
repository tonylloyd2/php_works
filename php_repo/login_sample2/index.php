<?php

session_start();
// $_SESSION;

include  ("connection.php");
include  ("functions.php");

    $user_data = check_login($connection);

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
    
    <a href="logout.php"><button>Logout</button></a>
    <a href="login.php"><button>Login</button></a>

    <h1>This is the index page</h1><br>


   
   <h2>Hello <?php echo  ($user_data['user_name']) ; ?>
   </h2>
    <!-- <a href="login.php">login</a> -->
</body>
</html>