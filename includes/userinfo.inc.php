<?php

session_start();


if(isset($_POST['submit'])) {
	include 'dbh.inc.php';
	
	$id = $_SESSION['u_id'];
	$oldpwd = mysqli_real_escape_string($conn, $_POST['current_pass']);
	$newpwd = mysqli_real_escape_string($conn, $_POST['new_pass']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($oldpwd) || empty($newpwd)) {
		header("Location: ../userinfo.php?pwdchng=error");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_id='$id';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck < 1) {
			header("Location: ../userinfo.php?pwdchng=usernamenotfound");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($oldpwd, $row['user_pwd']);
				
				if($hashedPwdCheck == false) {
					header("Location: ../userinfo.php?pwdchng=wrongpassword");
					exit();
				} elseif ($hashedPwdCheck == true) {
					
					$hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);
					
					
					$sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_id = $id;";
					mysqli_query($conn, $sql);
					
					header("Location: ../userinfo.php?pwdchng=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}

