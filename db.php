<?php
$servername = "localhost";
$username = "dayplanner_p";
$password = "sjp1312006sjp";
$dbname = "dayplanner_p";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connectiont Field". mysqli_connect_error());
} else{
   "Успіх";
} ?>

