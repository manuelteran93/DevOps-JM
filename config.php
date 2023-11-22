<?php
$dbHost     = "localhost"; 
$dbUsername = "codeuser"; 
$dbPassword = "1234"; 
$dbName     = "devopstravel"; 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}
?>
