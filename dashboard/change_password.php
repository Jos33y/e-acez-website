<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../sign-in.php', '_self')</script>";

}else{

?>

    <div class="container">


        <div class="pages row justify-content-center">
            <div class="col-md-4"></div>
            <!--row one-->
            <div class="col-md-4">
                <h3 class="dash-title"> <i class="fas fa-user-lock"></i> Change Password</h3>
                <form method="post" name="chngpwd" class="form" onSubmit="return valid();">

                    <div class="form-group">
                        <label for="old-password" class="sr-only">Old Password</label>
                        <input type="password" name="opwd" class="form-control-md form-control-lg" id="opwd"
                            placeholder="Old Password" maxlength="20" required>
                    </div>

                    <div class="form-group">
                        <label for="new-password" class="sr-only">New Password</label>
                        <input type="password" name="npwd" class="form-control-md form-control-lg" id="npwd"
                            placeholder="New Password" maxlength="20" required>
                    </div>

                    <div class="form-group">
                        <label for="new-password-2" class="sr-only">Retype New Password</label>
                        <input type="password" name="cpwd" class="form-control-md form-control-lg" id="cpwd"
                            placeholder="Retype New Password" maxlength="20" required>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" name="Submit" class="btn btn-md btn-warning">change</button>
                    </div>

                    <div class="form-group text-center">
                        <a href="index.php?dashboard">
                            <p class="back">Back</p>
                        </a>
                    </div>

                </form>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>

</body>

</html>


<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Field is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Field is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Field is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>



<?php
 define('SALT', 'd#f453dd');

if(isset($_POST['Submit']))
{
 $oldpass=md5(SALT.$_POST['opwd']);
 $useremail = $email;
 $newpassword=md5(SALT.$_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM customers where password='$oldpass' && email='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"UPDATE customers SET password=' $newpassword' where email='$useremail'");
 echo "
        <script>
        alert('password changed successfull')
    </script>";

}
else
{
    echo '
    <script>
    swal({
            title: "Old Password not Matched",
            icon: "error",
        });
</script>';
  
}
}
?>

<?php } ?>