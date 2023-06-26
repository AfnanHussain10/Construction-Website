<?php
require "functions.php";

// Connect to database
require_once('db_connect.php');

if (check_login(false)) {
    $userID = $_SESSION['USER']->userID;


    // Retrieve saved estimations from database
    $sql = "SELECT 
    e.estimation_id, 
    e.area, 
    e.floor, 
    GROUP_CONCAT(CONCAT(m.MaterialName, ' (', em.quantity, ' ', em.unit, ')') SEPARATOR '<br>') AS materials, 
    e.estimated_cost, 
    e.searchOption
  FROM construction_estimations e
  LEFT JOIN estimation_material em ON e.estimation_id = em.estimation_id
  LEFT JOIN materials m ON em.material_id = m.MaterialID
  WHERE e.userID = '$userID'
  GROUP BY e.estimation_id, e.searchOption";
$result = mysqli_query($mysqli, $sql);

$estimationsAdv = array();
$estimationsBs = array();

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
  $searchOption = $row['searchOption'];
  $pos = strpos($searchOption, 'Advance Search');
  if ($pos !== false) {
      $estimationsAdv[] = array_merge($row, ['searchOption' => substr($searchOption, $pos + strlen('Advance Search '))]);
  } else {
      $pos = strpos($searchOption, 'Basic Search');
      if ($pos !== false) {
          $estimationsBs[] = array_merge($row, ['searchOption' => substr($searchOption, $pos + strlen('Basic Search '))]);
      }
  }
}
}



}
mysqli_close($mysqli);

?>

<!DOCTYPE html>
<html>

<head>
    <?php include 'header.html'; ?>
    <title>Favorites</title>
    <link rel="stylesheet" href="style2.css">

</head>


<body>
    <?php include('navrbar-user.php') ?>

    <section class="section-padding">
        <h2>Favorites</h2>
    </section>

    <?php if (count($estimationsBs) > 0) : ?>
        <table>
        <h3 style=" background-color: #fca311;">Basic Search</h3>
            <thead>
                <tr>
                    <th>Estimation ID</th>
                    <th>Area Range</th>
                    <th>Number of Floors</th>
                    <th>Estimated Cost (Rs.)</th>
                    <th>Design</th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estimationsBs as $estimation) : ?>
                    <tr>
                        <td><?php echo $estimation['estimation_id']; ?></td>
                        <td><?php echo $estimation['area']; ?></td>
                        <td><?php echo $estimation['floor']; ?></td>
                        <td><?php echo $estimation['estimated_cost']; ?></td>
                        <td><?php echo $estimation['searchOption']; ?></td>
                        <td class="delete-btn">
                            <button class="btn-delete" onclick="deleteEstimation(<?= $estimation['estimation_id'] ?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                    <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                                <span class="btn-deletetext">remove</span>
                            </button>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php if (count($estimationsAdv) > 0) : ?>
        <table>
            <h3 style=" background-color: #14213d; color:#f9f9f9;">Advance Search</h3>
            <thead>
                <tr>
                    <th>Estimation ID</th>
                    <th>Area (sq. ft.)</th>
                    <th>Number of Floors</th>
                    <th>Materials</th>
                    <th>Estimated Cost (Rs.)</th>
                    <th>Location</th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estimationsAdv as $estimation) : ?>
                    <tr>
                        <td><?php echo $estimation['estimation_id']; ?></td>
                        <td><?php echo $estimation['area']; ?></td>
                        <td><?php echo $estimation['floor']; ?></td>
                        <td><?php echo $estimation['materials']; ?></td>
                        <td><?php echo $estimation['estimated_cost']; ?></td>
                        <td><?php echo $estimation['searchOption']; ?></td>
                        <td class="delete-btn">
                            <button class="btn-delete" onclick="deleteEstimation(<?= $estimation['estimation_id'] ?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                    <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                                <span class="btn-deletetext">remove</span>
                            </button>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
   
        <?php endif; ?>
    <?php elseif(count($estimationsBs) == 0 && count($estimationsAdv) == 0) : ?>
        <p class="text">No saved estimations found.</p>
    <?php endif; ?>

    <?php include('footer.php') ?>
    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:99;"></iframe>


</body>
<?php include('chatbotScript.php') ?>
<script>
    function deleteEstimation(estimationID) {
        if (confirm("Are you sure you want to delete this estimation?")) {
            // Send AJAX request to delete the estimation from the database
            $.ajax({
                url: "delete-estimation.php",
                method: "POST",
                data: {
                    estimationID: estimationID
                },
                success: function(response) {
                    // Reload the page to show updated list of estimations
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                },
            });
        }
    }
</script>

</html>