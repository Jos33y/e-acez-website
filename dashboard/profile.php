<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<?php 

    $get_admin = "select * from customers where customer_id = '$admin_id'";

    $run_edit = mysqli_query($con, $get_admin);

    $row = mysqli_fetch_array($run_edit);

    $admin_id = $row['customer_id'];

    $firstname = $row['firstname'];
    
    $lastname = $row['lastname'];

    $email = $row['email'];

    $p_no = $row['phone_no'];

    $w_no = $row['whatsapp_no'];

    $shop_name = $row['shop_name'];

    $shop_url = $row['shop_url'];

    $p_image = $row['profile_image'];

    ?>

<div class="container">

    <div class="pages row justify-content-center">
        <div class="col-md-8">
            <h3 class="dash-title"> <i class="far fa-user-circle"></i> View Profile</h3>
            <form method="post" enctype="multipart/form-data">

                <div class="profile">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="Product Name" class="sr-only">First Name</label>
                                    <input type="text" name="firstName" class="form-control-md form-control-lg" id=""
                                        value="<?php echo $firstname ; ?>" placeholder="First Name"
                                        onkeypress="return blockSpecialChar(event)">
                                </td>
                                <td>
                                    <label for="Product Name" class="sr-only">Last Name</label>
                                    <input type="text" name="lastName" class="form-control-md form-control-lg" id=""
                                        value="<?php echo $lastname ; ?>" placeholder="Last Name"
                                        onkeypress="return blockSpecialChar(event)">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <label for="Product Name" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control-md form-control-lg"
                                        id="" value="<?php echo $email; ?>" placeholder="Email"
                                        onkeypress="return blockChar(event)">

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="Phone No" class="sr-only">Phone No</label>
                                    <input type="tel" name="phoneNo" id="phone" class="form-control-md form-control-lg"
                                        id="" value="<?php echo $p_no; ?>" placeholder="Phone No."
                                        onkeypress="return IsNumeric(event);">

                                </td>
                                <td>
                                    <label for="Whatsapp No" class="sr-only">WhatsApp No.</label>
                                    <input type="tel" name="whatsappNo" id="whatsAppNo"
                                        class="form-control-md form-control-lg" id="" value="<?php echo $w_no; ?>"
                                        placeholder="WhatsApp No." onkeypress="return IsNumeric(event);">

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label for="Shop Name" class="sr-only">Shop Name</label>
                                    <input type="text" name="shopName" class="form-control-md form-control-lg" id=""
                                        value="<?php echo $shop_name ; ?>" placeholder="Shop Name"
                                        onkeypress="return blockChar(event)">
                                </td>
                                <td>
                                    <label for="Shop Url" class="sr-only">Shop URL</label>
                                    <input type="text" name="shopUrl" id="shopUrl"
                                        class="form-control-md form-control-lg" id="" value="<?php echo $shop_url ; ?>"
                                        placeholder="Shop URL" onkeypress="return blockSpecialChar(event)">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="myfile">Select brand Logo</label>
                                    <input type="file" id="profImg" name="profImg">
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="form-group text-center">
                        <button type="submit" name="update" class="btn btn-md btn-info">Save</button>
                    </div>

                    <div class="form-group text-center">
                        <a href="index.php?dashboard">
                            <p class="back">Back</p>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</body>

</html>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


<script type="text/javascript">
    var specialKeys = new Array();
    specialKeys.push(8); //Backspace
    function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
        return ret;
    }

    function blockChar(e) {
        var k = e.keyCode;
        return (k != 39);
    }
</script>

<script>
    document.getElementById('email').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });

    document.getElementById('shopUrl').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });

    function blockSpecialChar(e) {
        var k = e.keyCode;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || (k >= 48 && k <= 57));
    }

    document.getElementById('whatsAppNo').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });

    document.getElementById('phone').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });
</script>


<?php

if(isset($_POST['update'])){

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $pno = $_POST['phoneNo'];
    $wno = $_POST['whatsappNo'];
    $bname = $_POST['shopName'];
    $surl = $_POST['shopUrl'];

    $prof_image = $_FILES['profImg']['name'];

    $temp_name = $_FILES['profImg']['tmp_name'];

    move_uploaded_file($temp_name, "profile_img/$prof_image");


    $sql = "UPDATE customers
     SET firstname='$fname', lastname='$lname', email='$email', phone_no='$pno', whatsapp_no='$wno', shop_name='$bname',
      shop_url='$surl', profile_image='$prof_image' WHERE customer_id = '$admin_id'";
    
    $query = mysqli_query($con, $sql) or die(mysqli_error($con));

    if($query){

        echo "
        <script>
        alert('update successfull')
    </script>";
    echo "<script>window.open('index.php?profile' , '_self')</script>";
    }
    
else{
    echo '
    <script>
    swal({
            title: "Update Error",
            icon: "error",
        });
</script>';
  
}

}


?>




<?php } ?>