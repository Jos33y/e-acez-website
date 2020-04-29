<?php

session_start();
if(isset($_SESSION['customer_email'])){
  
$customer_email = $_SESSION['customer_email'];

}


include("includes/dbcon.php");
include("functions/functions.php");

?>




<?php


if(isset($_GET['pro_id'])){

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";

    $run_p_cat = mysqli_query($con, $get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];

    $p_size = $row_p_cat['size_id'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zangawears</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/dcfefef11a.js"></script>
 

   <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
   
    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	  <link rel="stylesheet" type="text/css" href="css/flaticon.css"/>
	  <link rel="stylesheet" href="css/slicknav.min.css"/>
	  <link rel="stylesheet" href="css/jquery-ui.min.css"/>
	  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
	  <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="styles/style.css"/>

</head>


<body>
  <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
      
        <!-- Header Section -->
      <header class="header-section">
            <div class="top-header-top">
          <div class="header-top">
        
         
              <div class="row justify-content-center">
                <div class="col-lg-2 text-center text-lg-left site-logo">
                  <!-- logo -->
                  <a href="./index.php" >             
                 
                  <span class="logo-head">e-acez shop </span>
                  </a>
                </div>
                  <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                      <input type="text" placeholder="Search on zangawears...">
                      <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                <div class="user-panel">
                  <div class="up-item">
                    <i class="fa fa-user"></i>
                    <?php 
                
                if(!isset($customer_email)){

                    echo  "<a href='customer_login.php'> Sign In or</a> <a href='customer_register.php'> Sign Up</a>";
                  }else{
                    echo "<a href='logout.php'> Log Out </a>";
       
                }
                
               ?>
                </li>
                   
                  </div>
                  <div class="up-item">
                    <div class="shopping-card">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      <span><?php items(); ?></span>
                    </div>
                    <a href="cart.php">Cart</a>
                  </div>
                </div>
              </div>
              </div>
       
			</div>
    </div> 
    
    <nav class="navbar navbar-dark navbar-expand-md  sticky-top">
        <div class="container-fluid">     

            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon my-toggler "></span>
              </button>
              <div class="collapse navbar-collapse"></div>

              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                      <li class="nav-item <?php if($active=='Home') echo'active'; ?>"><a class="nav-link" href="index.php" >Home</a></li>
                    <li class="nav-item <?php if($active=='Shop') echo'active'; ?>"><a class="nav-link" href="showroom.php">Showroom</a></li>

                    <li class="nav-item <?php if($active=='Account') echo'active'; ?>">
                          <?php        
                             if(!isset($_SESSION['customer_email'])){

                                    echo  "<a class='nav-link' href='customer/my_account.php'> My Account</a>";

                                  }else{
                                    echo "<a class='nav-link' href='customer/my_account.php?my_orders'> My Account </a>";
                      
                                }

                              ?>

                    </li>

                      <li class="nav-item"><a class="nav-link <?php if($active=='Shopping Cart') echo'active';?>" href="cart.php" >Shopping Cart</a></li>
                     
                      <li class="nav-item"><a class="nav-link <?php if($active=='Contact Us') echo'active'; ?>" href="contactus.php" >Contact Us</a></li>
                     
                    </ul>
                              </div> 
        </div>
    </nav>
      </header>
        
               
                
                                        
                      
                   