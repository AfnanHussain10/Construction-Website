<?php 

session_start();
//unsetting user info to logout
if(isset($_SESSION['USER'])){
	unset($_SESSION['USER']);
}

if(isset($_SESSION['LOGGED_IN'])){
	unset($_SESSION['LOGGED_IN']);
}

header("Location: landing.php");
die;

