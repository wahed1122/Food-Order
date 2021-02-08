<?php 

session_start();

$active='Cart';

include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = get_safe_value($con,$_GET['pro_id']);
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_products = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_products['p_cat_id'];
    
    $pro_title = $row_products['product_title'];
    
    $pro_price = $row_products['product_price'];

    $pro_sale_price = $row_products['product_sale'];
    
    $pro_desc = $row_products['product_desc'];
    
    $pro_img1 = $row_products['product_img1'];
    
    $pro_img2 = $row_products['product_img2'];
    
    $pro_img3 = $row_products['product_img3'];
        
    $pro_label = $row_products['product_label'];

    if($pro_label == ""){

    }else{

        $product_label = "
        
            <a href='#' class='label $pro_label' style='margin-left:10px;'>
            
                <div class='theLabel'> $pro_label </div>
                <div class='labelBackground'>  </div>
            
            </a>
        
        ";

    }
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krishi Hat Bazar</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
	
	<style>
.dropbtn {
  
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  
}
</style>
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                   
               </a>
               <a href="cart"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout'>My Account</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="checkout">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout'> Login </a>";

                               }else{

                                echo " <a href='logout'> Log Out </a> ";

                               }
                           
                           ?>
                           
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container col-md-12"><!-- container Begin -->
           
           <div class="navbar-header col-md-3"><!-- navbar-header Begin -->
               
               <a href="index" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/KHB_Logo.png" alt="Krishi Hat Bazar Logo" class="hidden-xs"style="height:80px;width:311px">
                   <img src="images/KHB_Logo.png" alt="Krishi Hat Bazar Logo Mobile" class="visible-xs"style="height:60px;width:100px">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               
			   
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav col-md-9"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="index">Home</a>
                       </li>
                       <li class="<?php if($active=='fast-food') echo"active"; ?> dropdown">
                           
						   <a href="fast-food" class="dropbtn">Fast Food</a>
									<div class="dropdown-content">
									  <a href="burger">Burger</a>
									  <a href="chicken_fry">Fried Chicken</a>
									  <a href="pizza">Pizza</a>
									  <a href="pasta">Pasta</a>
									  <a href="chowmein">Chow Mein</a>
									  <a href="frenchfrics">Frcnch Frics</a>
									</div>
						</li>
						<li class="<?php if($active=='pure_mustard_oil') echo"active"; ?>">
                           
						   <a href="pure_mustard_oil" >Pure Musterd Oil</a>
						</li>
						
						<li class="<?php if($active=='Grocery') echo"active"; ?> dropdown">
                           
						   <a href="grocery" class="dropbtn">Grocery</a>
									<div class="dropdown-content">
									  <a href="rice">Rice</a>
									  <a href="dal">Dal</a>
									  <a href="readymix">Ready mix</a>
									  <a href="salt_and_suger">Salt and Suger</a>
									  <a href="spices">Spices</a>
									  <a href="special_ingredient">Special Ingredient</a>
									  
									</div>
						</li>
						
						<li class="<?php if($active=='meat_and_fish') echo"active"; ?> dropdown">
                           
						   <a href="meat_and_fish" class="dropbtn">Meat and Fish</a>
									<div class="dropdown-content">
									  <a href="meat.php">Meat</a>
									  <a href="fish.php">Fish</a>
									  <a href="dried_fish.php">Dried Fish</a>
									  
									</div>
						</li>
						
						<li class="<?php if($active=='Beverages') echo"active"; ?>">
                           
						   <a href="Beverages" >Beverages</a>
						</li>
						<li class="<?php if($active=='medicine') echo"active"; ?>">
                           
						   <a href="medicine" >Medicine</a>
						</li>
						
						<li class="<?php if($active=='lpg_gas') echo"active"; ?>">
                           
						   <a href="lpg_gas" >LPG Gas</a>
						</li>
                       <li class="<?php if($active=='Account') echo"active"; ?>">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout'>My Account</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                           
                       </li>
                       <li class="<?php if($active=='Cart') echo"active"; ?>">
                           <a href="cart">Shopping Cart</a>
                       </li>
                       <li class="<?php if($active=='Contact') echo"active"; ?>">
                           <a href="contact">Contact Us</a>
                       </li>
                       
					                  <a href="cart" class="btn  btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               
               
               <form method="GET" action="search" class="navbar-form right " style="margin-top:0px;"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
					   
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               

               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index">Home</a>
                   </li>
                   <li>
                       Details
                   </li>
                   
                   <li>
                       <a href="cart?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   </li>
                   <li> <?php echo $pro_title; ?> </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-12"><!-- col-md-12 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner">
                                   <div class="item active" style="height:500px;width:500px;">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>"style="height:500px;width:600px;" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item"style="height:500px;width:500px;">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>"style="height:500px;width:600px;" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item"style="height:500px;width:500px;">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" style="height:500px;width:600px;"alt="Product 3-c"></center>
                                   </div>
                               </div>
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Next</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->

                           <?php echo $product_label; ?>

                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                           
                           <?php add_cart(); ?>
                           
                           <form action="details?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Products Quantity</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option>
                                           <option>10</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-md-7 Finish -->
                                   
                               </div><!-- form-group Finish -->
                               
                               
                               
                               <?php 

                                    if($pro_label == "Offer"){

                                        echo "

                                            <p class='price'>

                                            PRICE: <del> $$pro_price</del><br/>

                                            SALE: BDT    $pro_sale_price

                                            </p>

                                        ";

                                    }else{

                                        echo "

                                            <p class='price'>

                                            PRICE: BDT $pro_price

                                            </p>

                                        ";

                                    }
                               
                               ?>
                               
                               <p class="text-center buttons" style="font-size:20px;"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                       <div class="row" id="thumbs"><!-- row Begin -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive"style="height:200px;width:200px;">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive"style="height:200px;width:200px;">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive"style="height:200px;width:200px;">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                       </div><!-- row Finish -->
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   
               </div><!-- row Finish -->
               
               <div class="box" id="details"><!-- box Begin -->
                       
                       <h4>Product Details</h4>
                   
                   <p>
                       
                       <?php echo $pro_desc; ?>
                       
                   </p>
                   
                       
                       <hr>
                   
               </div><!-- box Finish -->
               
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
                       
                    $pro_id = $row_products['product_id'];
        
                    $pro_title = $row_products['product_title'];
                    
                    $pro_price = $row_products['product_price'];
            
                    $pro_sale_price = $row_products['product_sale'];
                    
                    $pro_img1 = $row_products['product_img1'];
                    
                    $pro_label = $row_products['product_label'];
                    
                    $manufacturer_id = $row_products['manufacturer_id'];
            
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
            
                    if($pro_label == "Offer"){
            
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
                    
                        <div class='product'>
                        
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
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-12 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
