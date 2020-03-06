<?php
         $active ='Account';
        include("includes/header.php");
?>
</nav>
</header>

<div id="content"><!-- content Begin -->
    <div class="container"><!-- container-fluid Begin -->
        <div class="row">
            <div class="col-md-12"><!-- col-md-12 Begin -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"><!-- breadcrumb Begin -->
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Register
                        </li>
                    </ol><!-- breadcrumb Finish -->
                </nav>
            </div><!-- col-md-12 Finish -->
        </div>
    </div>
    <div class="container">
          <div class="text-center"><!-- Center Begin -->
               <h4 class="contact-title"> Create Account</h4>
          </div><!-- Center Finish  -->
          <form action="customer_register.php" method="post" class="contact-form"><!--form Begin -->
                <div class="row">
                    <div class="form-group col-md-6"><!--form-group Begin -->
                        <label for="Name">First Name</label>
                        <input type="text" name="c_firstname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6"><!--form-group Begin -->
                        <label for="Name">Last Name</label>
                        <input type="text" name="c_lastname" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group col-md-6"><!--form-group Begin -->
                        <label for="Email">Email</label>
                        <input type="email" name="c_email" id="c_email" class="form-control" placeholder="Email" required>
                    </div>   
                    <div class="form-group col-md-6"><!--form-group Begin -->
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" name="c_phone" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group col-md-6"><!--form-group Begin -->
                         <label for="Password">Password</label>
                         <input type="password" name="c_pass" id="c_pass" class="form-control" placeholder="Password (At least 4 characters)" required>
                    </div>                   
                </div>
                    <div class="form-group text-center"><!--text-center Begin -->
                        <button type="submit" name="register" class="site-btn">
                            CREATE ACCOUNT
                        </button>
                     </div><!--text-center Finish -->
                     <div class="text-center">
                        <p> If you have an account <a href="customer_login.php"> login now</a> </p>
                     </div>
           </form><!-- Form  Finish -->
    </div><!-- container-fluid Finish -->
</div><!-- content Finish -->

<?php

        include("includes/footer.php");

        ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</body>
</html>

<?php

if(isset($_POST['register'])){

    $firstname = $_POST['c_firstname'];

    $lastname = $_POST['c_lastname'];

    $c_email = $_POST['c_email'];

    $c_password = $_POST['c_pass'];

    $c_phone = $_POST['c_phone'];

    $c_ip = getRealIpUser();

    $insert_customer = "insert into customers
     (firstname, lastname, customer_email, customer_pword, customer_phone, customer_ip, customer_reg_date)
      values ('$firstname', '$lastname', '$c_email', '$c_password', '$c_phone', '$c_ip', NOW())";

      $run_customer = mysqli_query($con, $insert_customer);

      $insert_chat = "insert into login
     (email, username)
      values ('$c_email', '$firstname')";

      $run_chat = mysqli_query($con, $insert_chat);

        $sel_cart = "select * from cart where ip_add='$c_ip'";

        $run_cart = mysqli_query($con, $sel_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if($check_cart>0){

        $_SESSION['customer_email'] = $c_email;
        /// if register with item in cart ///

        echo "<script>alert('You have been Registered Successfully')</script>";

        echo "<script>window.open('checkout.php', '_self')</script>";

      }else{

        /// if register without item in cart ///
          $_SESSION['customer_email'] = $c_email;

          echo "<script>alert('You have been Registered Successfully')</script>";

          echo "<script>window.open('index.php','_self')</script>";
      }
    }

?>