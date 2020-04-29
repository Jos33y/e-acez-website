<?php

session_start();

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
   
    <link rel="stylesheet" href="styles/style.css">

</head>


<body>

<nav class=" navbar navbar-light navbar-expand-sm"><!-- navbar navber-default begin-->
      <?php  
       $get_logo = "select * from logo";
       $run_logo = mysqli_query($con, $get_logo);

       while($row_logo = mysqli_fetch_array($run_logo)){

                $logo_id = $row_logo['logo_id'];
                $logo = $row_logo['b_logo'];
                $b_name = $row_logo['b_name'];
       }

      ?>
         <div class="container-fluid"><!-- container-fluid begin-->
            <a class="navbar-brand ml-3" href="index.php">
              <img src="images/<?php echo $logo; ?>" width="60" height="60" class="logo">
              <span class="logo-head"><?php echo $b_name; ?></span>
            </a>
            </div>   
                    
                    </div><!-- container-fluid finish -->
                  </nav><!-- navbar navber-default finish -->

<div id="content"><!-- content Begin -->
    <div class="container-fluid"><!-- container Begin -->
        <div class="row checkout">
        <div class="col-md-8"><!-- col-sm-9 Begin -->

<div class="box"><!-- box Begin -->

<div class="box-header"><!-- box-header Begin -->

    <h6><strong> <i class="fa fa-check-circle"></i> ADDRESS DETAILS</strong></h6>

</div><!-- box-header Finish -->

<form method="post"><!--form Begin -->

<div class="form-group"><!--form-group Begin -->

<div class="form-row">
            <div class="col">
            <input type="text" class="form-control" placeholder="First name" value="<?php echo $firstname . " " . $lastname; ?>" readonly>
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Last name" value="<?php echo $customer_email; ?>" readonly>
            </div>
        </div>
</div>

        <div class="form-group"><!--form-group Begin -->

            <label for="Phone" class="sr-only"> Phone: </label>

            <input type="text" name="c_phone" class="form-control"  value="<?php echo $customer_phone; ?>" readonly>

        </div><!--form-group Finish -->

        <div class="form-group"><!--form-group Begin -->

<label for="address" class="sr-only"> Address </label>

<input type="text" name="c_phone" class="form-control"  value="<?php echo $customer_address .', '. $customer_city .', '. $customer_state .'.' ; ?>" readonly>

</div><!--form-group Finish -->
<div class="text-center"><!--text-center Begin -->
                <a href="checkout.php">
                            <button  name="save" class="btn btn-primary col-sm-4">
                            <i class="fa fa-pencil"></i>   Edit Address Details
                            </button>
                </a>
                        </div><!--text-center Finish -->
                        

                        
        

</form>
<br>
<br>
        <div class="box-header"><!-- box-header Begin -->
        <div class="text">
        
        <h6><strong> <i class="fa fa-check-circle"></i> PAYMENT METHOD </strong></h6>
        </div>
        </div>
        
       <h6><span style="font-weight:600;"> Please select a payment method </span></h6>

       <ul class="nav-list">

            <li class="list-item"> 
            <a class='nav-link'  href="orders.php?c_id=<?php echo $customer_id; ?>"> Offline payment through bank transfer or deposit </a> </li>

            <li class="list-item"> 
            <a class='nav-link' href='#'>Online Payment not available now
                <br>
                <br>
                <img class="img-fluid" src="images/paystackimg.png" width="400" height="100" alt="Pystack Image">
            </a>
        </li>
        </ul>
</div>

</div>
        

<div class="col-sm-4"><!-- col-sm-3 Begin -->
<?php

   include("includes/order_summary.php");

   ?>

</div><!-- col-sm-3 Finish -->

