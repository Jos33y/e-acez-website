
<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

    <!--TODO:  Translate the code to PHP Codes-->

    <div class="container">

        <h3 style="margin-top: 3%;" class="dash-title"><?php echo $shop_name; ?></h3>

        <div class="boards row text-center">
            <!--row one-->
            <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <i class="fas fa-file-upload"></i>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?insert_product" class="stretched-link">
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
                        <a href="index.php?view_products=1" class="stretched-link">
                            <h3 class="card-title"><span class="prod-no"><?php echo $count_prod; ?></span> View Products</h3>
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
                        <a href="index.php?profile" class="stretched-link">
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
                        <a href="index.php?change_password" class="stretched-link">
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
                    <a href="index.php?share_link" class="stretched-link">
                           <h3 class="card-title"> Share Link</h3>
                        </a>                     
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
                        <a href="index.php?contact_developer" class="stretched-link">
                            <h3 class="card-title"> Talk to Developer</h3>
                        </a>
                    </div>
                </div>
            </div>

              <!--row seven-->
              <div id="col" class="col-md-6 col-lg-4 col-sm-6">
                <div class="card bg-secondary">
                    <div class="card-body">
                    <i class="fas fa-power-off"></i>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?sign_out" class="stretched-link">
                            <h3 class="card-title"> Sign Out</h3>
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <br>

</body>

</html>


<?php
}
?>