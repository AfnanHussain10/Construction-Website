<?php
// Connect to database
require_once('db_connect.php');



// Build SQL query 

  $sql = "SELECT name FROM area_ranges";


// Execute SQL query
$result = $mysqli->query($sql);

// Return results as JSON
$area_ranges = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $area_range = array(
      'name' => $row['name']
    );
    array_push($area_ranges, $area_range);
  }
}
$response = array('area_ranges' => $area_ranges);
header('Content-Type: application/json');
echo json_encode($response);

$mysqli->close();
?>
