<?php

require "functions.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Materials CRUD</title>
	<link rel="stylesheet" href="astyle.css">
	<?php include 'header.html'; ?>

</head>

<body>
	<?php include('navbar.php'); ?>

	<div class="container-fluid pt-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<br><br>
				<h2 style="text-align:center; font-size:50px; padding-left:0px!important;">Materials CRUD</h2>
			</div>
		</div>
	</div>

	<!-- Display form for creating a new material -->
	<h2>Create Material:</h2>
	<form method="POST" action="create.php">
		<label for="material_name">Name:</label>
		<input type="text" name="material_name" required>

		<div style="padding: 17px 0 !important;">
			<select id="category" name="category" class="category-select">
				<option value="0">All Categories</option>
				<option value="Building Materials">Building Materials</option>
				<option value="Electrical">Electrical</option>
				<option value="Plumbing">Plumbing</option>
				<option value="Wood Material">Wood Material</option>
				<option value="Metal Material">Metal Material</option>
				
			</select>
		</div>

		<label for="unit">Unit:</label>
		<input type="text" name="unit" required>

		<label for="price">Price:</label>
		<input type="number" name="price" required>

		<button type="submit" value="Create" class="all">Create</button>
	</form>

	<hr>
	<br>
	<div class="accordion-item">
		<h2 class="accordion-header" id="advancedSearchHeader">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#advancedSearchCollapse" aria-expanded="false" aria-controls="advancedSearchCollapse">
				Search
			</button>
		</h2>
		<div id="advancedSearchCollapse" class="accordion-collapse collapse" aria-labelledby="advancedSearchHeader" data-bs-parent="#searchAccordion">
			<div class="accordion-body">
				<form method="GET">
					<label for="materialName">Material Name:</label>
					<input type="text" name="materialName" id="materialName">

					<!-- Add a class to the select element for easier styling -->
					<div style="padding: 17px 0 !important;">
						<select id="category" name="category" class="category-select">
							<option value="0">All Categories</option>
							<option value="Building Materials">Building Materials</option>
							<option value="Electrical">Electrical</option>
							<option value="Plumbing">Plumbing</option>
							<option value="Wood Material">Wood Material</option>
							<option value="Metal Material">Metal Material</option>
							
						</select>
					</div>

					<label for="unit">Unit:</label>
					<input type="text" name="unit" id="unit">

					<label for="minPrice">Minimum Price:</label>
					<input type="number" name="price_min" id="price_min">

					<label for="maxPrice">Maximum Price:</label>
					<input type="number" name="price_max" id="price_max">

					<button type="submit" value="search" class="all"> Search
					</button>
				</form>
			</div>
		</div>
	</div>

	<br>
	<form method="GET">
		<button type="submit" value="All materials" class="all"> All Materials
		</button>
	</form>
	<hr>
	<!-- Display table of all materials with update and delete links -->
	<h2>All Materials</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Category</th>
				<th>Unit</th>
				<th>Price</th>
				<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to database
			require_once('db_connect.php');

			if (isset($_GET['All materials'])) {
				$result = $mysqli->query("SELECT * FROM materials");
			}

			// Retrieve all materials from database
			if (isset($_GET['materialName']) || isset($_GET['category']) || isset($_GET['unit']) || isset($_GET['price_min']) || isset($_GET['price_max'])) {
				$where_conditions = array();
				if (!empty($_GET['materialName'])) {
					$where_conditions[] = "MaterialName LIKE '%{$_GET['materialName']}%'";
				}
				if (!empty($_GET['category'])) {
					$where_conditions[] = "category LIKE '%{$_GET['category']}%'";
				}
				if (!empty($_GET['unit'])) {
					$where_conditions[] = "unit_of_measure LIKE '%{$_GET['unit']}%'";
				}
				if (!empty($_GET['price_min'])) {
					$where_conditions[] = "price >= {$_GET['price_min']}";
				}
				if (!empty($_GET['price_max'])) {
					$where_conditions[] = "price <= {$_GET['price_max']}";
				}
				$where_clause = implode(' AND ', $where_conditions);
				$result = $mysqli->query("SELECT * FROM materials WHERE $where_clause");
			} else {
				$result = $mysqli->query("SELECT * FROM materials");
			}



			// Display each material in a table row with update and delete links
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["MaterialID"] . "</td>";
				echo "<td>" . $row["MaterialName"] . "</td>";
				echo "<td>" . $row["category"] . "</td>";
				echo "<td>" . $row["unit_of_measure"] . "</td>";
				echo "<td>" . $row["price"] . "</td>";
				echo "<td><a href='update.php?id=" . $row["MaterialID"] . "' class='update'>Update</a> <a href='delete.php?id=" . $row["MaterialID"] . "'>Delete</a></td>";
				echo "</tr>";
			}

			// Close database connection
			$mysqli->close();
			?>
		</tbody>
	</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
		function showAlert() {
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					if (this.responseText == "success") {
						alert("Material created successfully");
					} else {
						alert("Error: " + this.responseText);
					}
				}
			};
			xhr.open("POST", "create.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.send("material_name=" + document.getElementsByName("material_name")[0].value + "&category=" + document.getElementsByName("category")[0].value + "&price=" + document.getElementsByName("price")[0].value + "&unit=" + document.getElementsByName("unit")[0].value );
		}
		</script>
</html>