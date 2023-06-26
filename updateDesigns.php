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
	$result = $mysqli->query("SELECT * FROM designs WHERE design_id=$id");
	$row = $result->fetch_assoc();
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$id = $_POST["id"];
	$name = $_POST["design_name"];
	$price = $_POST["price"];

	// Update material in database
	$update = $mysqli->query("UPDATE designs SET Type='$name',  Rate=$price WHERE design_id=$id");

	// Redirect to all materials page
	header("Location: adminDesigns.php");
	exit();
}

// Close database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Update Design</title>
    <link rel="stylesheet" href="astyle.css">

</head>

<body>
	<h1>Update Design</h1>

	<!-- Display form for updating a material -->
	<form method="POST" action="updateDesigns.php">
		<input type="hidden" name="id" value="<?php echo $row['design_id'] ?>">

			<label for="design_name">Name:</label>
			<input type="text" name="design_name" value="<?php echo $row['Type'] ?>" required>

			<label for="price">Price:</label>
			<input type="number" name="price" value="<?php echo $row['Rate'] ?>" required>

		<input type="submit" value="Update">
	</form>

	<!-- Display cancel button that returns to all materials page -->
	<a href="adminDesigns.php">Cancel</a>
</body>

</html>
