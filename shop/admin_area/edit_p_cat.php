<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>
<?php 

if(isset($_GET['edit_p_cat'])){

    $edit_p_cat_id = $_GET['edit_p_cat'];

    $get_p_cat = "select * from product_categories where p_cat_id = '$edit_p_cat_id'";

    $run_edit_p_cat = mysqli_query($con, $get_p_cat);

    $row_edit = mysqli_fetch_array($run_edit_p_cat);

    $p_cat_id = $row_edit['p_cat_id'];

    $p_cat_title = $row_edit['p_cat_title']; 

    $p_cat_desc = $row_edit['p_cat_desc']; 
}

?>


<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Edit Product Category
                    </h3>
                </div>
                <div class="panel-body">

                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!--form Begin --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_cat_title" class="col-md-3 control-label"> Product Category Title </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="p_cat_title" type="text" class="form-control" required value="<?php echo $p_cat_title ;?>">

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 
                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_cat_Description" class="col-md-3 control-label"> Product Category Description </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <textarea name="p_cat_desc" cols="30" rows="10" class="form-control"><?php echo $p_cat_desc ;?></textarea>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                    <label  class="col-md-3 control-label"></label>

                    <div class="col-md-6"><!--col-md-6 Begin --> 
                        
                    <input value="Update Product Category" name="update" type="submit" class="btn btn-primary form-control">
                    </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    </form><!-- form Finish --> 

                    </div>


                    </div>

                    </div>
                    </div>

                    <?php 

if(isset($_POST['update'])){

    $p_cat_title = $_POST['p_cat_title'];
    $p_cat_desc = $_POST['p_cat_desc'];

    $update_p_cat = "update product_categories set p_cat_title='$p_cat_title',  p_cat_desc ='$p_cat_desc' where p_cat_id='$p_cat_id'";

    $run_p_cat = mysqli_query($con, $update_p_cat) or  die(mysqli_error($con));

     if($run_p_cat){

        echo "<script> alert('Product Category has been Updated')</script>";
        echo "<script>window.open('index.php?view_p_cats', '_self')</script>";  
    }
    
}
?>

<?php } ?>