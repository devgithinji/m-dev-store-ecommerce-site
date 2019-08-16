<div id="footer"><!-- footer begin -->
	<div class="container"><!-- container begin -->
		<div class="row"><!-- row begin -->
			<div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->
				
				<h4>Pages</h4>

				<ul><!-- ul begin -->
					<li><a href=../cart.php">Shopping Cart</a></li>
					<li><a href="../contact.php">Shop</a></li>
					<li><a href="../shop.php">Contact us</a></li>
					<li><a href="../checkout.php">My Account</a></li>
				</ul><!-- ul finish -->
				<br>

				<h4>User Section</h4>

				<ul><!-- ul begin -->
					<?php 

                        if (!isset($_SESSION['customer_email']))
                        	 {
                                echo "<a href='../checkout.php'> Login </a>";
                            }
                            else
                            {
                                 echo "<a href='my_account.php?my_orders'> My Account </a>";
                            }

                    ?>
                    <li>
                    	<?php 

                        if (!isset($_SESSION['customer_email']))
                        	 {
                                echo "<a href='../checkout.php'> Login </a>";
                            }
                            else
                            {
                                 echo "<a href='my_account.php?edit_account'> Edit Account </a>";
                            }

                   		 ?>
                    </li>
				</ul><!-- ul finish -->

				<hr class="hidden-md hidden-lg hidden-sm">

			</div><!-- col-sm-6 col-md-3 finish -->

			<div class="com-sm-6 col-md-3"><!-- com-sm-6 col-md-3 start -->
				<h4>Top Products Categories</h4>
				<ul><!-- ul begin -->
					<?php 
					$get_p_cats = "select * from product_categories";
					$run_p_cats = mysqli_query($con,$get_p_cats);
					while ($row_p_cats=mysqli_fetch_array($run_p_cats))
					{
						$p_cat_id = $row_p_cats['p_cat_id'];
						$p_cat_title = $row_p_cats['p_cat_title'];

						echo "
							
							<li>

								<a href='../shop.php?p_cat=$p_cat_id'>

									$p_cat_title 

								</a>


							</li>


						";

					}

					 ?>
				</ul><!-- ul finish -->
				
				<hr class="hidden-md hidden-lg">

			</div><!-- com-sm-6 col-md-3 finish -->

			<div class="com-sm-6 col-md-3"><!-- com-sm-6 col-md-3 start -->
				<h4>Find Us:</h4>
				
				<p> <!-- p begin -->
					<strong>M-Dev Media Inc</strong>
					<br>Kenya
					<br>Limuru
					<br>234-2345-4567
					<br>wakahiad@gmail.com
					<br><strong>Densoft</strong>
				</p> <!-- p finish -->
				<a href="contact.php">Check Our Contact Page</a>
				
				<hr class="hidden-md hidden-lg">

			</div><!-- com-sm-6 col-md-3 finish -->

			<div class="com-sm-6 col-md-3"><!-- com-sm-6 col-md-3 start -->
				<h4>Get The News</h4>
				<p class="text-muted">
					Dont miss our Latest update products.
				</p>
				<form action="" method="post"><!-- form begin -->
					<div class="input-group"> <!-- input-group begin -->
						<input type="text" class="form-control" name="email">
						<span class="input-group-btn"><!-- input-group-btn begin -->
							<input type="submit" value="subscribe" class="btn btn-default">
						</span><!-- input-group-btn finish -->
					</div> <!-- input-group finish -->
				</form> <!-- form finish -->
				<hr>
				<h4>Keep In Touch</h4>
				<p class="social">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-google-plus"></a>
					<a href="#" class="fa fa-envelope"></a>
				</p>

			</div><!-- com-sm-6 col-md-3 finish -->


		</div><!-- row finish -->
	</div><!-- container finish -->
</div><!-- footer finish -->

<div id="copyright"><!-- copyrightr begin -->
	<div class="container"><!-- container begin -->
		<div class="col-md-6"><!-- col-md-6 begin -->
			<p class="pull-left">&copy; 2019 Densoft Developers Inc All Rights Reserved</p>
		</div><!-- col-md-6 finish -->
		<div class="col-md-6"><!-- col-md-6 begin -->
			<p class="pull-right">Theme by: <a href="#">Densoft Dev</a></p>
		</div><!-- col-md-6 finish -->
	</div><!-- containerr finish -->
</div><!-- copyright finish -->