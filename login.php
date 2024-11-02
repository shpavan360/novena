<!DOCTYPE html>
<html lang="zxx">
<head>
	 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Guru Krupa Enterprises</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet"  href="css/order.css">
	</head>
	<body onload="myFunction()" style="margin: 0;" id="top">
	<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom"></div>
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:akshaysg83@gmail.com"><i class="icofont-support-faq mr-2"></i>akshaysg83@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Location : Vidhyanagara 2<sup>nd</sup> Bus Stop, Davanagere	 </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4">823-4565-13456</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="images/lungs.jpg" alt="" class="img-fluid">
			  	<img src="images/gp.jpeg" alt="logo" class="img-fluid" width="60%"> 
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
			  	<li class="nav-item"><a class="btn btn-main-2 btn-icon btn-round-full" href="signin1.html">Sign in</a></li>
				<a class="nav-link" href="index.html">Home</a>
			  </li>

			  	</li>

			 
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	<form method="post" action="login.php">
		<h2>Login</h2><br><br><br>
		<div id="l1">
		<label><span style="color:red;">*</span>Email Id / Mobile Number : </label><br>
		<input type="text" name="userid" placeholder="Enter email / mobile" required /><br><br>
		</div>
		<div id="l1">
		<label><span style="color:red;">*</span>Password : </label><br>

		<input type="text" name="pass" placeholder="Enter Your Password" required /><br><br>
	    </div>
	    <button type="submit">LOGIN</button>
	    <!--input type="submit" id="log" value="LOGIN" /-->
	    <br><br><br>
	    <p>Don't have an Account <a href="signin1.html" style="color:red">Click Here</a> to Register</p>
	</div>
	
</div>
</form>
<?php  
if(($_SERVER['REQUEST_METHOD'])=="POST")
{
	$custname=$_REQUEST['userid'];
    $pass=$_REQUEST['pass'];
}
$servername="localhost";
$username="root";
$password="";
$database="customer";	
$con=mysqli_connect($servername,$username,$password,$database);
      
        //to prevent from mysqli injection  
        $custname = stripcslashes($custname);  
        $pass = stripcslashes($pass);  
        $custname = mysqli_real_escape_string($con, $custname);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from customer where custemail = '$custname' and pass = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script>alert('Login successfull');";  
            echo "window.location='index.php'";
        echo "</script>";
        }  
        else{  
            echo "<script>alert('login failed. Invalid username or password.');</script>";  
        }     
?>  
</div>
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/lungs.jpg" alt="" class="img-fluid">
			  	<img src="images/gp.jpeg" alt="logo" class="img-fluid" width="60%">
					</div>
					<p></p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:akshaysg83@gmail.com">akshaysg83@gmail.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">GURU KRUPA ENTERPRISES<br>
						</span></a>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>
