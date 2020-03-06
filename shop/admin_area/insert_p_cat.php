<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Insert Product Category

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insert Product Category
                    </h3>
                </div>
                <div class="panel-body">

                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!--form Begin --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_cat_title" class="col-md-3 control-label"> Product Category Title </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="p_cat_title" type="text" class="form-control" required>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 
                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_cat_Description" class="col-md-3 control-label"> Product Category Description </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <textarea name="p_cat_desc" cols="30" rows="10" class="form-control"></textarea>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                    <label  class="col-md-3 control-label"></label>

                    <div class="col-md-6"><!--col-md-6 Begin --> 
                        
                    <input value="Insert Product Category" name="submit" type="submit" class="btn btn-primary form-control">
                    </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    </form><!-- form Finish --> 

                    </div>


                    </div>

                    </div>
                    </div>

                    <?php 

if(isset($_POST['submit'])){

    $p_cat_title = $_POST['p_cat_title'];
    $p_cat_desc = $_POST['p_cat_desc'];

    $insert_p_cat = "insert into product_categories (p_cat_title, p_cat_desc) values ('$p_cat_title', '$p_cat_desc')";

    $run_p_cat = mysqli_query($con, $insert_p_cat) or  die(mysqli_error($con));

     if($run_p_cat){

        echo "<script> alert('Your New Product Category has been inserted')</script>";
        echo "<script>window.open('index.php?view_p_cats', '_self')</script>";  
    }
    
}
?>

<?php } ?>