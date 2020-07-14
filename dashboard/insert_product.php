
<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../sign-in.php', '_self')</script>";

}else{

?>

    <div class="container">

        <div class="row justify-content-center pages">
            <!--row one-->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="dash-title text-center"> <i class="fas fa-file-upload"></i> Insert Product</h3>
                <form method="post" class="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Product Name" class="sr-only">Product Name</label>
                        <input type="text" name="prodName" class="form-control-md form-control-lg" id=""
                            placeholder="Product Name">
                    </div>

                    <div class="form-group">
                        <label for="Product Price" class="sr-only">Product Price</label>
                        <input type="text" name="prodPrice" class="form-control-md form-control-lg" id=""
                            placeholder="Product Price">
                    </div>

                    <div class="form-group text-center">
                        <img src="product_images/placeholder.png" onclick="triggerClick()" id="prodDisplay" >
                        <input type="file" name="prodImage" id="prodImage" onchange="displayImage(this)" class="form-control-md form-control-lg"
                            placeholder="Product Image" style="display: none;">
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

</html>

<?php 
if(isset($_POST['insert'])){


    $prod_name = $_POST['prodName'];
    $prod_price = $_POST['prodPrice'];
    $admin_id;

    $prod_image = $_FILES['prodImage']['name'];

    $temp_name = $_FILES['prodImage']['tmp_name'];

    move_uploaded_file($temp_name, "product_images/$prod_image");

    $sql = "INSERT INTO products (prod_name, prod_price, prod_image, customer_id) 
    VALUES ('$prod_name', '$prod_price', '$prod_image', '$admin_id')";

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