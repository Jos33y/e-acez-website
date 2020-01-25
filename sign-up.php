<?php

//include('include/dbconn.php');
//session_start();

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
    </head>

    <body class="form-style">

<div class="row justify-content-center log ">
<!-- Form Card -->
<div class="container col-sm-6">
  <div class="card">
    <div class="card-header text-center">
    <a href="index.php"><img class="img-fluid"  src="images/eiconweb.png" alt="" width="100" height="100"></a>
    </div>
    <div class="card-body">

      <form method="POST">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="firstname" maxlength="20" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="lastname"  maxlength="20" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <label for="business_name">Business / Brand Name</label>
          <input type="text" name="business_name"  maxlength="50" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <label for="phone-number">Phone Number</label>
          <input type="number" name="phone_number"  maxlength="15" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <label for="Email">Email</label>
          <input type="email" name="email"  maxlength="50" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" maxlength="20" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <button class="btn btn-md btn-primary form-control" name="sign-in" >Sign Up</button>
        </div>

      </form>
      <div class="footer text-center">
        <hr>
        <p>Have an account <a href="sign-in.php"> Login </a></p>

        <hr>
        <p class="mt-5 mb-3 text-muted">&copy; e-acez.com 2020</p>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</body>
</html>
