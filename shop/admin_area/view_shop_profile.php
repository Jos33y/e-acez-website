<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>
<?php 

                                    

                                    $email = $_SESSION['email'];

                                    $get_shop_info = "select * from user_db where email='$email'";

                                    $run_shop_info = mysqli_query($conn, $get_shop_info);

                                    $row_shop_info=mysqli_fetch_array($run_shop_info);                       

                                         $customer_id = $row_shop_info['user_id'];

                                         $shop_name = $row_shop_info['business_name'];                                      

                                         $shop_email = $row_shop_info['email'];

                                         $shop_about = $row_shop_info['about'];

                                    $get_payment = "select * from dashboard_db where user_id='$customer_id'";

                                    $run_payment = mysqli_query($conn, $get_payment);

                                    $row_payment = mysqli_fetch_array($run_payment);

                                    $shop_plan = $row_payment['plan'];


                                     $get_logo = "select * from logo";

                                     $run_logo = mysqli_query($con, $get_logo);

                                     $row_logo = mysqli_fetch_array($run_logo);

                                     $shop_logo = $row_logo['b_logo'];

                                         

                                ?>
<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Shop Profile

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Shop Profile 
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-borderless table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th> Logo </th>  
                                    <td> <img src="../images/<?php echo $shop_logo; ?>" width="100" height="100"> </td>                                
                                </tr>
                                <tr>
                                <tr>
                                    <th> Business Name </th>
                                     <td> <?php echo $shop_name ; ?> </td>
                                </tr>
                                <tr>
                                    <th> Email </th>
                                    <td> <?php echo $shop_email; ?> </td>
                                </tr>
                                <tr>
                                    <th> About </th>
                                    <td>  <?php echo $shop_about; ?>  </td>
                                </tr>
                                <tr>
                                    <th> Rental Plan </th>  
                                    <td>  <?php echo $shop_plan; ?>  </td>
                                </tr>
                                    <th> </th>
                                     <td> 
                                        <a href="index.php?edit_shop_profile=<?php echo $customer_id; ?>" class="btn btn-primary" >

                                            <i class="fa fa-pencil"></i> Edit

                                        </a>                                        
                                    </td>
                                </tr>
                            </thead>

                        </table><!--table Finish -->
                    </div><!--table responsive Finish -->
                </div><!--Panel Body Finish to view products -->

            </div>
        </div>
</div>

<?php } ?>
