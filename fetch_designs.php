<?php
// Connect to database
require_once('db_connect.php');




// Build SQL query 

  $sql = "SELECT Type FROM designs";


// Execute SQL query
$result = $mysqli->query($sql);

// Return results as JSON
$designs = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $design = array(
      'Type' => $row['Type']
    );
    array_push($designs, $design);
  }
}
$response = array('designs' => $designs);
header('Content-Type: application/json');
echo json_encode($response);

$mysqli->close();
?>
