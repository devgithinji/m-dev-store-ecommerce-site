<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="css/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Densoft shop</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span  class="glyphicon glyphicon-home">Home</a></li>
				<li><a href="#"><span  class="glyphicon glyphicon-modal-window">Product</a></li>
				<li style="width: 300px; left: 10px; top: 10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top: 10px; left: 20px; "><input type="submit" class="btn btn-primary" id="search_btn"></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span  class="glyphicon glyphicon-shopping-cart"></span>Cart <span class=badge">0</span></a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span  class="glyphicon glyphicon-user">Signin</a>
						<ul class="dropdown-menu">
							<div style="width: 300px;">
								<div class="panel panel-primary">
									<div class="panel-heading">Login</div>
									<div class="panel-heading">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" required>
										<label for="email">Password</label>
										<input type="password" class="form-control" id="password" required>
										<p><br></p>
										<a href="#" style="color: white; list-style: none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="login">
									</div>
									<div class="panel-footer" id="e_msg"></div>
								</div>
							</div>
						</ul>
				</li>
				<li><a href="#"><span  class="glyphicon glyphicon-user">SignUp</a></li>
			</ul>
		</div>
	</div>


	
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div class="col-md-4">
							<div class="panel panel-info ">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body thumbnail">
									<img src="images/Samsung_black.png" alt="">
								</div>
								<div class="panel-heading">$.500.00
									<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">&copy; 2016</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<script src="js/jquery-3.3.0.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>