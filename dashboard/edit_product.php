
<?php
if(!isset($_SESSION['email'])){

echo "<script>window.open('../sign-in.php', '_self')</script>";

}else{

?>

<?php 

if(isset($_GET['edit_product'])){
    $edit_id =  $_GET['edit_product'];

    $get_p = "select * from products where prod_id = '$edit_id'";

    $run_p = mysqli_query($con, $get_p);

    $row = mysqli_fetch_array($run_p);

    $p_id = $row['prod_id'];
    $p_name = $row['prod_name'];
    $p_price = $row['prod_price'];
    $p_img = $row['prod_image'];
 }

?>

    <div class="container">

        <div class="row justify-content-center pages">
            <!--row one-->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="dash-title text-center"> <i class="fas fa-edit"></i> Edit Product</h3>
                <form method="post" class="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Product Name" class="sr-only">Product Name</label>
                        <input type="text" name="prodName" class="form-control-md form-control-lg" 
                            placeholder="Product Name" required value="<?php echo $p_name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Product Price" class="sr-only">Product Price</label>
                        <input type="text" name="prodPrice" class="form-control-md form-control-lg"
                            placeholder="Product Price" required value="<?php echo $p_price; ?>">
                    </div>

                    <div class="form-group text-center">
                        <img src="product_images/<?php echo $p_img; ?>" onclick="triggerClick()" id="prodDisplay" >
                        <input type="file" name="prodImage" id="prodImage" onchange="displayImage(this)" class="form-control-md form-control-lg"
                            placeholder="Product Image" style="display: none;">
                            <label for="prod-image">Select product image</label>
                    </div>

                    <div class="form-group text-center">
                        <button name="update" class="btn btn-md btn-primary">update</button>
                    </div>

                    <div class="form-group text-center">
                        <a href="index.php?view_products">
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
if(isset($_POST['update'])){


    $prod_name = $_POST['prodName'];
    $prod_price = $_POST['prodPrice'];

    $prod_image = $_FILES['prodImage']['name'];

    $temp_name = $_FILES['prodImage']['tmp_name'];

    move_uploaded_file($temp_name, "product_images/$prod_image");

    $sql = "update products set
    prod_name = '$prod_name', prod_price = '$prod_price', prod_image = '$prod_image'
    where prod_id = '$p_id'";

    $query = mysqli_query($con, $sql) or die(mysqli_error($con));


    if($query){
 
        echo "<script>alert('Product has been Updated Successfully')</script>";

    echo "<script>window.open('index.php?view_products', '_self')</script>";
 
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