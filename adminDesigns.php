<?php

require "functions.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Designs CRUD</title>
    <link rel="stylesheet" href="astyle.css">
	<?php include 'header.html'; ?>


</head>

<body>
<?php include('navbar.php'); ?>
<div class="container-fluid pt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <br><br>
            <h2 style="text-align:center; font-size:50px; padding-left:0px!important;">Design CRUD</h2>
      </div>
    </div>
  </div>

	<!-- Display form for creating a new material -->
	<h2>Create Design:</h2>
	<form method="POST">
		<label for="design_name">Name:</label>
		<input type="text" name="design_name" required>

		<label for="price">Price:</label>
		<input type="number" name="price" required>

		<button type="submit" value="search" class="all" onclick="showAlert()"> Create
					</button>
	</form>

	<hr>
	<div class="accordion-item">
		<h2 class="accordion-header" id="advancedSearchHeader">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#advancedSearchCollapse" aria-expanded="false" aria-controls="advancedSearchCollapse">
				Search
			</button>
		</h2>
		<div id="advancedSearchCollapse" class="accordion-collapse collapse" aria-labelledby="advancedSearchHeader" data-bs-parent="#searchAccordion">
			<div class="accordion-body">
				<form method="GET">
					<label for="nameDesign">Design:</label>
					<input type="text" name="nameDesign" id="nameDesign">

					<label for="minPrice">Minimum rate:</label>
					<input type="number" name="price_min" id="price_min">

					<label for="maxPrice">Maximum rate:</label>
					<input type="number" name="price_max" id="price_max">

					<button type="submit" value="search" class="all"> Search
					</button>
				</form>
			</div>
		</div>
	</div>

	<br>
	<form method="GET">
		<button type="submit" value="All designs" class="all"> All Designs
		</button>
	</form>
	<hr>
	<!-- Display table of all materials with update and delete links -->
	<h2>All Designs</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Type</th>
				<th>Rate</th>
				<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to database
			require_once('db_connect.php');

			// Retrieve all materials from database
			if (isset($_GET['All designs'])){
				$result = $mysqli->query("SELECT * FROM designs");
			}

			// Retrieve all materials from database
			if (isset($_GET['nameDesign']) || isset($_GET['price_min']) || isset($_GET['price_max'])) {
				$where_conditions = array();
				if (!empty($_GET['nameDesign'])) {
					$where_conditions[] = "Type LIKE '%{$_GET['nameDesign']}%'";
				}
				if (!empty($_GET['price_min'])) {
					$where_conditions[] = "Rate >= {$_GET['price_min']}";
				}
				if (!empty($_GET['price_max'])) {
					$where_conditions[] = "Rate <= {$_GET['price_max']}";
				}
				$where_clause = implode(' AND ', $where_conditions);
				$result = $mysqli->query("SELECT * FROM designs WHERE $where_clause");
			} else {
				$result = $mysqli->query("SELECT * FROM designs");
			}

			// Display each material in a table row with update and delete links
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["design_id"] . "</td>";
				echo "<td>" . $row["Type"] . "</td>";
				echo "<td>" . $row["Rate"] . "</td>";
				echo "<td><a href='updateDesigns.php?id=" . $row["design_id"] . "' class='update'>Update</a> <a href='deleteDesign.php?id=" . $row["design_id"] . "'>Delete</a></td>";
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
						alert("Location created successfully");
					} else {
						alert("Error: " + this.responseText);
					}
				}
			};
			xhr.open("POST", "createDesign.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.send("design_name=" + document.getElementsByName("design_name")[0].value + "&price=" + document.getElementsByName("price")[0].value);
		}
		</script>
</html>