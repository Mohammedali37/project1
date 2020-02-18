<?php 
include_once 'header.php';
?>

	<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<h2 style="text-align:center;">Please Sign up Here</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->


<!--================ Start Book a Trip Area =================-->
<section class="trip-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="trip-form-section">
						<h1>Sign up <br>
							for your next Tour</h1>
						<form class="trip-form-area trip-page-form trip-form text-right" action="includes/signup.inc.php" method="POST">
						<div class="form-group col-md-12">
								<input type="text" class="form-control" name="first" placeholder="Firstname" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Firstname'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" name="last" placeholder="Lastname" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Lastname'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" name="email" placeholder="email" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'email'">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" name="uid" placeholder="Username" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Username'">
							</div>
							<div class="form-group col-md-12">
								<input type="password" class="form-control" name="pwd" placeholder="Password" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-lg-12 text-center">
								<button class="primary-btn text-uppercase" type="submit" name="submit">Sign up</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!--================ End Book a Trip Area =================-->

<?php
	include_once 'footer.php';
	include_once 'script.php';
?>
