<?php
// Connect to database
require_once('db_connect.php');

// Retrieve form data
$area_name = $_POST["area_name"];
$price = $_POST["price"];

// Insert new material into database
$stmt = $mysqli->prepare("INSERT INTO area_ranges (name, value) VALUES (?, ?)");
$stmt->bind_param("sd", $area_name, $price);


if (!$stmt->execute()) {
    echo "Failed to create arearange: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminAreaRanges.php");
exit();

// Close database connection

?>