<html>
	<head>
		<title>Quality Hand Car Wash: Contact Us</title>
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
		<script src="js/jquery.min.js"></script>
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
				</p></div>
				<!--End-logo-->
				<!--start-top-nav-->
				<div class="top-search-social-nav">
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="Facebook" alt=""></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="Twitter" alt=""></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Googlepluse" alt=""></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss" alt=""></a></li>
						
						
                        </li>
						
						
                        <a href="login.html"><button type="button">Log in</button></a>
<a href="register.html"><button type="button">Sign Up</button></a> 
					</ul>
				</div>
				<div class="clearfix"> </div>
				<!--End-top-nav-->
			</div>
			<!--End-header-->
		</div>
		
		
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
	                  <li class="home"><a href= "index.html">Home</a></li>
					  <li class=""><a href="about.html">About Us</a></li>
					  <li class=""><a href="services.html">Services</a></li>
					  <li class=""><a href="gallery.html">Gallery</a></li>
					  <li class="contact"><a href="contact.html">Contact</a></li>	        
	              </ul>
	            </div>
				
				
				
				</div>
			</div>
			


<?php
$conn = mysqli_connect("localhost","root","","qualitycarwash");
$ContactPerson = $_POST ["ContactPerson"];
$ContactEmail = $_POST ["ContactEmail"];
$Time = $_POST ["Time"];
$Date = $_POST ["Date"];
$ServiceName= $_POST ['ServiceName'];






$query = "INSERT INTO booking VALUES  ('','$ContactPerson','$ContactEmail','$Time','$ServiceName','$Date','pending')";

$results = mysqli_query($conn , $query);
if  ($results)
{
$Message = "Your booking has been submited to the web site and you will soon get a confirmation email";
echo "Your booking has been submited to the web site and you will soon get a confirmation email!!!";
// mail($Email,"Booking Request",$Message);
}
else
{
echo "try again ,not successful";
}
mysqli_close($conn);
?>

<html>
<body>
</body>
</html>