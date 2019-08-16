<div class="box"><!-- box begin -->
	<?php 
	$session_email = $_SESSION['customer_email'];
	$select_customer = "select * from customers where customer_email ='$session_email'";
	$run_customer = mysqli_query($con,$select_customer);
	$row_customer = mysqli_fetch_array($run_customer);
	$customer_id = $row_customer['customer_id'];


	 ?>
	<h1 class="text-center">Payment Options For You</h1>
	<p class="lead text-center"><!-- lead text-center begin -->
		<a  class="" href="order.php?c_id=>?php echo $customer_id?>"> Offline Payment </a>
	</p><!-- lead text-center finish -->
	<center><!-- center begin -->
		<p class="lead"><!--  lead begin -->
			<a href="#">
				Paypal Payment
				<img class="img-responsive" src="images/paypal.jpg" alt="img_paypall">
			</a>
		</p><!--  lead finish -->
	</center><!-- center finish -->	
</div><!-- box finish -->