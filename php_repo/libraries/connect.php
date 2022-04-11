
<?php 
  
  $host = 'localhost';
  $db_username = 'root';
  $db_password = '0220';
  $database = 'abc';
  
  $connect = mysqli_connect($host,$db_username,$db_password,$database);


  if(!$connect){
    echo (' database  cant connect');
  }

?>