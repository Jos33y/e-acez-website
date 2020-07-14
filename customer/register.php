<?php 
        include('include/dbconn.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="styles/eacez.css">

            <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d6501adeb1a6b0be6098f3d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>

<body>

    <!-- Registration Page -->
    <!--navigation bar -->
    <nav class="navbar navbar-dark navbar-expand-md  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="../index.php">
                <img src="images/eiconweb.png" class="logo">
                <span class="logo-head">e-acez</span>
            </a>


            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon my-toggler "></span>
            </button>
            <div class="collapse navbar-collapse"></div>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact Us</a>
                    </li>
                </ul>

                <div class="button login">
                    <a href="sign-in.php" class="btn btn-sm btn-primary">Log in</a>
                    <a href="#register" class="btn btn-sm btn-sign-up "> Sign up </a>
                </div>
            </div>
        </div>
    </nav>


    <!--hero section -->
    <div class="land-home">

        <div class="row container">
            <div class="col-sm-6">
                <div class="hero-text">
                    <h1>Get Your Showroom</h1>
                    <p>Help customers find you easily in just three steps...</p>
                    <a href="#register" class="btn btn-md btn-hero">Get Started</a>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="hero-svg">
                    <img src="images/register-hero.svg" alt="showroom image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- three easy steps -->
    <div class="container-lg">
        <div class="row sub-hero">
            <div  id="#howitworks" class="col-sm-6">
                <h1> <span class="number">1</span> <span class="h1"> Register your showroom<span /></h1>
                <p>
                    You can easily register for a showroom by filling the form in the registration
                    section.<br>
                    Your shop url is important and unique, it should be a simple name that can be used to
                    identify
                    your store and no additional characters should be added just alphabets.
                    <b> Example:</b>
                    <br><span class="example">www.e-acez.com/</span><span class="example-2">shopname</span>
                </p>
            </div>
            <div class="col-sm-6">
                <div class="sub-hero">
                    <img src="images/fill-forms.svg" class="img-fluid">
                </div>
            </div>
        </div>

        <!--second row-->
        <div class="row sub-hero">
            <div class="col-sm-6">
                <h1> <span class="number">2</span> <span class="h1"> Make payment<span /></h1>
                <p>
                    Kindly make your payment to activate your showroom using the most secured
                    payment option(paystack).
                    <br> The list of payment methods available are:
                    <ul>
                        <li>Pay with Card</li>
                        <li>Pay with Bank</li>
                        <li>Pay with Transfer</li>
                        <li>Pay with USSD</li>
                    </ul>

                </p>
            </div>
            <div class="col-sm-6">
                <div class="sub-hero">
                    <img src="images/credit-card.svg" class="img-fluid">
                </div>
            </div>
        </div>

        <!--- third row-->

        <div class="row sub-hero">
            <div class="col-sm-6">
                <h1> <span class="number">3</span> <span class="h1"> Log in<span /></h1>

                <p>
                    After making payment you can login to your dashboard to start uploading your product online.
                    <br>You can do the following and more on your dashboard.
                    <ul>
                        <li>Insert products</li>
                        <li>View products</li>
                        <li>Edit your profile</li>
                        <li>Share your showroom link</li>
                    </ul>

                </p>
            </div>
            <div class="col-sm-6">
                <div class="sub-hero">
                    <img src="images/register-man.svg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>



    <!--registration section-->

    <div id="register" class="container-fluid-xl">
        <div class="row sub-hero">
            <div class="col-md-12">
                <h3 class="sign-in-head" style="color: #ff5500;"> Register</h3>
                <hr width="50%" class="reg-line">
            </div>
            <div class="col-md-5 register-svg d-none d-xl-block">
                <img src="images/profile.svg" class="img-fluid">
            </div>
            <div class="col-md-12 col-xl-7">
                <br>
                <form method="POST" class="register" id="paymentForm">


                    <div class="row">
                        <div class="col-sm-6">
                            <label for="first-name">First Name</label>
                            <input type="text" name="firstname" id="firstName" class="form-control" maxlength="50"
                                placeholder="Enter First Name" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="last-name">Last Name</label>
                            <input type="text" name="lastname" id="lastName" class="form-control" maxlength="50"
                                placeholder="Enter Last Name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="email">Email </label>
                            <input type="email" name="email" id="email" class="form-control" maxlength="100"
                                placeholder="Enter Email" required>
                            <span id="emailcheck"></span>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="phone no">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" maxlength="15"
                                placeholder="Enter Phone Number" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="whatsapp no">Whatsapp Number</label>
                            <input type="tel" name="whatsappno" id="whatsAppNo" class="form-control" maxlength="15"
                                placeholder="WhatsApp Number for Business" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="shop-url">Store URL</label>
                            <input type="text" name="shopUrl" id="shopUrl" class="form-control" maxlength="50"
                                placeholder="Store URL without spacing" required>
                            <span id="availability"></span>
                        </div>
                        <div class="col-sm-6">
                            <label for="shop-name">Brand Name</label>
                            <input type="text" name="shopname" id="shopName" class="form-control" maxlength="50"
                                placeholder="Enter Brand Name" required>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" maxlength="20"
                                placeholder="Enter desired Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="code">CODE</label>
                            <input type="text" name="code" id="code" class="form-control"
                                placeholder="Enter discount code">
                        </div>
                        <div class="col-sm-6">
                            <label for="plan">Select a plan</label><br>
                            <select name="amount" id="amount" class="form-control">
                                <option value="nil" disabled>select a plan</option>
                                <option value="500" id="plan">One Month -- &#8358;500</option>
                                <option value="null" disabled>Other plans coming soon!!!</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-md btn-success" type="submit" onclick="payWithPaystack()">
                                Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--footer-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <a class="navbar-brand ml-3" href="../index.php" style="margin-top:20px;">
                        <img src="images/eiconweb.png" class="footer-logo">
                        <span class="footer-head">e-acez</span>
                    </a>
                </div>

                <div class="col-sm-3 col-md-3">
                    <h5> Navigations</h5>
                    <hr class="light">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>


                </div>

                <div class="col-sm-3 col-md-3">
                    <h5> Join e-acez </h5>
                    <hr class="light">
                    <ul>
                        <li><a href="sign-in.php">Login</a></li>
                        <li><a href="register.php#register">Create acoount</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>

                </div>

                <div class="col-sm-3 col-md-3">
                    <h5> Contact </h5>
                    <hr class="light">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <th><i class="fas fa-phone-alt"></i></th>
                                <td><a href="tel: +2348110867275" style="text-decoration: none; ">+2348110867275</a>
                                </td>
                                <td><a href="tel: +2347037344408" style="text-decoration: none;">+2347037344408</a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-envelope"></i></th>
                                <td colspan="2"><a href="mailto: info@e-acez.com"
                                        style="text-decoration: none;">info@e-acez.com</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="col-md-12 text-center">
                    <hr class="line" width="100%">
                    <h6> images from <a href="https://www.pikrepo.com/">nicepik</a></h6>
                    <h6>Copyright &copy; 2020 e-acez </h6>

                </div>
            </div>
        </div>
    </footer>

    <!--paystack script-->
    <script src="https://js.paystack.co/v1/inline.js"></script>
</body>

</html>
<script>
    $(document).ready(function () {
        $('#shopUrl').blur(function () {
            var shopUrl = $(this).val();
            $.ajax({
                url: "check.php",
                method: "POST",
                data: {
                    shop_url: shopUrl
                },
                dataType: "text",
                success: function (html) {
                    $('#availability').html(html)
                }
            });
        });
    });

    $(document).ready(function () {
        $('#email').blur(function () {
            var email = $(this).val();
            $.ajax({
                url: "check.php",
                method: "POST",
                data: {
                    email: email
                },
                dataType: "text",
                success: function (html) {
                    $('#emailcheck').html(html)
                }
            });
        });
    });
</script>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_test_6915e45b1bb5261b2fd67ea798081b572cb74753', // Replace with your public key
            email: document.getElementById("email").value,
            amount: document.getElementById("amount").value * 100,
            currency: 'NGN',
            firstname: document.getElementById("firstName").value,
            lastname: document.getElementById("lastName").value,
            ref: '' + Math.floor((Math.random() * 1000000000) +
                1
            ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function () {
                alert('Window closed.');
            },
            callback: function (response) {
                var firstName = document.getElementById("firstName").value;
                var lastName = document.getElementById("lastName").value;
                var email = document.getElementById("email").value;
                var phoneNumber = document.getElementById("phone").value;
                var whatsAppNo = document.getElementById("whatsAppNo").value;
                var shopName = document.getElementById("shopName").value;
                var shopUrl = document.getElementById("shopUrl").value;
                var password = document.getElementById("password").value;
                var code = document.getElementById("code").value;
                var amount = document.getElementById("amount").value;


                let message = 'Payment complete! Reference: ' + response.reference;
                alert(message);
                let queryString = "?reference=" + response.reference + "&fName=" + firstName + "&lName=" +
                    lastName +
                    "&email=" + email + "&pno=" + phoneNumber + "&wno=" + whatsAppNo + "&sname=" +
                    shopName +
                    "&surl=" + shopUrl + "&pwd=" + password + "&code=" + code + "&amt=" + amount;
                window.location.href = "https://e-acez.com/customer/verify_transaction.php" +
                    queryString;

                // window.location = "http://localhost/e-acez-4.0/verify_transaction.php?reference=" + response.reference; 
            }
        });
        handler.openIframe();
    }
</script>