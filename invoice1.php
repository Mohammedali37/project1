<?php 
include_once 'header.php';
?>

<!--================Home Banner Area =================-->
<section class="banner_area ">
	<div class="banner_inner overlay d-flex align-items-center">
		<div class="container">
			<div class="banner_content">
				<div class="page_link">
					<a href="package.php">package</a>
				</div>
				<h2>INVOICE1</h2>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->


<?php 
    $first= $_SESSION['invoice1_first'];
    $last = $_SESSION['invoice1_last'];
    $email = $_SESSION['invoice1_email'];
    $amt = $_SESSION['invoice1_amt'];

?>

<div class="mx-auto" style="width: 50%;">
  

<div class="col-lg-12">
<div class="blog_right_sidebar">
<aside class="single_sidebar_widget author_widget">
    <center>
        <h4>Invoice</h4><br><br>
         <p>Thank you</p><br>
    
         <p>NAME: <?php echo $first.' '.$last  ?></p>
         <p>Email: <?php echo $email ?></p>
         <p>package booked successfully</p>

    </center>
    


    <div class="br"></div>
</aside>

</div>
</div>


</div>
<?php
unset($_SESSION['invoice1_first']);
unset($_SESSION['invoice1_last']);
unset($_SESSION['invoice1_email']);
unset($_SESSION['invoice1_amt']);
?>

<?php
	include_once 'footer.php';
	include_once 'script.php';
?>