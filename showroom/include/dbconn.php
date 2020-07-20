<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "showroom");

//$con = mysqli_connect("localhost", "u721127448_joseey", "LagbaluJ19", "u721127448_showroom");

date_default_timezone_set('Africa/Lagos');

function getRealIpUser(){

            switch(true){
        
                    case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                    case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                    case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        
                    default : return $_SERVER['REMOTE_ADDR'];
            }
        }


        function getpcatpro(){

                global $con;
                
                if(isset($_GET['p_cat'])){
                
                    $p_cat_id = $_GET['p_cat'];
                
                    $get_products = "select * from products where p_cat_id='$p_cat_id'";
                
                    $run_products = mysqli_query($con, $get_products);
                
                    $count = mysqli_num_rows($run_products);
                
                    if($count==0){
                
                        echo "
                
                            <div class='box'>
                                    <h3> No Products Found in this Product Categories </h3>
                            </div>
                        
                        ";
                
                    }else{
                echo " ";
                
                    }
                
                    
                    while($row_products= mysqli_fetch_array($run_products)){
                            
                        $pro_id = $row['prod_id'];
                        $prod_name = $row['prod_name'];
                        $prod_price = $row['prod_price'];
                        $prod_img = $row['prod_image'];
                
                        ?>
                
                        <!-- start of column-->
                      <div class="col-lg-3 col-md-4 col-6">
                
                        <!-- box model design-->
                        <div class="card">
                          <div class="card-header">
                            <p class="text-center text-primary">Tap to view image </p>
                          </div>
                          <img src="dashboard/product_images/<?php echo $prod_img; ?>" id="myImg" alt="Product Image"
                            class="card-img-top">
                          <div id="myModal" class="modal">
                
                            <!-- The Close Button -->
                            <span class="close">&times;</span>
                
                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img">
                
                          </div>
                          <!--end of box model-->
                
                          <div class="card-body">
                            <h3 class="name"><?php echo $prod_name; ?></h3>
                            <!--php codes-->
                            <h4 class="price">&#8358;<?php echo $prod_price; ?></h4>
                            <!--php codes-->
                          </div>
                          <div class="card-footer bg-transparent">
                            <!-- whatsapp chat button make number dynamic-->
                            <a href="https://wa.me/234<?php echo $w_no; ?>/?text=Hello, I want to buy: <?php echo $prod_name; ?> with price: &#8358;<?php echo $prod_price; ?>"
                              title="click to open chat">
                              <button class="btn btn-success">Chat with us <i class="fab fa-whatsapp"></i>
                              </button></a>
                            <!--whatsapp api-->
                          </div>
                        </div>
                
                      </div>
                      <!--end of column-->
                
                      <?php } } }?>
        