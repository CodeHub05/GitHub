<?php
//start the new session
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Quality Hand Car Wash: Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!--tages-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Steel Industry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<!--start-wrap-->
		<div class="header">
		<div class="container">
			<!--start-header-->
				<!--start-logo-->
				<div class="logo">
                  <p><img src="images/Car_Wash_Logo.jpg" width="100" height="96" alt=""/><a href="index.html">Quality Hand Car Wash</a>
                  </p>
				</div>
				<!--End-logo-->
				<!--start-top-nav-->
				<div class="top-search-social-nav">
					<ul>
						<li class="active"><a href="#"><img src="images/facebook.png" title="Facebook" alt=""> </a>
                        </li>
                         <button type="button">Log in</button> 
                       <a href="logout.php"><button type="button">Log out</button></a> 
                        	
					</ul>
				</div>
				<div class="clearfix"> </div>
				<!--End-top-nav-->
		  </div>
		</div>
			<!--End-header-->		
		<div class="top-nav">
				<div class="container">
					<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>
	   			<div id="navbar" class="navbar-collapse collapse">
	              <ul class="nav navbar-nav">
	                  <li class="home"><a href="index.html">Home</a></li>
					  <li class=""><a href="about.html">About Us</a></li>
					  <li class=""><a href="services.html">Services</a></li>
					  <li class=""><a href="gallery.html">Gallery</a></li>
					  <li class="contact"><a href="contact.html">Contact</a></li>	        
	              </ul>
	            </div>
				</div>
			</div>
	
	<div class="content">
		<div class="container">
			<div class="grids">
				<h4></h4><h5> </h5>
<div class="section group">
  <div class="col-md-3 we-do"> </div>
</div>
			</div>
			<div class="recent-places">
				<?php
//start the new session


$Email = $_POST['Email'];
$Password =$_POST ['Password'];
$_SESSION['login']=0;
if (($Email=="") || ($Password=="")) {
    echo" Invlaid user name or password <a href=sign_up.html> 
	Click Here to Go Back to Sign up Page </a>";
}
else
	{   
	$mysql_link=mysql_connect("localhost","root","") 
	or die( "Unable to connect to the server");
    mysql_select_db("qualitycarwash");
	$Password = md5($Password);
	//create and issue the query
	$query = "SELECT * from tblcustomer
	WHERE (Email = '$Email') AND (Password = '$Password')";
	$result = mysql_query($query) or die( "Database Error");
	//get the number of rows in the result set; should be 1 if a match
	if (mysql_num_rows($result)==1) {
    	$Name=mysql_result($result,0,"Name");
    	$Email=mysql_result($result,0,"Email");
	
		mysql_close();
		$_SESSION['Email'] = $Email;
		echo"<h2> Hello $Name </h2>";
		echo"<h2> Authentication Succeed !!! </h2>";
		echo"<a href=booking.html> Click Here to go to make a booking </a><br/>"; 


                echo "<a href=bookinghistory.php> Click here to see your previous bookings </a><br/>"; 
                echo "<a href=Reset_password.html> Click here to update password </a><br/>"; 
				 echo "<a href=cancelbooking.html> Click here to cancel your booking</a><br/>";


		}
	else
		{
			echo" Invlaid username or password <a href=signup.html> Click Here to Go Back to Sign up Page</a>";
		}
}
?>
			    </div>
                </div>
              
                </div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h3>About us</h3>
				<p>We are a Hand Car Wash Company Based in Suburban Adelaide</p>
				<a href="#">ReadMore</a>
			</div>			
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="copy-right">
		<p>&copy; 2016 Quality Hand Car Wash. All rights reserved | Design by <a href="https://sites.google.com/site/codehub05/"> CodeHub </a></p> <p> Acknowledgement: Boostrap content taken from <a href="http://w3layouts.com/"> W3layouts </a></p>
	</div>
	</body>
</html>

