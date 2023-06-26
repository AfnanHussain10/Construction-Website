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
	$result = $mysqli->query("SELECT * FROM locations WHERE Lid=$id");
	$row = $result->fetch_assoc();
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$id = $_POST["id"];
	$name = $_POST["location_name"];
	$price = $_POST["price"];

	// Update material in database
	$update = $mysqli->query("UPDATE locations SET Lname='$name',  price=$price WHERE Lid=$id");

	// Redirect to all materials page
	header("Location: adminLocations.php");
	exit();
}

// Close database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Update Location</title>
    <link rel="stylesheet" href="astyle.css">

</head>

<body>
	<h1>Update Location</h1>

	<!-- Display form for updating a material -->
	<form method="POST" action="updateLocation.php">
		<input type="hidden" name="id" value="<?php echo $row['Lid'] ?>">

			<label for="location_name">Name:</label>
			<input type="text" name="location_name" value="<?php echo $row['Lname'] ?>" required>

			<label for="price">Price:</label>
			<input type="number" name="price" value="<?php echo $row['price'] ?>" required>

		<input type="submit" value="Update">
	</form>

	<!-- Display cancel button that returns to all materials page -->
	<a href="adminLocations.php">Cancel</a>
</body>

</html>
