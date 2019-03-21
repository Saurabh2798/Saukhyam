      
      

	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Saukhyam</title>

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
			<style>
				.no-js #loader { display: none;  }
				.js #loader { display: block; position: absolute; left: 100px; top: 0; }
				.se-pre-con {
				  position: fixed;
				  left: 0px;
				  top: 0px;
				  width: 100%;
				  height: 100%;
				  z-index: 9999;
				  background: url(simple-pre-loader/images/loader-64x/Preloader_3.gif) center no-repeat #fff;
				}
				.qwerty{
				  background-color: #fff;
				  border: none;
				  color: black;
				  padding: 10px 20px;
				  text-align: center;
				  display: inline-block;
				  margin: 4px 2px;
				  cursor: pointer;

				}
				.qwerty:hover{
					color: blue;
				}
				.qwerty:active{
					border:none;
				}
			</style>
		</head>
		<body>
			<!-- Preloader start -->
			<div class="se-pre-con"></div>
			<!-- Preloader End -->

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
									<a href="#home">Home</a>
									<a href="#service">Services</a>
									<!-- <a href="#appoinment">User signup</a> -->
									<a><button data-toggle="modal" data-target="#adminModal" class="qwerty" style="border: none; border-color: #fff; border-width: 0px;">ADMIN</button></a>
									<a href="user.php">User Login</a>
									<a href="register1.php">User Registration</a>
									<a href="#governance">City Insights</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="padding-top: 0;">
						<div class="banner-content col-lg-6 col-md-12">
							<h1>
								Welcome to
							</h1>
							<h1 class="text-uppercase" style="font-size: 6vw;">
								 Saukhyam <br>
							</h1>
								<h1 class="text-uppercase" style="padding: 0;">
									आत्मज्ञानं आरम्भः
								</h1>
							<h3>
								For Healthy and Smart PUNE! 
							</h3>
							<a href="#service"><button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button></a>
						</div>
						<div class="col-lg-6 d-flex align-self-end img-right">
							<img class="img-fluid" src="img/no header-img.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


<!-- Admin login modal start -->
 <!-- Modal -->
  <div class="modal fade" id="adminModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->


      <div class="modal-content" style=" margin: 0; padding:0; ">
        <div class="modal-header" style="background-color:#212529; margin: 0;">
          <h1 style="text-align: center; color: #fff;">Log In</h1>
        </div>
        <div class="modal-body row d-flex justify-content-center align-items-center" style=" margin: 0; padding:0; ">
          <div class="col-lg-12 col-md-12 about-right no-padding" style="background-color:#212529; margin: 0;">
							
							<form class="booking-form"  method="post" action = "index.php">
								<div class="row">
								<div class="col-lg-12 d-flex flex-column">
										<input name="adminId" placeholder="Admin ID" autocomplete="off" class="form-control mt-20" type="text" required>
									</div>
									<div class="col-lg-12 d-flex flex-column">
										<input autocomplete="off" type="password" name="adminpassword" placeholder="Enter password" class="form-control mt-20" required>
									</div>
 									<div class="col-lg-12 d-flex justify-content-end">
										<input type="submit" value="Log In">
									</div>

									<div class="alert-msg"></div>
								</div>
							</form>


<!-- <form method="post" action = "index.php">  
  Aadhar: <input type="text" name="adminId" autocomplete="off">
  <br><br>
  Password: <input type="password" name="adminpassword" autocomplete="off">
  <br><br>
  <input type="submit" placeholder="Log In" value="Log In">  

</form>
 -->




<!-- <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         password: <input type = "password" name="password" />
         <input type = "submit" />
      </form> -->




						</div>
        </div>
        <div class="modal-footer" style="background-color:#212529; margin: 0; padding: 10px; ">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<!-- Admin modal end -->


			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-users"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Users</h4>
									<p>Patients benefit from a holistic, transparent view of their medical history, and in the age of online banking and social media, patients are increasingly willing, able and desirous of managing their data on the web and on the go.</p>

								</div>
							</div>
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-lock"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Complete Privacy</h4>
									
									<p>All the data present in you Wallet,is encrypted by your password,which means no Hospital can view or alter your data without your permission.</p>
									
								</div>
							</div>
							<div class="single-feature d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-chart-bars"></span>
								</div>
							<div class="desc">
									<h4 class="text-uppercase">Statistical Analysis</h4>
									<p>
									Data is collected and organized and analysis is performed over the data to provide meaningful insights through visualizations. These visualizations will help PMC to take required measures regarding the health issues. 
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-book"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Hospitals</h4>
									<p>The ledger, too, could be used for general health care management, such as supervising drugs, regulation compliance, testing results, and managing healthcare supplies.</p>
								</div>
							</div>
							<div class="single-feature d-flex flex-row pb-30">
								<div class="icon">
									<span class="lnr lnr-heart-pulse"></span>
								</div>
								<div class="desc">
									<h4 class="text-uppercase">Prediction Of Epidemics</h4>
									Machine learning algorithms will be used over organized data which will be collected through this digital platform. These algorithms will help us predict forthcoming epidemics, which can be used for taking preventive measures as well as drugs procurement.
								</div>
							</div>
							<div class="single-feature d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-bug"></span>
								</div>
								
									<div class="desc">
									<h4 class="text-uppercase">Easy Claims</h4>
									<p>
										The PMC will be included in platform where death/birth validation from hospital will be made available this will help in quick dispatch of these certificates. Similarly various required invoices for availing insuarance will be provided as proof of delivery helping to ease claims.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End feature Area -->


			<!-- <!-- Start about Area -->
			

<!-- ********************************************************************************************************************************************************************************* -->
		<!-- Start consultans Area -->
		<!-- <section class="consultans-area section-gap" id="consultant">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-80 header-text">
						<h1>Our Consultants</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 vol-wrap">
						<div class="single-con">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="img/MOHFW.jpg" alt="">
									<div class="content-details fadeIn-bottom">
										<h4>Ministry of Health</h4>
										<p>https://mohfw.gov.in/</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 vol-wrap">
						<div class="single-con">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="img/pmc.png" alt="">
									<div class="content-details fadeIn-bottom">
										<h4>Andy Florence</h4>
										<p>
											inappropriate behavior
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 vol-wrap">
						<div class="single-con">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="img/c3.jpg" alt="">
									<div class="content-details fadeIn-bottom">
										<h4>Andy Florence</h4>
										<p>
											inappropriate behavior
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 vol-wrap">
						<div class="single-con">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="img/c4.jpg" alt="">
									<div class="content-details fadeIn-bottom">
										<h4>Andy Florence</h4>
										<p>
											inappropriate behavior
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->
		<!-- End consultans Area -->
<!-- ********************************************************************************************************************************************************************************* -->





		<!-- Start fact Area -->
		<section class="facts-area pt-100 pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter">2536</h2>
						<p class="text-uppercase">Patients Registered</p>
					</div>
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter">6784</h2>
						<p class="text-uppercase">Records Stored</p>
					</div>
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter">1059</h2>
						<p class="text-uppercase">Hospitals Served</p>
					</div>
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter">2239</h2>
						<p class="text-uppercase">Lives Saved</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end fact Area -->

		<!-- start survey statistics -->
		<h1 style="margin-left: 40%;">	City Insights</h1>
		<!-- end survey statistics -->

		<!-- Start blog Area -->
		<section class="blog-area section-gap" id="governance">
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="monthlydisease.php" allowfullscreen></iframe>
			</div>
		</section>
		<!-- end blog Area -->

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<a href="#myPage" title="To Top">
				    <span class="glyphicon glyphicon-chevron-up"i style="color: #fff"></span>
				  </a>
				<div class="row">
				<!-- 	<div class="col-lg-2  col-md-6">
						<div class="single-footer-widget">
							<h6>Top Products</h6>
							<ul class="footer-nav">
								<li><a href="#">Managed Website</a></li>
								<li><a href="#">Manage Reputation</a></li>
								<li><a href="#">Power Tools</a></li>
								<li><a href="#">Marketing Service</a></li>
							</ul>
						</div>
					</div> -->
					<div class="col-lg-4  col-md-4">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Contact Us</h6>
							<p>
								Savitribai Phule University, Pune, Maharashtra.
							</p>
							<h3>012-6532-568-9746</h3>
							<h3>012-6532-568-97468</h3>
						</div>
					</div>
					<!-- <div class="col-lg-6  col-md-12">
						<div class="single-footer-widget newsletter">
							<h6>Newsletter</h6>
							<p>You can trust us. we only send promo offers, not a single spam.</p>
							<div id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/GET?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

									<div class="form-group row" style="width: 100%">
										<div class="col-lg-8 col-md-12">
											<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										</div>

										<div class="col-lg-4 col-md-12">
											<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
										</div>
									</div>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div> -->
				</div>

					<p class="col-lg-6 col-sm-12 footer-text m-0">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with &#9829; by <a href="index.php" target="_blank">SAUKHYAM
						</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
<!-- 					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div> -->
				</div>
			</div>
		</footer>
		<!-- End footer Area -->

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
		<script src="js/preloader.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		
<script>

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".banner-content a[href='#service'], footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
	</body>
	</html>





























































































<!-- 
<div class="row justify-content-center">
					<div class="col-md-8 pb-30 header-text">
						<h1>Our Recent Blogs</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="single-blog col-lg-4 col-md-4">

						<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
						<h4>
							<a href="#">Portable Fashion for young women</a>
						</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
							commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							<div>
								<img class="img-fluid" src="img/user.png" alt="">
								<a href="#"><span>Mark Wiens</span></a>
							</div>
							<div class="meta">
								13th Dec
								<span class="lnr lnr-heart"></span> 15
								<span class="lnr lnr-bubble"></span> 04
							</div>
						</div>
					</div>
					<div class="single-blog col-lg-4 col-md-4">
						<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
						<h4>
							<a href="#">Summer ware are coming</a>
						</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
							commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							<div>
								<img class="img-fluid" src="img/user.png" alt="">
								<a href="#"><span>Mark Wiens</span></a>
							</div>
							<div class="meta">
								13th Dec
								<span class="lnr lnr-heart"></span> 15
								<span class="lnr lnr-bubble"></span> 04
							</div>
						</div>
					</div>
					<div class="single-blog col-lg-4 col-md-4">
						<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
						<h4>
							<a href="#">Summer ware are coming</a>
						</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
						</p>
						<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							<div>
								<img class="img-fluid" src="img/user.png" alt="">
								<a href="#"><span>Mark Wiens</span></a>
							</div>
							<div class="meta">
								13th Dec
								<span class="lnr lnr-heart"></span> 15
								<span class="lnr lnr-bubble"></span> 04
							</div>
						</div>
					</div>
				</div> -->