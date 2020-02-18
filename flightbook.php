<?php 
include_once 'header.php';
?>

<!--================Home Banner Area =================-->
<section class="banner_area ">
	<div class="banner_inner overlay d-flex align-items-center">
		<div class="container">
			<div class="banner_content">
				<div class="page_link">
					<a href="index.php">Home</a>
					<a href="flight.php">Flight</a>
				</div>
				<h2>Booking Details</h2>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->


<!--================ Start Booking Details of BUS =================-->
<?php
	$book_id = $_POST['book_id'];
	$book_cost = $_POST['book_cost'];
	$book_date = $_POST['book_date'];
?>


<section class="trip-area section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-10">
				<div class="trip-form-section">
					<h1>Enter Details <br></h1>
					<form class="trip-form-area trip-page-form trip-form text-right" action="includes/flightbook.inc.php"
						method="POST">
						<input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
						<input type="hidden" name="book_cost" value="<?php echo $book_cost; ?>">
						<input type="hidden" name="book_date" value="<?php echo $book_date; ?>">
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="first" placeholder="Firstname"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Firstname'">
						</div>
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="last" placeholder="Lastname"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lastname'">
						</div>
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="email" placeholder="Email"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
						</div>
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="address" placeholder="Address"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
						</div>
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="qty" placeholder="Seat(s)" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Seat(s)'">
						</div>
						<div class="col-lg-12 text-center">
							<button class="primary-btn text-uppercase" type="submit" name="submit">Book</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Booking Details of BUS =================-->

<?php
	include_once 'footer.php';
	include_once 'script.php';
?>
