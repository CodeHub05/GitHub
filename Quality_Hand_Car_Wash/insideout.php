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


<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("qualitycarwash", $conn);
$query = "Select name, description from service where sid=3";
 
$results = mysql_query($query, $conn);
while ($row = mysql_fetch_assoc($results))   {
    
                
 
?>
 
 
<h1 class="text-center"><?php echo$row['name'] ?></h1>

      <p><?php echo$row['description'] ?>    </p>
     
 












			    </div>
                </div>
               
                </div>
			</div>
		</div>
	</div>
	





<?php
}
mysql_close();
?>



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

