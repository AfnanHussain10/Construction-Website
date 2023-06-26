<?php
// Connect to database
require_once('db_connect.php');

// Retrieve material ID from URL parameter
$design_id = $_GET["id"];

// Delete material from database
$stmt = $mysqli->prepare("DELETE FROM designs WHERE design_id = ?");
$stmt->bind_param("i", $design_id);

if (!$stmt->execute()) {
    echo "Failed to delete material: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminDesigns.php");
exit();

// Close database connection

?>