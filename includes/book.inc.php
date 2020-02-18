<?php
session_start();


if(isset($_POST['submit'])) {
	include 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	
	$book_name = $_SESSION['book_name'];
	$book_type_id = $_SESSION['book_name_id'];
	$book_type = $_SESSION['book_type'];
	$book_route_rid = $_SESSION['book_route_rid'];
	$book_date = $_SESSION['book_date'];
	$book_dep_time = $_SESSION['book_dep_time'];
	
	$qty = mysqli_real_escape_string($conn, $_POST['qty']);
	
	$amt = $qty * 500;
	
	
	if (empty($first) || empty($last) || empty($age) || empty($qty)) {
		header("Location: ../book.php?booking=error");
		exit();
	} else {
		//$sqlcustomer = "INSERT INTO customer(customer_fname, customer_lname, customer_age) VALUES ('$first', '$last', '$age', '$email');";
		//mysqli_query($conn, $sqlcustomer);
		
		//$temp_customer_id = "SELECT max(customer_id) as customer_id FROM customer;";
		//$result = mysqli_query($conn, $temp_customer_id);
	
		
			//$row = mysqli_fetch_assoc($result);
			//print_r($row['customer_id']);
			
			//$cus_id = $row['customer_id'];
			
			//echo $cus_id;
		
		$sqlbooking = "INSERT INTO booking(book_fname, book_lname, book_age, book_address, book_email, book_phone, book_type, book_type_id, book_type_name, book_route_rid, book_qty, book_date, book_dep_time, book_amount) VALUES 
		('$first', '$last', '$age', '$address', '$email', '$phone', '$book_type', '$book_type_id', '$book_name', '$book_route_rid', '$qty', '$book_date', '$book_dep_time', $amt);";
		$result = mysqli_query($conn, $sqlbooking);
		
		if(mysqli_num_rows($result) > 0){
			header("Location: ../index.php?booking=success");
			exit();	
		};
		
	    
		
		
		
	}
}