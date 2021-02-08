<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");
    
if(isset($_GET['order_id'])){
    
    $order_id = get_safe_value($con,$_GET['order_id']);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krishi Hat Bazar</title>
    <link rel="stylesheet" href="../styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="../font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css">
				<style>
.dropbtn {
  
  color: white;
  padding: 14px;
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
               <a href="../cart"> <?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register">Register</a>
                   </li>
                   <li>
                       <a href="my_account">My Account</a>
                   </li>
                   <li>
                       <a href="../cart">Go To Cart</a>
                   </li>
                   <li>
                       <a href="../checkout">
                       
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                         ?>
                       
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default" style="font-family:Goudy Bookletter 1911, sans-serif;"><!-- navbar navbar-default Begin -->
       
       <div class="container col-md-12"><!-- container Begin -->
           
           <div class="navbar-header col-md-3"><!-- navbar-header Begin -->
               
               <a href="../index" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/KHB_Logo.png" alt="Krishi Hat Bazar Logo" class="hidden-xs"style="height:80px;width:311px">
                   <img src="images/KHB_Logo.png" alt="Krishi Hat Bazar Logo Mobile" class="visible-xs"style="height:60px;width:180px">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav col-md-9"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="../index">Home</a>
                       </li>
                       <li class=" dropdown">
                           
						   <a href="../fast-food" class="dropbtn">Fast Food</a>
									<div class="dropdown-content">
									  <a href="../burger">Burger</a>
									  <a href="../chicken_fry">Fried Chicken</a>
									  <a href="../pizza">Pizza</a>
									  <a href="../pasta">Pasta</a>
									  <a href="../chowmein">Chow Mein</a>
									  <a href="../frenchfrics">Frcnch Frics</a>
									</div>
						</li>
						<li class="">
                           
						   <a href="../pure_mustard_oil" >Pure Musterd Oil</a>
						</li>
						<li class="dropdown">
                           
						   <a href="../grocery" class="dropbtn">Grocery</a>
									<div class="dropdown-content">
									  <a href="../rice">Rice</a>
									  <a href="../dal">Dal</a>
									  <a href="../readymix">Ready mix</a>
									  <a href="../salt_and_suger">Salt and Suger</a>
									  <a href="../spices">Spices</a>
									  <a href="../special_ingredient">Special Ingredient</a>
									  
									</div>
						</li>
						
						<li class=" dropdown">
                           
						   <a href="../meat_and_fish" class="dropbtn">Meat and Fish</a>
									<div class="dropdown-content">
									  <a href="../meat">Meat</a>
									  <a href="../fish">Fish</a>
									  <a href="../dried_fish">Dried Fish</a>
									  
									</div>
						</li>
						
						<li >
                           
						   <a href="../Beverages" >Beverages</a>
						</li>
						<li >
                           
						   <a href="../medicine" >Medicine</a>
						</li>
						
						<li >
                           
						   <a href="../lpg_gas" >LPG Gas</a>
						</li>
						
                       <li class="active">
                           <a href="my_account">My Account</a>
                       </li>
                       <li>
                           <a href="../cart">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="../contact">Contact Us</a>
                       </li>
                       
					                  <a href="../cart" class="btn  btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               
               
               <form method="GET" action="../search" class="navbar-form right " style="margin-top:0px;"><!-- navbar-form Begin -->
                       
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
                       <a href="../index">Home</a>
                   </li>
                   <li>
                        Payment
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               <?php
			   $update_id = get_safe_value($con,$_GET['order_id']);
			   $customer_order = "SELECT * FROM `customer_orders` where order_id ='$update_id'";
			   $run_order = mysqli_query($con,$customer_order);
			   $row = mysqli_fetch_array($run_order);
			   $invoice_id = get_safe_value($con,$row['invoice_no']);
			   $due_amount = get_safe_value($con,$row['due_amount']);
			   
			   $post_office = get_safe_value($con,$row['post_office']);
			   
			   ?>
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <h1 align="center"> Please confirm your payment</h1>
                   
                   <form action="confirm?update_id=<?php echo $order_id;  ?>" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Invoice No: </label>
                          
                          <input type="text" class="form-control" name="invoice_no" value="<?php echo $invoice_id;?>" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Amount : </label>
                          
                          <input type="text" class="form-control" name="amount_sent" value="<?php echo $due_amount;?>" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Select Payment Mode: </label>
                          
                          <select name="payment_mode" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select Payment Mode </option>
                              <option> Bikash </option>
                              <option> Roket </option>
                              <option> Nagad </option>
                              
                          </select><!-- form-control Finish -->
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Transaction ID: </label>
                          
                          <input type="text" class="form-control" name="ref_no" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Code: </label>
                          
                          <input type="text" class="form-control" name="code"  required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Payment_date: </label>
                          
                          <input type="date" class="form-control" name="date" value="<?php echo $post_office;?>" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="text-center"><!-- text-center Begin -->
                           
                           <button class="btn btn-primary btn-lg" name="confirm_payment"><!-- tn btn-primary btn-lg Begin -->
                               
                               <i class="fa fa-user-md"></i> Confirm Payment
                               
                           </button><!-- tn btn-primary btn-lg Finish -->
                           
                       </div><!-- text-center Finish -->
                       
                   </form><!-- form Finish -->
                   
				   
				  
                   <?php 
                   
                    if(isset($_POST['confirm_payment'])){
                        
                        $update_id = get_safe_value($con,$_GET['order_id']);
                        
                        $invoice_no = get_safe_value($con,$_POST['invoice_no']);
                        
                        $amount = get_safe_value($con,$_POST['amount_sent']);
                        
                        $payment_mode = get_safe_value($con,$_POST['payment_mode']);
                        
                        $ref_no = get_safe_value($con,$_POST['ref_no']);
                        
                        $code = get_safe_value($con,$_POST['code']);
                        
                        $payment_date = get_safe_value($con,$_POST['date']);
                        
                        $complete = "pending";
                        
                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date,status) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date','$complete')";
                        
                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        $update_customer_order = "UPDATE `customer_orders` SET `order_status`='$complete' WHERE `order_id`='$update_id '";
                        
                        $run_customer_order = mysqli_query($con,$update_customer_order);
                        
                        
                        
                        if($run_customer_order){
                            
                            echo "<script>alert('Thank You for purchasing, your orders will be completed confirm')</script>";
                            
                            echo "<script>window.open('my_account?my_orders','_self')</script>";
                            
                        }
                        
                    }
                   
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>