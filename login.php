<?php

require "functions.php";

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$errors = login($_POST);

	if (count($errors) == 0) {
		header("Location: Account.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="loginstyle.css">
	<link rel="stylesheet" href="stylefooter.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Login</title>
</head>

<body>

<?php include('navrbar-user.php') ?>
	
	<form method="post" class="form "style="padding: 300px 0px;">
	
		<div class="form-container">
			<p class="title">Login</p>
			<form class="form">
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">

				</div>
				<div class="input-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">

					<div class="forgot">
						<a rel="noopener noreferrer" href="forgot-password-webpage.php">Forgot Password ?</a>
					</div>
				</div>
				<button class="sign" type="submit">Sign in</button>
			</form>

			<p class="signup">Don't have an account?
				<a rel="noopener noreferrer" href="signup.php" class="">Sign up</a>
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