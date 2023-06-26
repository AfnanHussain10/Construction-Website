<?php

require "functions.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Reviews CRUD</title>
    <link rel="stylesheet" href="astyle.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">


</head>

<body>
<?php include('navbar.php'); ?>
<div class="container-fluid pt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <br><br>
            <h2 style="text-align:center; font-size:50px; padding-left:0px!important;">Reviews</h2>
      </div>
    </div>
  </div>


	<hr>

	<!-- Display table of all materials with update and delete links -->
	<h2>All Reviews</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>
				<th>Date</th>
				<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to database
			require_once('db_connect.php');

			// Retrieve all materials from database
			$result = $mysqli->query("SELECT * FROM reviews");

			// Display each material in a table row with update and delete links
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["review_id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["comment"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
				echo "<td><a href='deleteReview.php?id=" . $row["review_id"] . "'>Delete</a></td>";
				echo "</tr>";
			}

			// Close database connection
			$mysqli->close();
			?>
		</tbody>
	</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>