<?php
	//Start session
	session_start();
   
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_DATABASE = 'web2';
	
	//Connect to mysql server
	$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
	if(!$con) {
	die('Failed to connect to server: ' . mysqli_error());}
	mysqli_query($con, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

	//Select database
	$db = mysqli_select_db($con, $DB_DATABASE);
	if(!$db) {
	die("Unable to select database");}  



/*	
if(isset($_POST['submitCourse'])){
	extract($_POST);
	
	
	$department=$_POST['department'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$photo=$_POST['photo'];
	$video=$_POST['video'];
	$number=$_POST['number'];
			
	$add_qry = "INSERT INTO `ans17_collage`.`course` (`id`, `category_id`, `title`, `description`, `IMG`, `video`, `course_number`) VALUES (NULL, '$department', '$title', '$description', '$photo', '$video', '$number');";
	$add_result=mysqli_query($con,$add_qry);
	
	if($add_result){
		echo "<script> alert('added successfully');</script>"; }
	else{
		echo "<script> alert('failed to add');</script>"; }	
}
*/

	
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



  <br> <br>   <br>  <br> <br>  <br>  <br>
  
  
<h2 style="text-align:center; background-color:black; color:white;">Update Item</h2>
<form method="get" action="UpdateItem.php" align="center"><br/>
<select name="first" id="first">
	<option>select an item to update </option>
	<?php
					$get_item_qry= "select * from item;";
					$result_item = $con->query($get_item_qry);
					if ($result_item) {
						if ($result_item->num_rows > 0) {
							while($row =  $result_item->fetch_assoc()) { 
								echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
								}//end while
						}
					}
				?>
</select>
<br><br><br>		
		
<input   style="margin:auto; display:block;" id="submitFirst" name="submitFirst" type="submit" value="Next"/>
<br>
<input  style="margin:auto; display:block; " type="button" value="Cancel" onclick="history.back()"/>
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