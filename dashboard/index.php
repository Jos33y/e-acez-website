<?php

 include("include/dbconn.php");
 include("include/header.php");
 
if(!isset($_SESSION['email'])){

    echo "<script>window.open('../sign-in.php', '_self')</script>";
 
 }else{
     $admin_session = $_SESSION['email'];
 
     $get_admin = "select * from customers where email = '$admin_session'";
 
     $run_admin = mysqli_query($con, $get_admin);
 
     $row_admin = mysqli_fetch_array($run_admin);
 
     $admin_id = $row_admin['customer_id'];
 
     $firstname = $row_admin['firstname'];
 
     $lastname = $row_admin['lastname'];
 
     $shop_name = $row_admin['shop_name'];
 
     $email = $row_admin['email'];

     $url = $row_admin['shop_url'];

     $sql =  "select * from products where customer_id = '$admin_id'";
     $query = mysqli_query($con, $sql);
     $count_prod = mysqli_num_rows($query);
  
  ?>
  <body>
    <!--navbar-->
    <nav>
        <div class="navbar text-white">
            <a href="index.php?dashboard" class="nav-title"> <i class="fas fa-tachometer-alt"></i> Dashboard </a>

            <span class="nav-name"><?php echo $lastname . ' ' . $firstname; ?>
                <img src="profile_img/default.png" alt="profile image" class="img-fluid">
            </span>

        </div>
    </nav>

          <?php
          if(isset($_GET['dashboard'])){

            include("dashboard.php");
          }
          if(isset($_GET['insert_product'])){

            include("insert_product.php");
          }
          if(isset($_GET['view_products'])){

            include("view_products.php");
          }

          if(isset($_GET['edit_product'])){

            include("edit_product.php");
          }

          if(isset($_GET['delete_product'])){

            include("delete_product.php");
        }

          if(isset($_GET['profile'])){

            include("profile.php");
          }

          if(isset($_GET['change_password'])){

            include("change_password.php");
          }

          if(isset($_GET['contact_developer'])){

            include("contact_developer.php");
          }

          if(isset($_GET['share_link'])){

            include("share_link.php");
          }

          if(isset($_GET['sign_out'])){

            include("sign_out.php");
          }





          ?>

  <?php
 }

 ?>