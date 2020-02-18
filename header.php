<?php
	session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Taxa Adventure</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
									<li class="nav-item"><a class="nav-link" href="book-trip.html">Book trip</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li> -->
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li> -->
							<li class="nav-item"><a class="nav-link" href="bus.php">BUS</a></li>
							<li class="nav-item"><a class="nav-link" href="flight.php">FLIGHT</a></li>
							<li class="nav-item"><a class="nav-link" href="hotel.php">HOTEL</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav ml-auto">
							<!-- <li class="nav-item">
								<a href="#" class="primary-btn">Book a trip</a>
							</li> -->

							
							<?php
							if (isset($_SESSION['u_id'])) {
							?>

							<nav class="navbar navbar-light bg-light">
								  <!-- <span class="navbar-brand mb-0 h4"></span> -->
								  <a style="background-color: #9535f4;" class="nav-link" href="index.php"><?php echo $_SESSION['u_email']; ?></a>
							</nav>

							<?php 


								echo '
										<form action="includes/logout.inc.php" method="POST">
										<button type="submit" class="btn btn-warning" name="submit">Logout</button>
									 </form>
									 ';


									
							}
							
							else {
								echo '<li class="nav-item">
										<a href="login.php" class="primary-btn">Log in</a>
									  </li>
                                      <li class="nav-item">
                                        <a href="signup.php" class="primary-btn">Sign Up</a>
									</li>';
							}

							?>

							
							
							
							 
							
							


							
						</ul>
						
					</div>
				</div>
			</nav>
			
			<!-- <div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div> -->
		</div>
	</header>
	<!--================ End Header Menu Area =================-->