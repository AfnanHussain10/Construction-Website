<?php
require "functions.php"; 
require_once('db_connect.php');

// Retrieve data from database
$sql = "SELECT MONTH(date) AS month, COUNT(*) AS count FROM users GROUP BY MONTH(date)";
$result = mysqli_query($mysqli, $sql);

// Format data as JSON object
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
$data = json_encode($data);
?>
<!DOCTYPE html>
<html>

<head>
<?php include('header.html')?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="astyle.css">

</head>
<body>

<nav>
        <?php include('navbar.php') ?>
    </nav>

    <div class="container-fluid pt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <br><br>
            <h2 style="text-align:center; font-size:50px; padding-left:0px!important;">User Signup Trend</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <div class="card">
          <div class="card-body">
            <canvas id="myChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    // Retrieve data from PHP and parse as JSON object
    var data = <?php echo $data; ?>;

    // Create chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: data.map(item => new Date(2000, item.month - 1).toLocaleString('default', { month: 'long' })),
        datasets: [{
          label: 'Number of Users Signed Up',
          
          data: data.map(item => item.count),
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgb(75, 192, 192)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>
