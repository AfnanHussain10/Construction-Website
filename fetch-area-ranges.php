<?php

require_once('db_connect.php');
// Query for materials
$sql = "SELECT range_id, name FROM area_ranges";
$result = $mysqli->query($sql);

$ranges = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ranges[] = array(
            'range_id' => $row['range_id'],
            'name' => $row['name'],

        );
    }
}

// Return materials as JSON
header('Content-Type: application/json');
echo json_encode(array('ranges' => $ranges));

// Close database connection
$mysqli->close();

?>






