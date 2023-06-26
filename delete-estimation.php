<?php
// Connect to database
require_once('db_connect.php');

// Retrieve material ID from URL parameter
$estimationID = $_POST["estimationID"];

// Delete material from database
$stmt = $mysqli->prepare("DELETE FROM construction_estimations WHERE estimation_id = ?");
$stmt->bind_param("i", $estimationID);

if (!$stmt->execute()) {
    echo "Failed to delete estimation: " . $stmt->error;
    exit();
}

return true;
// Close database connection

?>