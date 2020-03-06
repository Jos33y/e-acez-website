<?php
        $active ='Shopping Cart';
        include("includes/header.php");
?>

<div id="content"><!-- content Begin -->
  <div class="container"><!-- container-fluid Begin -->
    <div class="row">
        <div class="col-lg-12"><!-- col-md-12 Begin -->
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb"><!-- breadcrumb Begin -->
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Cart
                </li>
            </ol><!-- breadcrumb Finish -->
</nav>
        </div><!-- col-md-12 Finish -->
    </div>
  </div>

  <div class="container">
      <div class="row justify-content-center"><!--row begin -->
        <div id="cart" class="col-sm-12"><!-- #Cart col-md-9 Begin -->

            <form action="cart.php" method="post" enctype="multipart/form-data"><!-- Form Begin -->
            
              <h2>Shopping Cart</h2>

              <?php

                $ip_add = getRealIpUser();

                $select_cart ="select * from cart where ip_add='$ip_add'";

                $run_cart = mysqli_query($con, $select_cart);

                $count =mysqli_num_rows($run_cart);
              
              ?>

              <p class="text-muted">You currently have <?php echo $count;  ?> item(s) in your cart</p>

              <div class="table-responsive"><!-- table Responsive Begin -->

                <table class="table"><!-- table Begin -->

                    <thead><!-- Thead Begin -->
                    
                        <tr>

                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Size</th>
                            <th colspan="1">Delete</th>
                            <th colspan="2">Sub-Total</th>
                    
                        </tr>
                    </thead><!-- Thead Finish -->

                    <tbody><!-- tbody Begin -->

                      <?php

                      $total =0;

                      while($row_cart = mysqli_fetch_array($run_cart)){

                        $pro_id = $row_cart['p_id'];

                        $pro_size = $row_cart['size'];

                        $pro_qty = $row_cart['quantity'];

                        $get_products = "select * from products where product_id='$pro_id'";

                        $run_products = mysqli_query($con, $get_products);

                        while($row_products=mysqli_fetch_array($run_products)){

                            $product_title = $row_products['product_title'];

                            $product_img1 = $row_products['product_img1'];

                            $product_price = $row_products['product_price'];

                            $sub_total = $row_products['product_price']*$pro_qty;

                            $total += $sub_total;
                        
                      ?>

                        <tr>
                            <td class="product-col">                           
                              <img src="admin_area/product_images/<?php echo $product_img1; ?>" alt="product_image">
                            </td>
                            <td>
                                <h4 class="pc-title"><?php echo $product_title; ?></h4>
                                <a href="details.php?pro_id=<?php echo $pro_id; ?>">Edit Product</a>
                            </td>
                          
                            <td>                           
                            <?php echo $pro_qty; ?>                            
                            </td> 

                            <td>
                            &#8358;<?php echo $product_price; ?>                           
                            </td>    

                            <td>                           
                            <?php echo $pro_size; ?>                             
                            </td>        

                            <td>                           
                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                            </td>    

                            <td>
                            &#8358; <?php echo $sub_total; ?>                      
                            </td> 
                        
                        </tr>
                    
                      <?php } }?>
                    </tbody><!-- tbody Finish -->

                    <tfoot><!-- tfoot Begin -->

                      <tr><!-- tr Begin -->
                        <th colspan="5">Total</th>
                        <th colspan="2">&#8358; <?php echo $total; ?>  </th>


                      </tr><!-- tr Finish -->

                    </tfoot><!-- tfoot Finish -->
                
                </table><!-- table Finish -->
              
              </div><!-- table-responsive Finish -->

              <div class="box-footer"><!-- box-footer Begin -->

                <div class="pull-left"><!-- pull-leftBegin -->
                
                <button type="submit" name="update" value="Update cart" class="btn btn-secondary btn-lg-sm"><!-- btn btn-default Begin -->

                  <i class="fa fa-refresh"></i> Update Cart


                  </button><!-- btn btn-default Finish -->
                    
                    </a><!-- btn btn-default Finish -->

                </div><!-- pull-left Finish -->

                <div class="pull-right"><!-- pull-right Begin -->
                
                    <a href="showroom.php" class="btn btn-primary btn-lg-sm">
                      Continue Shopping <i class="fa fa-chevron-right"></i>
                    </a>

                </div><!-- pull-right Finish -->

            </div><!-- box-footer Finish -->

            </form><!-- form Finish -->

          </div><!-- Box Finish -->
          </div><!-- content Finish -->
          </div>
        </div><!-- #cart col-md-9 Finish -->   
</div>

  
		<div class="card-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="shipping-info">
							<h4>Shipping method</h4>
							<p>Select the one you want</p>
							<div class="shipping-chooes">
								<div class="sc-item">
									<input type="radio" name="sc" id="one">
									<label for="one">Next day delivery<span>&#8358;___</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="two">
									<label for="two">Standard delivery<span>&#8358;___</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="three">
									<label for="three">Personal Pickup<span>Free</span></label>
								</div>
							</div>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-6">
						<div class="cart-total-details">
							<h4>Cart total</h4>
							<p>Final Info</p>
							<ul class="cart-total-card">
								<li>Subtotal<span> &#8358;<?php echo $total; ?></span></li>
								<li>Shipping<span>Free</span></li>
								<li class="total">Total<span> &#8358;<?php echo $total; ?></span></li>
							</ul>
							<a class="site-btn btn-full" href="checkout.php">Proceed to checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- Page end -->
  
          <?php 

            function update_cart(){

              global $con;

              if(isset($_POST['update'])){

                  foreach($_POST['remove'] as $remove_id){

                    $delete_product = "delete from cart where p_id='$remove_id'";

                    $run_delete = mysqli_query($con, $delete_product);

                    if($run_delete){

                      echo "<script>window.open('cart.php','_self')</script>";
                      
                    }
                  }
              }
            }

            echo $up_cart = update_cart();
          
          ?>
  


    
            
<?php

        include("includes/footer.php");

        ?>
        

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>