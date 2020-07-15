<?php
 
include('include/dbconn.php');

$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
    if(!$reference){
      die('No reference supplied');
    }
    else{
      define('SALT', 'd#f453dd');

      $fName = $_GET['fName'];
      $lName = $_GET['lName'];
      $email = $_GET['email'];
      $pno = $_GET['pno'];
      $wno = $_GET['wno'];
      $sname = $_GET['sname'];
      $surl = $_GET['surl'];
      $pwd = md5(SALT. $_GET['pwd']);
      $code = $_GET['code'];
      $amt = $_GET['amt'];
      $user_ip = getRealIpUser();

       // Declare a date 
      $startDate =  date("Y-m-d");
  
      // Add days to date and display it 
      $endDate = date('Y-m-d', strtotime($startDate. ' + 30 days')); 

      //store data to customers table

      $customer_sql = "INSERT INTO customers (firstname, lastname, email, password, phone_no, whatsapp_no, shop_name, shop_url, code, reg_date, user_ip)
      VALUES ('$fName', '$lName', '$email', '$pwd', '$pno', '$wno', '$sname', '$surl', '$code', '$startDate', '$user_ip')";
      $query1 = mysqli_query($con, $customer_sql) or die(mysqli_error($con));


      if($query1){

      $check_id = "SELECT customer_id from customers where email = '$email'";
      $run_id = mysqli_query($con, $check_id);
 
      $row = mysqli_fetch_array($run_id);
  
      $c_id = $row['customer_id'];

    $sql = "INSERT subscription (customer_id, firstname, lastname, reference_no, startDate, endDate) VALUES('$c_id', '$fName', '$lName', '$reference', '$startDate', '$endDate')";

    $query2 = mysqli_query($con, $sql) or die(mysqli_error($con));


    if($query2){

      echo "<script>window.open('sign-in.php', '_self')</script>";
}
    

      }
    } 

?>