<?php 

$pageTitle =  "insert products";
include('include/dbconn.php');
include('header.php');




 ?>
    <!--TODO:  Translate the code to PHP Codes-->

    <div class="container">

        <div class="row justify-content-center pages">
            <!--row one-->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="dash-title text-center"> <i class="fas fa-file-upload"></i> Insert Product</h3>

                <?php if(!empty($msg)){ ?>
                 <div class="alert <?php echo $css_class; ?>">
                 <?php echo $msg; ?>
                 </div>

                <?php } ?>

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

                    <div class="form-group">
                        <label for="new-password-2" class="sr-only">Product Image</label>
                        <input type="file" name="prodImage" class="form-control-md form-control-lg" id=""
                            placeholder="Product Image">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" name="insert" class="btn btn-md btn-primary">insert</button>
                    </div>

                    <div class="form-group text-center">
                        <a href="index.php">
                            <p class="back">Back</p>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>


        </div>
    </div>


</body>

</html>

<?php 
if(isset($_POST['insert'])){

    $msg = "";
    $css_class = "";

    $prod_name = $_POST['prodName'];
    $prod_price = $_POST['prodPrice'];

    $prod_image = time() . '_' . $_FILES['prodImage']['name'];

    $target = 'img/' . $prod_image;

    if(move_uploaded_file($_FILES['prodImage']['tmp_name'], $target)){
 
        echo "<script>alert('inserted successfully')</script>";
    }
    else{
        $msg = "Failed to upload product";
        $css_class = "alert-danger";
    }
}
?>