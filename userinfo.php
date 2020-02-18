<?php
	include_once 'header.php';
?>

<form class="signup-form" action="includes/userinfo.inc.php" method="POST">
			<input type="password" name="current_pass" placeholder="Current password">
			<input type="password" name="new_pass" placeholder="New password">
			<button type="submit" name="submit">Change Password</button>
</form>


<?php
	include_once 'footer.php';
?>