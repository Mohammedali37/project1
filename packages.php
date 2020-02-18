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
					<a href="packages.php">Packages</a>
				</div>
				<h2>POPULAR PACKAGES</h2>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->
<?php 
include_once 'header.php';
?>


<!--================End Home Banner Area =================-->

<!--================ Start Book a BUS Area =================-->

<section class="trip-area section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-10">
				<div class="trip-form-section">
					<h1>Book  packages <br>
					</h1>

					<?php 
					if (!isset($_SESSION['u_id'])) {
						echo '<h1 style="text-align:center">You must <a href="login.php">Login</a> or <a href="signup.php">Sign up</a> to book!</h1>';
					}

					?>

					<form class="trip-form-area trip-page-form trip-form text-right"
						method="POST">
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="from" placeholder="From" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'From'">
						</div>
						<div class="form-group col-md-12">
							<input type="text" class="form-control" name="to" placeholder="Destination"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Destination'">
						</div>
						<div class="form-group col-md-12">
							<input type="date" class="form-control" name="bookdate">
						</div>


						<div class="col-lg-12 text-center">
							<button class="primary-btn text-uppercase" type="submit" name="submit">SEARCH</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>

<!--================ End Book a BUS Area =================-->

<!--================ Start Bus Search Result =============-->
<?php 


if(isset($_POST['submit'])){
	include 'includes/dbh.inc.php';

			
		$from = $_POST['from'];
		$to = $_POST['to'];
		$bookdate = $_POST['bookdate'];
									
		$sql = "SELECT * FROM package NATURAL JOIN routes WHERE route_from = '$from' AND route_to = '$to';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
			
			
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				
?>


<div class="container">
	<div class="row">
		<div class="col-lg-12 posts-list">

			<div class="container-fluid">

				<!-- DataTales Example -->
				<div class="card shadow mb-4">


					<div class="card-body">

						<div class="table-responsive">

							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th> Package Title </th>
										<th> Package Description </th>
										<th> Location </th>
										<th>Package COST</th>
										<th>DATE </th>
										<th>BOOK Package</th>

									</tr>
								</thead>
								<tbody>


									<tr>
										<td> <?php echo $row['package_title']; ?></td>
										<td> <?php echo $row['package_description']; ?></td>
										<td> <?php echo $row['package_location']; ?></td>
										<td> <?php echo $row['package_cost']; ?></td>
										
										<td> <?php echo $bookdate; ?></td>

										<td>
											<form action="packagebook.php" method="POST">
												<input type="hidden" name="book_id" value="<?php echo $row['package_id']; ?>">
												<input type="hidden" name="book_cost" value="<?php echo $row['package_cost']; ?>">
												<input type="hidden" name="book_date" value="<?php echo $bookdate; ?>">

											<?php 

													if (isset($_SESSION['u_id'])) {
														echo '<button type="submit" name="book_btn" class="btn btn-success"> BOOK </button>';
													}

													else {
														echo '<a href="login.php" class="genric-btn danger radius"> Login </a>';
													}
												
											
											?>	


												
											</form>
										</td>

										<?php		
					}
			}
			
			
			
			?>

									</tr>

								</tbody>
							</table>

						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->
		

<?php 
	if(mysqli_num_rows($result) == 0) {

	

?>



<section class="sample-text-area">
		<div class="container" style="text-align:center;">
			<h3 class="text-heading title_color">OPPS!  package not available in this route!!</h3>
			<p class="sample-text">Sorry, for this inconvenience. Currently, We are working on adding more buses, so that we can serve you	better.</p>
		</div>
</section>



<?php
	}
}

?>


</div>
</div>
</div>







<!--================ End Bus Search Result =============-->




<?php
	include_once 'footer.php';
	include_once 'script.php';
?>