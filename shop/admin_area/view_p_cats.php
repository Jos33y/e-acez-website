<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Product Categories

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags fa-fw"></i> View Product Categories
                    </h3>
                </div>
                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-bordered table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th> Product_Category_ID: </th>
                                    <th> Product_Category_Title: </th>
                                    <th> Product_Category_Description: </th>
                                    <th> Edit Product Category: </th>
                                    <th> Delete Product Category:</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 

                                    $i=0;

                                    $get_p_cat = "select * from product_categories";

                                    $run_p_cat = mysqli_query($con, $get_p_cat);

                                    while($row_pro=mysqli_fetch_array($run_p_cat)){

                                        $p_cat_id = $row_pro['p_cat_id'];

                                        $p_cat_title = $row_pro['p_cat_title'];

                                        $p_cat_desc = $row_pro['p_cat_desc'];

                                        $i++;

                                        ?>
        
                                        <tr>
                                            <td> <?php echo $i; ?> </td>
                                            <td> <?php echo $p_cat_title; ?> </td>
                                            <td> <?php echo $p_cat_desc; ?> </td>
                                            <td>  
                                                <a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>" >

                                                    <i class="fa fa-pencil"></i> Edit  

                                                </a>    
                                            </td>
                                            <td> 
                                                <a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>" >

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

                                        
