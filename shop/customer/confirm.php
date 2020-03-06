<?php
         $active ='Account';
        include("includes/header.php");
?>
</nav>
</header>

<?php 


if(isset($_GET['order_id'])){

        $get_id = $_GET['order_id'];

                $get_orders = "select * from customer_orders where order_id='$get_id'";

                $run_orders = mysqli_query($con, $get_orders);

                while($row_orders = mysqli_fetch_array($run_orders)){

                  $update_id = $row_orders['order_id'];

                  $due_amount = $row_orders['due_amount'];

                  $invoice_no = $row_orders['invoice_no'];

                  $order_date = $row_orders['order_date'];

                }

                ?>

<div id="content"><!-- content Begin -->
    <div class="container-fluid"><!-- container Begin -->
    <div class="row">
        <div class="col-sm-12"><!-- col-md-12 Begin -->
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb"><!-- breadcrumb Begin -->
                <li class="breadcrumb-item">
                    <a href="../index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Confirm Payment
                </li>
            </ol><!-- breadcrumb Finish -->
</nav>
        </div><!-- col-md-12 Finish -->
</div>

<div class="row"><!--row begin -->

        <div class="col-sm-3"><!-- col-sm-3 Begin -->

        
                <?php

                include("includes/sidebar.php");

                ?>

        </div><!-- col-sm-3 Finish -->

        <div class="col-md-9">

            <div class="box">

                <h3 class="text-center"> Please Confirm Order</h3>

                <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group"><!--form-group -Begin-->

                        <label for="invoice no\umber">Invoice No: </label>
                        <input type="text" name="invoice_no" id="invoice_no" class="form-control" value="<?php echo $invoice_no; ?>" required>
                    </div><!--form-group -Finish-->

                   <div class="form-group"><!--form-group -Begin-->

                        <label for="Amount_sent">Amount Sent: </label>
                        <input type="text" name ="amount_sent" id="amount_sent" class="form-control" value="<?php echo $due_amount; ?>" required>
                    </div><!--form-group -Finish-->
                    
                    <div class="form-group"><!--form-group -Begin-->

                        <label for="payment_method"> Select Payment Method: </label>
                             <select name="payment_mode" id="" class="form-control">
                                 <option value="SPM" deselected> Select Payment Mode </option>
                                 <option value="Bank Transfer"> Bank Transfer</option>
                                 <option value="Paystack"> Paystack</option>
                                 

                             </select>
                        
                    </div><!--form-group -Finish-->

                    <div class="form-group"><!--form-group -Begin-->

                        <label for="Transaction_id"> Transaction / Reference ID: </label>
                        <input type="text" name ="ref_no"  class="form-control" required>
                    </div><!--form-group -Finish-->
                    
                    <div class="form-group"><!--form-group -Begin-->

                        <label for="Payment Date">Payment Date: </label>
                        <input type="text" name ="date" class="form-control" value="<?php echo $order_date; ?>" required>
                    </div><!--form-group -Finish-->
                                        
                    <div class="text-center"><!--form-group -Begin-->
                            <button class="btn btn-primary btn-lg " name="confirm_payment">

                                <i class="fa fa-user-md"></i> Confirm Payment
                            </button>
                    </div>

                </form>

                <?php 

                  if(isset($_POST['confirm_payment'])){

                   

                    $invoice_no = $_POST['invoice_no'];

                    $reference = $_POST['ref_no'];

                    $amount_sent = $_POST['amount_sent'];

                    $payment_mode = $_POST['payment_mode'];
                  
                    $payment_date = $_POST['date'];



                    $complete = "complete";

                    $update_payment = "update payments set payment_mode='$payment_mode', ref_no='$reference', payment_date='$payment_date' where invoice_no='$invoice_no'"; 

                    $run_payment = mysqli_query($con, $update_payment);

                    $update_customer_order ="update customer_orders set order_status='$complete' where order_id='$update_id'";

                    $run_customer_order = mysqli_query($con, $update_customer_order);

                    $update_pending_order = "update pending_orders set order_status='$complete' where invoice_no='$invoice_no'";

                    $run_pending_order = mysqli_query($con, $update_pending_order);

                    if($run_payment){

                      if($run_customer_order){

                         if($run_pending_order){

                        echo "<script>alert('Thank You for purchasing, your orders will be completed with 24 hours')</script>";

                        echo "<script>window.open('my_account.php?my_orders', '_self')</script>";
                    }
                  }
                }

                  }
                
                ?>
                

            </div>

        </div>

        </div><!-- row finish -->

</div><!-- container finish -->
</div>



<?php

    include("includes/footer.php");

    ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>

                <?php } ?>