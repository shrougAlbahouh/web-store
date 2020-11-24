<?php
	//Start session
	session_start();
	
	$DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_DATABASE = 'web2';
	
	
	//Connect to mysql server
	$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
	if(!$con) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db($DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	

	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['password'];
	
	//Create query
	//$qry="SELECT * FROM members WHERE login='$login' AND passwd='".md5($_POST['password'])."'";
	$qry="SELECT * FROM admin WHERE username='$login' AND password='".$_POST['password']."'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
$member = mysql_fetch_assoc($result);
			$_SESSION['id'] = $member['id'];
			header("location: AdminControlPanel.php");
			exit();
		}else {
			//Login failed
			header("location: login-form.html");
			exit();
		}
	}else {
		die("Query failed");
	}
?>