<?php

if(!isset($_SESSION['email'])){

    echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";
 
 }else{


?>

<?php

    $get_social = "select * from social_link";

    $run_edit = mysqli_query($con, $get_social);

    $row_edit = mysqli_fetch_array($run_edit);

    $social_id = $row_edit['social_id'];

    $fb = $row_edit['facebook'];                                      

    $tweet = $row_edit['twitter'];

    $insta = $row_edit['instagram'];

    $whatsapp = $row_edit['whatsapp'];

    $email = $row_edit['email'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> View Social Media Links </title>
    
    
   
</head>
<body>   
    <div class="row"><!-- row Begin -->

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Social Media Links

                </li>


            </ol>

        </div>

    </div><!--row Finish -->
    <div class="row">

        <div class="col-lg-12 ">
        

            <div class="panel panel-default">

                <div class="panel-heading">
                   
                    <h3 class="panel-title">

                        <i class="fa fa-tags fa-fw"></i> View Social Media Links

                    </h3>

                </div>

                <div class="panel-body">

                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!--form Begin --> 

                    <div class="form-group">

                        <label for="Facebook" class="col-md-3 control-label">Facebook:</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" class="form-control" name="fb" value="<?php echo $fb; ?>" readonly>

                            </div>

                        </div>

                    <div class="form-group">

                        <label for="Twitter" class="col-md-3 control-label">Twitter</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" name="tweet" class="form-control" value="<?php echo $tweet; ?>" readonly>

                            </div>

                    </div>
                     <div class="form-group">

                        <label for="instagram" class="col-md-3 control-label">Instagram</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" name="insta" class="form-control" value="<?php echo $insta; ?>" readonly>

                            </div>

                    </div>

                    <div class="form-group">

                        <label for="whatsapp" class="col-md-3 control-label">Whatsapp</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" name="whatsapp" class="form-control" value="<?php echo $whatsapp; ?>" readonly>

                            </div>

                    </div>

                    <div class="form-group">

                        <label for="Email" class="col-md-3 control-label">Email</label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 

                                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" readonly>

                            </div>

                    </div>

                      <div class="form-group"><!-- form-group Begin -->  

                        <label  class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!--col-md-6 Begin --> 
                            
                                <input value="Edit" name="edit" type="submit" class="btn btn-primary form-control">

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

if(isset($_POST['edit'])){

    echo "<script>window.open('index.php?edit_social', '_self')</script>"; 
}  

    ?>

<?php } ?> 
