<?php

// Connect to database
require_once('db_connect.php');

// Parse POST data
$area_range = $_POST['area_range'];
$design = $_POST['designs'];
$price = 0;

$sql = "SELECT value FROM area_ranges WHERE name = '$area_range'";
$result = $mysqli->query($sql);    
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $area_value = $row['value'];
}

$sql = "SELECT Rate FROM designs WHERE Type = '$design'";
$result = $mysqli->query($sql);    
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $price = $row['Rate'];
}

$area_cost = $area_value * $price;
$floor = $_POST['floor'];

// Calculate total cost of construction
$total_cost = $area_cost * $floor;

// Return total cost as response
header('Content-Type: application/json');
echo $total_cost;

// Close database connection
$mysqli->close();

?>
