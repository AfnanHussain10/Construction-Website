<?php
// Connect to database
require_once('db_connect.php');




// Build SQL query 

  $sql = "SELECT Lname FROM locations";


// Execute SQL query
$result = $mysqli->query($sql);

// Return results as JSON
$locations = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $location = array(
      'Lname' => $row['Lname']
    );
    array_push($locations, $location);
  }
}
$response = array('locations' => $locations);
header('Content-Type: application/json');
echo json_encode($response);

$mysqli->close();
?>
