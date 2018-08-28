<?php
$servername = "www.db4free.net";
$username = "soumya";
$password = "rootroot";
$dbname = "studentmanage";

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
?>


