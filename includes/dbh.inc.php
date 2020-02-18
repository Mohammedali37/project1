<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPasswordname = "";
	$dbName = "tour";
	
	
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPasswordname, $dbName);

	if($conn)
	{
		//echo "database connected";
	}

	else {
		echo "database connection failed";
	}