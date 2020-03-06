<?php

if(!isset($_SESSION['email'])){

    echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";
 
 }else{


?>

<?php 

if(isset($_GET['edit_profile'])){

    $edit_id = $_GET['edit_profile'];

    $get_admin = "select * from user_db where user_id = '$edit_id'";

    $run_edit = mysqli_query($conn, $get_admin);

    $row_edit = mysqli_fetch_array($run_edit);

    $admin_id = $row_edit['user_id'];

    $first_name = $row_edit['first_name'];
    
    $last_name = $row_edit['last_name'];
    
    $dob = $row_edit['DOB'];

    $admin_email = $row_edit['email'];

    $admin_pass = $row_edit['password'];

    $admin_phone = $row_edit['phone_number'];

    $admin_address = $row_edit['address'];

    $admin_state = $row_edit['state'];

    $admin_country = $row_edit['country'];

    $admin_image = $row_edit['profile_image'];

    $admin_about = $row_edit['about'];


}

    

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Insert Products </title>
    
    
   
</head>
<body>   
    <div class="row"><!-- row Begin -->

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Edit Profile

                </li>


            </ol>

        </div>

    </div><!--row Finish -->
    <div class="row">

        <div class="col-lg-12 ">
        

            <div class="panel panel-default">

                <div class="panel-heading">
                   
                    <h3 class="panel-title">

                        <i class="fa fa-pencil"></i> Edit Profile

                    </h3>


                </div>

                <div class="panel-body">

                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!--form Begin --> 

                    <div class="form-group"><!-- form-group Begin --> 

                        <label for="FirstName" class="col-md-3 control-label">First name</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" class="form-control" name="firstname" required autofocus value="<?php echo $first_name; ?>" >

                            </div>

                    </div>

                    <div class="form-group">

                        <label for="LastName" class="col-md-3 control-label">Last name</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" class="form-control" name="lastname" value="<?php echo $last_name; ?>"  required autofocus > 

                            </div>

                    </div>

                    <div class="form-group">

                        <label for="DOB" class="col-md-3 control-label">Date of Birth</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                              <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" >

                            </div>

                        </div>

                    <div class="form-group">

                        <label for="email" class="col-md-3 control-label">Email address:</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                 <input type="email" name="p_email" class="form-control" value="<?php echo $admin_email; ?>" >
                            
                            </div>
                    
                    </div>

                    <div class="form-group">

                        <label for="phonenumber" class="col-md-3 control-label">Phone number:</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                 <input type="text" name="p_phone" class="form-control" value="<?php echo $admin_phone; ?>"  required>

                            </div>

                    </div>
                     <div class="form-group">

                        <label for="password" class="col-md-3 control-label">Password:</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                 <input type="text" name="password" class="form-control" value="<?php echo $admin_pass; ?>"  required>

                            </div>

                    </div>
                            
                            
                    <div class="form-group">

                        <label for="Address" class="col-md-3 control-label">Address</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" class="form-control" name="p_address" value="<?php echo $admin_address; ?>"  required>

                            </div>

                    </div>

                    <div class="form-group">

                        <label for="state" class="col-md-3 control-label">State</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <select type="text" name="p_state" class="form-control">
                                     <option  value="<?php echo $admin_state ;?>"><?php echo $admin_state ;?></option>
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
                    </div>

                    <div class="form-group">

                        <label for="country" class="col-md-3 control-label"> Country</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <select type="text" class="form-control " id="country" name="p_country">
                                    <option  value="<?php echo $admin_country ;?>"><?php echo $admin_country ;?></option>
                                    <option value="algeria">Algeria</option>
                                        <option value="angola">Angola</option>
                                        <option value="benin">Benin</option>
                                        <option value="botswana">Botswana</option>
                                        <option value="burkina Faso">Burkina Faso</option>
                                        <option value="burundi">Burundi</option>
                                        <option value="cameroon">Cameroon</option>
                                        <option value="cape-verde">Cape Verde</option>
                                        <option value="central-african-republic">Central African Republic</option>
                                        <option value="chad">Chad</option>
                                        <option value="comoros">Comoros</option>
                                        <option value="congo-brazzaville">Congo - Brazzaville</option>
                                        <option value="congo-kinshasa">Congo - Kinshasa</option>
                                        <option value="ivory-coast">Côte d’Ivoire</option>
                                        <option value="djibouti">Djibouti</option>
                                        <option value="egypt">Egypt</option>
                                        <option value="equatorial-guinea">Equatorial Guinea</option>
                                        <option value="eritrea">Eritrea</option>
                                        <option value="ethiopia">Ethiopia</option>
                                        <option value="gabon">Gabon</option>
                                        <option value="gambia">Gambia</option>
                                        <option value="ghana">Ghana</option>
                                        <option value="guinea">Guinea</option>
                                        <option value="guinea-bissau">Guinea-Bissau</option>
                                        <option value="kenya">Kenya</option>
                                        <option value="lesotho">Lesotho</option>
                                        <option value="liberia">Liberia</option>
                                        <option value="libya">Libya</option>
                                        <option value="madagascar">Madagascar</option>
                                        <option value="malawi">Malawi</option>
                                        <option value="mali">Mali</option>
                                        <option value="mauritania">Mauritania</option>
                                        <option value="mauritius">Mauritius</option>
                                        <option value="mayotte">Mayotte</option>
                                        <option value="morocco">Morocco</option>
                                        <option value="mozambique">Mozambique</option>
                                        <option value="namibia">Namibia</option>
                                        <option value="niger">Niger</option>
                                        <option value="Nigeria" selected>Nigeria</option>
                                        <option value="rwanda">Rwanda</option>
                                        <option value="reunion">Réunion</option>
                                        <option value="saint-helena">Saint Helena</option>
                                        <option value="senegal">Senegal</option>
                                        <option value="seychelles">Seychelles</option>
                                        <option value="sierra-leone">Sierra Leone</option>
                                        <option value="somalia">Somalia</option>
                                        <option value="south-africa">South Africa</option>
                                        <option value="sudan">Sudan</option>
                                        <option value="south-sudan">Sudan</option>
                                        <option value="swaziland">Swaziland</option>
                                        <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                                        <option value="tanzania">Tanzania</option>
                                        <option value="togo">Togo</option>
                                        <option value="tunisia">Tunisia</option>
                                        <option value="uganda">Uganda</option>
                                        <option value="western-sahara">Western Sahara</option>
                                        <option value="zambia">Zambia</option>
                                        <option value="zimbabwe">Zimbabwe</option>

                                </select>
                                
                            </div>

                    </div>

                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Admin About" class="col-md-3 control-label"> About </label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                 <textarea name="p_about" cols="30" rows="10" class="form-control"><?php echo $admin_about ;?></textarea>

                            </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish -->
                    
                    <div class="form-group"><!-- form-group Begin -->  

                        <label for="Profile Picture" class="col-md-3 control-label"> Profile Picture </label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input name="profile_image" type="file" class="form-control form-height-custom">

                            <br>

                            <img src="admin_images/<?php echo $admin_image; ?>" width="70" height="70" alt="<?php echo $admin_image; ?>">

                        </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish --> 


                    <div class="form-group"><!-- form-group Begin -->  

                        <label  class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 
                            
                                <input value="Update Profile" name="update" type="submit" class="btn btn-primary form-control">

                            </div><!--col-md-6 Finish --> 

                    </div><!-- form-group Finish -->

        </form><!-- form Finish --> 

             </div>

        </div>

    </div>

</div>

</body>
</html>

<?php

if(isset($_POST['update'])){

    $firstname = $_POST['firstname'];

    $lastname = $_POST['lastname'];

    $dob = $_POST['dob'];

    $p_email = $_POST['p_email'];

    $p_phone = $_POST['p_phone'];

    $pass = $_POST['password'];

    $p_address = $_POST['p_address'];

    $p_state = $_POST['p_state'];

    $p_country = $_POST['p_country'];

    $p_about = $_POST['p_about'];

    $profile_img = $_FILES['profile_image']['name'];
    $temp_name = $_FILES['profile_image']['tmp_name'];

    move_uploaded_file($temp_name, "admin_images/$profile_img");
    move_uploaded_file($temp_name, "admin_images/$profile_img");


    $update_personal_info = "update user_db set
    first_name='$firstname',  last_name= '$lastname', phone_number='$p_phone', email='$p_email', password='$pass', DOB='$dob',  
    address='$p_address', state='$p_state', country='$p_country', profile_image='$profile_img', about='$p_about'
    where user_id='$admin_id'";

    $run_profile = mysqli_query($conn, $update_personal_info);

    if($run_profile){

        echo "<script> alert('Profile has been updated successfully')</script>";
        echo "<script>window.open('index.php?view_profile', '_self')</script>";  
    }
    
}

?>




<?php } ?> 