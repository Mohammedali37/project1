<?php
session_start();


if(isset($_POST['submit'])) {
	include 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$book_id = mysqli_real_escape_string($conn, $_POST['book_id']);
	$book_date = mysqli_real_escape_string($conn, $_POST['book_date']);
	$package_cost = mysqli_real_escape_string($conn, $_POST['package_cost']);

	$book_user = $_SESSION['u_uid'];
	$amt = $book_cost;
	$_SESSION['invoice1_first'] = $first;
    $_SESSION['invoice1_last'] = $last;
    $_SESSION['invoice1_email'] = $email;
    $_SESSION['invoice1_amt'] = $amt;
	
	if (empty($first) || empty($last)) {
		header("Location: ../package.php?booking=error");
		exit();
	} else {
		
		$sqlbooking = "INSERT INTO packagebooking(pb_fname , pb_lname , pb_email , pb_address , package_id , pb_date , pb_total_amount , pb_user , pb_status) VALUES 
		('$first', '$last', '$email', '$address', '$book_id', '$book_date', '$amt', '$book_user', 'Pending')";
		$result = mysqli_query($conn, $sqlbooking);
		
		if($result) {
			header("Location: ../invoice1.php?packagebooking=success");
			exit();	
		};
	}
}