<?php

// Connect to database
require_once('db_connect.php');

// Parse POST data
$location=$_POST['location'];
$price_location=0;
$sql = "SELECT price FROM locations WHERE Lname = '$location' ";
$result = $mysqli->query($sql);    
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $price_location = $row['price'];
  }

$area = $_POST['area']*$price_location;
$floor = $_POST['floor'];
$materials = json_decode($_POST['materials']);

// Query for material costs and calculate total cost
$total_cost = 0;
foreach ($materials as $material) {
    $sql = "SELECT price FROM materials WHERE MaterialID = " . $material->id;
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cost_per_unit = $row['price'];
        $total_cost += $cost_per_unit * $material->quantity;
    }
}

// Calculate total cost of construction
$total_cost += $area * $floor;

// Return total cost as response

header('Content-Type: application/json');
echo $total_cost;
// Close database connection
$mysqli->close();

?>
