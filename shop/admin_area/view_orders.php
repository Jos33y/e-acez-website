<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Customer Orders

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Customer Orders
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-bordered table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th> Order ID </th>
                                    <th> Email </th>
                                    <th> Invoice No </th>
                                    <th> Product Name </th>
                                    <th> Qty </th>
                                    <th> Size </th>
                                    <th> Order Date </th>
                                    <th> Total Amount </th>
                                    <th> Status </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 

                                    $i=0;

                                   
                                    $get_c_orders = "select * from customer_orders";

                                    $run_c_orders = mysqli_query($con, $get_c_orders);

                                    while($row_c_orders= mysqli_fetch_array($run_c_orders)){

                                        $order_id = $row_c_orders['order_id'];

                                        $customer_email = $row_c_orders['customer_email'];

                                        $invoice_no = $row_c_orders['invoice_no'];

                                        $size = $row_c_orders['size'];

                                        $qty = $row_c_orders['quantity'];

                                        $order_amount = $row_c_orders['due_amount'];
                                                                                                           
                                        $order_date = $row_c_orders['order_date'];

                                        $order_status = $row_c_orders['order_status'];

                                            $get_p_orders = "select * from pending_orders where invoice_no='$invoice_no'";

                                            $run_p_orders = mysqli_query($con, $get_p_orders);
        
                                            while($row_p_orders = mysqli_fetch_array($run_p_orders)){
        
                                                $order_id = $row_p_orders['order_id'];
        
                                                $product_name = $row_p_orders['product_name'];   

                                            }
                                            
                                            $i++;                                                                                                       
                                       
                                                                      

                                ?>
                                <tr>
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $customer_email ;?> </td>
                                    <td> <?php echo $invoice_no; ?> </td>
                                    <td> <?php echo $product_name; ?>  </td>
                                    <td> <?php echo $qty; ?>  </td>
                                    <td> <?php echo $size; ?></td>
                                    <td> <?php echo $order_date; ?> </td>
                                    <td> <?php echo '&#8358; ' . $order_amount; ?> </td>
                                    <td> 
                                        <?php 

                                            if($order_status=='pending'){
    
                                                  echo $order_status = 'Pending';
                                            }else{

                                                echo $order_status = 'Complete';
                                            }                                   
                                    
                                    ?>  </td>
                                    <td> 
                                        <a href="index.php?delete_order=<?php echo $order_id; ?>" >

                                            <i class="fa fa-trash-o"></i> Delete 

                                        </a>                                        
                                    </td>
                                   
                                </tr>
                                <?php } ?>
                                  

                            </tbody>


                        </table><!--table Finish -->
                    </div><!--table responsive Finish -->
                </div><!--Panel Body Finish to view products -->

            </div>
        </div>
</div>

<?php } ?>
