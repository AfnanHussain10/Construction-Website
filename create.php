<?php
// Connect to database
require_once('db_connect.php');

// Retrieve form data
$material_name = $_POST["material_name"];
$category = $_POST["category"];
$unit = $_POST["unit"];
$price = $_POST["price"];

// Insert new material into database
$stmt = $mysqli->prepare("INSERT INTO materials (MaterialName, category ,unit_of_measure ,price) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssd", $material_name, $category, $unit, $price);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "success";
} else {
    // There was an error with the SQL query
    $error_message = mysqli_error($conn);
    echo "Error: $error_message";
}

// Close the statement and database connection
$stmt->close();

// Redirect back to main page
header("Location: adminMaterials.php");
exit();

// Close database connection

?>