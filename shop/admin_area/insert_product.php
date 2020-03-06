<?php

if(!isset($_SESSION['email'])){

    echo "<script>window.open('https://www.e-acez.com/sign-in.php', '_self')</script>";
 
 }else{

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Insert Products </title>
    
    
   
</head>
<body>   
    <div class="row"><!-- row Begin -->

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Products

                </li>


            </ol>

        </div>

    </div><!--row Finish -->
    <div class="row">

        <div class="col-lg-12 ">
        

            <div class="panel panel-default">

                <div class="panel-heading">
                   
                    <h3 class="panel-title">

                        <i class="fa fa-money"></i> Insert Product 

                    </h3>


                </div>

                <div class="panel-body">

                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!--form Begin --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_title" class="col-md-3 control-label"> Product Title </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_title" type="text" class="form-control" required>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_categories" class="col-md-3 control-label"> Product Categories </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <select name="product_cat" class="form-control"><!--form-control Begin --> 

                                <option> Select a Category Product </option>

                                <?php

                                $get_p_cats = "select * from product_categories";
                                $run_p_cats = mysqli_query($con , $get_p_cats);

                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                    $p_cat_id = $row_p_cats['p_cat_id'];
                                    $p_cat_title = $row_p_cats['p_cat_title'];

                                    echo "
                                    
                                    <option value='$p_cat_id'> $p_cat_title </option>
                                    
                                    ";
                                }

                                ?>

                            </select><!--form-control Finish --> 

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 
 
                        <div class="form-group"><!-- form-group Begin -->  

                            <label for="Product_Image_One" class="col-md-3 control-label"> Product Image One </label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_img1" type="file" class="form-control form-height-custom" placeholder="upload image" required>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_Image_Two" class="col-md-3 control-label"> Product Image Two </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_img2" type="file" class="form-control form-height-custom" placeholder="upload image">

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_Image_Three" class="col-md-3 control-label"> Product Image Three </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_img3" type="file" class="form-control form-height-custom" placeholder="upload image">

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_Price" class="col-md-3 control-label"> Product Price </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_price" type="text" class="form-control" required>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                     <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_Label" class="col-md-3 control-label"> Product Label </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_label" type="text" class="form-control" required>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_Keywords" class="col-md-3 control-label"> Product Keywords </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="product_keywords" type="text" class="form-control" required>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Product_Description" class="col-md-3 control-label"> Product Description </label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <textarea name="product_desc" cols="20" rows="10" class="form-control"></textarea>

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 

                    <div class="form-group"><!-- form-group Begin -->  

                         <label  class="col-md-3 control-label"></label>

                        <div class="col-md-6"><!--col-md-6 Begin --> 
                                
                           <input value="Insert Product" name="submit" type="submit" class="btn btn-primary form-control">
                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 
                    
                </form><!-- form Finish --> 
                    
                </div>


            </div>

        </div>
    </div>




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</body>
</html>



<?php 

if(isset($_POST['submit'])){

    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_price = $_POST['product_price'];
    $product_label = $_POST['product_label'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1, "product_images/$product_img1");
    move_uploaded_file($temp_name2, "product_images/$product_img2");
    move_uploaded_file($temp_name3, "product_images/$product_img3");

    $insert_product = "insert into products
    (p_cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_label, product_keywords, product_desc) values 
    ('$product_cat', NOW(), '$product_title', '$product_img1', '$product_img2', '$product_img3','$product_price', '$product_label', '$product_keywords', '$product_desc')"
    ;

     $run_products = mysqli_query($con, $insert_product) or  die(mysqli_error($con));

     if($run_products){

        echo "<script> alert('Product has been inserted successfully')</script>";
        echo "<script>window.open('index.php?view_products', '_self')</script>";  
    }
    
}


?>

 <?php } ?>