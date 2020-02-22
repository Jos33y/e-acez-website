<?php

include('include/dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title> Payment Survey </title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="styles/index.css">
        <script type="text/javascript" src="script.js"></script>
        </head>

<body>
<div id="loader"></div>

<div id="content">

  <!-- Navigation bar-->
  <nav class="navbar navbar-dark navbar-expand-md  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="index.php">
              <img src="images/eiconweb.png" class="logo">
              <span class="logo-head">e-acez </span>
          </a>
          </div>
  </nav>
    <div class="container survey-form">
      <div class="text-center survey-title">
          <h5>Payment Method Survey </h5>
          <p class="text-muted">Kindly fill this form to let us know the payment methods you want for your store</p>
      </div>
      <form method="POST">
          <div class="form-group">
              <label for="business_name">Business Name </label>
              <input type="text" name="b_name" class="form-control" placeholder="Enter Business Name" required>
          </div>
          <div class="text-center">
              <p class="text-muted info"> Select YES for any payment method you interested in and NO for the one you not. </p>
          </div>
          <div class="form-group">
              <label for="cash-on-delivery"> Cash On Delivery </label>
              <select class="form-control" name="cash" required>
                  <option value="No answer" selected> no answer </option>
                  <option value="YES"> YES </option>
                  <option  value="NO"> NO </option>
              </select>
          </div>
          <div class="form-group">
              <label for="direct-bank-transfer"> Direct Bank Transfer </label>
              <select class="form-control" name="transfer" required>
                  <option value="No answer" selected> no answer </option>
                  <option value="YES"> YES </option>
                  <option  value="NO"> NO </option>
              </select>
          </div>
          <div class="form-group">
              <label for="online-payment"> Paystack Online Payment </label>
              <p class="text-muted info">To use paystack you must have any government approved ID card ('voters card, National Identitty card, Drivers Licence') not school ID card.</p>
              <select class="form-control" name="paystack" required>
                  <option value="No answer" selected> no answer </option>
                  <option value="YES"> YES </option>
                  <option  value="NO"> NO </option>
              </select>
          </div>
          <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
              </div>
          </div>
          <hr>
                <p class="text-muted text-center">&copy; e-acez.com 2020</p>
          
      </form>
  </div>
</div>            
</body>
</html>
<?php

if(isset($_POST['submit'])){

    $b_name = $_POST['b_name'];

    $cash  = $_POST['cash'];

    $transfer = $_POST['transfer'];

    $paystack = $_POST['paystack'];

    $insert_survey = "insert into payment_survey (business_name, cash_on_delivery, direct_transfer, online_payment) values ('$b_name', '$cash', '$transfer', '$paystack')";

    $run_survey = mysqli_query($con, $insert_survey) or die(mysqli_error($con));

    if($run_survey){
        echo "<script> alert('Thank You.. Survey Sent')</script>";
        echo "<script>window.open('payment-survey.php', '_self')</script>";  
    }
    else{
        echo "<script> alert('Error.. Retry the survey')</script>";
        echo "<script>window.open('payment-survey.php', '_self')</script>";  
    }

}

?>
