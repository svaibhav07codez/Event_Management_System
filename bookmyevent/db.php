<?php 
/*if (!session_id()) {
	# code...
	session_start();
}*/

$host="localhost";
$username="root";
$password="";
$db_name="eventdb";
// Create connection
$conn = new mysqli($host, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else{
	
}
?>
