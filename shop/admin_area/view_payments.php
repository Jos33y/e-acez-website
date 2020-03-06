<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Payments

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Payments
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-bordered table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th> No </th>
                                    <th> Invoice No </th>
                                    <th> Amount Paid </th>
                                    <th> Method </th>
                                    <th> Reference No </th>                        
                                    <th> Payment Date </th>
                                    <th> Delete Payment </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 

                                    $i=0;

                                    $get_payment = "select * from payments";

                                    $run_payment = mysqli_query($con, $get_payment);

                                    while($row_payment=mysqli_fetch_array($run_payment)){

                                        $payment_id = $row_payment['payment_id'];

                                        $invoice_no = $row_payment['invoice_no']; 

                                        $method = $row_payment['payment_mode'];

                                        $amt = $row_payment['amount'];

                                        $ref_no = $row_payment['ref_no'];                           

                                        $payment_date = $row_payment['payment_date'];  
                                         
                                         $i++;

                                ?>
                                <tr>
                                    <td> <?php echo $i; ?> </td>               
                                    <td> <?php echo $invoice_no; ?> </td>
                                    <td>&#8358; <?php echo $amt; ?>  </td>
                                    <td> <?php echo $method; ?>  </td>
                                    <td> <?php echo $ref_no; ?></td>
                                   
                                    <td> <?php echo $payment_date; ?> </td>
                                    <td> 
                                        <a href="index.php?delete_payment=<?php echo $payment_id; ?>" >

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
