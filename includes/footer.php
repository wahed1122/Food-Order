<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Pages</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="cart">Shopping Cart</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    
                    <li><a href="customer/my_account">My Account</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>User Section</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li><a href="customer_register">Register</a></li>
                    <li><a href="terms">Terms & Conditions</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul><!-- ul Begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories where p_cat_id=15";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='burger'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
								
                        
                    
                    ?>
					 <?php 
                    
                        $get_p_cats = "select * from product_categories where p_cat_id=16";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='chicken_fry'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
								
						$get_p_cats = "select * from product_categories where p_cat_id=17";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='pizza'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
							
						$get_p_cats = "select * from product_categories where p_cat_id=29";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='pasta'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
							$get_p_cats = "select * from product_categories where p_cat_id=18";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='chowmein'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
						$get_p_cats = "select * from product_categories where p_cat_id=19";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='frenchfrics'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
								$get_p_cats = "select * from product_categories where p_cat_id=20";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='rice'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
									$get_p_cats = "select * from product_categories where p_cat_id=21";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='dal'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
									$get_p_cats = "select * from product_categories where p_cat_id=22";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='readymix'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
									$get_p_cats = "select * from product_categories where p_cat_id=23";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='salt_and_suger'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=24";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='spices'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=25";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='special_ingredient'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=26";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='meat'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=27";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='fish'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=28";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='dried_fish'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=32";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='Beverages'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=30";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='medicine'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
							
										$get_p_cats = "select * from product_categories where p_cat_id=31";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='lpg_gas'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                        
										$get_p_cats = "select * from product_categories where p_cat_id=33";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
						$row_p_cats=mysqli_fetch_array($run_p_cats);
						$p_cat_id = $row_p_cats['p_cat_id'];
								
						$p_cat_title = $row_p_cats['p_cat_title'];
						 
									echo "
                            
                                <li>
                                
                                    <a href='pure_mustard_oil'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                    
                    ?>
                
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Find Us</h4>
                
                <p><!-- p Start -->
                    
                    <strong>Shopping</strong>
                    <br/>Rajshahi
                    <br/>Rajshahi
                    <br/>01745461066
                    <br/>mdabdulwahed7@gmail.com
                    <br/><strong>wahed</strong>
                    
                </p><!-- p Finish -->
                
                <a href="contact">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Dont miss our latest update products.
                </p>
                
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2020 shopping  All Rights Reserve</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">Wahed</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->