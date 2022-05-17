<?php
$name = $_POST['name'];
$phone = $_POST['contact']; //name lyako form bata

echo "Name is".$name ."Phone number is: ".$phone;

// db vaako file lai connect garni esma
include 'db.php';

// sql query 

$sql = "INSERT INTO names(name, phone)VALUES('$name','$phone')";
$result = mysqli_query($connection, $sql); //uta ko connection eta lyako

// edi result true xa vane location dini
if($result){
    header('Location:index.php');
}
?>