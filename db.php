<?php
$host = "localhost";
$user = "root"; //default user is root
$password = ""; //bydefault kei computer kai server le dinxa
$dbname = "contact"; //contact banako xa db ma tei naam ho


$connection = mysqli_connect($host, $user, $password, $dbname) or die();
// yo vanya db connect vayo ki nai check garya or die vanya nothing to show type
?>