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
                    <a href="bus.php">Bus</a>
                    <a href="flight.php">Flight</a>
                    <a href="hotel.php">Hotel</a>
				</div>
				<h2>INVOICE</h2>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->


<?php 
    $first= $_SESSION['invoice_first'];
    $last = $_SESSION['invoice_last'];
    $email = $_SESSION['invoice_email'];
    $qty = $_SESSION['invoice_qty'];
    $amt = $_SESSION['invoice_amt'];

?>

<div class="mx-auto" style="width: 50%;">
  

<div class="col-lg-12">
<div class="blog_right_sidebar">
<aside class="single_sidebar_widget author_widget">
    
    <h4>Invoice</h4><br><br>
    <p>Here is your total bill</p><br>
    
    <p>NAME: <?php echo $first.' '.$last  ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Quantity: <?php echo $qty  ?></p>
    <p>Total Amount: <?php echo $amt  ?> BDT</p>



    <div class="br"></div>
</aside>

</div>
</div>


</div>
<?php
unset($_SESSION['invoice_first']);
unset($_SESSION['invoice_last']);
unset($_SESSION['invoice_email']);
unset($_SESSION['invoice_qty']);
unset($_SESSION['invoice_amt']);
?>

<?php
	include_once 'footer.php';
	include_once 'script.php';
?>