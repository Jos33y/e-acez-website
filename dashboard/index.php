<?php 

$pageTitle =  "dashboard";
include("include/header.php");
 ?>

 <?php 
$sql =  "select * from products";
$query = mysqli_query($con, $sql);
$count_prod = mysqli_num_rows($query);

?>
    <!--TODO:  Translate the code to PHP Codes-->

    <div class="container">

        <h3 style="margin-top: 3%;" class="dash-title">Shop Name</h3>

        <div class="boards row text-center">
            <!--row one-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <i class="fas fa-file-upload"></i>
                    </div>
                    <div class="card-footer">
                        <a href="insert-product.php" class="stretched-link">
                            <h3 class="card-title"> Insert Product</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!--row two-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-success">
                    <div class="card-body">
                        <i class="far fa-list-alt"></i>
                    </div>
                    <div class="card-footer">
                        <a href="view.php" class="stretched-link">
                            <h3 class="card-title"><span class="prod-no"><?php echo $count_prod ; ?></span> View Products</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!--row three-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-info">
                    <div class="card-body">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <div class="card-footer">
                        <a href="profile.php" class="stretched-link">
                            <h3 class="card-title"> View Profile</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!--row four-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-warning">
                    <div class="card-body">
                        <i class="fas fa-user-lock"></i>
                    </div>
                    <div class="card-footer">
                        <a href="change-password.php" class="stretched-link">
                            <h3 class="card-title"> Change Password</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!--row five-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-danger">
                    <div class="card-body">
                        <i class="fas fa-share-alt-square"></i>
                    </div>
                    <div class="card-footer">
                        <h3 class="card-title"> Share Link</h3>
                    </div>
                </div>
            </div>

            <!--row six-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="card-footer">
                        <a href="contact-developer.php" class="stretched-link">
                            <h3 class="card-title"> Talk to Developer</h3>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <footer class="text-center footer">
        <!--just date-->
        <p class="copyright"> copyright 2020 <span class="orange"> e-acez.com,</span> All rights reserved.</p>
    </footer>

</body>

</html>