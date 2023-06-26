<?php

require "functions.php";

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'estimationmodel';

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
var_dump($_POST);


// Get form data
$area = $_POST['area'];
$floor = $_POST['floor'];
$userID = $_SESSION['USER']->userID;
$materials = json_decode($_POST['materials'], true);

// Calculate estimated cost
$estimated_cost = $_POST['estimatedCost'];

// Get search option value
$search_option = $_POST['searchOption'];

// Insert estimation data into database
$stmt = $conn->prepare("INSERT INTO `construction_estimations` (`area`, `floor`, `estimated_cost`, `searchOption`,`userID`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("idssi", $area, $floor, $estimated_cost, $search_option,$userID);
if ($stmt->execute() === TRUE) {
    $estimation_id = $conn->insert_id;
    
    // Insert estimation materials into database
    $stmt = $conn->prepare("INSERT INTO `estimation_material` (`estimation_id`, `material_id`, `quantity`, `unit`) VALUES (?, ?, ?, ?)");
    foreach ($materials as $material) {
        $material_id = $material['id'];
        $quantity = $material['quantity'];
        $unit = $material['unit'];
        
        $stmt->bind_param("iids", $estimation_id, $material_id, $quantity, $unit);
        if ($stmt->execute() !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    echo $success = 'Successful';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: estimation.php");
exit();



?>
