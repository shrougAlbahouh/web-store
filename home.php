<!doctype html>


<html>
<head>
	<meta charset="UTF-8">
	<title>The Glory </title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
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
				<li><a href="login-form.html">Login </a> </li>
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
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
				<ul class="dropdown-menu dropdowncostume">
			
				
					
					
					<?php

//connection variables
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_DATABASE = 'web2'; //DB Name here

//Connect to mysql server
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
if(!$con) {
die('Failed to connect to server: ' . mysqli_error());
}

//Select database
$db = mysqli_select_db($con, $DB_DATABASE);
if(!$db) {
die("Unable to select database");
}

$qry="SELECT * FROM category";
$result=mysqli_query($con, $qry);

//Check whether the query was successful or not
if($result) 
{
	// display all
		while($row = mysqli_fetch_array( $result )){
				
				$name=$row['name'];
				$ID=$row['id'];
				Print "<li><a href='category.php?categoryId=$ID'>$name</a></li>"; 
			
				}
}

mysqli_free_result($result); // result freed per comment below. 
?>
					</ul>
				</li>

				
				<li>
					<a href="contact.html">CONTACT</a>
 
				</li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
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
<!-- ____________________Featured Section ______________________________--> 

 <br>  <br>  <br>  <br>  <br>  <br> <br>  <br>  <br> <br>  <br>  <br> <br>  <br>  <br> <br>  <br>  <br> <br>  <br>  <br>

<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>WA<span class="carstxt">C O L L E C T I O N S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
		
		

				<?php
				
$qry="SELECT * FROM category";
$result=mysqli_query($con, $qry);
//Check whether the query was successful or not
if($result) 
{
	// display all 
		while($row = mysqli_fetch_array( $result )){
				
				$name=$row['name'];
				$ID=$row['id'];
				Print("<div class='col-lg-6 costumcol colborder1'>
				<div class='row costumrow'>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon'>
						<img src='image/4.jpg' alt='porsche'>
					</div>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon'>
						<div class='featurecontant'>
						<br/>
						<h1> $name </h1>
						<button id='btnRM' onclick=\"location.href='category.php?categoryId=$ID'\">View</button>
						
		 				
			 			
						</div>
					</div>
				</div>
			</div>"); 
			
				}
}
?>
			
				
		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
 <br>  <br>  <br> <br>  <br>  <br> <br>  <br>  <br> <br>
	<div class="newslettercontent">
		<div class="leftside">
			<img src="image/border.png" alt="border">
			<h1>NEWSLETTER</h1>
			<p>Subscribe to the COLLECTIONCARS mailing list to <br>
				receive updates on new arrivals, special offers <br>
				and other discount information.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="image/6.jpg" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button>SUBSCRIBE</button>
		</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
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
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>