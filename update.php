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
	$result = $mysqli->query("SELECT * FROM materials WHERE MaterialID=$id");
	$row = $result->fetch_assoc();
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$id = $_POST["id"];
	$name = $_POST["material_name"];
	$category = $_POST["category"];
	$unit = $_POST["unit"];
	$price = $_POST["price"];

	// Update material in database
	$update = $mysqli->query("UPDATE materials SET MaterialName='$name', category='$category', unit_of_measure='$unit', price=$price WHERE MaterialID=$id");

	// Redirect to all materials page
	header("Location: adminMaterials.php");
	exit();
}

// Close database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Update Material</title>
    <link rel="stylesheet" href="astyle.css">

</head>

<body>
	<h1>Update Material</h1>

	<!-- Display form for updating a material -->
	<form method="POST" action="update.php">
		<input type="hidden" name="id" value="<?php echo $row['MaterialID'] ?>">

			<label for="material_name">Name:</label>
			<input type="text" name="material_name" value="<?php echo $row['MaterialName'] ?>" required>

			<label for="category">Category:</label>
			<input type="text" name="category" value="<?php echo $row['category'] ?>" required>

			<label for="unit">Unit:</label>
			<input type="text" name="unit" value="<?php echo $row['unit_of_measure'] ?>" required>

			<label for="price">Price:</label>
			<input type="number" name="price" value="<?php echo $row['price'] ?>" required>

		<input type="submit" value="Update">
	</form>

	<!-- Display cancel button that returns to all materials page -->
	<a href="adminMaterials.php">Cancel</a>
</body>

</html>
