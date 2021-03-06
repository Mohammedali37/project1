<?php
session_start();


if(isset($_POST['submit'])) {
	include 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$book_id = mysqli_real_escape_string($conn, $_POST['book_id']);
	$qty = mysqli_real_escape_string($conn, $_POST['qty']);
	$book_date = mysqli_real_escape_string($conn, $_POST['book_date']);
	$book_cost = mysqli_real_escape_string($conn, $_POST['book_cost']);

	$book_user = $_SESSION['u_uid'];
	$amt = $qty * $book_cost;
	$_SESSION['invoice_first'] = $first;
    $_SESSION['invoice_last'] = $last;
    $_SESSION['invoice_email'] = $email;
    $_SESSION['invoice_qty'] = $qty;
    $_SESSION['invoice_amt'] = $amt;
	
	if (empty($first) || empty($last) || empty($qty)) {
		header("Location: ../bus.php?booking=error");
		exit();
	} else {
		
		$sqlbooking = "INSERT INTO flightbooking(fb_fname , fb_lname , fb_email , fb_address , flight_id , fb_qty , fb_date , fb_total_amount , fb_user , fb_status) VALUES 
		('$first', '$last', '$email', '$address', '$book_id', '$qty', '$book_date', '$amt', '$book_user', 'Pending')";
		$result = mysqli_query($conn, $sqlbooking);
		
		if($result) {
			header("Location: ../invoice.php?flightbooking=success");
			exit();	
		};
	}
}