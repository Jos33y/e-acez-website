<?php
        $active ='Shop';
        include("includes/header.php");
?>
</nav>
</header>
<div id="content"><!-- content Begin -->
    <div class="container-fluid"><!-- container Begin -->
    <div class="row">
        <div class="col-sm-12"><!-- col-md-12 Begin -->
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb"><!-- breadcrumb Begin -->
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Showroom
                </li>
            </ol><!-- breadcrumb Finish -->
</nav>
        </div><!-- col-md-12 Finish -->
</div>

<div class="row"><!--row begin -->

        <div class="col"><!-- col-sm-9 Begin -->


    <?php

        if(!isset($_GET['p_cat'])){

                        echo "
                            
                                <h2 class='text-center' > Showroom </h2>
                                <br>

                            ";
                }
            
            ?>
        </div>
</div>
          
    <div class="container"><!-- container begin -->
      <div class="row"><!-- row begin -->
                
                <?php

                    if(!isset($_GET['p_cat'])){

                        if(!isset($_GET['cat'])){

                            $per_page=10;

                            if(isset($_GET['page'])){

                                $page = $_GET['page'];

                             } else{

                                    $page=1;
                             }

                                $start_from =($page-1) * $per_page;

                                $get_products = "select * from products order by 1 DESC LIMIT $start_from, $per_page";

                                $run_products = mysqli_query($con, $get_products);

                                while($row_products=mysqli_fetch_array($run_products)){

                                    $pro_id = $row_products['product_id'];

                                    $pro_title = $row_products['product_title'];

                                    $pro_price = $row_products['product_price'];

                                    $pro_img1 = $row_products['product_img1'];

                                    $pro_label = $row_products['product_label'];

                                    ?>
                
                                    <div class="mix col-lg-3 col-md-6 new">
                                        <div class="product-item">
                                            <figure>
                                            <img class='img-fluid' src='admin_area/product_images/<?php echo $pro_img1; ?>' alt='product_image'>
                                            <div class="bache"><?php echo $pro_label; ?> </div>
                                            </figure>
                                            <div class="product-info">
                                            <h6><?php echo $pro_title; ?> </h6>
                                            <p>&#8358;<?php echo $pro_price; ?></p>
                                            <a href="details.php?pro_id=<?php echo $pro_id; ?>" class="site-btn btn-line">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                  <?php } ?>
                        </div><!-- row finish -->
                    </div><!-- container-fluid finish -->
    
</div>
           

            <nav aria-label="Page navigation"><!-- Pagination Begin -->

                    <ul class="pagination justify-content-center">

                        <?php

                        $query = "select * from products";

                        $result = mysqli_query($con, $query);

                        $total_records = mysqli_num_rows($result);

                        $total_pages = ceil($total_records / $per_page);

                            echo "
                            
                                <li class='page-item'>
                                <a class='page-link' href='showroom.php?page=1'> ". 'First Page' . "</a>
                                
                                </li>
                            ";

                            for($i=1; $i<=$total_pages; $i++){
                                echo "
                            
                                <li class='page-item'>
                                <a class='page-link active' href='showroom.php?page= ".$i." '> ". $i . "</a>
                                
                                </li>
                            ";    
                             }                

                            echo "
                            
                                <li class='page-item'>
                                <a class='page-link' href='showroom.php?page= $total_pages'> ". 'Last Page' . "</a>
                                
                                </li>
                            ";
                            };

                        }

                    


                        ?>
                        

                    </ul>
            </nav><!-- Pagination Finish -->

            

                    <?php
                     getpcatpro();
                                        
                    ?>
            </div>
</div>
                
        </div><!-- col-sm-9 Finish -->

</div>        <!--row finish -->
    </div><!-- container Finish -->
</div><!-- content Finish -->

<?php

        include("includes/footer.php");

        ?>



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>