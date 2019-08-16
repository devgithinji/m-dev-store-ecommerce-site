<?php 

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
                        shop
                    </li>
                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id;?>"><?php echo $p_cat_title;?></a>
                    </li>
                    <li>
                       <?php echo $pro_title; ?> 
                    </li><!-- breadcrumb finish -->
                </ul>
            </div> <!-- "col-md-12 finish -->
            <div class="col-md-3"><!-- "col-md-3 begin -->
                 <?php 

                    include("includes/sidebar.php");

                 ?>
            </div><!-- col-md-3 finish -->

            <div class="col-md-9"><!-- col-md-9 begin -->
                <div id="productMain" class="row"><!-- row begin -->
                    <div class="col-sm-6"><!-- "col-sm-6 begin -->
                        <div id="mainImage"><!-- "mainImage begin -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- "carousel slide begin -->
                                <ol class="carousel-indicators"><!-- "ol begin -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol><!-- "ol finish -->
                                <div class="carousel-inner"><!-- carousel-inner begin -->
                                    <div class="item active"><!-- item active begin -->
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1 ?>" alt="Product 3-a"></center>
                                    </div><!-- item active finish -->
                                    <div class="item"><!-- item begin -->
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2 ?>" alt="Product 3-b"></center>
                                    </div><!-- item finish -->
                                    <div class="item"><!-- item begin -->
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3 ?>" alt="Product 3-c"></center>
                                    </div><!-- item finish -->
                                </div><!-- carousel-inner finish -->

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control begin -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a><!-- left carousel-control finish -->
                                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control begin -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a><!-- right carousel-control finish -->
                            </div><!-- carousel slide finish -->
                        </div><!-- "mainImage finish -->
                    </div><!-- "col-sm-6 finish -->
                    <div class="col-sm-6"><!-- col-sm-6 begin -->
                        <div class="box"><!-- bpx begin -->
                            <h1 class="text-center"><?php echo $pro_title; ?></h1>
                            <?php add_cart(); ?>
                            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizonta begin -->
                                <div class="form-group"><!-- form-group begin -->
                                    <label for="" class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7"><!-- col-md-7 begin -->
                                        <select name="product_qty" id="" class="form-control"><!-- select begin -->
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select><!-- select finish -->
                                    </div><!-- col-md-7 finish -->
                                </div><!-- form-group finish -->
                                <div class="form-group"><!-- form-group begin -->
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7"><!-- col-md-7 begin -->
                                        <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick one size for the product')"><!-- select begin -->
                                            <option disabled selected>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select><!-- select finish -->
                                    </div><!-- col-md-7 finish -->
                                </div><!-- form-group finish -->
                                <p class="price">$ <?php echo $pro_price; ?></p>
                                <p class="text-center buttons"><button class="btn btn-primary"><i class="fa fa-shopping-cart"> Add To Cart</i></button></p>
                            </form><!-- form-horizonta finish -->
                        </div><!-- box finish -->
                        <div class="row" id="thumbs"><!-- row begin -->
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb begin -->
                                    <img src="admin_area/product_images/<?php echo $pro_img1 ?>" alt="product 1" class="img-responsive">
                                </a><!-- thumb finish -->
                            </div><!-- col-xs-4 begin -->
                             <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb begin -->
                                    <img src="admin_area/product_images/<?php echo $pro_img2 ?>" alt="product 2" class="img-responsive">
                                </a><!-- thumb finish -->
                            </div><!-- col-xs-4 begin -->
                             <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb begin -->
                                    <img src="admin_area/product_images/<?php echo $pro_img3 ?>" alt="product 4a" class="img-responsive">
                                </a><!-- thumb finish -->
                            </div><!-- col-xs-4 begin -->
                        </div><!-- row finish -->
                    </div><!-- col-sm-6 finish -->
                </div><!-- row finish -->
                <div class="box" id="details"><!-- "box begin -->

                    <h4>Product Details</h4>
                    <p>
                       <?php echo $pro_desc; ?> 
                    </p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                  <hr>
                </div><!-- box finish -->
                <div id=" row same-height-row"><!-- row same-height-row -->
                    <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 begin -->
                        <div class="box same-height headline"><!-- box same-height headline begin -->
                            <h3 class="tex-center">Products You Maybe Like</h3>
                        </div><!-- box same-height headline finish -->
                    </div><!-- col-md-3 col-sm-6 finish-->
                   <?php
                    
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                    $run_products = mysqli_query($con, $get_products);
                    while($row_products=mysqli_fetch_array($run_products))
                    {
                        $pro_id = $row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_img1 = $row_products['product_img1'];
                        $pro_price = $row_products['product_price'];

                        echo"

                            <div class='col-md-3 col-sm-6 center-responsive'>
                                <div class='product same-height'>
                                    <a href='details.php?pro_id=$pro_id'>
                                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                    </a>    
                                    <div class='text'>
                                        <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                        <p class='price'> $ $pro_price </p>
                                    </div> 
                                </div> 
                            </div>
                        ";
                    }


                ?>
                </div><!-- row same-height-row -->
            </div><!-- "col-md-9 finish -->
        </div> <!-- container finish -->
    </div><!-- content finish -->

       <?php 

        include("includes/footer.php");

     ?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>