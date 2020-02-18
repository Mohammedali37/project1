<?php 
include_once 'header.php';
?>

	<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<h2 style="text-align:center;">Please Log in Here</h2>
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
						<h1>Login <br>
							</h1>
							<?php
							if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
           						echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
            					unset($_SESSION['status']);
							}
							?>

						<form class="trip-form-area trip-page-form trip-form text-right" action="includes/login.inc.php" method="POST">
							<div class="form-group col-md-12">
								<input type="text" class="form-control" name="uid" placeholder="Username" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Username'">
							</div>
							<div class="form-group col-md-12">
								<input type="password" class="form-control" name="pwd" placeholder="Password" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-lg-12 text-center">
								<button class="primary-btn text-uppercase" type="submit" name="submit">Log in</button>
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
