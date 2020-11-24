<?php
//Authenticate the user:
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id'])) {
		header("location: login-form.html");
		exit();
	}
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<title>Control Panel</title>
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +966 592022405 </li>
			</ul>
			<ul class="logreg">
				<li><a href="logout.php">LogOut </a> </li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>  -->
				
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="home.php">HOME</a> </li>
		
				
				<li>
					<a href="contact.html">CONTACT</a>
 
				</li>
			</ul>
		</div>
	</nav>
</div>



<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/porche.jpg" alt="The Glory">
				
			</div>
			<div class="item">
				<img src="image/porche.jpg" alt="The Glory">
				
			</div>
			
		</div>
	
	</div>
</div>





<h2 style="text-align:center; background-color:black; color:white;">Control Panel</h2>
<form id="loginForm" name="loginForm" method="post"  align="center">
<table align="center"><br/>
<tr>
    <td><a href="AdminAdd.php"> &nbsp; Add item &nbsp; &nbsp;  </a></td>
	</tr><br/><tr>
    <td><a href="AdminDelete.php"> &nbsp; Delete item &nbsp; &nbsp;  </a><br/></td>
	</tr>
	<tr><td><a href="AdminUpdate.php"> &nbsp; Edit item  </a></td></tr>
</table><br/>

</form>


<br/><br/><br/>
<br>  <br>  <br> <br>   <br>  <br> <br>  <br>  <br>

	<div class="bottommenu">
	
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation"><a href="contact.html">CONTACT US</a></li>
		</ul>
		
		 <img src="image/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				    <p>Copyright &copy The Glory. All Rights Reserved. | Contact Us: +966 592022405</p>
				</div>
				
			</div>
	</div>


</body>
</html>
