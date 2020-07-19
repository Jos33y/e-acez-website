<?php 
        include('include/dbconn.php');
?>


<?php
$name = preg_replace('#[^0-9a-z]#i', '', $_GET['shop_url']);
if(isset($name)){
    $shop_url =  $name;

    $get_shop_owner = "select * from customers where shop_url = '$shop_url'";

    $run_owner = mysqli_query($con, $get_shop_owner);

    $check_owner = mysqli_num_rows($run_owner);

}

    if($check_owner==false){

            echo "<h1 class='text-center' style='text-align:center; margin-top:10%;font-weight:600;color:red;'>No Shop with that URL </h1> ";
            echo "<h3 class='text-center' style='text-align:center; margin-top:5%;font-weight:500;'> Check and make sure the url is typed correctly </h3> ";
            echo "<a href='index.php' style='text-align:center; margin-top:10%; margin-left:50%;font-weight:600;'>Home </a> ";
        }
        else{
        
    $row = mysqli_fetch_array($run_owner);

    $owner_id = $row['customer_id'];

    $email = $row['email'];

    $p_no = $row['phone_no'];

    $w_no = $row['whatsapp_no'];

    $shop_name = $row['shop_name'];
      

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <meta name="title" content="<?php echo $shop_name; ?>">
  <title><?php echo $shop_name; ?></title>


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
      margin-left: 2%;
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
      margin-top: 5%;
      margin-bottom: 8%;

    }

    .card-header {
      padding-top: 5px;
      padding-bottom: 0;
    }

    .product .card {
      margin-bottom: 10%;
      min-height: 310px;
      background-color: #fcf9f9;
      border: 0px solid #707070;
      border-radius: 15px;
      /**shadow box style **/
      -webkit-box-shadow: 0px 0px 4px 1px rgba(143, 139, 143, 1);
      -moz-box-shadow: 0px 0px 4px 1px rgba(143, 139, 143, 1);
      box-shadow: 0px 0px 4px 1px rgba(143, 139, 143, 1);
    }

    .card-img-top {
      border-radius: 15px;
      min-height: 160px;
    }

    .card-body {
      padding-top: 10px;
      padding-bottom: 0;
    }

    .row {
      padding: 0;
    }

    /* Style the Image Used to Trigger the Modal */
    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    #myImg:hover {
      opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }


    /* Add Animation - Zoom in the Modal */
    .modal-content,
    #caption {
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @keyframes zoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* The Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
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

    .product .col-6 {
      padding: 10px;
      margin-bottom: 20px;
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

      .modal-content {
        width: 100%;
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



      .product .name {
        font-size: 13px;
      }

      .product .price {
        font-size: 15px;
      }

      .product .btn {
        font-size: 12px;
      }

      p.text-primary {
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

      <?php } ?>

    </div>
  </div>

  <footer>
    <div class="row text-center">
      <div class="col-sm-4 social">
        <br>

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

<script type="text/javascript">
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img");

  Array.from(document.querySelectorAll("img")).forEach(item => {
    item.addEventListener("click", event => {
      modal.style.display = "block";
      modalImg.src = event.target.src;
    });
  });
  /*img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }*/

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }
</script>

</html>

<?php } ?>