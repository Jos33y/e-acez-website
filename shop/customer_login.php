<?php

$active = 'Account';
include("includes/dbcon.php");
include("functions/functions.php");

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
      
      <?php  
       $get_logo = "select * from logo";
       $run_logo = mysqli_query($con, $get_logo);

       while($row_logo = mysqli_fetch_array($run_logo)){

                $logo_id = $row_logo['logo_id'];
                $logo = $row_logo['b_logo'];
                $b_name = $row_logo['b_name'];
       }

      ?>
      
        <!-- Header Section -->
      <header class="header-section">
            <div class="top-header-top">
          <div class="header-top">
        
         
              <div class="row justify-content-center">
                <div class="col-lg-2 text-center text-lg-left">
                  <!-- logo -->
                  <a href="./index.php" class="site-logo">             
                 
                  <span class="logo-head"><?php echo $b_name; ?> </span>
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

<div id="content"><!-- content Begin -->
    <div class="container"><!-- container-fluid Begin -->
        <div class="row">
            <div class="col-md-12"><!-- col-md-12 Begin -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"><!-- breadcrumb Begin -->
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Login
                        </li>
                    </ol><!-- breadcrumb Finish -->
                </nav>
            </div><!-- col-md-12 Finish -->
        </div>
    </div>
    <div class="container">
          <div class="text-center"><!-- Center Begin -->
               <h4 class="contact-title"> Login</h4>
          </div><!-- Center Finish  -->
          <form action="checkout.php" method="post" class="contact-form"><!--form Begin -->
                <div class="row">
                    <div class="form-group col-md-6"><!--form-group Begin -->
                      <label for="email"> Email </label>
                      <input type="email" name="c_email" id="c_email" class="form-control" placeholder="yourname@email.com" required>
                    </div>
                    <div class="form-group col-md-6"><!--form-group Begin -->
                      <label for="subject"> Password </label>
                      <input type="password" name="c_pass" id="c_pass" class="form-control" placeholder="your password" required>
                    </div>
                </div>
                    <div class="form-group text-center"><!--text-center Begin -->
                        <button  value="Login" name="login" class="site-btn">
                            Login
                        </button>
                     </div><!--text-center Finish -->
                     <div class="text-center">
                     <p> If you haven't created an account <a href="customer_register.php"> Register Now</a> </p>
                     </div>
          </form><!-- Form  Finish -->
          </div><!-- container-fluid Finish -->
</div><!-- content Finish -->
    <?php

        include("includes/footer.php");

    ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

   </body>
</html>
            
<?php

if(isset($_POST['login'])){

    $customer_email = $_POST['c_email'];

    $customer_password = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pword = '$customer_password'";

    $run_customer = mysqli_query($con, $select_customer);

    $get_ip = getRealIpUser();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer==0){

        echo "<script>alert('Your email or password is wrong')</script>";

        exit();



    }
    if($check_customer==1 AND $check_cart==0){

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('customer/my_account.php?my_orders', '_self')</script>";

    }else{

        $_SESSION['customer_email'] = $customer_email;

        $update_msg = mysqli_query($con,"update chat_users set log_in = 'Online' where user_email='$customer_email'");

        $user =  $_SESSION['customer_email'];

        $get_user = "select * from chat_users where user_email='$user'";

        $run_user = mysqli_query($con, $get_user);

        $row = mysqli_fetch_array($run_user);
        
        $user_name = $row['user_name'];

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('checkout.php', '_self')</script>";
        }

    }


?>

