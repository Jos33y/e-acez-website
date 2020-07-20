
<?php
if(!isset($_SESSION['email'])){

echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<?php

if(isset($_GET['edit_product'])){
    $edit_id =  $_GET['edit_product'];

    $get_p = "select * from products where prod_id = '$edit_id'";

    $run_p = mysqli_query($con, $get_p);

    $row = mysqli_fetch_array($run_p);

    $p_id = $row['prod_id'];
    $p_cat_id = $row['p_cat_id'];
    $p_name = $row['prod_name'];
    $p_price = $row['prod_price'];
    $p_img = $row['prod_image'];

 }
        $get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";

        $run_p_cat = mysqli_query($con, $get_p_cat);

        $check_p_cat = mysqli_num_rows($run_p_cat);

        if($check_p_cat==false){
           
            $cat_name = "Select a Product Category";
            $cat_name = " <option value='selected disabled'>$cat_name </option>";
        }

        else{

            $row_p_cat = mysqli_fetch_array($run_p_cat);

            $cat_name = "<option value='$p_cat_id'> " .  $row_p_cat['category_name'] . "</option>";
        }


       
?>

    <div class="container">

        <div class="row justify-content-center pages">
            <!--row one-->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="dash-title text-center"> <i class="fas fa-edit"></i> Edit Product</h3>
                <form method="post" class="form" enctype="multipart/form-data">
                <p class="text-center text-warning">no need to reupload image when making changes (except you want to change the image)</p>

                    <div class="form-group">
                    <select name="productCategory" class="form-control"><!--form-control Begin --> 

                 <?php echo $cat_name ;?>

                                <?php

                                $get_p_cats = "select * from product_categories where customer_id =  '$admin_id' ORDER BY category_name ASC";
                                $run_p_cats = mysqli_query($con , $get_p_cats);

                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                    $p_cat_id = $row_p_cats['p_cat_id'];
                                    $cat_name = $row_p_cats['category_name'];

                                    echo "
                                    
                                    <option value='$p_cat_id'> $cat_name </option>
                                    
                                    ";
                                }

                                ?>

</select><!--form-control Finish --> 
                   </div>
                   <div class="form-group">
                        <label for="Product Name" class="sr-only">Product Name</label>
                        <input type="text" name="prodName" class="form-control-md form-control-lg" id=""
                        onkeypress="return blockChar(event)"    placeholder="Product Name" required value="<?php echo $p_name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Product Price" class="sr-only">Product Price</label>
                        <input type="text" name="prodPrice" class="form-control-md form-control-lg"
                        onkeypress="return IsNumeric(event);"    placeholder="Product Price" required value="<?php echo $p_price; ?>">
                    </div>

                    <div class="form-group text-center">
                        <img src="product_images/<?php echo $p_img; ?>" onclick="triggerClick()" id="prodDisplay" >
                        <input type="file" name="prodImage" id="prodImage" onchange="displayImage(this)" class="form-control-md form-control-lg"
                            placeholder="Product Image" style="display: none;" <?php if(empty($p_img)){ echo "required"; } else{ echo "";} ?>>
                            <label for="prod-image">Select product image</label>
                    </div>

                    <div class="form-group text-center">
                        <button name="update" class="btn btn-md btn-primary">update</button>
                    </div>

                    <div class="form-group text-center">
                        <a href="index.php?view_products=1">
                            <p class="back">View Products</p>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>


        </div>
    </div>


    <script src="script.js"></script>
</body>
<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);     
            return ret;
        }

        function blockChar(e) {
          var k = e.keyCode;
          return (k != 39);
      }
    </script>

</html>

<?php 
if(isset($_POST['update'])){

    $cat_id = $_POST['productCategory'];
    $prod_name = $_POST['prodName'];
    $prod_price = $_POST['prodPrice'];

if(empty($p_img)){

    $prod_image = $_FILES['prodImage']['name'];

    $temp_name = $_FILES['prodImage']['tmp_name'];

    move_uploaded_file($temp_name, "product_images/$prod_image");
}else{
        $prod_image = $p_img;
}

    $sql = "update products set
    p_cat_id = '$cat_id',  prod_name = '$prod_name', prod_price = '$prod_price', prod_image = '$prod_image'
    where prod_id = '$p_id'";

    $query = mysqli_query($con, $sql) or die(mysqli_error($con));


    if($query){
 
        echo "<script>alert('Product has been Updated Successfully')</script>";

    echo "<script>window.open('index.php?view_products=1', '_self')</script>";
 
    }
    else{
        echo '
        <script>
            swal({
                    title: "Product Not Updated!",
                    icon: "error",
                 });
    </script>
    ';
    }
}
?>

<?php } ?>