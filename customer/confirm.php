<?php 

session_start();
if (!isset($_SESSION['customer_email'])) {
   echo "<script>window.open('../checkout.php','_self')</script>";
}
else
{
include("includes/db.php");
include("functions/functions.php");

 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <div id="top"><!--top begin-->
        <div class="container"><!--container begin-->
            <div class="col-md-6 offer"><!--col-md-6 offer begin-->
                <a href="" class="btn btn-success btn-sm">
                     <?php
                    if(!isset($_SESSION['customer_email']))
                    {
                        echo "welcome: Guest";
                    }
                    else
                    {
                       echo "welcome:". $_SESSION['customer_email'].""; 
                    }
                    ?>
                </a>
                <a href="checkout.php"><?php items();?> Items In Your Cart | Total Price<?php total_price();?></a>
            </div><!--col-md-6 offer finish-->
            <div class="col-md-6"><!--col-md-6 begin-->
                <ul class="menu"><!--menu begin-->
                    <li>
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">

                            <?php
                                if(!isset($_SESSION['customer_email']))
                                {
                                    echo "<a href='checkout.php'> Login </a>";
                                }
                                else
                                {
                                   echo "<a href='logout.php'> Log Out </a>"; 
                                }
                            ?>

                        </a>
                    </li>
                </ul><!--menu finish-->
            </div><!--col-md-6 finish-->
        </div><!--container finish-->
    </div><!--top finish-->

    <div id="navbar" class="navbar navbar-default"><!--navbar navbar-default begin -->
        <div class="container"> <!-- container begin -->
            <div class="navbar-header"><!-- navbar-header begin -->
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home begin -->
                    <img src="images/ecom-store-logo.png" alt="m-dev-store logo" class="hidden-xs">
                     <img src="images/ecom-store-logo-mobile.png" alt="m-dev-store logo mobile" class="visible-xs">
                </a><!-- navbar-brand home finish -->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                 <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div><!-- navbar-header finish -->
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse begin -->
                <div class="padding-nav"><!-- padding-nav begin -->
                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left begin -->
                        <li >
                            <a href="../index.php">Home</a>
                        </li>
                        <li >
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>
                    </ul><!-- nav navbar-nav left finish -->
                </div><!-- padding-nav finish -->
                <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right begin -->
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items();?> Items In Your Cart</span>
                </a><!-- btn navbar-btn btn-primary right finish -->
                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right begin -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn begin-->
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button><!-- btn btn-primary navbar-btn finish-->
                </div><!-- navbar-collapse collapse right finish -->
                <div class="collapse clearfix" id="search"><!-- collapse clearfix begin -->
                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form begin -->
                        <div class="input-group"><!-- input-group begin -->
                            <input type="text" class="form-control" placeholder="search" name="user_query" required>
                            <span class="input-group-btn"><!-- input-group-btn begin -->
                            <button type="submit" name="search" value="search" class="btn btn-primary"><!-- btn btn-primary begin -->
                                <i class="fa fa-search"></i>
                            </button><!-- btn btn-primary finish -->
                            </span><!-- input-group-btn finish -->
                        </div><!-- input-group finish -->
                    </form><!-- navbar-form finish -->
                </div><!-- collapse clearfix finish -->
            </div><!-- navbar-collapse collapse finish -->
        </div><!-- container finish -->
    </div><!--navbar navbar-default finish -->


    <div id="content"> <!-- content begin -->
        <div class="container"> <!-- container begin -->
            <div class="col-md-12"> <!-- "col-md-12 begin -->
                <ul class="breadcrumb"> <!-- breadcrumb begin -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li><!-- breadcrumb finish -->
                </ul>
            </div> <!-- "col-md-12 finish -->
            <div class="col-md-3"><!-- "col-md-3 begin -->
                 <?php 

                    include("includes/sidebar.php");

                 ?>
            </div><!-- "col-md-3 finish -->

            <div class="col-md-9"><!-- col-md-9 begin -->
                <div class="box"><!-- box begin -->
                    <h1 align="center">Please Confirm your Payment</h1>
                    <form action="confirm.php" method="post" enctype="multipart/form-data"><!-- form begin -->
                      <div class="form-group"><!-- form group begin -->
                          <label > Invoice No: </label>
                          <input type="text" class="form-control" name="invoice_no" required>
                      </div> <!--  form group finish -->
                       <div class="form-group"><!-- form group begin -->
                          <label > Amount Sent: </label>
                          <input type="text" class="form-control" name="amount_sent" required>
                      </div> <!--  form group finish -->
                       <div class="form-group"><!-- form group begin -->
                          <label > Select Payment Mode: </label>
                            <select name="payment_mode"  class="form-control"><!-- payment_mode begin -->
                                <option> Select Payment Mode </option>
                                <option> Back Code </option>
                                <option> UBL / Omni Paisa </option>
                                <option> Eazzy Pay </option>
                                <option> Western Union </option>
                            </select><!-- payment_mode finish -->
                      </div> <!--  form group finish -->
                       <div class="form-group"><!-- form group begin -->
                          <label > Transaction / Reference Id: </label>
                          <input type="text" class="form-control" name="ref_no" required>
                      </div> <!--  form group finish -->
                       <div class="form-group"><!-- form group begin -->
                          <label > M-pesa: </label>
                          <input type="text" class="form-control" name="code" required>
                      </div> <!--  form group finish -->
                       <div class="form-group"><!-- form group begin -->
                          <label > Payment Date: </label>
                          <input type="text" class="form-control" name="date" required>
                      </div> <!--  form group finish -->
                      <div class="text-center"><!-- text center begin -->
                          <button class="btn btn-primary btn-lg"><!-- btn btn-primary btn-lg begin -->
                              <i class="fa fa-user-md"></i> Confrim Payment
                          </button><!-- btn btn-primary btn-lg begin -->
                      </div><!-- text center finish -->
                    </form><!-- form finish -->
                </div><!-- box finish -->
            </div><!-- col-md-9 finish -->
           
        </div> <!-- container finish -->
    </div><!-- content finish -->

       <?php 

        include("includes/footer.php");

     ?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>
<?php } ?>