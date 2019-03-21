<?php
	
	require_once 'functions.php';
	
	$config=read_config();
	$chain=@$_GET['chain'];
	
	if (strlen($chain))
		$name=@$config[$chain]['name'];
	else
		$name='';

?>
<html>
	<head>	<!-- Mobile Specific Meta -->
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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>MultiChain Demo</title>
		<!--
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		-->
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">
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
				}</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
								<a href="./"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav>
<!-- 									<a href="./?chain=<?php //echo html($chain)?>&page=permissions"></a> 
 -->
									<a style="text-decoration: none;" href="./?chain=<?php echo html($chain)?>&page=create">Issue Wallet</a>
									<a style="text-decoration: none;" href="./?chain=<?php echo html($chain)?>&page=publish">Upload Reports</a>
									<a style="text-decoration: none;" href="./?chain=<?php echo html($chain)?>&page=view">View Records</a>
								</nav>
							   </div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->




		<div class="container" style="margin-top: 15vw;  ">
			<h1 class="text-uppercase" style="font-weight: 900; font-size: 4vw; text-align: center;"><?php if (strlen($name)) { ?>  <?php echo html($name)?>  <?php } ?></h1>
<?php
	if (strlen($chain)) {
		$name=@$config[$chain]['name'];
?>
			<!-- <nav class="navbar navbar-default">
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav"> -->
					<!-- 	<li><a href="./?chain=<?php //echo html($chain)?>">Node</a></li> -->
					<!-- 	<li><a href="./?chain=<?php //echo html($chain)?>&page=permissions">Permissions</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=issue" class="pair-first">Issue Asset</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=update" class="pair-second">| Update</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=send">Send</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=offer" class="pair-first">Create Offer</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=accept" class="pair-second">| Accept</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=create">Create Stream</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=publish">Publish</a></li>
						<li><a href="./?chain=<?php //echo html($chain)?>&page=view">View Streams</a></li>
					</ul>
				</div>
			</nav> -->

<?php
		set_multichain_chain($config[$chain]);
		
		switch (@$_GET['page']) {
			case 'permissions':
			case 'create':
			case 'publish':
			case 'view':
				require_once 'page-'.$_GET['page'].'.php';
				break;
		}
		
	} else {
?>
			<p class="lead"><br/>Choose an available HOSPITAL to get started:</p>
		
			<div class="container">
<?php
		foreach ($config as $chain => $rpc)
			if (isset($rpc['rpchost']))
				echo '<button class="lead btn btn-primary" style="padding:2%;"><a style="text-decoration: none; color:#fff;" href="./?chain='.html($chain).'">'.html($rpc['name']).'</a></button><br/><br/>';
?>
			</div>
<?php
	}
?>
		</div>
	</body>

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
</html>