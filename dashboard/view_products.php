<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<div class="container">

    <div class="pages justify-content-center">
        <h3 class="dash-title" style="margin-top: 30px;"> <i class="far fa-list-alt"></i> View Products</h3>
        <form method="post">
            <div class="row products">

                <?php 
                

        if(isset($_GET['view_products'])){
            $pageno = $_GET['view_products'];
        }else {
            $pageno = 1;
        }
        $no_of_records_per_page = 20;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM products where customer_id = '$admin_id'";
        $result = mysqli_query($con, $total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        
 
                $i = 0;

                $get_products = "select * from products where customer_id = '$admin_id' LIMIT $offset, $no_of_records_per_page";

                $run_pro = mysqli_query($con, $get_products);

                while($row = mysqli_fetch_array($run_pro)){
                    $pro_id = $row['prod_id'];
                    $prod_name = $row['prod_name'];
                    $prod_price = $row['prod_price'];
                    $prod_img = $row['prod_image'];

                    $i++;

?>
                <div class="col-lg-3 col-6 col-md-4 ">
                    <div class="card box">
                        <div class="card-header">
                            <a href="index.php?edit_product=<?php echo $pro_id; ?>" class="edit"><i
                                    class="fas fa-edit"></i> Edit</a>
                            <a href="index.php?delete_product=<?php echo $pro_id; ?>" class="delete"><i
                                    class="far fa-trash-alt"></i> Delete</a>
                        </div>

                        <img src="product_images/<?php echo $prod_img; ?>" alt="images" class="card-img-top prod-image">

                        <div class="card-footer text-center">
                            <span class="prod-name"><?php echo $prod_name; ?></span><br>
                            <span class="prod-price">&#8358;<?php echo $prod_price; ?></span>
                           
                        </div>
                    </div>
                </div>

                <?php }  
                mysqli_close($con);?>

            </div>
    <div class="row container">
        <div class="col-md-4"></div>
        <div class="col-md-3">
            <ul class="pagination text-center">
            <li><a href="?view_products=1">First</a></li>
            <li class="<?php if($pageno <=1){echo 'disabled';} ?>">
                <a
                    href="<?php if($pageno <=1){ echo '#';} else{ echo "?view_products=".($pageno -1); }?>">Prev</a>
                </li>
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled';} ?>">
                    <a
                        href="<?php if($pageno >= $total_pages){ echo '#'; } else{ echo "?view_products=". ($pageno + 1); } ?>">Next</a>
                </li>
                <li> <a href="?view_products=<?php echo $total_pages; ?>">Last </a></li>
        
                </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
        </form>
    </div>
   
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a style="padding-top: 5%;" href="index.php?dashboard">
                <p class="back text-center">Back</p>
            </a>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
</body>

</html>

<?php } ?>