<?php 

session_start();

function signup($data)
{
	$errors = array();

	$check = database_run("select * from users where username = :username limit 1",['username'=>$data['username']]);
	if(is_array($check)){
		$errors[] = "That username already exists";
	}
	//validate 


	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}

	if($data['password'] != $data['repassword']){
		$errors[] = "Passwords must match";
	}

	$check = database_run("select * from users where email = :email limit 1",['email'=>$data['email']]);
	if(is_array($check)){
		$errors[] = "That email already exists";
	}

	//save
	if(count($errors) == 0){
		$arr['name'] = $data['name'];
		$arr['username'] = $data['username'];
		$arr['email'] = $data['email'];
		$arr['password'] = hash('sha256',$data['password']);
		$arr['date'] = date("Y-m-d H:i:s");

		$query = "insert into users (name,username,email,password,date) values 
		(:name,:username,:email,:password,:date)";

		database_run($query,$arr);
	}
	return $errors;
}

function login($data)
{
	$errors = array();
	//validate 
	$check = database_run("select * from users where email = :email limit 1",['email'=>$data['email']]);
	if(!is_array($check)){
		$errors[] = "That email does not exists";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}
 
	//check
	if(count($errors) == 0){

		$arr['email'] = $data['email'];
		$password = hash('sha256', $data['password']);

		$query = "select * from users where email = :email limit 1";

		$row = database_run($query,$arr);

		if(is_array($row)){
			$row = $row[0];

			if($password === $row->password){
				
				
				$_SESSION['USER'] = $row;
				$_SESSION['LOGGED_IN'] = true;
				$_SESSION['username']=$row->username;
				if ($row->userType==='admin'){
					header("Location: AdminAccount.php");
					die;
				}
			}else{
				$errors[] = "wrong email or password";
			}

		}else{
			$errors[] = "wrong email or password";
		}
	}
	return $errors;
}

function forgotPassword($data){
	$email = $data['email'];
	require_once('db_connect.php');
    // Check if email exists in database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($mysqli, $query);
	$errors = array();
    if (mysqli_num_rows($result) > 0) {
        // Generate a unique reset password token and insert it into the database
        $token = bin2hex(random_bytes(16));
        $query = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
        mysqli_query($mysqli, $query);

        // Send a password reset email to the user
        require 'mailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'afnan.h5050@gmail.com';           // SMTP username
        $mail->Password = 'vhfruuxtvmphbxrc';              // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('afnan.h5050@gmail.com', 'Afnan');
        $mail->addAddress($email);                            // Add a recipient
        $mail->addReplyTo('afnan.h5050@gmail.com');

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = 'To reset your password, please click on the following link: http://localhost:3000/reset-password.php?token=' . $token;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            $errors[] = 'Link could not be sent.';
        } else {
            $errors[] =  'A password reset link has been sent to your email address.';
        }
    } else {
        $errors[] =  'Invalid email address.';
    }
	return $errors;
}

function resetPassword($data){
	// Database configuration
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "estimationmodel";

// Create a database connection
$mysqli = new mysqli($host, $user, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
	$errors=array();
	$token = $_POST['token'];
	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}

	if($data['password'] != $data['repassword']){
		$errors[] = "Passwords must match";
	}

	if(count($errors)===0){
		$password = hash('sha256', $_POST['password']);

		// Update password in database
		$query = "UPDATE users SET password = '$password', reset_token = NULL WHERE reset_token = '$token'";
		mysqli_query($mysqli, $query);
		$errors[]= 'Your password has been reset.';
	}

	return $errors;
}

function database_run($query,$vars = array())
{
	$string = "mysql:host=127.0.0.1;dbname=estimationmodel";
	$con = new PDO($string,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}

function check_login($redirect = true){

	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}

	if($redirect){
		header("Location: login.php");
		die;
	}else{
		return false;
	}
	
}

