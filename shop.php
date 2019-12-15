<?php
session_start();
include("db.php"); 
include_once("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body> 
   <div id="top">
       <div class="container">
           <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-primary">
                   <?php
                   if(!isset($_SESSION['customer_email'])){
                       echo "Welcome: Guest";
                   }else{
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                   }
                   ?>
               </a>
               <a href="checkout.php" style="color:white"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
           </div>
           <div class="col-md-6">
               
               <ul class="menu">
                   
                   <li>
                       <a href="cart.php">Check Cart</a>
                   </li>
                   <li>
                       <a href="customer/account.php">Account</a>
                   </li>
                   <li>
                      <a href="checkout.php">
                     <?php
                     if(!isset($_SESSION['customer_email'])){
                          echo "<a href='checkout.php'> Login </a>";
                         }else{
                          echo " <a href='logout.php'> Log Out </a> ";
                         }
                     ?>
                     </a>
                   </li>
                   <li>
                       <a href="register.php">Register</a>
                   </li> 
               </ul>
           </div>
       </div>
   </div>
   <div id="navbar" class="navbar navbar-default">
       <div class="container">
           <div class="navbar-header">
               <a href="index.php" class="navbar-brand home">
                   <img src="images/Webshop-logo.png" alt="Webshop Logo" class="hidden-xs">
                   <img src="images/Webshop-logo-mobile.png" alt="Webshop Logo Mobile" class="visible-xs"> 
               </a>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i> 
               </button> 
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search"> 
                   <span class="sr-only">Toggle Search</span> 
                   <i class="fa fa-search"></i> 
               </button> 
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">
               <div class="padding-nav">
                   <ul class="nav navbar-nav left">
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li class="active">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contacts</a>
                       </li>
                        <li>
                           <a href="customer/account.php">Account</a>
                       </li> 
                   </ul>
               </div>
               <a href="cart.php" class="btn navbar-btn btn-primary right">
                   <i class="fa fa-shopping-cart"></i> 
                   <span><?php items(); ?> Items in cart </span> 
               </a> 
               <div class="navbar-collapse collapse right">
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                       <span class="sr-only">Toggle Search</span> 
                       <i class="fa fa-search"></i> 
                   </button>
               </div>
               
               <div class="collapse clearfix" id="search">
                   <form method="get" action="results.php" class="navbar-form">
                       <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required> 
                           <span class="input-group-btn"> 
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                               <i class="fa fa-search"></i> 
                           </button>
                           </span> 
                       </div>
                   </form>   
               </div>
           </div>
       </div>
       
   </div>
   
   <div id="content">
       <div class="container">
           <!--<div class="col-md-12">
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul>
           </div> -->
           <div class="col-md-3">
           <?php 
            
            include("sidebar.php");
            ?>
               
           </div>
           <div class="col-md-9">
               <!--<div class="box">
                   <h1>Shop</h1>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                   </p>
               </div>  -->
               
               <div class="row">
                   <?php
                      if(!isset($_GET['p_cat'])){
                       if(!isset($_GET['cat'])){
                          $per_page=6;
                          if(isset($_GET['page'])){
                              $page = $_GET['page'];
                          }else{
                              $page=1;
                          }
                          $start_from = ($page-1) * $per_page;
                          $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                          $run_products = mysqli_query($con,$get_products);
                          while($row_products=mysqli_fetch_array($run_products)){
                              $pro_id = $row_products['product_id'];
                              $pro_title = $row_products['product_title'];
                              $pro_price = $row_products['product_price'];
                              $pro_img1 = $row_products['product_img1'];
                              echo "
                                  <div class='col-md-4 col-sm-6 center-responsive'>
                                      <div class='product'>
                                          <a href='details.php?pro_id=$pro_id'>
                                              <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                          </a>
                                          <div class='text'>
                                              <h3>
                                                  <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                              </h3>
                                              <p class='price'>
                                                  $$pro_price
                                              </p>
                                              <p class='buttons'>
                                                <center>
                                                  <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                      View Details
                                                  </a>
                                                  <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                      <i class='fa fa-shopping-cart'> Add To Cart </i> 
                                                  </a>
                                                </center>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              ";
                          }
                        }   
                      }
                   ?>
             </div>
        </div>
            
           <center>
               <ul class="pagination">
                   <li class="active;"><a href="#">First Page</a></li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li><a href="#">Last Page</a></li>
               </ul>
           </center>
           <?php 
              getPCategoriesProduct();
              getCCategoriesProduct();
            ?>
           </div>
           
       </div>
   </div>
   
   <?php 
    
    include("footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>