<?php
$server = "Localhost";
$db_user = "root";
$db_password = "";
$database = "olayiwoladb";

$conn = mysqli_connect($server, $db_user, $db_password);

if(!$conn){
    die("Cannot connect to database");
}	

$db = mysqli_select_db($conn,$database);
if(!$db){
    die("Cannot open  DB");
}


?>
