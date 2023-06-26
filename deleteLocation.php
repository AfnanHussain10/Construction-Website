<?php
// Connect to database
require_once('db_connect.php');

// Retrieve material ID from URL parameter
$location_id = $_GET["id"];

// Delete material from database
$stmt = $mysqli->prepare("DELETE FROM locations WHERE Lid = ?");
$stmt->bind_param("i", $location_id);

if (!$stmt->execute()) {
    echo "Failed to delete material: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminLocations.php");
exit();

// Close database connection

?>