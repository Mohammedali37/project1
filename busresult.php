<?php
	include_once 'header.php';
?>

<?php
if(isset($_POST['submit'])) {
		include_once 'includes/dbh.inc.php';
		
		$from = $_POST['from'];
		$to = $_POST['to'];
		
		$sql = "SELECT * FROM buses natural join route WHERE route_from = '$from' AND route_to = '$to';";
		$result = mysqli_query($conn, $sql);
		
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)) { 
?>
	<section class="main-container">
	<div class="main-wrapper">
		<p><?php echo htmlentities($row['bus_name']);?></p>
		<p><?php echo htmlentities($row['bus_dep']);?></p>
		<a href="book.php?booktype=Bus&bookname=<?php echo htmlentities($row['bus_name']);?>" class="view">Details</a>
	</div>
	</section>	

<?php }}} ?>

<?php
	include_once 'footer.php';
?>
