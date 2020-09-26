
<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

    <div class="container">

        <div class="row justify-content-center pages">
            <!--row one-->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="dash-title text-center"> <i class="fas fa-file-upload"></i> Insert Product</h3>
                <form method="post" class="form" enctype="multipart/form-data">
                <h6 class="text-center text-danger">make sure image is neatly cropped and named</h6>

                <div class="form-group">
                    
                <select name="productCategory" class="form-control"><!--form-control Begin --> 

                                <option selected disabled> Select a Product Category</option>

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
                        onkeypress="return blockChar(event)"    placeholder="Product Name" required>
                    </div>

                    <div class="form-group">
                        <label for="Product Price" class="sr-only">Product Price</label>
                        <input type="text" name="prodPrice" class="form-control-md form-control-lg" id=""
                        onkeypress="return IsNumeric(event);"    placeholder="Product Price" required>
                    </div>

                    <div class="form-group text-center">
                        <img src="product_images/placeholder.png" onclick="triggerClick()" id="prodDisplay" >
                        <input type="file" name="prodImage" id="prodImage" onchange="displayImage(this)" class="form-control-md form-control-lg"
                            placeholder="Product Image" style="display: none;" required>
                            <label for="prod-image">Select product image</label>
                    </div>

                    <div class="form-group text-center">
                        <button name="insert" class="btn btn-md btn-primary">insert</button>
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
if(isset($_POST['insert'])){

    $cat_id = $_POST['productCategory'];
    $prod_name = $_POST['prodName'];
    $prod_price = $_POST['prodPrice'];
    $admin_id;

    $prod_image = $_FILES['prodImage']['name'];

    $temp_name = $_FILES['prodImage']['tmp_name'];

    move_uploaded_file($temp_name, "product_images/$prod_image");

    $sql = "INSERT INTO products (p_cat_id, prod_name, prod_price, prod_image, customer_id) 
    VALUES ('$cat_id', '$prod_name', '$prod_price', '$prod_image', '$admin_id')";

    $query = mysqli_query($con, $sql) or die(mysqli_error($con));


    if($query){
 
        echo '
        <script>
            swal({
                    title: "Product Saved!",
                    icon: "success",
                 });
    </script>
    ';
    }
    else{
        echo '
        <script>
            swal({
                    title: "Product Not Saved!",
                    icon: "error",
                 });
    </script>
    ';
    }
}
?>

<?php
}

?>