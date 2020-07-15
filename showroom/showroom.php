<?php 
        include('include/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title><?php echo $_GET['shop_url']; ?></title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="styles/showroom.css">

  <style>
    /* =======================================================
* Website Name: Showroom 1.0 (e-acez 4.0)
* Website URL: www.e-acez.com/
* Author: Lagbalu Joseph (Jos33y)
======================================================== */


    body {
      height: 100%;
      width: 100%;
      padding: 0;
      margin: 0;
      background: rgb(248, 248, 253);
      overflow-x: hidden;
    }

    /** Nav Styles **/
    nav {
      background-image: linear-gradient(to right, #292c4a, #17192e);
      color: #f5ede9;
    }

    .navbar {
      margin-left: 3%;
      margin-right: 2%;
    }

    .navbar .shop-name {
      color: #f5ede9;
      font-size: 27px;
      font-weight: 700;
      font-style: italic;
      text-transform: lowercase;
      letter-spacing: 1px;
    }

    nav .call {
      color: #f5ede9;
      font-size: 15px;
      font-weight: 550;
      text-transform: capitalize;
    }

    .call a {
      color: #f5ede9;
      text-decoration: none;
    }

    h3.no-url {
      text-align: center;
      font-size: 40px;
      font-weight: 700;
    }

    /** responsive design **/



    /** Product Styles **/

    .product {
      margin-top: 3%;
      margin-bottom: 8%;

    }

    .product .card {
      margin-bottom: 10%;
      min-height: 310px;
      background-color: #fcf9f9;
      border: 0px solid #707070;
      border-radius: 27px;
      /**shadow box style **/
      -webkit-box-shadow: inset 0px 0px 3px 0.2px rgba(23, 25, 46, 1);
      -moz-box-shadow: inset 0px 0px 3px 0.2px rgba(23, 25, 46, 1);
      box-shadow: inset 0px 0px 3px 0.2px rgba(23, 25, 46, 1);
    }

    .card-img-top {
      border-radius: 27px;
      min-height: 160px;
    }

    .product .name {
      font-size: 17px;
      font-weight: 550;
      text-transform: lowercase;
    }

    .product .price {
      color: #ff5500;
      font-size: 20px;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .product .btn {
      color: #f5ede9;
      font-size: 16px;
      font-weight: 600;
      background-color: #075e54;
      border: #075e54;
      border-radius: 20px;
      text-transform: lowercase;
    }

    .product .btn {
      -webkit-box-shadow: 0px 0px 3px 0.5px rgba(23, 25, 46, 1);
      -moz-box-shadow: 0px 0px 3px 0.5px rgba(23, 25, 46, 1);
      box-shadow: 0px 0px 3px 0.5px rgba(23, 25, 46, 1);
    }

    /** Footer Styles **/
    footer {
      background-image: linear-gradient(to right, #292c4a, #17192e);
      color: #f5ede9;
    }

    footer .row {
      padding-top: 1%;
    }

    .social li {
      list-style: none;
      display: inline;
      margin: 5%;
    }

    .social li a {
      color: #f5ede9;
    }

    .contact li {
      list-style: none;
    }

    .contact li a {
      color: #f5ede9;
      font-size: 12px;
      font-weight: 550;
    }

    .copyright {
      font-size: 12px;
      font-weight: 550px;
    }

    footer .orange {
      color: #ff5500;
    }

   
/* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {

      .navbar .shop-name {
        font-size: 25px;
      }

      .call {
        font-size: 13px;
      }

      .product .name {
        font-size: 16px;
      }

      .product .price {
        font-size: 18px;
      }

      .product .btn {
        font-size: 14px;
      }
    }

 /* Small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {
      .navbar .shop-name {
        font-size: 24px;
      }

      nav .call {
        font-size: 13px;
      }

      .product .name {
        font-size: 15px;
      }

      .product .price {
        font-size: 16px;
      }

      .product .btn {
        font-size: 13px;
      }
    }
  /* Extra small devices (portrait phones, less than 576px) */
 
    @media (max-width: 575.98px) {
      .navbar .shop-name {
        font-size: 22px;
      }

      .call {
        font-size: 12px;
      }

      .product {
        margin: 8%;
      }

      .product .card {
        width: 80%;
      }

      .product .name {
        font-size: 13px;
      }

      .product .price {
        font-size: 15px;
      }

      .product .btn {
        font-size: 12px;
      }
    }

    /* Extra small devices (portrait phones, less than 345px) */

    @media (max-width: 375px) {

      .navbar .shop-name {
        font-size: 20px;

      }

      .call {
        font-size: 10px;
      }

      .product {
        margin: 5%;
      }

      .product .card {
        width: 90%;
      }

      .product .name {
        font-size: 12px;
      }

      .product .price {
        font-size: 14px;
      }

      .product .btn {
        font-size: 11px;
      }
    }
  </style>
</head>





<?php
$name = preg_replace('#[^0-9a-z]#i', '', $_GET['shop_url']);
if(isset($name)){
    $shop_url =  $name;

    $get_shop_owner = "select * from customers where shop_url = '$shop_url'";

    $run_owner = mysqli_query($con, $get_shop_owner);

    $check_owner = mysqli_num_rows($run_owner);

}

    if($check_owner==false){

            echo "<h3 class='text-center' style='margin-top:10%;font-weight:600;color:red;'>No Shop with that URL </h3> ";
            echo "<h5 class='text-center' style='margin-top:5%;font-weight:500;'> Check and make sure the url is typed correctly </h5> ";
            echo "<a href='index.php' style='margin-top:10%; margin-left:50%;font-weight:600;'>Home </a> ";
        }
        else{
        
    $row = mysqli_fetch_array($run_owner);

    $owner_id = $row['customer_id'];

    $email = $row['email'];

    $p_no = $row['phone_no'];

    $w_no = $row['whatsapp_no'];

    $shop_name = $row['shop_name'];
      

  
?>


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

            $get_products = "select * from products where customer_id = '$owner_id' ORDER BY prod_id DESC";

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
          <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
          <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
          </li>
          <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube-square"></i></a>
          </li>
        </ul>

      </div>

      <div class="col-sm-4 contact text-center">
        <ul>
          <li> contact us @ </li>
          <hr width="50%" style="border: 1px solid #f5ede9;">
          <li> <a style="text-decoration: none;" href="tel:+234<?php echo $p_no; ?>"><?php echo $p_no; ?></a></li>
          <li> <a style="text-decoration: none;" href="mailto:<?php echo $email; ?>"></a> <?php echo $email; ?> </li>
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

<?php } ?>