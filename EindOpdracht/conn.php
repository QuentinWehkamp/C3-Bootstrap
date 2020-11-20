<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c3_Bootstrap";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if($conn->query($sql) === TRUE){
  $conn->close();
  $db = new mysqli($servername, $username, $password, $dbname);
}


?>