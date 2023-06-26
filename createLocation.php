<?php
// Connect to database
require_once('db_connect.php');

// Retrieve form data
$location_name = $_POST["location_name"];
$price = $_POST["price"];

// Insert new material into database
$stmt = $mysqli->prepare("INSERT INTO locations (Lname, price) VALUES (?, ?)");

// Bind the parameters
$stmt->bind_param("si", $location_name, $price);

$stmt->execute();

// Check if the statement executed successfully
if ($stmt->affected_rows > 0) {
    // Data inserted successfully
    echo "success";
} else {
    // There was an error with the SQL query
    $error_message = mysqli_error($mysqli);
    echo "Error: $error_message";
}

// Close the statement and database connection
$stmt->close();

// Redirect back to main page
header("Location: adminLocations.php");
exit();

// Close database connection

?>