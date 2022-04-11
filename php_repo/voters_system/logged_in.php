<?php

require '../libraries/login.php';
$query = mysqli_query($connect,"SELECT *  FROM user_names WHERE id='$id_no'");
$sql = "SELECT *  FROM user_names WHERE id='$id_no'";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "<br>";
}
}
else {
echo( " the id you entered is not correct results");
}
$conn->close();
echo ('hello  '.$username);


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
    
<div>

<p>

<?php echo ('hello  '.$username);  ?>
</p>
</div>



</body>
</html>