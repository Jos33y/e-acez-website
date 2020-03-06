<?php  

include("includes/dbcon.php");
include("includes/header.php");
    

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<?php 

    $file = "../styles/style.css";

    if(file_exists($file)){

        $data = file_get_contents($file);
    }


?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / CSS Editor

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> CSS Editor
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->

                    <form action="#" method="post" class="form-horizontal">
                        <div class="form-group">

                            <div class="col-lg-12">
                                <textarea name="newdata" id="" rows="15" class="form-control"><?php echo $data; ?>

                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label col-md-3"></label>

                            <div class="col-md-6">
                            <input type="submit" name="update" value="Update CSS" class="form-control btn btn-primary">
                            </div>
                        </div>
                        
                    </form>

                </div><!--Panel Body Finish to view products -->

</div>
</div>
</div>

<?php

    if(isset($_POST['update'])){

        $newdata = $_POST['newdata'];
        $handle = fopen($file, "w");
        fwrite($handle, $newdata);
        fclose($handle);

        echo "<script>alert('Your CSS has Been Updated')</script>";
        echo "<script>window.open('index.php?edit_css', '_self')</script>";

    }


?>

<?php } ?>