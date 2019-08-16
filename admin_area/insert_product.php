<?php 

include("includes/db.php");


 ?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Insert Product</title>
		<link rel="stylesheet" href="css/bootstrap-337.min.css">
	    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	</head>
	<body>
		<div class="row"><!-- row start -->
			<div class="col-lg-12"><!-- col-lg-12 start -->
				<div class="breadcrumb"><!-- breadcrumb begin -->
					<i class="fa fa-dashboard"></i> Dashboard / Insert Products
				</div><!-- breadcrumb finish -->
			</div><!-- col-lg-12 finish -->
		</div><!-- row finish -->
		<div class="row"><!-- row begin -->
			<div class="col-lg-12"><!-- col-lg-12 begin -->
				<div class="panel panel-default"><!-- panel panel-default begin -->
					<div class="panel-heading"><!-- panel-heading begin -->
						<h3 class="panel-title"><!-- panel-title begin -->
							<i class="fa fa-money fw"></i>Insert Product	
						</h3><!-- panel-title finish -->
					</div><!-- panel-heading finish -->
					<div class="panel-body"><!-- panel-body begin -->
						<form  class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Title </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input type="text" name="product_title" class="form-control" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Category </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<select name="product_cat" class="form-control"><!-- form_control begin -->
										<option>Select a Category Product</option>
										<?php 

										$get_p_cats = "select * from product_categories";
										$run_p_cats = mysqli_query($con,$get_p_cats);
										while ($row_p_cats = mysqli_fetch_array($run_p_cats))
										{
											$p_cat_id = $row_p_cats['p_cat_id'];
											$p_cat_title = $row_p_cats['p_cat_title'];
											
											echo "

												<option value='$p_cat_id'>$p_cat_title</option>
											";
										}

										 ?>
									</select><!-- form_control finish -->
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Category </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<select name="cat" class="form-control"><!-- form_control begin -->
										<option>Select a Category </option>
										<?php 

										$get_cat = "select * from categories";
										$run_cat = mysqli_query($con,$get_cat);
										while ($row_cat = mysqli_fetch_array($run_cat))
										{
											$cat_id = $row_cat['cat_id'];
											$cat_title = $row_cat['cat_title'];
											
											echo "

												<option value='$cat_id'>$cat_title</option>
											";
										}

										 ?>
									</select><!-- form_control finish -->
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Image 1 </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input type="file" name="product_img1" class="form-control form-height-custom" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Image 2 </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input type="file" name="product_img2" class="form-control form-height-custom" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Image 3 </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input type="file" name="product_img3" class="form-control form-height-custom" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Price </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input type="text" name="product_price" class="form-control" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product keywords </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input type="text" name="product_keywords" class="form-control" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"> Product Desc </label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<textarea name="product_desc"  cols="19" rows="6" class="form-control"></textarea>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
							<div class="form-group"><!-- form-group start -->
								<label  class="col-md-3 control-label"></label>
								<div class="col-md-6"><!-- col-md-6 begin -->
									<input name="submit" value="Insert Product" type="submit" name="product_keywords " class="btn btn-primary form-control" required>
								</div><!-- col-md-6 finish -->	
							</div><!-- form-group finish -->
						</form><!-- form-horizontal finish -->
					</div><!-- panel-body finish -->
				</div><!-- panel panel-default finish -->
			</div><!-- col-lg-12 finish -->
		</div><!-- row finish -->
		<script src="js/jquery-331.min.js"></script>
		<script src="js/bootstrap-337.min.js"></script>
		<script src="js/tinymce/tinymce.min.js"></script>
	    <script>tinymce.init({selector:'textarea'});</script>
	</body>
	</html>	
	<?php 

		if (isset($_POST['submit']))
		{
			$product_title = $_POST['product_title'];
			$product_cat = $_POST['product_cat'];
			$cat = $_POST['cat'];
			$product_price = $_POST['product_price'];
			$product_keywords = $_POST['product_keywords'];
			$product_desc = $_POST['product_desc'];
			$product_title = $_POST['product_title'];

			$product_img1 = $_FILES['product_img1']['name'];
			$product_img2 = $_FILES['product_img2']['name'];
			$product_img3 = $_FILES['product_img3']['name'];

			$temp_name1 = $_FILES['product_img1']['tmp_name'];
			$temp_name2 = $_FILES['product_img2']['tmp_name'];
			$temp_name3 = $_FILES['product_img3']['tmp_name'];

			move_uploaded_file($temp_name1,"product_images/$product_img1");
		    move_uploaded_file($temp_name2,"product_images/$product_img2");
		    move_uploaded_file($temp_name3,"product_images/$product_img3");

			$insert_product = "insert into products(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";
			$run_product = mysqli_query($con,$insert_product);

			if ($run_product)
			{
				echo "<script>alert('Product has been inserted successfully')</script>";
				echo "<script>window.open('insert_product.php','_self')</script>";
			}
		}



	 ?>