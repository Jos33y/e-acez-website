
<?php
include('include/dbconn.php');
$title = "registration successful";
include('header.php');



?>
<?php

 if(isset($_GET['user_id'])){

   $user_id = $_GET['user_id'];

   $get_user = "select * from user_db where user_id = '$user_id'";
      
   $run_user  = mysqli_query($con , $get_user);

    $row = mysqli_fetch_array($run_user);

    $first_name = $row['first_name'];

    $last_name = $row['last_name'];

    $email = $row['email'];

 }

 ?>
 

<div class="success container-fluid"> 
    <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center">
              <div class="icon">
          <i class="far fa-check-circle"></i>
              </div>
          <h1 class="success-head">Thank you!</h1>

                <p class="sub-success">Your registration is successfull</p>

      
                <div class="button">

                <a href="log-out.php" class="btn btn-success"> Login </a>
                <a href="sign-out.php" class="btn btn-success-two"> Home </a>

                </div>
          </div>
        </div>
        </div>
    </div>
</body>
</html>