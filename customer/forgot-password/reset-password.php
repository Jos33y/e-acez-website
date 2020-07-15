<?php
  include('dbconn.php');
  
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){

    echo "
    <script>
        alert('The link is invalid/expired. Either you did not copy the correct link
        from the email, or you have already used the key in which case it is 
        deactivated.!')
    </script>";
   // echo "<script>window.open('https://e-acez.com/customer/forgot-password/index.php', '_self')</script>";

 }else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
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
        <h3 class="sign-in-head"> Reset Password</h3>

      </div>

      <div class="col-md-6 d-none">
      </div>
      <div class="col-md-6">
        <form method="post" name="update" onSubmit="return valid();" class="sign-in">
          <table>
            <tbody>
              <tr>

                <label for="email">Enter New Password:</label>
                <input  type="password" name="pass1" id="npwd" maxlength="20" required class="form-control">

              </tr>
               <tr>

                <label for="email">Re-Enter New Password:</label>
                <input  type="password" name="pass2" id="cpwd" maxlength="20" required class="form-control">
                <br /><br />
                  <input type="hidden" name="email" value="<?php echo $email;?>"/>
              </tr>
              <tr>
                <div class="col-md-12 text-center">
                  <button  type="submit" name="Submit" class="btn btn-md btn-primary">Reset Password</button>
                 
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
<script type="text/javascript">
function valid()
{

if(document.update.npwd.value=="")
{
alert("New Password Field is Empty !!");
document.update.npwd.focus();
return false;
}
else if(document.update.cpwd.value=="")
{
alert("Confirm Password Field is Empty !!");
document.update.cpwd.focus();
return false;
}
else if(document.update.npwd.value!= document.update.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.update.cpwd.focus();
return false;
}
return true;
}
</script>

<?php
}else{

  echo "
  <script>
      alert('The link is expired. You are trying to use the expired link which 
      as valid only 24 hours (1 days after request)')
  </script>";
            }
      }

} // isset email key validate end
 

if(isset($_POST['Submit']))
{
  define('SALT', 'd#f453dd');

$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");

$pass1 = md5(SALT.$pass1);
mysqli_query($con,
"UPDATE `customers` SET `password`='".$pass1."'
WHERE `email`='".$email."';"
);
 
mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
echo "
  <script>
      alert('Congratulations! Your password has been updated successfully.')
  </script>";

  echo "<script>window.open('https://e-acez.com/customer/sign-in.php', '_self')</script>";

   } 

?>


