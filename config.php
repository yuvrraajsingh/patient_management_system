<?php
// require connection
$servername = "localhost";
$username = "root";
$password = "yuvraj0532";
$dbname = "clinic";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
