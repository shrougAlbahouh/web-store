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


$first=$_GET['first'];

if(isset($_POST['submitItem'])){
	extract($_POST);
			
	$item=$first;
	$title=$_POST['title']; 
	$category=$_POST['category'];
	$description=$_POST['description'];
	
	$photo=$_POST['photo'];
	
				
	//$add_qry = "UPDATE item INTO item (`id`, `category_id`, `name`, `description`, `image`) VALUES (NULL, '$category', '$title', '$description', '$photo');";
	$update_qry = "UPDATE item SET category_id='$category', name='$title', description='$description', image='$photo' WHERE id=$item;";
	$add_result=mysqli_query($con,$update_qry);
	if($add_result){
		echo "<script> alert('Updated successfully');</script>";}
	
	else{
		echo "<script> alert('Failed to Update');</script>"; }
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
<title>Update Item</title>
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
				<li><a href="logout.php">Logout </a> </li>
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



<!------------------------------------ Main Body ------------------------------------>

<h2 style="text-align:center; background-color:black; color:white;"> Update Item Form </h2>
<br>
<form class="content" action="#" method="post" id="addForm" align="center" >

<table border="0" align="center">

<tr>
	   <th> Item name:  <span id="invalidTitle" style="color:red;"></span></th>
</tr>
	
	
<tr>
	<td>
	<br>
	<?php
		$get_item_qry= "select * from item where id=$first;";
		$result_item = $con->query($get_item_qry);
		$category_id=NULL;
		if ($result_item) {
			if ($result_item->num_rows > 0) {
			while($row =  $result_item->fetch_assoc()) {				
			echo'<input type="text" id="title" name="title" value="'.$row['name'].'" />';
			$category_id=$row['category_id'];
			}//end while
			}
		}
	?>
		
	</td>
	<br>
</tr>
<tr><th>Item's category:</th></tr>
	<tr><td>
	<select name="category" id="category">
	<?php 
$get_item_qry= "select * from category WHERE id= $category_id;";
					$result_item = $con->query($get_item_qry);
					if ($result_item) {
						if ($result_item->num_rows > 0) {
							while($row =  $result_item->fetch_assoc()) { 
								echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
								}//end while
						}
					}

					$get_item_qry= "select * from category;";
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
				</td></tr>
	
<tr>
	<th colspan="2"><br><br><br>Item's Description <span id="invalidDescription" style="color:red;"></span></th>
</tr>
	
	
<tr>
	<td align="center" colspan="2">
	<br>
		<?php
			$get_item_qry= "select * from item where id=$first;";
			$result_item = $con->query($get_item_qry);
				if ($result_item) {
					if ($result_item->num_rows > 0) {
						while($row =  $result_item->fetch_assoc()) { 
							echo'<textarea rows="5" id="description" name="description" cols="70">'.$row['description'].'</textarea>';
						}//end where
					}
				}
			?>
		
	</td>
</tr>
<tr><th><br/>photo:</th></tr>
<tr><td align="center" colspan="2"><br/>
<?php
			$get_item_qry= "select * from item where id=$first;";
			$result_item = $con->query($get_item_qry);
			if ($result_item) {
				if ($result_item->num_rows > 0) {
				while($row =  $result_item->fetch_assoc()) { 
					echo'<input id="photo" type="file"  value="'.$row['image'].'" name="photo"  />
					<p align="left">'.$row['image'].'</p>
					<input id="photo2" name="photo2" type="text" value="'.$row['image'].'" style="display:none;"/>';
					}//end while
				}
			}
			?>
			</td>
</tr>
</table>


<br><br><br>



		

<br><br>


<input class="btn" style="margin:auto; display:block; " id="submitItem" name="submitItem" type="submit" value="Update Item"/>
<br>
<input class="btn" style="margin:auto; display:block;" type="button" value="Cancel" onclick="history.back()"/>


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