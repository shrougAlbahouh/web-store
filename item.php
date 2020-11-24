<!doctype html>
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

$qry='SELECT * FROM item WHERE id='.$_GET['itemId'].';';
$result=mysqli_query($con, $qry);

//Check whether the query was successful or not
if($result) 
{
	$row = mysqli_fetch_array( $result );
	// display all members' names and Make every name a link to (member.php) which shows the details of the member 
		
				$ID=$row['id'];
				$name=$row['name'];
				$desc=$row['description'];
}
?>
				
				
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<style>
body {

  font-family: Arial;

}


form { 

width:500px;
  padding: 2px 150px;
}



/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;

}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}



/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.img {
    position: relative;
    float: left;
    width:  700px;
    height: 700px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
}

.img2 {
    position: relative;
    float: left;
    width:  200px;
    height: 200px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
}
</style>
</head>
<body>
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

  <br> <br>   <br>  <br> <br>  <br>  <br>
  <br> <br>   <br>  <br> <br>  <br>  <br>


  <br> <br>   <br>  <br> <br>  <br>  <br>

<!--_______________________________________ Carousel__________________________________ -->

<?php
echo"<h2 style='text-align:center'> $name </h2>";
?>

<div class="container">
  <div class="mySlides">

    <img class="img" src="image/4.jpg" alt="" style="width:60%">
  </div>

  <div class="mySlides">
    
 <img class="img" src="image/5.jpg" alt="" style="width:60%">	
  </div>


    

 

 

  <div class="row">
    <div class="column">
      <img class="demo cursor img2" src="image/4.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
	  
    </div>
    <div class="column">
      <img class="demo cursor img2" src="image/5.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
	  
    </div>
	</div>
	
	 <br>  <br> <br>  <br>  <br>
   <div class="row">
       

   
   <p>
   
   			   
<?php
				
			
				print("
					    
						<h3>Model: $name </h3>
						<h3>Description: $desc </h3>
						
						
						"); 
			
				



?>


</div>


</p>
  
 

<br> <br>  <br>  <br> <br>  <br> <br>  <br>  <br>







</div>
<?php
echo "<form method='post' action='item.php?itemId=$ID' onSubmit='return validateForm();'>"
?>
<div style="width: 400px;">
</div>

<div style="padding-bottom: 18px;font-size : 24px;">Write a Review</div>
<div style="padding-bottom: 18px;">Name<span style="color: red;"> *</span><br/>
<input type="text" id="name" name="name" style="width : 450px;" class="form-control"/>
</div>

<div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
<input type="email" id="email" name="email" style="width : 450px;" class="form-control"/>

</div>

<div style="padding-bottom: 18px;">Review<span style="color: red;"> *</span><br/>
<textarea id="review" false name="review" style="width : 450px;" rows="9" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Send" type="submit"/></div>

</form>

<?php

if(isset($_POST['skip_Submit'])){
	$username=$_POST['name'];
	$email=$_POST['email'];
	$review=$_POST['review'];
	$date= date("Y/m/d");
	
	$sql = "INSERT INTO comment (name, email, body,date) VALUES ('$username', '$email', '$review', '$date')";
	
	if(mysqli_query($con, $sql)){
    echo ("
	<div style='padding:2px 150px;'>
	<h2 style='color:#4CAF50;'>Thank you for your review..</h2>
	</div>
	");
} else{
    echo "<p>ERROR $sql. " . mysqli_error($link)."</p>";
}
}

?>



   <br>  <br> <br>  <br> <br>  <br>  <br>
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
	
<script>
var slideIndex = 1;
showSlides(slideIndex);



function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function validateForm() {
if (isEmpty(document.getElementById('name').value.trim())) {
alert('Name is required!');
return false;}

if (isEmpty(document.getElementById('email').value.trim())) {
alert('Email is required!');
return false;
}



if (isEmpty(document.getElementById('review').value.trim())) {
alert('Review is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }

</script>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>