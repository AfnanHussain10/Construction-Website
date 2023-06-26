<?php
// Connect to database
require_once('db_connect.php');

// Retrieve material ID from URL parameter
$material_id = $_GET["id"];

// Delete material from database
$stmt = $mysqli->prepare("DELETE FROM materials WHERE MaterialID = ?");
$stmt->bind_param("i", $material_id);

if (!$stmt->execute()) {
    echo "Failed to delete material: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminMaterials.php");
exit();

// Close database connection

?>