


<!-- THIS CONTAINS USER LOGIN VALIDATION:
		USER LOGS IN USING 1. AADHAR 2. PASSWORD
	after LOGGING IN USER CAN VIEW ALL OF HIS PAST RECORDS ON BLOCKCHAIN
	DATABASE - user_registration
	TABLE 	 - users	    
 -->




<?php 
//echo "abc";
include('server1.php')

 ?>


		<head>
			<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>


		<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.php">Home</a>
					
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->


<!-- Start about Area -->
			<section class="about-area" id="user-login">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right no-padding">
							<h1>PATIENT LOGIN</h1>
							
		<form action="user.php" method="post">
								
									<div class="col-lg-12 d-flex flex-column">
										<input name="aadhar" placeholder="Aadhar ID" class="form-control mt-20" required type="text" required>
									</div>
									<div class="col-lg-6 d-flex flex-column">
										<input name="password" placeholder="Password" class="form-control mt-20" required type="password" required>
									</div>
									
									<!-- <div class="col-lg-6 d-flex flex-column">
										

										 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" 


										<input id="datepicker2" name="app-date" class="single-in mt-20"  onblur="this.placeholder = 'Appoinment date'" type="text" placeholder="Appoinment date" required>
									</div>
									<div class="col-lg-12 flex-column">
										<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
-->
									<div class="col-lg-12 d-flex justify-content-end send-btn">
										<button class="submit-btn primary-btn mt-20 text-uppercase " name="login_user">Log in<span class="lnr lnr-arrow-right"></span></button>
									</div>
 
									<div class="alert-msg"></div>
						
							</form>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End about Area -->





<!-- <?php //echo "after logging in he views records" ?>
 -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/parallax.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/main.js"></script>


