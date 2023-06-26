<?php
// Connect to database
require_once('db_connect.php');

// Retrieve material ID from URL parameter
$range_id = $_GET["id"];

// Delete material from database
$stmt = $mysqli->prepare("DELETE FROM area_ranges WHERE range_id = ?");
$stmt->bind_param("i", $range_id);

if (!$stmt->execute()) {
    echo "Failed to delete material: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminAreaRanges.php");
exit();

// Close database connection

?>