<?php
// Connect to database
require_once('db_connect.php');

// Retrieve form data
$design_name = $_POST["design_name"];
$price = $_POST["price"];

// Insert new material into database
$stmt = $mysqli->prepare("INSERT INTO designs (Type, Rate) VALUES (?, ?)");
$stmt->bind_param("sd", $design_name, $price);


if (!$stmt->execute()) {
    echo "Failed to create material: " . $stmt->error;
    exit();
}

// Redirect back to main page
header("Location: adminDesigns.php");
exit();

// Close database connection

?>