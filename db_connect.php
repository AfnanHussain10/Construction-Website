<?php

// Database configuration
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "estimationmodel";

// Create a database connection
$mysqli = new mysqli($host, $user, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

?>
