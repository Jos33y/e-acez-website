<?php

if(!isset($_SESSION['email'])){

    echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";
 
 }else{


?>

<?php 

if(isset($_GET['edit_shop_profile'])){

    $edit_id = $_GET['edit_shop_profile'];

    $get_shop = "select * from user_db where user_id = '$edit_id'";

    $run_edit = mysqli_query($conn, $get_shop);

    $row_edit = mysqli_fetch_array($run_edit);

    $customer_id = $row_edit['user_id'];

    $shop_name = $row_edit['business_name'];                                      

    $shop_email = $row_edit['email'];

    $shop_about = $row_edit['about'];


    $get_payment = "select * from dashboard_db where user_id='$customer_id'";

    $run_payment = mysqli_query($conn, $get_payment);

    $row_payment = mysqli_fetch_array($run_payment);

    $shop_plan = $row_payment['plan'];

  $get_logo = "select * from logo";

  $run_logo = mysqli_query($con, $get_logo);

  $row_logo = mysqli_fetch_array($run_logo);

  $logo_id = $row_logo['logo_id'];

  $shop_logo = $row_logo['b_logo'];

                                         

}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Edit Shop Profile </title>
    
    
   
</head>
<body>   
    <div class="row"><!-- row Begin -->

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Edit Shop Profile

                </li>


            </ol>

        </div>

    </div><!--row Finish -->
    <div class="row">

        <div class="col-lg-12 ">
        

            <div class="panel panel-default">

                <div class="panel-heading">
                   
                    <h3 class="panel-title">

                        <i class="fa fa-pencil"></i> Edit Shop Profile

                    </h3>

                </div>

                <div class="panel-body">

                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!--form Begin --> 

                    <div class="form-group">

                        <label for="business_name" class="col-md-3 control-label">Business / Brand Name</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" class="form-control" name="b_name" value="<?php echo $shop_name; ?>" required autofocus>

                            </div>

                        </div>

                    <div class="form-group">

                        <label for="email" class="col-md-3 control-label">Email:</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="email" name="email" class="form-control" value="<?php echo $shop_email; ?>"required autofocus>

                            </div>

                    </div>

                    <div class="form-group">

                        <label for="About" class="col-md-3 control-label">About</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                            <textarea name="b_about" cols="30" rows="10" class="form-control"><?php echo $shop_about; ?></textarea>
                            
                            </div>

                    </div>

                    <div class="form-group">

                        <label for="Rental Plan" class="col-md-3 control-label">Rental Plan</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" class="form-control" value="<?php echo $shop_plan; ?>" readonly >

                            </div>

                    </div>

                        <div class="form-group"><!-- form-group Begin -->  

                            <label for="Shop Logo" class="col-md-3 control-label"> Business Logo </label>


                        <div class="col-md-6"><!--col-md-6 Begin --> 

                            <input name="b_logo" type="file" class="form-control form-height-custom" required>

                        <br>

                            <img src="../images/<?php echo $shop_logo; ?>" width="70" height="70" alt="<?php echo $shop_logo; ?>">

                        </div><!--col-md-6 Finish --> 

                        </div><!-- form-group Finish --> 


                    <div class="form-group"><!-- form-group Begin -->  

                        <label  class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 
                            
                                <input value="Update Shop Profile" name="update" type="submit" class="btn btn-primary form-control">

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

    $b_name = $_POST['b_name'];

    $email = $_POST['email'];

    $b_about = $_POST['b_about'];

    $shop_logo = $_FILES['b_logo']['name'];
    $temp_name = $_FILES['b_logo']['tmp_name'];

    move_uploaded_file($temp_name, "../images/$shop_logo");

    if($logo_id == 0){

    $insert_logo = "insert into logo (logo_id, b_logo, b_name) values ('$logo_id', '$shop_logo', '$b_name')";

    $run_shop_logo = mysqli_query($con, $insert_logo);
    }
        else{
            $update_shop_logo = "update logo set b_logo='$shop_logo', b_name='$b_name' where logo_id ='$logo_id'";

            $run_shop_logo = mysqli_query($con, $update_shop_logo);
        }

     $update_shop_info = "update user_db set 
     business_name='$b_name', email='$email', about='$b_about' where user_id='$customer_id'";

    $run_shop_info = mysqli_query($conn, $update_shop_info);

    

    if($run_shop_logo){
        if($run_shop_info){

        echo "<script> alert('Business Info  has been updated successfully')</script>";
        echo "<script>window.open('index.php?view_shop_profile', '_self')</script>"; 
        }  
    }
    
}

?>




<?php } ?> 