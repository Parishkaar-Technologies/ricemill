<?php
$servername = "localhost";
$username = "demoparishkaar_ricemill";
$password = "demoparishkaar_ricemill2024$";
$database = "demoparishkaar_ricemill";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
