<?php 

$pageTitle =  "profile";
include("include/header.php");

 ?>
    <!--TODO:  Translate the code to PHP Codes-->

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
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="First Name">
                                    </td>
                                    <td>
                                        <label for="Product Name" class="sr-only">Last Name</label>
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="Last Name">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <label for="Product Name" class="sr-only">Email</label>
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="Email">

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="Product Name" class="sr-only">Phone No</label>
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="Phone No.">

                                    </td>
                                    <td>
                                        <label for="Product Name" class="sr-only">WhatsApp No.</label>
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="WhatsApp No.">

                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <label for="Product Name" class="sr-only">Shop Name</label>
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="Shop Name">
                                    </td>
                                    <td>
                                        <label for="Shop Url" class="sr-only">Shop URL</label>
                                        <input type="text" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="Shop URL">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <label for="Product Name" class="sr-only">Last Name</label>
                                        <input type="file" name="prod-name" class="form-control-md form-control-lg"
                                            id="" placeholder="Last Name">

                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-md btn-info">Save</button>
                        </div>

                        <div class="form-group text-center">
                            <a href="index.php">
                                <p class="back">Back</p>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <footer class="footer text-center">
        <!--just date-->
        <p class="copyright"> copyright 2020 <span class="orange"> e-acez.com,</span> All rights reserved.</p>
    </footer>

</body>

</html>