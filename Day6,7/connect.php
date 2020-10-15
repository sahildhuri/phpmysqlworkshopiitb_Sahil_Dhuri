<?php

$servername="localhost";
$username = "sahildhuri";
$password = "2727";
$dbname = "results";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


?>
