<?php 

$servername = "localhost";
$username = "root";
$db = "kopi";
$password = "";

// Create Connection

$conn = new mysqli($servername, $username, $password, $db );

// Check Connection
if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
}
// echo "Connection Successfully";


?>