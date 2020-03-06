<?php
        $active ='Home';
        include("includes/header.php");
?>  


<div class="container-fluid home-page-header">

          <div class="index text-center">
              <br>
              <br>
              <span class="header-text">E-acez Shop</span> <br>        
                <div class="button">
                <a href="showroom.php" class="btn btn-outline-light btn-lg"> Shop Now</a>
                </div>
            </div>

</div>

    <!-- top selling products -->

     <div  class="container-fluid"><!-- #Cart col-md-9 Begin -->
          <div class="index-one text-center">
              <h2 class="intro"> Top Products </h2>
              <hr class="line" width="15%" >
           </div>

          <table class="table table-responsive">
            <tbody>
              <tr>
                  <?php

                                    $get_products = "select * from products  order by 1 DESC LIMIT 0,8";

                                    $run_products = mysqli_query($con, $get_products);

                                    while($row_products=mysqli_fetch_array($run_products)){

                                        $pro_id = $row_products['product_id'];

                                        $pro_title = $row_products['product_title'];

                                        $pro_price = $row_products['product_price'];

                                        $pro_img1 = $row_products['product_img1'];

                                       

                                        ?>                          

                <td>
                <a href="details.php?pro_id=<?php echo $pro_id; ?>">
                  <img class="index-images" src="admin_area/product_images/<?php echo $pro_img1; ?>">
                  <h6 class="text-center" style="text-decoration: none; color: #222; text-transform:uppercase; font-weight: 600;"><?php echo $pro_title; ?></h6>
                </a>                        
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
     </div>
     
     <!-- top products ends -->
      
     <div class="container">
        <div class="index-three" id="categories">
          <div class="row"><!-- row begin -->
      
            <?php

                $get_p_cats = "select * from product_categories";

                $run_p_cats = mysqli_query($con, $get_p_cats);

                while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                    $p_cat_id = $row_p_cats['p_cat_id']; 

                    $p_cat_title = $row_p_cats['p_cat_title'];
                

                ?>

                  <div class="col"><!--col-sm-4 begin-->                   
                    <div class="box-cat"><!--box same-height-row begin-->               
                     <h6 class="text-center">
                      <p> <i class="fa fa-shopping-bag"></i> </p>
                        <a href="showroom.php?p_cat=<?php echo $p_cat_id; ?>" > 
                              <?php echo $p_cat_title; ?>
                        </a>
                     </h6>
                    </div>   
                 </div><!--col-sm-4 finish-->
                <?php } ?>
          </div><!-- row finish -->       
        </div>
     </div>

<!-- Best Sellers Products -->
        <div class="container"><!-- container-fluid begin -->
          <div class="index-one text-center">
              <h2 class="intro"> Best Sellers </h2>
              <hr class="line" width="12%" >
          </div>       
        </div><!-- container-fluid finish -->

    <div class="container"><!-- container begin -->
      <div class="row"><!-- row begin -->
        <?php
          $get_products = "select * from products  order by 1 ASC LIMIT 0,20";

          $run_products = mysqli_query($db, $get_products);

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
          <?php  } ?>
      
      </div><!-- row finish -->
    </div><!-- container-fluid finish -->
    

    <?php

        include("includes/footer.php");

        ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>