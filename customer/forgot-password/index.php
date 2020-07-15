


<?php
  include('dbconn.php');

if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$error = "";
if (!$email) {

   $error .="<p>Invalid email address please type a valid email address!</p>";
   }
   else{
   $sel_query = "SELECT * FROM customers WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){

    echo "
        <script>
        alert('No user is registered with this email address!')
    </script>";
    echo "<script>window.open('index.php', '_self')</script>";

   }
  }
  if($error!=""){
    echo "<div class='error'>".$error."</div>
    <br /><a href='javascript:history.go(-1)'>Go Back</a>";
    }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;

/// Insert Temp Table
mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");


$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://e-acez.com/customer/forgot-password/reset-password.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
https://e-acez.com/customer/forgot-password/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>E-ACEZ Team</p>';
$body = $output; 
$subject = "Password Recovery - E-ACEZ";
 
$email_to = $email;
$fromserver = "info@e-acez.com"; 


require '../vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer;

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.flockmail.com'; 
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "info@e-acez.com";
$mail->FromName = "E-ACEZ";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{

  echo "
  <script>
      alert('An email has been sent to you with instructions on how to reset your password.')
  </script>";
  echo "<script>window.open('https://e-acez.com/customer/sign-in.php', '_self')</script>";

 }

   }
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reset Password </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
 
  <link rel="stylesheet" href="eacez.css">

</head>

<body>

<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12">
        <a href="../../index.php"><img class="logo-sign" src="../images/eiconweb.png" alt=""></a>
        <h3 class="sign-in-head"> Reset</h3>

      </div>

      <div class="col-md-6 d-none">
      </div>
      <div class="col-md-6">
        <form method="post" action="" name="reset" class="sign-in">
          <table>
            <tbody>
              <tr>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter  Email" class="form-control"
                  maxlength="150" required>

              </tr>
              <tr>
                <div class="col-md-12 text-center">
                  <input class="btn btn-md btn-primary" type="submit" value="Reset"/>
                </div>
              </tr>
              <tr>
                <div class="col-md-12 text-center" style="margin-top: 10%;">
                  <a href="../register.php#register" class="footer" style="text-decoration:none;">Create an Account</a>

                  <a href="../sign-in.php" class="footer" style="text-decoration:none; color: #ff5500">Sign In</a>
                </div>
              </tr>
            </tbody>
          </table>
        </form>

      </div>
      <div class="col-md-12">
        <p class="footer">Copyright &copy; 2020 e-acez</p>
      </div>
    </div>
  </div>
</body>

</html>
</body>
</html>
<?php } ?>
