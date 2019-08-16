<?php 

$active='Account';
include("includes/header.php");


 ?>

    <div id="content"> <!-- content begin -->
        <div class="container"> <!-- container begin -->
            <div class="col-md-12"> <!-- "col-md-12 begin -->
                <ul class="breadcrumb"> <!-- breadcrumb begin -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Register
                    </li><!-- breadcrumb finish -->
                </ul>
            </div> <!-- "col-md-12 finish -->
            <div class="col-md-3"><!-- "col-md-3 begin -->
                 <?php 

                    include("includes/sidebar.php");

                 ?>
            </div><!-- "col-md-3 finish -->
            <div class="col-md-9">
            <?php



            if (!isset($_SESSION['customer_email']))
            {
               include("customer/customer_login.php");
            }
            else
            {
                include("payment_options.php");
            }


            ?>
        </div>
           
     </div> <!-- container finish -->
    </div><!-- content finish -->

       <?php 

        include("includes/footer.php");

     ?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html> 

