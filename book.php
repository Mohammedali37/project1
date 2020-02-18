<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Booking</h2>
		
		<form class="signup-form" action="includes/book.inc.php" method="POST">
			<input type="text" name="first" placeholder="Customer Firstname">
			<input type="text" name="last" placeholder="Customer Lastname">
			<input type="text" name="age" placeholder="Customer Age">
			<input type="text" name="address" placeholder="Customer Address">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="phone" placeholder="Phone">
			<input type="text" name="qty" placeholder="Seat(Max 10)">


<?php 
	$_SESSION['book_name'] = $_GET['bookname'];
	$_SESSION['book_name_id'] = $_GET['booknameid'];
	$_SESSION['book_type'] = $_GET['booktype'];
	$_SESSION['book_route_rid'] = $_GET['bookrouterid'];
	$_SESSION['book_dep_time'] = $_GET['bookdeptime'];
	
	//echo $_SESSION['book_name'];
	//echo $_SESSION['book_name_id'];
	//echo $_SESSION['book_date'];
	
	if (!isset($_SESSION['u_id'])) {
		echo '<p style="text-align:center">Please Login or <a href="signup.php">Sign up</a> to continue!</p>';
	}
	
	elseif (isset($_SESSION['u_id'])) {
		echo '<button type="submit" name="submit">Book</button>';
	}

?>

		</form>
		
	</div>
</section>


<?php
	include_once 'footer.php';
?>