<?php 
	$servername = "localhost";
	$username = "mooshdigital";
	$password = "Moosh@1122";
	$dbname = "moosh";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
?>