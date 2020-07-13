<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../sign-in.php', '_self')</script>";

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
                <form method="post">

                    <div class="profile">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="Product Name" class="sr-only">First Name</label>
                                        <input type="text" name="firstName" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $firstname ; ?>" placeholder="First Name">
                                    </td>
                                    <td>
                                        <label for="Product Name" class="sr-only">Last Name</label>
                                        <input type="text" name="lastName" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $lastname ; ?>" placeholder="Last Name">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <label for="Product Name" class="sr-only">Email</label>
                                        <input type="email" name="email" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $email; ?>" placeholder="Email">

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="Phone No" class="sr-only">Phone No</label>
                                        <input type="tel" name="phoneNo" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $p_no; ?>" placeholder="Phone No.">

                                    </td>
                                    <td>
                                        <label for="Whatsapp No" class="sr-only">WhatsApp No.</label>
                                        <input type="tel" name="whatsappNo" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $w_no; ?>" placeholder="WhatsApp No.">

                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <label for="Shop Name" class="sr-only">Shop Name</label>
                                        <input type="text" name="shopName" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $shop_name ; ?>" placeholder="Shop Name">
                                    </td>
                                    <td>
                                        <label for="Shop Url" class="sr-only">Shop URL</label>
                                        <input type="text" name="shopUrl" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $shop_url ; ?>" placeholder="Shop URL">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <label for="Image" class="sr-only">Profile Image</label>
                                        <input type="file" name="profileImg" class="form-control-md form-control-lg"
                                            id="" placeholder="Profile Image">

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



<?php } ?>
