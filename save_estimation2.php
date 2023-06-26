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

// Get form data
$area = $_POST['area_range'];
$floor = $_POST['floor'];
$userID = $_SESSION['USER']->userID;

// Calculate estimated cost
$estimated_cost = $_POST['estimatedCost'];

// Get search option value
$search_option = $_POST['searchOption'];


// Insert estimation data into database
$stmt = $conn->prepare("INSERT INTO `construction_estimations` (`area`, `floor`, `estimated_cost`, `searchOption`,`userID`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sdssi", $area, $floor, $estimated_cost, $search_option,$userID);
if ($stmt->execute() !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: estimation.php");
exit();


?>
