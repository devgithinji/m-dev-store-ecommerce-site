<div class="box"> <!-- box being -->
	<div class="box-header"><!-- box-header begin -->
		<center>
			<h1> Login </h1>
			<p class="lead"> Already Have An Account...?</p>
			<p class="text-muted">Nulla duis eiusmod irure minim aliquip reprehenderit amet culpa consequat cillum non labore irure mollit adipisicing est in cillum voluptate voluptate.</p>
		</center>	
	</div><!-- box-header finish -->
	<form action="checkout.php" method="post"><!-- form begin -->
		<div class="form-group"><!-- form-group beigin -->
			<label> Email </label>
			<input name="c_email" type="text" class="form-control" required>
		</div><!-- form-group finish -->
		<div class="form-group"><!-- form-group beigin -->
			<label> Password </label>
			<input name="c_pass" type="password" class="form-control" required>
		</div><!-- form-group finish -->
		<div class="text-center">
			<button name="login" value="login" class="btn btn-primary">
				<i class="fa fa-sign-in"></i>Login
			</button>
		</div>
	</form><!-- form finish -->
	<center>
		<a href="customer_register.php">
			<h3> Dont have account..? Register Here </h3>
		</a>
	</center>	
</div><!-- box finish -->

<?php 

if (isset($_POST['login'])) {
	$customer_email = $_POST['c_email'];
	$customer_pass = $_POST['c_pass'];

	$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_customer = mysqli_query($con,$select_customer);
	$get_ip = getRealIpUser();
	$check_customer = mysqli_num_rows($run_customer);

	$select_cart = "select * from cart where  ip_add='$get_ip'";
	$run_cat = mysqli_query($con,$select_cart);

	$check_cart = mysqli_num_rows($run_cat);

	if ($check_customer==0) {
		echo "<script>alert('your email or password is wrong')</script>";
		exit();
	}
	if ($check_customer==1 AND $check_cart==0) {
		$_SESSION['customer_email']=$customer_email;
		echo "<script>alert('Your are logged in ')</script>";
		echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
	}
	else
	{
		$_SESSION['customer_email']=$customer_email;
		echo "<script>alert('Your are logged in ')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";	
	}

}





 ?>