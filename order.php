<html>
<head>
	 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Guru Krupa Enterprises</title>

  <!-- Favicon --><script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
	</head>
<body>
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
			  	<li class="nav-item"><a class="btn btn-main-2 btn-icon btn-round-full" href="Rent.html">Book Now</a></li>
				<a class="nav-link" href="index.html">Home</a>
			  </li>



			 
					
			  	</li>

			
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
<section class="section confirmation">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <h2 class="mt-3 mb-4">your Orders</h2>
                       </div>
      </div>
    </div>
  </div>
</section>

<!--
	<!?php
	if(($_SERVER['REQUEST_METHOD'])=="POST")
	{
		$name=$_REQUEST['cname'];
	    $phno=$_REQUEST['cmob'];
	    $email=$_REQUEST['cEmail'];
		
		$product=$_REQUEST['cprod'];
		$types=$_REQUEST['type'];

	

	}	
	?>
	<div id="print">
	<h2 align="center" style="color: steelblue;" >Bill</h2>

	<table align="center" class="table col-lg-9">

		<tr class="trow">
			<th>Name</th>
			<td><!?php echo $name;?></td>
		</tr>
		<tr>
			<th>Contact number</th>
			<td><!?php echo $phno;?></td>
		</tr>
		<tr>
			<th>Email</th>
<td><!?php echo $email;?></td>
</tr>
<tr>
			<th>Product</th>
<td><!?php echo $product;?></td>
</tr>
<tr>
			<th>Type</th>
<td><!?php echo $types;?></td>

		</tr>


	</table>
	  <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
	</div>
	<button onclick="handlePrint()">print</button>
	 <script type="text/javascript">
         function handlePrint() {
               window.frames["print_frame"].document.body.innerHTML = document.getElementById('print').innerHTML;
               window.frames["print_frame"].window.focus();
               window.frames["print_frame"].window.print();
         }
      </script>



	<!?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="order";
	$conn=mysqli_connect($servername,$username,$password,$database);
    $sql="INSERT INTO `book`(`name`,`phno`,`type`,`product`,`email`)VALUES('$name',$phno,'$types','$product','$email')";
    $result=mysqli_query($conn,$sql);
if($result){
	echo " your record is saved";
}
	?>
	-->
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

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Surgery </a></li>
						<li><a href="#">Wome's Health</a></li>
						<li><a href="#">Radiology</a></li>
						<li><a href="#">Cardioc</a></li>
						<li><a href="#">Medicine</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
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
						</span>Designed by <a href="https://VBANGINFOSOL.COM/" target="_blank">VBANG INFO SOLUTIONS</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
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
	</body>
</html>