<?php 

$active ='Cart';
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
                        Cart
                    </li><!-- breadcrumb finish -->
                </ul>
            </div> <!-- "col-md-12 finish -->

           <div id="cart" class="col-md-9"><!-- col-md-9 begin -->
               <div class="box"><!-- box begin -->
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form begin -->
                       <h1>Shopping Cart</h1>
                       <?php 
                        $ip_add = getRealIpUser();
                        $select_cart = "select * from cart where ip_add='$ip_add'";
                        $run_cart = mysqli_query($con,$select_cart);
                        $count = mysqli_num_rows($run_cart);
                       ?>
                       <p class="text-muted">You currently have <?php echo $count ?> item(s) in your cart</p>
                       <div class="table-responsive"><!-- table-responsive begin -->
                           <table class="table"><!-- table begin -->
                               <thead><!-- thead begin -->
                                   <tr><!-- tr begin -->
                                       <th colspan="2">Product</th>
                                       <th>quantity</th>
                                       <th>Unit Price</th>
                                       <th>Size</th>
                                       <th colspan="1">Delete</th>
                                       <th colspan="2">Sub Total</th> 
                                   </tr><!-- tr finish -->
                               </thead><!-- thead finish -->
                               <tbody><!-- tbody begin -->
                                <?php

                                    $total =0;
                                    while($row_cart = mysqli_fetch_array($run_cart))
                                    {
                                        $pro_id = $row_cart['p_id'];
                                        $pro_size = $row_cart['size'];
                                        $pro_qty = $row_cart['qty'];

                                        $get_products = "select * from products where product_id='$pro_id'";
                                        $run_products = mysqli_query($con,$get_products);

                                        while($row_products = mysqli_fetch_array($run_products))
                                        {
                                            $product_title = $row_products['product_title'];
                                            $product_img1 = $row_products['product_img1'];
                                            $only_price = $row_products['product_price'];
                                            $sub_total = $row_products['product_price']*$pro_qty;
                                            $total+=$sub_total;
                                       
                                   



                                 ?>
                                  <tr><!-- tr begin -->
                                      <td>
                                          <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1;?>" alt="Product 3a.jpg">
                                      </td>
                                      <td>
                                          <a href="details.php?pro_id=<?php echo $pro_id;?>"><?php echo $product_title; ?></a>
                                      </td>
                                      <td>
                                          <?php echo $pro_qty; ?>
                                      </td>
                                      <td>
                                          $ <?php echo $only_price; ?>
                                      </td>
                                      <td>
                                          <?php echo $pro_size; ?>
                                      </td>
                                      <td>
                                          <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                      </td>
                                      <td>
                                          $ <?php echo $sub_total; ?>
                                      </td>
                                   </tr><!-- tr finish -->
                                   <?php  } } ?>
                               </tbody><!-- tbody finish -->

                               <tfoot><!-- tfoot start -->
                                   <tr><!-- tr begin -->
                                      <th colspan="5">Total</th>
                                      <th colspan="2"> $ <?php echo $total; ?></th> 
                                   </tr><!-- tr finish -->
                               </tfoot><!-- tfoot finish -->
                           </table><!-- table finish -->
                       </div><!-- table-responsive finish -->
                       <div class="box-footer"><!-- box footer begin -->
                           <div class="pull-left"><!-- pull-left begin -->
                              <a href="index.php" class="btn btn-default"><!-- btn btn-default -->
                                  <i class="fa fa-chevron-left"></i> Continue Shopping
                              </a>   <!-- btn btn-default -->  
                           </div><!-- pull-left finish -->
                            <div class="pull-right"><!-- pull-right begin -->
                              <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default -->
                                  <i class="fa fa-refresh"></i>Update Cart
                              </button>   <!-- btn btn-default -->  
                              <a href="checkout.php" class="btn btn-primary">
                                  Proceed Checkout<i class="fa fa-chevron-right"></i>
                              </a>
                           </div><!-- pull-right finish -->
                       </div><!-- box footer finish -->
                   </form><!-- form finish -->
               </div><!-- box finish -->
               <?php

                function update_cart()
                {
                    global $con;

                    if(isset($_POST['update']))
                    {
                        foreach($_POST['remove'] as $remove_id)
                        {
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            $run_delete = mysqli_query($con,$delete_product);

                            if($run_delete)
                            {
                                echo"<script>window.open('cart.php','_self')</script>";
                                echo"<script>alert('done')</script>";
                            }
                            else
                            {
                                echo"<script>alert('not done')</script>"; 
                            }
                        }
                    }

                }

                echo @$up_cart = update_cart();

               ?>
               <div id=" row same-height-row"><!-- row same-height-row -->
                    <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 begin -->
                        <div class="box same-height headline"><!-- box same-height headline begin -->
                            <h3 class="tex-center">Products You Maybe Like</h3>
                        </div><!-- box same-height headline finish -->
                    </div><!-- col-md-3 col-sm-6 finish-->
                    

                        <?php

                            $get_products = "select * from products order by rand() LIMIT 0,3";
                            $run_products = mysqli_query($con,$get_products);

                            while($row_products=mysqli_fetch_array($run_products))
                            {
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];

                                echo"
                                <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive begin -->
                                    <div class='product same-height'><!-- product same-height begin -->
                                        <a href='details.php?pro_id=$pro_id'>
                                            <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product-6a'>
                                        </a>
                                        <div class='text'><!-- text begin -->
                                            <h3><a href='details.php'> $pro_title </a></h3>
                                            <p class='price'> $ $pro_price</p>
                                        </div><!-- text finish -->
                                    </div><!-- product same-height finish -->
                                </div><!-- col-md-3 col-sm-6 center-responsive finish -->


                                 ";
                            }
                        ?>
                    
                </div><!-- row same-height-row -->
           </div><!-- col-md-9 finish -->

           <div class="col-md-3"><!-- col-md-3 begin -->
               <div id="order-summary" class="box"><!-- box begin -->
                   <div class="box-header"><!-- box header begin -->
                       <h3>Order Summary</h3>
                       <p class="text-muted"><!-- text-muted begin -->
                           Shipping and addittional costs are calculated based on the value you entered 
                       </p><!-- text-muted finish -->
                       <div class="table-responsive"><!-- table-responsive begin -->
                           <table class="table"><!-- table begin -->
                               <tbody><!-- tbody begin -->
                                 <tr><!-- tr begin -->
                                    <td> Order Sub Total </td> 
                                    <th>  $<?php echo $total; ?> </th>
                                 </tr><!-- tr finish --> 
                                  <tr><!-- tr begin -->
                                    <td> Shipping and Handling </td> 
                                    <td> $0 </td>
                                 </tr><!-- tr finish --> 
                                  <tr><!-- tr begin -->
                                    <td> Tax </td> 
                                    <th> $0 </th>
                                 </tr><!-- tr finish --> 
                                  <tr class="total"><!-- tr begin -->
                                    <td> Total </td> 
                                    <th> $<?php echo $total; ?> </th>
                                 </tr><!-- tr finish -->  
                               </tbody><!-- tbody finish -->
                           </table><!-- table finish -->
                       </div><!-- table-responsive finish -->
                   </div><!-- box header finish -->
               </div><!-- box finish -->
           </div><!-- col-md-3 finish -->

 </div> <!-- container finish -->
    </div><!-- content finish -->

       <?php 

        include("includes/footer.php");

     ?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>            