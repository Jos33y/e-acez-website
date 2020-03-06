<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Customers

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Customers 
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-bordered table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th> No </th>
                                    <th> Name </th>
                                    <th> Image</th>
                                    <th> Email </th>
                                    <th> Phone No </th>
                                    <th> Address </th>
                                    <th> State </th>
                                    <th> Country </th>
                                    <th> Reg Date </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 

                                    $i=0;                                   

                                    $get_customers = "select * from customers";

                                    $run_customers = mysqli_query($con, $get_customers);

                                    while($row_customers=mysqli_fetch_array($run_customers)){

                                         $customer_id = $row_customers['customer_id'];

                                         $first_name = $row_customers['firstname'];

                                         $last_name = $row_customers['lastname'];

                                         $customer_image = $row_customers['customer_image'];

                                         $customer_email = $row_customers['customer_email'];

                                         $customer_address = $row_customers['customer_address'];

                                         $customer_phone = $row_customers['customer_phone'];

                                         $customer_state = $row_customers['customer_state'];

                                         $customer_country = $row_customers['customer_country'];          

                                         $reg_date = $row_customers['customer_reg_date'];

                                         $i++;

                                ?>

                                <tr>
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $first_name . ' ' . $last_name; ?> </td>
                                    <td> <img src="../customer/customer_images/<?php echo $customer_image; ?>" width="60" height="60"> </td>
                                    <td> <?php echo $customer_email; ?> </td>
                                    <td>  <?php echo $customer_phone; ?>  </td>
                                    <td> <?php echo $customer_address; ?></td>
                                    <td> <?php echo $customer_state; ?> </td>
                                    <td> <?php echo $customer_country; ?> </td>
                                    <td> <?php echo $reg_date; ?>  </td>
                                    <td> 
                                        <a href="index.php?delete_customer=<?php echo $customer_id; ?>" >

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
