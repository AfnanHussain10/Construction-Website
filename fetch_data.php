<?php
// Connect to database
require_once('db_connect.php');

// Get category from query parameter
$category = $_GET['category'];

// Build SQL query based on selected category
if ($category!='') {
  $sql = "SELECT * FROM materials WHERE category='$category'";
} else {
  $sql = "SELECT * FROM materials";
}

// Execute SQL query
$result = $mysqli->query($sql);

// Return results as JSON
$materials = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $material = array(
      'MaterialID' => $row['MaterialID'],
      'MaterialName' => $row['MaterialName'],
      'unit_of_measure' => $row['unit_of_measure']
    );
    array_push($materials, $material);
  }
}
$response = array('materials' => $materials);
header('Content-Type: application/json');
echo json_encode($response);

$mysqli->close();
?>
