<div class="container"><!-- container Begin-->

<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con, $get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$firstname = $row_customer['firstname'];

$lastname = $row_customer['lastname'];

$customer_email = $row_customer['customer_email'];

$customer_phone = $row_customer['customer_phone'];

$customer_city = $row_customer['customer_city'];

$customer_country = $row_customer['customer_country'];

$customer_state = $row_customer['customer_state'];

$customer_address = $row_customer['customer_address'];

$customer_zip = $row_customer['customer_zip'];

$customer_image = $row_customer['customer_image'];

?>

<h4 class="text-center contact-title"> Edit Your Account </h4>


<form action="" method="post" enctype="multipart/form-data" class="contact-form">
        <div class="row">
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="Name">First Name</label>
                <input type="text" name="c_firstname" class="form-control" value="<?php echo $firstname; ?>" required>
            </div>
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="Name">Last Name</label>
                <input type="text" name="c_lastname" class="form-control" value="<?php echo $lastname; ?>" required>
            </div>
            <div class="form-group col-md-6"><!--form-group Begin -->     
                <label for="email"> Email </label>
                <input type="text" name="c_email" id="c_email" class="form-control" value="<?php echo $customer_email; ?>" required>
            </div><!--form-group Finish -->
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="Phone">Phone Number </label>
                <input type="text" name="c_phone" id="c_phone" class="form-control" value="<?php echo $customer_phone; ?>">
            </div><!--form-group Finish -->
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="Address"> Address </label>
                <input type="text" name="c_address" id="c_address" class="form-control" value="<?php echo $customer_address; ?>">
            </div><!--form-group Finish -->
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="city" class="control-label">City </label>
                <input type="text" name="c_city" class="form-control" value="<?php echo $customer_city; ?>">
            </div><!--form-group Finish -->
            <div class="form-group col-md-6">
                 <label for="state" class="control-label">State</label>
                 <select type="text" name="c_state" class="form-control">
                    <option value="<?php echo $customer_state; ?>"> <?php echo $customer_state; ?> </option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue">Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross Rive">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="FCT">Federal Capital Territory</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nasarawa">Nasarawa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Osun">Osun</option>
                    <option value="Oyo">Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option>
                 </select>
            </div>
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="country" class="control-label">Country </label>
                    <select name="c_country" id="c_country" class="form-control " required>
                        <option value="<?php echo $customer_country; ?>"><?php echo $customer_country; ?></option>
                        <option value="Nigeria" selected>Nigeria</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="zip" class="control-label">Zip code</label>
                <input type="text" name="c_zip" id="c_zip" class="form-control" value="<?php echo $customer_zip; ?>">
            </div>
            <div class="form-group col-md-6"><!--form-group Begin -->
                <label for="Profilepicture"> Profile Picture</label>
                <input type="file" name="c_image" id="c_image" class="form-control form-height-custom"><br/>
                     <img  src="customer_images/<?php echo $customer_image; ?>" alt="<?php echo $customer_image; ?>" class="img-fluid" width="150" height="150">
            </div><!--form-group Finish -->
        </div>
                <div class="form-group text-center"><!--text-center Begin -->
                        <button  name="update" class="site-btn">
                            UPDATE NOW
                        </button>
                     </div><!--text-center Finish -->
</form>
</div>

<?php  

if(isset($_POST['update'])){

    $update_id = $customer_id;

    $c_firstname = $_POST['c_firstname'];

    $c_lastname = $_POST['c_lastname'];

    $c_email = $_POST['c_email'];

    $c_phone = $_POST['c_phone'];    

    $c_address = $_POST['c_address']; 

    $c_city = $_POST['c_city'];    

    $c_state = $_POST['c_state'];   
    
    $c_country = $_POST['c_country'];    

    $c_zip = $_POST['c_zip'];    

    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    move_uploaded_file($c_image_tmp, "customer_images/$c_image");
   

    $update_customer = "update customers set 
    firstname='$c_firstname', lastname='$c_lastname', customer_email='$c_email', customer_phone='$c_phone', customer_address='$c_address',
    customer_city='$c_city', customer_state='$c_state', customer_country='$c_country', customer_zip='$c_zip', customer_image='$c_image' where customer_id='$update_id' ";

    $run_customer = mysqli_query($con, $update_customer);

    if($run_customer){ 
       
        echo "<script>alert('Your account has been edited, to see the changes please relogin')</script>";

        echo "<script>window.open('logout.php', '_self')</script>";

}
       
}


?>
