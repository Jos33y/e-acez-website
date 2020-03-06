<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Products

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Products 
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-bordered table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th>ID </th>
                                    <th>Title </th>
                                    <th>Image </th>
                                    <th>Price </th>
                                    <th>Label </th>
                                    <th>Sold </th>
                                    <th>Keywords </th>
                                    <th>Date </th>
                                    <th>Delete </th>
                                    <th>Edit </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 

                                    $i=0;

                                    $get_pro = "select * from products";

                                    $run_pro = mysqli_query($con, $get_pro);

                                    while($row_pro=mysqli_fetch_array($run_pro)){

                                        $pro_id = $row_pro['product_id'];

                                         $pro_title = $row_pro['product_title'];

                                         $pro_img1 = $row_pro['product_img1'];

                                         $pro_price = $row_pro['product_price'];

                                         $pro_label = $row_pro['product_label'];

                                         $pro_keywords = $row_pro['product_keywords'];

                                         $pro_date = $row_pro['date'];

                                         $i++;

                                ?>

                                <tr>
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $pro_title; ?> </td>
                                    <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"> </td>
                                    <td> <?php echo $pro_price; ?> </td>
                                    <td> <?php echo $pro_label; ?> </td>
                                    <td> <?php 
                                    
                                                $get_sold = "select * from pending_orders where product_name='$pro_title'";

                                                $run_sold = mysqli_query($con, $get_sold);

                                                $count = mysqli_num_rows($run_sold);

                                                echo $count;
                                    
                                    ?> </td>
                                    <td> <?php echo $pro_keywords; ?> </td>
                                    <td> <?php echo $pro_date; ?> </td>
                                    <td> 
                                        <a href="index.php?delete_product=<?php echo $pro_id; ?>" >

                                            <i class="fa fa-trash-o"></i> Delete 

                                        </a>                                        
                                    </td>
                                    <td>  
                                        <a href="index.php?edit_product=<?php echo $pro_id; ?>" >

                                            <i class="fa fa-pencil"></i> Edit  

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
