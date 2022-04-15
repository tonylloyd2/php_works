 
 <?php
  $host = 'localhost';
  $db_username = 'root';
  $db_password = '0220';
  $database = 'login_sample';
  
  $connection = mysqli_connect($host,$db_username,$db_password,$database);


  if (!$connection)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}



?>