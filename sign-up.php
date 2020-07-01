<?php

//include('include/dbconn.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title> create account </title>
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
        <h5 style="color:red"> Registration is closed </h4>
          <a href="index.php"><img class="form-logo"  src="images/eiconweb.png" alt=""></a>      
          </div>
        <div class="form-group">
          <label for="first_name" class="form-text">First Name</label>
          <input type="text" name="first_name" maxlength="20" class="form-control" placeholder="Enter First Name" required autofocus autofill="off" autocomplete="off">
        </div>

        <div class="form-group">
          <label for="last_name" class="form-text">Last Name</label>
          <input type="text" name="last_name"  maxlength="20" class="form-control" placeholder="Enter Last Name" required autofocus autofill="off" autocomplete="off">
        </div>

        <div class="form-group">
          <label for="business_name" class="form-text">Business / Brand Name</label>
          <input type="text" name="business_name"  maxlength="50" class="form-control" placeholder="Enter Business / Brand Name" required autofocus autofill="off" autocomplete="off">
        </div>

        <div class="form-group">
          <label for="phone-number" class="form-text">Phone Number</label>
          <input type="number" name="phone_number"  maxlength="15" class="form-control" placeholder="Enter Phone Number" required autofocus autofill="off" autocomplete="off"> 
        </div>

        <div class="form-group">
          <label for="Email" class="form-text">Email</label>
          <input type="email" name="email"  maxlength="50" class="form-control" placeholder="Enter Email" required autofocus autofill="off">
        </div>

        <div class="form-group">
          <label for="password" class="form-text">Password</label>
          <input type="password" name="password" maxlength="20" class="form-control" placeholder="Enter Password" required autofocus autofill="off">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block" name="next">Next</button>
        </div>
        <div class="footer text-center">
          <p style="float: left"><a href="sign-in.php"> Login Here </a></p>
          <hr>
          <p class="lead" style="clear:both; color: #fff">&copy; e-acez.com 2020</p>
      </div>
      </form>   
    </div>
  </div>
</div>

  <script>
      function alert(){
        swal("Closed!!!", "Registration is closed!", "error");
      }
    </script>
</div>
</body>
</html>


  <?php

if(isset($_POST['next'])){

    $firstname = $_POST['first_name'];

    $lastname = $_POST['last_name'];

    $business_name = $_POST['business_name'];

    $phone_no = $_POST['phone_number'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $user_ip = getRealIpUser();


    $register_customer = "select user_id from user_db where email = '$email' ";

    $run_registration = mysqli_query ($con, $register_customer);

    if (mysqli_num_rows($run_registration) == 0){//The mail address has not been registered already therefore register the user in the users table

    $register_customer = "insert into user_db 
    (first_name, last_name, business_name, phone_number, email, password, registration_date, user_ip) 
    values ('$firstname', '$lastname', '$business_name', '$phone_no', '$email', '$password', NOW(), '$user_ip') ";

    $run_registration = mysqli_query($con, $register_customer) or  die(mysqli_error($con));

    if($run_registration){
      $get_user = "select user_id from user_db where email = '$email'";
      
      $run_user  = mysqli_query($con , $get_user);

        $row = mysqli_fetch_array($run_user);
        
        $_SESSION['user_id'] = $row['user_id'];

        $user_id =  $row['user_id'];
        
        $_SESSION['email'] = $row['email'];

        $_SESSION['first_name'] = $row['first_name'];

        $_SESSION['last_name'] = $row['last_name'];

      
        echo "<script>window.open('template.php?user_id=$user_id', '_self')</script>";  

    }
}else{
    echo "<script> alert('Email has been registered')</script>";

    echo "<script>window.open('sign-up.php', '_self')</script>";  

}

}

    ?>