<?php

$active = 'Account';
include("includes/dbcon.php");
include("functions/functions.php");

?>
<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con, $get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$firstname = $row_customer['firstname'];

$lastname = $row_customer['lastname'];

$customer_email = $row_customer['customer_email'];

$customer_phone = $row_customer['customer_phone'];

$customer_address = $row_customer['customer_address'];

$customer_city = $row_customer['customer_city'];

$customer_state = $row_customer['customer_state'];

$customer_country = $row_customer['customer_country'];

$customer_zip = $row_customer['customer_zip'];

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
    <div class="container"><!-- container Begin -->
    <form action="checkout.php" method="post" class="checkout-form"><!--form Begin -->
        <div class="row checkout">
            <div class="col-lg-6"><!-- col-sm-6 Begin -->
                 <h6 class="contact-title"><strong> <i class="fa fa-check-circle"></i> ADDRESS DETAILS</strong></h6>
        <div class="row">
             <div class="form-group col-md-6"><!--form-group Begin -->
                <input type="text" class="form-control" placeholder="First name" value="<?php echo $firstname; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Last name" value="<?php echo $lastname; ?>" readonly>
            </div>
            <div class="form-group col-md-12"><!--form-group Begin -->       
                <label for="email" class="sr-only"> Email </label>
                <input type="text" name="c_email" id="c_email" class="form-control" placeholder="Email"  value="<?php echo $customer_email; ?>" readonly>
            </div><!--form-group Finish -->
            <div class="form-group col-md-12"><!--form-group Begin -->
                <label for="Phone" class="sr-only"> Phone </label>
                <input type="text" name="c_phone" class="form-control" placeholder="Phone number"  value="<?php echo $customer_phone; ?>" readonly>
            </div><!--form-group Finish -->
            <div class="form-group col-md-12"><!--form-group Begin -->                                  
                <label for="Address" class="control-label"> Address </label>
                <input type="text" name="c_address" id="c_address" class="form-control" value="<?php echo $customer_address; ?>" required>
            </div><!--form-group Finish -->
            <div class="form-group col-md-12"><!--form-group Begin -->
                <label for="City" > City </label>
                <input type="text" name="c_city" class="form-control" placeholder="City" value="<?php echo $customer_city; ?>" required>
            </div><!--form-group Finish -->

            <div class="form-group col-md-12">
                <label for="state">State</label>
                    <select type="text" name="c_state" class="form-control">
                        <option value="<?php echo $customer_state; ?>"><?php echo $customer_state; ?></option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross Rive">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">Federal Capital Territory</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamfara</option>
                    </select>
            </div>
            <div class="form-group col-md-12"><!--form-group Begin -->
                <label for="Country"> Country </label>
                    <select name="c_country" id="c_country" class="form-control " required>
                         <option value="<?php echo $customer_country; ?>"><?php echo $customer_country; ?></option>
                          <option value="Nigeria" selected>Nigeria</option>
                    </select>
            </div>
            <div class="form-group col-md-12">
                <label for="zip"> Zip Code </label>
                <input type="text" name="c_zip" id="c_zip" class="form-control" placeholder="Zip code" value="<?php echo $customer_zip; ?>">
             </div>
        </div><!--form-group Finish -->
</div><!-- box Finish -->
<div class="col-lg-6"><!-- col-sm-3 Begin -->

<?php

   include("includes/order_summary.php");

   ?>

</div><!-- col-sm-3 Finish -->
        </div>
    </form>
    </div>
    
                            </div>
                            
                            

<?php

        include("includes/footer.php");

        ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>
<?php 
if(isset($_POST['save'])){

$update_id = $customer_id;

$c_email = $_POST['c_email'];

$c_phone = $_POST['c_phone'];    

$c_address = $_POST['c_address']; 

$c_city = $_POST['c_city'];    

$c_state = $_POST['c_state'];   

$c_country = $_POST['c_country'];    

$c_zip = $_POST['c_zip'];    

$update_customer = "update customers set 
customer_address='$c_address', customer_city='$c_city', customer_state='$c_state', 
customer_country='$c_country', customer_zip='$c_zip'  where customer_id = '$update_id'";

$run_customer = mysqli_query($con, $update_customer);

if($run_customer){

    echo "<script>alert('Address Saved Successfully')</script>";

    echo "<script>window.open('orders.php?c_id=<?php echo $update_id; ?>', '_self')</script>";
}
}
