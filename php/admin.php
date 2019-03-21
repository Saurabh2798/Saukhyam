<!-- THIS CONTAINS ADMIN LOGIN VALIDATION:
		ADMIN LOGS IN USING 1. AADHAR 2. PASSWORD
	
	DATABASE - user_registration
	TABLE 	 - adminlogin	    
 -->





<?php include 'server1.php' ?>

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

		<!-- 	<style type="text/css">
				input[type=number] {
          height: 45px;
          width: 45px;
          font-size: 25px;
          text-align: center;
          border: 1px solid grey;
   			   }
    	  input[type=number]::-webkit-inner-spin-button,
    	  input[type=number]::-webkit-outer-spin-button {
     	   -webkit-appearance: none;
    		    margin: 0;
      }
      	.otp:active{
      		 transform: translateY(4px);
      	} 
			</style> -->
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
									<a href="index.html">Home</a>
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
							<h1>Log in</h1>
							<form class= action="admin.php" method="post">
								<div class="row">
									<div class="col-lg-12 d-flex flex-column">
										<input name="aadhar" placeholder="Aadhaar ID" autocomplete="off" class="form-control mt-20" required="" type="text" required>
									</div>
									<div class="col-lg-12 d-flex flex-column">
										<input autocomplete="off" type="tel" id="phone" name="phno" placeholder="Mobile No." pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control mt-20" required>
									</div>
									<!-- <div class="col-lg-12 d-flex flex-column">
										 <button type="button" class="primary-btn mt-20 text-uppercase otp">Send OTP<span class="lnr lnr-arrow-right"></span></button>
								<br>
									<div class="form-group">
									        <label>Enter the OTP</label>
									        <input id="codeBox1" type="number" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)"/>
									        <input id="codeBox2" type="number" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)"/>
									        <input id="codeBox3" type="number" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)"/>
									        <input id="codeBox4" type="number" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)"/>
									    </div>
									</div> -->
									
									
									
<!-- 									<p>1. Demographic authentication 2. check if the user is already registered</p> -->
									<!-- <div class="col-lg-6 d-flex flex-column">
										<input id="datepicker2" name="app-date" class="single-in mt-20"  onblur="this.placeholder = 'Appoinment date'" type="text" placeholder="Appoinment date" required>
									</div>
									<div class="col-lg-12 flex-column">
										<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
 -->
									<div class="col-lg-12 d-flex justify-content-end send-btn" style="margin-top: 2%;">
<!-- 										<button class="btn btn-primary text-uppercase" type="submit">Log in<span class="lnr lnr-arrow-right"></span></button>
 -->
 										<input type="submit" name="admin_admin" value="Log In">
 										</div>

									<div class="alert-msg"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End about Area -->

<?php 

echo "
	
	  1. Admin fills out the user details - name, phone no. etc(demographic authentication)
	  2. An otp will be sent to the user
	  3. user then tells the otp to the admin allowing him to start the session.
	  4. admin issues a wallet for himself and adds transaction to the user's past records, the transaction is verified and appended.
	  5. This session will continue for the complete period for which the user was being treated. 
	  "
 ?>

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
<!-- 		 <script>
      function getCodeBoxElement(index) {
        return document.getElementById('codeBox' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 4) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }
      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }
    </script> -->

