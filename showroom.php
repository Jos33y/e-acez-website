

<?php 
 $con = mysqli_connect("localhost", "root", "", "showroom");

 //$con = mysqli_connect("localhost", "u721127448_joseey", "LagbaluJ19", "u721127448_showroom");
$name = preg_replace('#[^0-9a-z]#i', '', $_GET['shop_url']);
if(isset($name)){
    $shop_url =  $name;

    $get_shop_owner = "select * from customers where shop_url = '$shop_url'";

    $run_owner = mysqli_query($con, $get_shop_owner);

    $row = mysqli_fetch_array($run_owner);

    $owner_id = $row['customer_id'];

    $email = $row['email'];

    $p_no = $row['phone_no'];

    $w_no = $row['whatsapp_no'];

    $shop_name = $row['shop_name'];
    

}

?>

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
     <title><?php echo $shop_url; ?></title>
 
 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="stylesheet" href="styles/showroom.css">
 </head>
 
 <body>
     <!--navbar-->
     <nav>
         <div class="navbar">
             <span class="shop-name"><?php echo $shop_name; ?></span>
 
             <span class="call text-right">Call: &nbsp;<i class="fas fa-phone-alt"></i> <a
                     href="tel:+234<?php echo $p_no; ?>"><?php echo $p_no ?></a></span>
         </div>
     </nav>
    <!--TODO:  Translate the code to PHP Codes-->


    <!--product rows-->

    <div class="container product text-center">
        <!--row-->
        <div class="row">
            <!--col1-->

            <?php     

             

            $i = 0;

            $get_products = "select * from products where customer_id = '$owner_id' ";

            $run_pro = mysqli_query($con, $get_products);

            while($row = mysqli_fetch_array($run_pro)){
                $pro_id = $row['prod_id'];
                $prod_name = $row['prod_name'];
                $prod_price = $row['prod_price'];
                $prod_img = $row['prod_image'];

                $i++;

?>
            <!-- start of column-->
            <div class="col-sm-6 col-md-4 col-lg-3">

                <!-- box model design-->
                <div class="card">
                <img src="dashboard/product_images/<?php echo $prod_img; ?>" alt="Product image" class="card-img-top">
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
                <!--end of box model-->

            </div>
            <!--end of column-->

            <?php } ?>

        </div>
    </div>
   
    <footer>
        <div class="row text-center">
            <div class="col-sm-4 social">
                <br>
                <ul>
                    <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i
                                class="fab fa-instagram"></i></a></li>
                    <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i
                                class="fab fa-youtube-square"></i></a></li>
                </ul>

            </div>

            <div class="col-sm-4 contact text-center">
                <ul>
                    <li> <a style="text-decoration: none;" href="tel:+234<?php echo $p_no; ?>"><?php echo $p_no; ?></a></li>
                    <li> <a style="text-decoration: none;"
                            href="mailto:<?php echo $email; ?>"></a> <?php echo $email; ?> </li>
                </ul>

            </div>

            <div class="col-sm-4 text-center">
                <br>
                <p class="copyright"> copyright 2020 <span class="orange"> e-acez.com,</span> All rights reserved.</p>
            </div>

        </div>

    </footer>


</body>

</html>


        