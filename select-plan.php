<?php

include('include/dbconn.php');

if(!isset($_SESSION['user_id'])){

  echo "<script>window.open('sign-in.php', '_self')</script>";

}else{

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

<!DOCTYPE html>
<html lang="en">
  <head>
  <title> select a plan </title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    
         <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>

         <link rel="stylesheet" href="styles/index.css">
    </head>
    <style> 
    *{
        color: #fff;
       }
    </style>

<body>
<div class="container-fluid bg">
    <div class="row justify-content-center">
       <div class="col-sm-8 col-xs-12">
          <div class="form-container">
             <div class="text-center">
                  <a href="index.php"><img class="form-logo"  src="images/eiconweb.png" alt=""></a> 
                  <h5 class="thank-you"> <?php echo $last_name. " ". $first_name; ?> THANK YOU FOR REGISTERING</h5>
                  <h5 class="sub-thank"> To complete your registration please choose a monthly plan </h5> <br>     
              </div>
              <form method="POST">
                <div class="form-group">
                  <label for="coupon">If you registering for beta store enter your beta code:</label>
                  <input type="text" class="form-control" name="code" placeholder="Enter CODE"> 
                </div>
                <div class="form-group">
                  <button class="btn btn-md btn-primary" name="coupon"> Apply </button>
                </div>
              </form>
         
          <form method="POST" class="text-center">
            <div class="form-group">
                <label for="monthly plan"  class="sr-only">Monthly Plans</i></label>

                <select type="text" class="plan form-control" id="payment" name="amount">

                    <option  value="100">One Month ---- &#8358; 100</option>
                    <option  value="5000">One Month ---- &#8358; 5,000</option>
                    <option value="13500">Three Months ---- &#8358; 13,500</option>
                    <option value="22000">Five Months ---- &#8358; 22,000</option>
                    <option value="28000">Seven Months ---- &#8358; 28,000</option>
                    <option value="35000">Nine Months ---- &#8358; 35,000</option>
                    <option value="45000">One Year ---- &#8358; 45,000</option>

                </select>
              </div>

              <div class="form-group">
                    <button class="btn btn-md btn-primary" name="next_pay" >Select Plan </button>
              </div>
          </form>
          <div class="text-center">
            <img class="img-fluid" style="margin-top: 10vh" src="images/paystackimg.png" alt="Paystack Image">
            <a href="sign-out.php"> <p> Log out </p> </a>
          </div>

          <div class="footer text-center">         
            <hr>
            <p class="lead" style="clear:both; color: #fff">&copy; e-acez.com 2020</p>
          </div>
        </div>
      </div>
    </div>
</div>
          
</body>
</html>

<?php

if(isset($_POST['coupon'])){

  $code = $_POST['code'];

  $coupon = array("eacez-benz", "eacez-test", "eacez-bunmi", "eacez-funbi", "eacez-aminat", "eacez-taofeek", "eacez-motelola", "eacez-zanga", "eacez-daveon", "eacez-dray", "eacez-faithy");

  if(in_array($code, $coupon)){

        $insert_coupon = "insert into dashboard_db (user_id, coupon) values ('$user_id', '$code')";

        $run_coupon = mysqli_query($con, $insert_coupon) or  die(mysqli_error($con));

        if($run_coupon){

                $subject = "E-ACEZ beta store activation";

                  $msg = $last_name . " " . "Thank you for signing up for a e-acez beta version stores.\n".
                  "Your support and efforts towards our new venture is certainly appreciated,\n" .
                  "we look forward to creating amazing experiences with you our valued customers.\n" .
                  "Thank you again!";

                  $from = "eacez@e-acez.com";

                  mail($email, $subject, $msg, $from);

        echo "<script>window.open('thank-you.php?user_id=$user_id', '_self')</script>"; 

        }

}
else
{
  echo "<script>alert('Wrong code. code is case sensitive!!!)</script>";
  echo "<script>window.open('select-plan.php?user_id=$user_id', '_self')</script>"; 
}

}

?>

<?php 

}

?>