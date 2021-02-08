<?php 

    $active='Home';
    include("includes/header.php");

?>
   

    <div class="col-md-12"><!-- col-md-9 Begin -->

                <div class='box'><!-- box Begin -->
                    <h1>Search</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                    </p>
                </div><!-- box Finish -->
               </div>

   
   
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
          
          <?php 
           if(isset($_GET['search'])){
			   $user_keyword = get_safe_value($con,$_GET['user_query']);
           $get_products = "select * from products where product_keywords like '%$user_keyword%' or product_title like '%$user_keyword%'";
    
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

        $run_manufacturer = mysqli_query($db,$get_manufacturer);

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
                
                    <div class='theLabel' > $pro_label </div>
                    <div class='labelBackground'>  </div>
                
                </a>
            
            ";

        }
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product' >
            
                <a href='details?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='height:260px;width:258px;'>
                
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
    
}
           
           ?>
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
  
   
    
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>