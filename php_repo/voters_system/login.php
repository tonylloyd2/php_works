
<?php


require '../libraries/connect.php';

if(isset($_POST['submit'])){
    $id_no = $_POST['id_no'];
    $password= $_POST['password'];

    $query = mysqli_query($connect,"SELECT * FROM user_names WHERE id='$id_no'");

    if(mysqli_num_rows($query) === 1){
    while($result = mysqli_fetch_assoc($query)){
    if($result['password'] === $password){

       

    }   

    }}

    else if(mysqli_num_rows($query) === 0){
        echo("use does not exist");
    }

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

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="id" > ID NO : </label>
<input type="text" name="id_no" >
<label for="password" > PASSWORD: </label>
<input type="text" name="password" >

<button type="submit" name='submit' id = "button">sumbit</button>



</form>

</body>
</html>