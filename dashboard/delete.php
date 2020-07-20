<?php      
 include("include/dbconn.php");
if(!isset($_SESSION['email'])){

     echo "<script>window.open('../customer/sign-in.php', '_self')</script>";
  
  }else{
      $admin_session = $_SESSION['email'];
  
      $get_admin = "select * from customers where email = '$admin_session'";
  
      $run_admin = mysqli_query($con, $get_admin);
  
      $row_admin = mysqli_fetch_array($run_admin);
  
      $admin_id = $row_admin['customer_id'];
  
      $email = $row_admin['email'];
  } 

  $sql = "DELETE FROM product_categories WHERE p_cat_id = '".$_POST["p_cat_id"]."'";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Deleted';  
 }  

 ?> 
