<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$contact = $_POST['contact'];

$sql = "UPDATE names SET name = '$name' , phone = '$contact' WHERE id = $id"; //where chainxa phone vanya uta col ko naam phone xa so 

$result = mysqli_query($connection, $sql);

if($result){
    header("location:index.php");
}

?>
