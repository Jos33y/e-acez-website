<div class="container">
                    <div class="text-center contact-title"><!-- Center Begin -->
                        <h4> My Orders</h4>
                        <p class="lead"> Your orders in one place</p>
                        <p class="text-muted ">
                            If you have any questions, feel free to <a href="../contactus.php">contact us.</a>  </p>
                    </div><!-- Center Finish  -->

<div class="table-responsive">

    <table class="table table-bordered table-hover">

        <thead>

            <tr>

                <th> NO </th>
                <th> Due Amount</th>
                <th> Invoice No</th>
                <th>Order Date</th>
                <th> Paid / Unpaid</th>
                <th> Status</th>
            </tr>

        </thead>

        <tbody>

            <?php 

                $customer_session = $_SESSION['customer_email'];

                $get_orders = "select * from customer_orders where customer_email='$customer_session'";

                $run_orders = mysqli_query($con, $get_orders);

                $i = 0;

                while($row_orders = mysqli_fetch_array($run_orders)){

                    $order_id = $row_orders['order_id'];

                    $due_amount = $row_orders['due_amount'];

                    $invoice_no = $row_orders['invoice_no'];

                    $order_date = $row_orders['order_date'];

                    $order_status = $row_orders['order_status'];

                    $i++;

                        if($order_status=='pending'){

                            $order_status = 'Unpaid';

                        }else{

                            $order_status = 'Paid';
                        }

            ?>

            <tr>

                <th> <?php echo $i ;?></th>

                <td>&#8358; <?php echo $due_amount ;?> </td>
                <td> <?php echo $invoice_no ;?> </td>
                <td> <?php echo $order_date ;?> </td>
                <td> <?php echo $order_status ;?> </td>

                <td>
                        <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
                            Confirm Paid
                        </a>
                </td>
            </tr>

                <?php  }  ?>
        </tbody>
    </table>
</div>
</div>