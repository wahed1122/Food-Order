<?php 

    $active='Cart';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Shopping Cart</h1>
                       
                       <?php 
                       
                       $ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                       
                       ?>
                       
                       <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">Product</th>
                                       <th>Quantity</th>
                                       <th>Unit Price</th>
                                       <th colspan="1">Delete</th>
                                       <th colspan="2">Sub-Total</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                  
                                  <?php 
                                   
                                   $total = 0;
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                     $pro_id = get_safe_value($db,$row_cart['p_id']);
                                       
                                     $pro_size = get_safe_value($db,$row_cart['size']);
                                       
                                     $pro_qty = get_safe_value($db,$row_cart['qty']);

                                     $pro_sale = get_safe_value($db,$row_cart['p_price']);
                                       
                                       $get_products = "select * from products where product_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($con,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
                                           
                                           $product_title = get_safe_value($db,$row_products['product_title']);
                                           
                                           $product_img1 = get_safe_value($db,$row_products['product_img1']);
                                           
                                           $only_price = get_safe_value($db,$row_products['product_price']);
                                           
                                           $sub_total = $pro_sale*$pro_qty;

                                           $_SESSION['pro_qty'] = $pro_qty;
                                           
                                           $total += $sub_total;
                                           
                                   ?>
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="details?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           <input type="text" name="quantity" data-product_id="<?php echo $pro_id; ?>" value="<?php echo $_SESSION['pro_qty']; ?>" class="quantity form-control">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php echo $pro_sale; ?>
                                           
                                       </td>
                                       
                                      
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           BDT <?php echo $sub_total; ?>
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                                   <?php } } ?>
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2">BDT <?php echo $total; ?></th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->

                           <div class="form-inline pull-right"><!-- form-inline Begin -->
                               <div class="form-group"><!-- form-group Begin -->

                                    <label> Coupon Code: </label>
                                    <input type="text" name="code" class="form-control">
                                    <input type="submit" class="btn btn-primary" value="Use Coupon" name="apply_coupon">
                               
                               </div><!-- form-group Finish -->
                           </div><!-- form-inline Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> Update Cart
                                   
                               </button><!-- btn btn-default Finish -->
                               
                               <a href="checkout" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->

               <?php 
               
                    if(isset($_POST['apply_coupon'])){

                        $code = $_POST['code'];

                        if($code == ""){

                        }else{

                            $get_coupons = "select * from coupons where coupon_code='$code'";
                            $run_coupons = mysqli_query($con,$get_coupons);
                            $check_coupons = mysqli_num_rows($run_coupons);

                            if($check_coupons == "1"){

                                $row_coupons = mysqli_fetch_array($run_coupons);

                                $coupon_pro_id = get_safe_value($db,$row_coupons['product_id']);
                                $coupon_price = get_safe_value($db,$row_coupons['coupon_price']);
                                $coupon_limit = get_safe_value($db,$row_coupons['coupon_limit']);
                                $coupon_used = get_safe_value($db,$row_coupons['coupon_used']);

                                if($coupon_limit == $coupon_used){

                                    echo "<script>alert('Your Coupon Already Expired')</script>";

                                }else{

                                    $get_cart = "select * from cart where p_id='$coupon_pro_id' AND ip_add='$ip_add'";
                                    $run_cart = mysqli_query($con,$get_cart);
                                    $check_cart = mysqli_num_rows($run_cart);

                                    if($check_cart == "1"){

                                        $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
                                        $run_used = mysqli_query($con,$add_used);
                                        $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro_id' AND ip_add='$ip_add'";
                                        $run_update_cart = mysqli_query($con,$update_cart);

                                        echo "<script>alert('Your Coupon Has Been Applied')</script>";
                                        echo "<script>window.open('cart','_self')</script>";

                                    }else{

                                        echo "<script>alert('Your Coupon Didnt Match With Your Product On Your Cart')</script>";

                                    }

                                }

                            }else{

                                echo "<script>alert('You Coupon Is Not Valid')</script>";

                            }

                        }

                    }
               
               ?>
               
               <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?>
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <?php 
                   
                   $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                   $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                    $pro_id = get_safe_value($con,$row_products['product_id']);
        
                    $pro_title = get_safe_value($con,$row_products['product_title']);
                    
                    $pro_price = get_safe_value($con,$row_products['product_price']);
            
                    $pro_sale_price = get_safe_value($con,$row_products['product_sale']);
                    
                    $pro_img1 = get_safe_value($con,$row_products['product_img1']);
                    
                    $pro_label = get_safe_value($con,$row_products['product_label']);
                    
                    $manufacturer_id = get_safe_value($con,$row_products['manufacturer_id']);
            
                    $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
            
                    $run_manufacturer = mysqli_query($con,$get_manufacturer);
            
                    $row_manufacturer = mysqli_fetch_array($run_manufacturer);
            
                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
            
                    if($pro_label == "Offer"){
            
                        $product_price = " <del> BDT $pro_price </del> ";
            
                        $product_sale_price = "/ BDT $pro_sale_price ";
            
                    }else{
            
                        $product_price = "  BDT $pro_price  ";
            
                        $product_sale_price = "";
            
                    }
            
                    if($pro_label == ""){
            
                    }else{
            
                        $product_label = "
                        
                            <a href='#' class='label $pro_label' style='margin-left:10px;'>
                            
                                <div class='theLabel'> $pro_label </div>
                                <div class='labelBackground'>  </div>
                            
                            </a>
                        
                        ";
            
                    }
                    
                    echo "
                    
                    <div class='col-md-3 col-sm-6 center-responsive'>
                    
                        <div class='product' style=''>
                        
                            <a href='details?pro_id=$pro_id'>
                            
                                <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='height:150px;width:258px;'>
                            
                            </a>
                            
                            <div class='text'>
            
                            
                            
                                <h3>
                        
                                    <a href='details?pro_id=$pro_id'>
            
                                        $pro_title
            
                                    </a>
                                
                                </h3>
                                
                                <p class='price'>
                                
                                $product_price &nbsp;$product_sale_price
                                
                                </p>
                                
                                <p class='button'>
                                
                                    <a class='btn btn-default' href='details?pro_id=$pro_id'>
            
                                        View Details
            
                                    </a>
                                
                                    <a class='btn btn-primary' href='details?pro_id=$pro_id'>
            
                                        <i class='fa fa-shopping-cart'></i> Add to Cart
            
                                    </a>
                                
                                </p>
                            
                            </div>
            
                            $product_label
                        
                        </div>
                    
                    </div>
                    
                    ";
                       
                   }
                   
                   ?>
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
               
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       Shipping and additional costs are calculated based on value you have entered
                       
                   </p><!-- text-muted Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Order All Sub-Total </td>
                                   <th> BDT <?php echo $total; ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Shipping and Handling </td>
                                   <td> BDT 0 </td>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Tax </td>
                                   <th> BDT 0 </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Total </td>
                                   <th>BDT<?php echo $total; ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

    <script>
    
       $(document).ready(function(data){

           $(document).on('keyup','.quantity',function(){

                var id = $ (this).data("product_id");
                var quantity = $(this).val();

                if(quantity !=''){

                    $.ajax({

                        url: "change.php",
                        method: "POST",
                        data:{id:id, quantity:quantity},

                        success:function(){
                            $("body").load("cart_body.php");
                        }

                    });

                }

           });

       });
    
    </script>
    
    
</body>
</html>