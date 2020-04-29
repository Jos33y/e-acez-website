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
<nav class="main-navbar navbar navbar-light navbar-expand-sm"><!-- navbar navber-default begin-->
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
        <?php

                $ip_add = getRealIpUser();

                $select_cart ="select * from cart where ip_add='$ip_add'";

                $run_cart = mysqli_query($con, $select_cart);

                $count =mysqli_num_rows($run_cart);

            ?>      

<div class="box"><!-- box Begin -->

<form method="post"><!--form Begin -->

<div class="box-header"><!-- box-header Begin -->

    <h6><strong> <i class="fa fa-check-circle"></i> Confirm Order</strong></h6>

    <p class="lead"> Save Transaction reference for Payment Confirmation </p>

</div><!-- box-header Finish -->

      <div class="form-group"><!--form-group Begin -->

            <label for="email" class="control-label"> Email: </label>

            <input type="text" name="c_email" class="form-control" placeholder="Email " value="<?php echo $customer_email; ?>" readonly>

        </div><!--form-group Finish -->

        <div class="form-group"><!--form-group Begin -->


        <div class="table-responsive"><!-- table Responsive Begin -->

                        <table class="table"><!-- table Begin -->

                            <thead><!-- Thead Begin -->
                            
                                <tr>

                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Size</th>         
                                    <th>Amount</th>
                            
                                </tr>
                            </thead><!-- Thead Finish -->

                            <tbody><!-- tbody Begin -->

                            <?php

                            
                                                    $total =0;

                                            while($row_cart = mysqli_fetch_array($run_cart)){

                                            $pro_id = $row_cart['p_id'];

                                            $pro_size = $row_cart['size'];

                                            $pro_qty = $row_cart['quantity'];

                                            $get_products = "select * from products where product_id='$pro_id'";

                                            $run_products = mysqli_query($con, $get_products);

                                            while($row_products=mysqli_fetch_array($run_products)){

                                                $product_title = $row_products['product_title'];

                                                $sub_total = $row_products['product_price']*$pro_qty;

                                                $total += $sub_total;
                                
                            ?>

                                <tr>
                                    <td>
                                        <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a>                          
                                    </td>      

                                    <td>                           
                                    <?php echo $pro_qty; ?>                            
                                    </td> 

                                    <td>                           
                                    <?php echo $pro_size; ?>                             
                                    </td>   

                                    <td>
                                    &#8358;<?php echo $sub_total; ?>                           
                                    </td>    

                                        
                                
                                </tr>
                            
                            <?php } }?>
                            </tbody><!-- tbody Finish -->

                            <tfoot><!-- tfoot Begin -->

                            <tr><!-- tr Begin -->
                                <th colspan="3">Total</th>
                                <th>&#8358; <?php echo $total; ?>  </th>

                            </tr><!-- tr Finish -->

                            </tfoot><!-- tfoot Finish -->

                        </table><!-- table Finish -->

                        </div><!-- table-responsive Finish -->
                        
                        </div><!--form-group Finish -->
   
        <div class="text-center"><!--text-center Begin -->

        <script src="https://js.paystack.co/v1/inline.js"></script>

                            <button type="button" name="pay_now" class="btn btn-primary col-sm-6" onclick="payWithPaystack()">
                            <i class="fa fa-user-md"></i>   Pay Now
                            </button>
                        </div><!--text-center Finish -->
                                

    </form><!-- Form  Finish -->

    

</div>

</div>

<div class="col-sm-4"><!-- col-sm-3 Begin -->
<?php

   include("includes/order_summary.php");

   ?>

</div><!-- col-sm-3 Finish -->

<?php if(isset($_POST['pay_now'])){


$ip_add = getRealIpUser();


        $delete_cart = "delete from cart where ip_add='$ip_add'";

        $run_delete = mysqli_query($con, $delete_cart);
}

?>

<script>
  function payWithPaystack(data){
    var handler = PaystackPop.setup({
      key: 'pay stack public key',
      email: '<?php echo $customer_email; ?>',
      amount: '<?php echo $total; ?>00',
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "<?php echo $customer_phone; ?>"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
          window.open('orders.php', '_self')
      },
      onClose: function(){
          alert('Transaction Cancelled');
      }
    });
    handler.openIframe();
  }
</script>


<?php  ?>
