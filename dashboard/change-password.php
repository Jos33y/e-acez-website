<?php 

$pageTitle =  "change password";
include('header.php');

 ?>
    <!--TODO:  Translate the code to PHP Codes-->

    <div class="container">


        <div class="pages row justify-content-center">
            <div class="col-md-4"></div>
            <!--row one-->
            <div class="col-md-4">
                <h3 class="dash-title"> <i class="fas fa-user-lock"></i> Change Password</h3>
                <form method="post" class="form">

                    <div class="form-group">
                        <label for="old-password" class="sr-only">Old Password</label>
                        <input type="password" name="oldpass" class="form-control-md form-control-lg" id=""
                            placeholder="Old Password">
                    </div>

                    <div class="form-group">
                        <label for="new-password" class="sr-only">New Password</label>
                        <input type="password" name="newpass" class="form-control-md form-control-lg" id=""
                            placeholder="New Password">
                    </div>

                    <div class="form-group">
                        <label for="new-password-2" class="sr-only">Retype New Password</label>
                        <input type="password" name="newpasstwo" class="form-control-md form-control-lg" id=""
                            placeholder="Retype New Password">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-md btn-warning">change</button>
                    </div>

                    <div class="form-group text-center">
                        <a href="index.php">
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