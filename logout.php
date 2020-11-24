<?php
	
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['id']);
	
	header("location: login-form.html");
	
	exit();

?>

