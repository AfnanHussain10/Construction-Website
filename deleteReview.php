<?php
// Connect to database
require_once('db_connect.php');

// Retrieve material ID from URL parameter
$review_id = $_GET["id"];

// Delete material from database
$stmt = $mysqli->prepare("DELETE FROM reviews WHERE review_id = ?");
$stmt->bind_param("i", $review_id);

if (!$stmt->execute()) {
    echo "Failed to delete review: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminReviews.php");
exit();

// Close database connection

?>