<?php

include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM names WHERE id = $id";
$result = mysqli_query($connection, $sql);

if($result){
    header("location:index.php"); //django ma page ma render garya jastai ho
}

?>