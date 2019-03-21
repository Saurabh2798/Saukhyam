<?php 
//echo "abc";
include('server1.php')

 ?>      
      

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
                  <a href="index.php">Home</a>
                  <a href="index.php #service">Services</a>
                </nav>
                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header Area -->

      <!-- Start about Area -->
      <section class="about-area" id="appoinment">
        <div class="container-fluid">
          <div class="row d-flex justify-content-end align-items-center">
           <!--  <div class="col-lg-6 col-md-12 about-left no-padding">
              <img class="img-fluid" src="img/about-img.jpg" alt="" style="min-height: 800px;">
            </div> -->
            <div class="col-lg-12 col-md-12 about-right no-padding text-center">
              <h1 style="margin-top: 5%;">Sign up</h1>
              <p>get yourself a MedWallet</p>
              <form action="register1.php" method="POST">
                <div class="row">
                  <div class="col-lg-6 d-flex flex-column">
                    <input autocomplete="off" type="id" id="aadhar" name="aadhar" placeholder="Aadhar ID" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" class="form-control mt-20" required></div>
                     <div class="col-lg-6 d-flex flex-column">
                      <input name="name" placeholder="Name" autocomplete="off" class="form-control mt-20" required="" type="text" required>
                  </div>
                  <div class="col-lg-6 d-flex flex-column">
                    <input autocomplete="off" type="tel" id="phone" name="phno" placeholder="Mobile no." pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control mt-20" required></div>
                    <div class="col-lg-6 d-flex flex-column">
                     <input name="address" placeholder="Address" autocomplete="off" class="form-control mt-20" required="" type="text" required>
                  </div>
                 <div class="col-lg-6 d-flex flex-column">
                    <input autocomplete="off" type="date" id="birthdate" name="dob" placeholder="DD-MM-YYYY" pattern="[0-9]{2}[0-9]{2}[0-9]{4}" class="form-control mt-20" required></div>
                    <div class="col-lg-6 d-flex flex-column">
                     <select name="gender" class="form-control mt-20">
                         <option>Male</option>
                         <option>Female</option>
                         <option>Other</option>
                      </select> 
                  </div>
                  
                  <div class="col-lg-6 d-flex flex-column">
                    <input name="password_1" placeholder="Password" autocomplete="off" class="form-control mt-20" required="" type="password" required></div>
                    <div class="col-lg-6 d-flex flex-column">
                     <input name="password_2" placeholder="Confirm Password" autocomplete="off" class="form-control mt-20" required="" type="password" required>
                  </div>
                  <div><br>
                    <input type="submit" name="reg_user" style="margin-left: 35vw;">
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


    
  
  <!-- <form method="post" action="register1.php">
    <?php //include('errors.php'); ?>
    <div class="input-group">
      <label>Aadhar Number</label>
      <input type="text" name="aadhar">
    </div>
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php //echo $name; ?>">
    </div>
    <div class="input-group">
      <label>Phone Number</label>
      <input type="text" name="phno" value="<?php //echo $phno; ?>">
    </div>
    <div class="input-group">
      <label>Locality</label>
      <input type="text" name="address" value="<?php //echo $address; ?>">
    </div></br>
      <label>Date of Birth</label>
       <input type="date" name="dob">
      <label>Gender</label>
       <select name="gender">
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>

       </select>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form> -->

   
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
  $(".banner-content a[href='#appoinment'], footer a[href='#myPage']").on('click', function(event) {
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