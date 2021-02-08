<?php 

    $active='fast-food';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index">Home</a>
                   </li>
                   <li>
                       Fast Food
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           

           
           <div class="col-md-12"><!-- col-md-9 Begin -->

                <div class='box'><!-- box Begin -->
                    <h1>Chicken Fry</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                    </p>
                </div>
               </div>
               <div id="products" class="row"><!-- row Begin -->

                    <?php 
						$get_products = "select * from products where p_cat_id=16 order by 1 DESC LIMIT 0,8";
    
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

					?>
               
               </div><!-- row Finish -->
               
              
               
           

           <div id="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px;"></div>
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script>
    
        $(document).ready(function(){

            // Hide & Show Sidebar Toggle //

            $('.nav-toggle').click(function(){
                
                $('.panel-collapse,.collapse-data').slideToggle(700,function(){

                    if($(this).css('display')=='none'){

                        $(".hide-show").html('Show');

                    }else{

                        $(".hide-show").html('Hide');

                    }

                });

            });

            // Finish Hide & Show Sidebar Toggle //

            // Search Filters | by Letter // 

            $(function(){

                $.fn.extend({

                    filterTable: function(){

                        return this.each(function(){

                            $(this).on('keyup', function(){

                                var $this = $(this),
                                search = $this.val().toLowerCase(),
                                target = $this.attr('data-filters'),
                                handle = $(target),
                                rows = handle.find('li a');

                                if(search == ''){

                                    rows.show();

                                }else{

                                    rows.each(function(){

                                        var $this = $(this);

                                        $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

                                    });

                                }
                            });

                        });

                    }

                });

                $('[data-action="filter"][id="dev-table-filter"]').filterTable();

            });

            // Finish Search Filters | by Letter //

        });
    
    </script>

    <script>
    
        $(document).ready(function(){

            // getProducts Function Begin //

            function getProducts(){

                // Code For Manufacturers Begin //

                var sPath = '';
                var aInputs = $('li').find('.get_manufacturer');
                var aKeys = Array();
                var aValues = Array();

                iKey = 0;

                $.each(aInputs, function(key, oInput){

                    if(oInput.checked){

                        aKeys[iKey] = oInput.value

                    };

                    iKey++;

                });

                if(aKeys.length>0){

                    var sPath = '';

                    for(var i = 0; i < aKeys.length; i++){

                        sPath = sPath + 'man[]=' + aKeys[i]+'&';

                    }

                }

                // Code For Manufacturers Finish //

                // Code For Product Categories Begin //

                var aInputs = Array();
                var aInputs = $('li').find('.get_p_cat');
                var aKeys = Array();
                var aValues = Array();

                iKey = 0;

                $.each(aInputs, function(key, oInput){

                    if(oInput.checked){

                        aKeys[iKey] = oInput.value

                    };

                    iKey++;

                });

                if(aKeys.length>0){

                    var sPath = '';

                    for(var i = 0; i < aKeys.length; i++){

                        sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

                    }

                }

                // Code For Product Categories Finish //

                // Code For Categories Begin //

                var aInputs = Array();
                var aInputs = $('li').find('.get_cat');
                var aKeys = Array();
                var aValues = Array();

                iKey = 0;

                $.each(aInputs, function(key, oInput){

                    if(oInput.checked){

                        aKeys[iKey] = oInput.value

                    };

                    iKey++;

                });

                if(aKeys.length>0){

                    var sPath = '';

                    for(var i = 0; i < aKeys.length; i++){

                        sPath = sPath + 'cat[]=' + aKeys[i]+'&';

                    }

                }

                // Code For Categories Finish //

                // Loader When Loading Begin //    

                $('#wait').html('<img src="images/load.gif"');

                // Loader When Loading Finish //  

                $.ajax({

                    url:"load.php",
                    method:"POST",

                    data: sPath+'sAction=getProducts',

                    success:function(data){

                        $('#products').html('');
                        $('#products').html(data);
                        $('#wait').empty();

                    }

                });

                $.ajax({

                    url:"load.php",
                    method:"POST",

                    data: sPath+'sAction=getPaginator',

                    success:function(data){

                        $('.pagination').html('');
                        $('.pagination').html(data);

                    }

                });

            }

            // getProducts Function Finish //

            $('.get_manufacturer').click(function(){
                getProducts();
            });

            $('.get_p_cat').click(function(){
                getProducts();
            });

            $('.get_cat').click(function(){
                getProducts();
            });

        });
    
    </script>
    
    
</body>
</html>