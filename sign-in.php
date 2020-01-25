<?php

//include('include/dbconn.php');
//session_start();

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
    </head>

<body>
<div class="container-fluid bg">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    <!-- Form Start -->
        <form method="POST" action="in-process.php" class="form-container">
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
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>
</body>
</html>

