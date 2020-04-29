<?php
include('include/dbconn.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>sign in to dashboard </title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    
         <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>

         <link rel="stylesheet" href="styles/index.css">

         <style>
           *{
              color: #fff;
             }
           </style>
    </head>

<body>
<div class="container-fluid bg">
  <div class="row justify-content-center">
      <div class="col-sm-6 col-xs-12 "> 
    <!-- Form Start -->
        <form method="POST" class="form-container">
          <div class="text-center">
          <a href="index.php"><img class="form-logo"  src="images/eiconweb.png" alt=""></a>      
          </div>
          <div class="form-group">
              <label for="Email" class="form-text">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required autofocus>
            </div>

            <div class="form-group">
              <label for="password" class="form-text">Password</label>
              <input type="password" name="password" maxlength="20" class="form-control" placeholder="Enter Password" required autofocus>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block" name="sign-in" >Sign in</button>
            </div>
            <div class="footer text-center">
                <p style="float: left"><a href="forget-password.php"> Forget Password </a></p>
                <p style="float: right"><a href="sign-up.php"> Create Account </a></p>
                <hr>
                <p class="lead" style="clear:both; color: #fff">&copy; e-acez.com 2020</p>
          </div>
        </form>
 
    </div>
  </div>
</div>
</body>
</html>

    <?php

    if(isset($_POST['sign-in'])){

$user_email = $_POST['email'];

$password = $_POST['password'];

$select_user = "select * from user_db where email='$user_email' AND password = '$password'";

$run_user = mysqli_query($con, $select_user);

$p_ip = getRealIpUser();

$check_user = mysqli_num_rows($run_user);

$select_user_info = "select * from user_db where email='$user_email'"; 

$run_info = mysqli_query($con, $select_user_info);

$row = mysqli_fetch_array($run_info);

    $user_id = $row['user_id'];

    $first_name = $row['first_name'];

    $last_name = $row['last_name'];
	
	$customer_email = $row['email'];

  $get_dashboard = "select  * from dashboard_db where user_id = '$user_id'";

  $run_dashboard = mysqli_query($con, $get_dashboard);

  $row = mysqli_fetch_array($run_dashboard);

      $dash_link = $row['dashboard'];
      


if($check_user==false){

    echo "<script>alert('Your email or password is wrong')</script>";

    exit();

}
if($check_user==true){

  $_SESSION['user_id'] = $user_id;
  $_SESSION['email'] = $customer_email;
  $_SESSION['firstname'] = $first_name;
  $_SESSION['lastname'] = $last_name;
  

  echo "<script>window.open('$dash_link?user_id=$user_id' , '_self')</script>";
  

}

}

?>


