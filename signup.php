<?php

require "functions.php";

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$errors = signup($_POST);

	if (count($errors) == 0) {
		header("Location: login.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="loginstyle.css">
	<link rel="stylesheet" href="stylefooter.css">
	<title>Signup</title>
</head>
<style>
	.space {
		padding-top: 15px;
	}
</style>

<body>
	<nav>
		<?php include('navrbar-user.php') ?>
	</nav>

	<form method="POST" class="form">
		<div class="bg-image"></div>
		<div class="form-container">
			<p class="title">Sign-up</p>
			<form class="form">
				<div class="input-group">

					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
				</div>
				<div class="input-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" placeholder="" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="">
				</div>
				<div class="input-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="">
				</div>
				<div class="input-group">
					<label for="repassword">Confirm Password</label>
					<input type="password" name="repassword" id="repassword" placeholder="">
				</div>
				<div class="space"></div>
				<button class="sign">Sign Up</button>

				<p class="signup">Already a member?
				<a rel="noopener noreferrer" href="login.php" class="">Login</a>
			</p>

				<?php if (count($errors) > 0) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php foreach ($errors as $error) : ?>
							<?= $error ?> <br>
						<?php endforeach; ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif; ?>
		</div>


	</form>
	<?php include('footer.php') ?>

	<iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:9999;"></iframe>
	
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php include('chatbotScript.php') ?>
</html>