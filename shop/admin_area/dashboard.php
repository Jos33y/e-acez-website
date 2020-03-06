<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row 1 Begin -->
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        <h1 class="page-header"> Dashboard</h1>

        <ol class="breadcrumb"><!-- row Begin -->
            <li class="breadcrumb-item active">
                
                <i class="fa fa-dashboard"></i> Dashboard
        
            </li>
        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->
</div><!-- row no:1 Finish -->

<div class="row"><!-- row 2 Begin -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Begin -->
        <div class="panel panel-primary"><!--card Begin -->
            <div class="panel-heading"><!-- card-header Begin -->
                <div class="row"><!-- row 3 Begin -->
                    <div class="col-xs-3"><!-- col-xs-3 Begin -->
                        
                        <i class="fa fa-tasks fa-5x"></i>
                     
                    </div><!-- col-xs-3 Finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                    <div class="huge"> <?php echo $count_products; ?>  </div>
                            <div> Products </div>
                    </div><!-- col-xs-9 text-right Finish -->
                   
                </div><!-- row no:3 Finish -->
            </div><!-- card-header Finish -->

            <a href="index.php?view_products">
                <div class="panel-footer"><!-- panel-footer Begin -->

                    <span class="pull-left"><!--pull-left Begin -->
                         View Details 
                    </span><!-- pull-left Finish -->

                    <span class="pull-right"> <!-- pull-right Begin -->
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right Finish-->
            </a>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Finish -->
        </div><!-- card Finish -->
    </div><!-- col-lg-3 col-md-6 Finish -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Begin -->
        <div class="panel panel-green"><!--card Begin -->
            <div class="panel-heading"><!-- card-header Begin -->
                <div class="row"><!-- row 3 Begin -->
                    <div class="col-xs-3"><!-- col-xs-3 Begin -->
                        
                        <i class="fa fa-users fa-5x"></i>
                     
                    </div><!-- col-xs-3 Finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                        <div class="huge"> <?php echo $count_customers; ?>  </div>
                            <div> Customers </div>
                        
                    </div><!-- col-xs-9 text-right Finish -->
                   
                </div><!-- row no:3 Finish -->
            </div><!-- card-header Finish -->

            <a href="index.php?view_customers">
                <div class="panel-footer"><!-- panel-footer Begin -->

                    <span class="pull-left"><!--pull-left Begin -->
                         View Details 
                    </span><!-- pull-left Finish -->

                    <span class="pull-right"> <!-- pull-right Begin -->
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right Finish-->
            </a>
                    <div class="clearfix"></div>

                </div><!-- panel-footer Finish -->
        </div><!-- card Finish -->
    </div><!-- col-lg-3 col-md-6 Finish -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Begin -->
        <div class="panel panel-orange"><!--card Begin -->
            <div class="panel-heading"><!-- card-header Begin -->
                <div class="row"><!-- row 3 Begin -->
                    <div class="col-xs-3"><!-- col-xs-3 Begin -->
                        
                        <i class="fa fa-tags fa-5x"></i>
                     
                    </div><!-- col-xs-3 Finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                        <div class="huge"> <?php echo $count_p_categories; ?>  </div>
                            <div> Product Categories </div>
                        
                    </div><!-- col-xs-9 text-right Finish -->
                   
                </div><!-- row no:3 Finish -->
            </div><!-- card-header Finish -->

            <a href="index.php?view_p_cats">
                <div class="panel-footer"><!-- panel-footer Begin -->

                    <span class="pull-left"><!--pull-left Begin -->
                         View Details 
                    </span><!-- pull-left Finish -->

                    <span class="pull-right"> <!-- pull-right Begin -->
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right Finish-->
            </a>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Finish -->
        </div><!-- card Finish -->
    </div><!-- col-lg-3 col-md-6 Finish -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Begin -->
        <div class="panel panel-red"><!--card Begin -->
            <div class="panel-heading"><!-- card-header Begin -->
                <div class="row"><!-- row 3 Begin -->
                    <div class="col-xs-3"><!-- col-xs-3 Begin -->
                        
                        <i class="fa fa-shopping-cart fa-5x"></i>
                     
                    </div><!-- col-xs-3 Finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                            <div> Orders </div>
                        
                    </div><!-- col-xs-9 text-right Finish -->
                   
                </div><!-- row no:3 Finish -->
            </div><!-- card-header Finish -->

            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Begin -->

                    <span class="pull-left"><!--pull-left Begin -->
                         View Details 
                    </span><!-- pull-left Finish -->

                    <span class="pull-right"> <!-- pull-right Begin -->
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right Finish-->
            </a>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Finish -->
        </div><!-- card Finish -->
    </div><!-- col-lg-3 col-md-6 Finish -->


</div><!-- row no:2 Finish -->

<div class="row"><!-- row no:3 Begin -->
    <div class="col-lg-8"><!-- col-lg-8 Begin -->

    <div class="button">
                <a href="index.php?share" class="btn btn-success btn-lg"><i class="fa fa-share-alt"></i> Share Shop Online </a>
            </div>
            <br>
        <div class="panel panel-primary"><!--panel panel-primary Begin -->
            <div class="panel-heading"><!--panel-heading Begin -->
                <div class="panel-title"><!-- panel-title Begin -->

                    <i class="fa fa-money fa-fw"></i> New Orders 

                </div><!-- panel-title Finish -->
            </div><!--panel-heading Finish -->

            <div class="panel-body"><!-- panel-body Begin -->
                <div class="table-responsive"><!-- table-responsive Begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered Begin -->

                        <thead><!-- thead Begin -->
                            <tr>
                                <th> Order no: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                <th> Product Size: </th>
                                <th> Status: </th>
                            </tr>

                        </thead><!-- thead Finish -->

                        <tbody><!-- tbody Finish -->

                            <?php 

                                $i=0;

                                $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";

                                $run_order = mysqli_query($con, $get_order);

                                while($row_order= mysqli_fetch_array($run_order)){

                                    $order_id = $row_order['order_id'];

                                    $customer_email = $row_order['customer_email'];

                                    $invoice_no = $row_order['invoice_no'];

                                    $product_name = $row_order['product_name'];

                                    $qty = $row_order['quantity'];

                                     $size = $row_order['size'];

                                     $order_status = $row_order['order_status'];

                                     $i++;       
                            
                            ?>

                            <tr><!-- tr Begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_email; ?> </td>
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo $product_name; ?> </td>
                                <td> <?php echo $qty; ?> </td>
                                <td> <?php echo $size; ?> </td>
                                <td> 
                                    <?php

                                        if($order_status=='pending'){

                                            echo $order_status ='Pending';

                                        } else{

                                            echo $order_status='Complete';
                                        }
                                    
                                    ?>                              
                                </td>
                            </tr><!-- tr Finish -->

                            <?php } ?>         

                        </tbody><!-- tbody Finish -->
                    </table><!-- table table-hover table-striped table-bordered Begin -->
                </div><!-- table-responsive Finish -->

                <div class="text-right"><!-- text-right Begin -->
                    <a href="index.php?view_orders"><!-- a href Begin -->

                        View All Orders <i class="fa fa-arrow-circle-right"></i>
                    </a><!-- tra href Finish -->
                </div><!-- text-right Finish -->
            </div><!-- panel-body Finish -->          
        </div><!--panel panel-primary Finish-->

         

    </div><!-- col-lg-8 Finish -->

    <div class="col-md-4"><!-- col-md-4 Begin -->
        <div class="panel"><!-- panel Begin -->
            <div class="panel-body"><!-- panel-body Begin --> 
                <div class="mb md thumb-info"><!-- mb md thumb-info Begin -->

                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class=" rounded img-responsive">

                    <div class="thumb-info-title"><!-- thumb-info-title Begin -->

                        <span class="thumb-info-inner"> <?php echo $admin_name ." ". $admin_name2 ; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_phone; ?></span>

                    </div><!-- thumb-info-title Finish -->

                </div><!-- mb md thumb-info Finish -->

                <div class="mb-md"><!-- mb md Begin -->
                        <div class="widget-content-expanded"><!-- widget-content-expanded Begin -->
                            <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br>
                            <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?>  <br>
                            <i class="fa fa-flag"></i> <span> State: </span> <?php echo $admin_state; ?>  <br>
                        </div><!-- widget-content-expanded Finish -->

                        <hr class="dotted-short" style="margin:10px 0 10px 0;">

                        <h5 class="text-muted"> About </h5>
                        
                        <p><!-- p Begin -->
                        <?php echo $admin_about; ?>
                        </p><!-- p Begin -->

                </div><!-- mb md Finish -->

               
            </div><!-- panel-body Finish -->
        </div><!-- panel Finish -->
    </div><!-- col-md-4 Finish -->

</div><!-- row no:3 Finish -->


<?php } ?>