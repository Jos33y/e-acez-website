<?php 

$pageTitle =  "view products";
include("include/header.php");

 ?>
    <!--TODO:  Translate the code to PHP Codes-->

    <div class="container">

        <div class="pages justify-content-center">
            <h3 class="dash-title" style="margin-top: 30px;"> <i class="far fa-list-alt"></i> View Products</h3>
            <form method="post">
                <div class="row products">

                <?php 
                $i = 0;

                $get_products = "select * from products";

                $run_pro = mysqli_query($con, $get_products);

                while($row = mysqli_fetch_array($run_pro)){
                    $pro_id = $row['prod_id'];
                    $prod_name = $row['prod_name'];
                    $prod_price = $row['prod_price'];
                    $prod_img = $row['prod_image'];

                    $i++;

?>
                    <div class="col-sm-3 col-6">
                        <div class="card box">
                            <div class="card-header">
                                <a href="editproduct.php?prod_id=<?php echo $pro_id; ?>" class="edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="delete_product.php?prod_id=<?php echo $pro_id; ?>" class="delete"><i class="far fa-trash-alt"></i> Delete</a>
                            </div>

                            <img src="prod_img/<?php echo $prod_img;?>" alt="images" class="card-img-top prod-image">

                            <div class="card-footer text-center">
                                <span class="prod-name"><?php echo $prod_name; ?></span><br>
                                <span class="prod-price">&#8358;<?php echo $prod_price; ?></span>
                            </div>
                        </div>
                    </div>

                <?php }  ?>

                </div>
            </form>
        </div>
    </div>
</body>

</html>