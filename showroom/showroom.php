<?php 
        include('include/dbconn.php');
        
?>

<?php
$name = preg_replace('#[^0-9a-z]#i', '', $_GET['shop_url']);
$pCat = isset($_GET['pCat']) ? $_GET['pCat'] : '';
if(isset($name) OR ($pCat)){
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

    $prof_img = $row['profile_image']
      

  
?>
<?php include('include/header.php'); ?>

<?php 

$sql = "SELECT * FROM social WHERE customer_id = '$owner_id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

 $fpixel = $row['facebook_pixel'];


echo $fpixel; 
?>

</head>


<body>
  <!--categories side nav -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="http://localhost/e-acez-4.0/<?php echo $shop_url;?>">All</a>
    <?php 
$get_cat = "SELECT * FROM product_categories WHERE customer_id = '$owner_id' ORDER BY category_name ASC";

$run_cat = mysqli_query($con, $get_cat);

while($row = mysqli_fetch_array($run_cat)){
    $p_cat_id = $row['p_cat_id'];
    $cat_name = $row['category_name'];
?>
    <a href="http://localhost/e-acez-4.0/<?php echo $shop_url; ?>/<?php echo $p_cat_id;?>"><?php echo $cat_name; ?></a>

    <?php } ?>
  </div>

  <!--end -->

  <!--navbar-->
  
  <nav>
    <div class="navbar">
    
      <span class="shop-name">
      <img src="dashboard/profile_img/<?php echo $prof_img; ?>" alt="shop name" class="prof_fluid" 
    style="border: 2px solid #ff5500; border-radius: 30px; height: 50px; width: 50px; margin-left: 10px; background: #bbb;">
        <?php echo $shop_name; ?>
      </span>

      <span class="call text-right">Call: &nbsp;<i class="fas fa-phone-alt"></i> <a
          href="tel:+234<?php echo $p_no; ?>"><?php echo $p_no ?></a></span>
         
    </div>
  </nav>


  <!--TODO:  Translate the code to PHP Codes-->


  <!--product rows-->
  <div class="container top">
    <span class="pointer" onclick="openNav()">&#9776; categories</span>
   
  </div>



  <div class="container product text-center">
    <!--row-->
    <div class="row">
      <!--col1-->

      <?php     


            if($pCat){ 
                $id  =  $_GET['pCat'];
              $get_products = "select * from products where p_cat_id='$id' and customer_id = '$owner_id' ORDER BY prod_id DESC";

              $i = 0;
              $run_pro = mysqli_query($con, $get_products);

              $check_owner = mysqli_num_rows($run_pro);          
            
                if($check_owner==false){

                  echo "<h4 style='font-weight:600; margin-top:20px;'class='text-center'> No Product Found In This Category </h4>";
                }
                else{

                
  
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
          <img src="../dashboard/product_images/<?php echo $prod_img; ?>" id="myImg" alt="Product Image"
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

      <?php } 
            }
          }
     
              

            
            else{
              $get_products = "select * from products where customer_id = '$owner_id' ORDER BY prod_id DESC";
          
              $i = 0;
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

      <?php } }
     
      ?>


    </div>
  </div>

  <footer>
    <div class="row text-center">
      <div class="col-sm-4 social">

        <?php 

      $sql = "SELECT * FROM social WHERE customer_id = '$owner_id'";

      $query = mysqli_query($con, $sql);

      $row = mysqli_fetch_array($query);

        $fb = $row['facebook'];

       $twitter = $row['twitter'];

       $insta = $row['instagram'];

       $ytube = $row['youtube'];


?>
        <br>
        <ul>
          <li> <a href="<?php echo $insta; ?>" target="_blank" rel="noopener noreferrer"><i
                class="fab fa-instagram"></i></a></li>
          <li> <a href="<?php echo $twitter; ?>" target="_blank" rel="noopener noreferrer"><i
                class="fab fa-twitter"></i></a>
          </li>
          <li> <a href="<?php echo $fb; ?>" target="_blank" rel="noopener noreferrer"><i
                class="fab fa-facebook-f"></i></a></li>
          <li> <a href="<?php echo $ytube; ?>" target="_blank" rel="noopener noreferrer"><i
                class="fab fa-youtube-square"></i></a>
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
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "200px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>


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