<?php
$servername = "localhost"; // or your server
$username = "root";        // MySQL username
$password = "";            // MySQL password
$dbname = "crud_app";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
