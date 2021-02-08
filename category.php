<?php 

    $active='Shop';
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
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           </div>
		   </div>
           
          
	
  
  <div class='box'><!-- box Begin -->
                    <h1>Shop</h1></div><!-- container Finish -->
<div id="content" class="container"><!-- container Begin -->
       
       <div class="row">
					<?php 
                 
                $get_cat = "select * from categories where cat_top='yes'";
                $run_cat = mysqli_query($con,$get_cat);

                while($row_cat=mysqli_fetch_array($run_cat)){

                    $cat_id = $row_cat['cat_id'];
                    $cat_title = $row_cat['cat_title'];
                    $cat_image = $row_cat['cat_image'];

                    

                    echo "
                   
						<div class='col-md-4 col-sm-6 single'>
						
						<div class='product' >
            
							<a href='index.php?cat_id=$cat_id'>
							
								<img src='admin_area/other_images/$cat_image' class='img-responsive' style='height:260px;width:258px;'/>
							
							</a>
							<div class='text'>

                
							
								<h3>
						
									<a href='#'>

										$cat_title

									</a>
								
								</h3>
						</div>
                        </div>
						</div>
                    
                    
                    ";

                }
                
                $get_cat = "select * from categories where cat_top='no'";
                $run_cat = mysqli_query($con,$get_cat);

                while($row_cat=mysqli_fetch_array($run_cat)){

                    $cat_id = $row_cat['cat_id'];
                    $cat_title = $row_cat['cat_title'];
                    $cat_image = $row_cat['cat_image'];

                    if($cat_image == ""){

                    }else{

                        $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'>&nbsp;";

                    }

                      echo "
                   
						<div class='col-md-4 col-sm-6 single'>
						
						<div class='product' >
            
							<a href='#'>
							
								$cat_image = '<img src='admin_area/other_images/$cat_image' >'
								$cat_image;
							
							</a>
							<div class='text'>

                
							
								<h3>
						
									<a href='#'>

										$cat_title

									</a>
								
								</h3>
						</div>
                        </div>
						</div>
                    
                    
                    ";

				} ?>
					          

   </div><!-- #content Finish -->
   </div>
  
  
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

    
    
</body>
</html>