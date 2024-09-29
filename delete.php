<?php
include 'db.php';

$id = $_GET['id']; // Get the user ID from the query string

// SQL query to delete the user by their ID
$sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    // Redirect to index.php after successful deletion
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
