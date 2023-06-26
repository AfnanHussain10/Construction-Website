<?php
// Connect to database
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'estimationmodel';

$mysqli = new mysqli($host, $user, $pass, $dbname);

// Check for errors
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
}

// Retrieve material information from database
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$result = $mysqli->query("SELECT * FROM area_ranges WHERE range_id=$id");
	$row = $result->fetch_assoc();
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$id = $_POST["id"];
	$name = $_POST["range_name"];
	$price = $_POST["price"];

	// Update material in database
	$update = $mysqli->query("UPDATE area_ranges SET name='$name',  value=$price WHERE range_id=$id");

	// Redirect to all materials page
	header("Location: adminAreaRanges.php");
	exit();
}

// Close database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Update Area-Range</title>
    <link rel="stylesheet" href="astyle.css">

</head>

<body>
	<h1>Update Area-Range</h1>

	<!-- Display form for updating a material -->
	<form method="POST" action="updateAreaRange.php">
		<input type="hidden" name="id" value="<?php echo $row['range_id'] ?>">

			<label for="range_name">Name:</label>
			<input type="text" name="range_name" value="<?php echo $row['name'] ?>" required>

			<label for="price">Price:</label>
			<input type="number" name="price" value="<?php echo $row['value'] ?>" required>

		<input type="submit" value="Update">
	</form>

	<!-- Display cancel button that returns to all materials page -->
	<a href="adminAreaRanges.php">Cancel</a>
</body>

</html>
