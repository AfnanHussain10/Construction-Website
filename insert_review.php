<?php
require_once('db_connect.php');


// Get form data from user input
$name = $_POST["review-name"];
$email = $_POST["review-email"];
$message = $_POST["review-message"];
$review_date = date("Y-m-d");

// Prepare SQL statement with placeholders
$sql = "INSERT INTO reviews (name, email, comment, date)
        VALUES ('$name', '$email', '$message', CURRENT_DATE())";

if (!$mysqli->query($sql)) {
  echo "Error";
} else {
  echo "Success";
}
exit;


