<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
    <link rel="stylesheet" href="styles/new.css">

    <style>
        .columns .sub-t {
            padding-top: 30%;
            padding-bottom: 30%;
            font-size: 35px;
            text-align: center;
            font-weight: 900;
            letter-spacing: 1px;

        }

        @media (max-width: 768px) {
            .columns .sub-t {
                padding-top: 30%;
                padding-bottom: 30%;
                font-size: 30px;
                letter-spacing: 1px;
            }

        }

        @media (max-width: 576px) {
            .columns .sub-t {
                padding-top: 0;
                padding-bottom: 20%;
                font-size: 25px;
                letter-spacing: 1px;
            }

        }


        @media (max-width: 376px) {
            .columns .sub-t {
                padding-top: 0;
                padding-bottom: 20%;
                font-size: 20px;
                letter-spacing: 1px;
            }

        }
    </style>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5d6501adeb1a6b0be6098f3d/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="index.php">
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>

                <div class="button login">
                    <a href="customer/sign-in.php" class="btn btn-sm btn-primary">Log in</a>
                    <a href="customer/register.php#register" class="btn btn-sm btn-sign-up "> Sign up </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="home">

        <img src="images/groupsvg.svg" alt="image" class="home-bg">
        <div class="index text-center">
            <h1>Get your business online</h1>
            <h4> The best place to build, manage and grow your business into perfection</h4>

            <div id="button" class="row">
                <div class="col-6">

                    <a href="customer/register.php" class="btn btn-md btn-primary"> Get Started</a>

                </div>
                <div class="col-6">
                    <a href="customer/sign-in.php" class="btn btn-md btn-login"> Log in</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container columns">
        <h1 class="sub-title">Everything your online business needs to grow in one place </h1>
        <hr class="line" width="50%">

        <div class="row">
            <div class="col-md-6">
                <img src="images/moble-shp.svg" alt="Svg Image" class="svgs">
            </div>
            <div class="col-md-6">

                <h3 class="sub-t"> Own an online showroom</h3>

            </div>
        </div>
    </div>

    <div class="features columns">
        <div class="container">
            <h3 class="feat-title">Features</h3>
            <div class="row feat text-center">
                <div class="col">
                    <i class="fas fa-layer-group"></i>
                    <br>
                    <span class="feat-text">Categorize</span>
                    <br>
                </div>
                <div class="col">
                    <i class="fas fa-edit"></i>
                    <br>
                    <span class="feat-text">Insert and Edit</span>
                    <br>
                </div>
                <div class="col">
                    <i class="fas fa-share-alt"></i>
                    <br>
                    <span class="feat-text">Share Function</span>
                    <br>
                </div>
                <div class="col">
                    <i class="fas fa-comments"></i>
                    <br>
                    <span class="feat-text">Chat Function</span>
                    <br>
                </div>
                <div class="col">
                    <i class="fas fa-user-edit"></i>
                    <br>
                    <span class="feat-text">Personalized Link</span>
                    <br>
                </div>
                <div class="col">
                    <i class="fas fa-link"></i>
                    <br>
                    <span class="feat-text">Social Links</span>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!--Ecommerce Store -->
    <div class="container columns">
        <div class="row">
            <div class="col-md-6">
                <img src="images/e-str.svg" alt="Svg Image" class="svgs">
            </div>
            <div class="col-md-6">

                <h2 class="sub-t"> E-commerce store <span style="color:darkgrey;">coming soon</span> </h2>

            </div>
        </div>
    </div>


    <div class="features text-center columns">
        <h2 class="call-head">Build and grow your business into perfection</h2>

        <a href="customer/register.php" class="btn btn-md btn-call"> Get Started</a>
    </div>

    <!--Qualitites Offered-->
    <div class="container columns">
        <h1 class="sub-title"> Qualities Offered</h1>
        <hr class="line" width="30%">

        <div class="row">
            <div class="col-lg-6">
                <img src="images/star.svg" alt="Svg Image" class="svgs">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 qualities">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="q-title">Sell better</h4>
                                <p class="card-text">
                                    The tools provided are all to ensure you sell better and conveniently. In turn
                                    providing a great purchase experience for both sellers and customers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 qualities">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="q-title">Manage your Business</h4>
                                <p class="card-text">
                                    You can manage your business from your mobile responsive dashboard. No hassle no
                                    stress.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 qualities">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="q-title">Promote Your Business </h4>
                                <p class="card-text">
                                    Promoting your products and services just got better as our product features are all
                                    aimed at enabling you promote your business better. Promote more! Reach more!
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 qualities">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="q-title">Your Business is available every time and everywhere you go</h4>
                                <p class="card-text">
                                    Your business is available everywhere and every time. You are just a click away from
                                    accessing your showroom or store as both boast a 99.9% uptime.
                                    Your business is forever online
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog columns">
        <div class="container">
            <h3 class="blog-head">Blog Post</h3>
            <hr width="12%" class="line">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-head"> Welcome to eacez </h3>
                            <img src="images/welcome.jpg" class="img-fluid" alt="blog-image">

                            <p class="card-text">
                                Hi there! Welcome to e-acez; an online platform that provides Personalized
                                e-commerce
                                stores. <span class="text-left"><a <a href="http://bit.ly/eacez-post-2"
                                        class="btn btn-sm btn-read stretched-link">read
                                        more</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-head"> What is e-acez all about? </h3>
                            <img src="images/qst.jpg" class="img-fluid" alt="blog-image">

                            <p class="card-text">
                                We are giving a quick insight into what E-acez is all about
                                with focus on some of it unique features and service. <span class="text-left"><a
                                        href="http://bit.ly/eacez-post-1"
                                        class="btn btn-sm btn-read stretched-link">read
                                        more</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <div id="contact" class="container columns">
        <h3 class="blog-head">Need Help?</h3>
        <hr class="line" width="15%">
        <div class="row text-center">
            <div class="col-md-5 speakers">
                <img src="images/dev.svg" class="svgs" alt="speak to developer">

                <a href="tel: +2347037344408" class="btn btn-md btn-speak">speak to a developer</a>

            </div>
            <div class="col-2"></div>
            <div class="col-md-5 speakers">
                <img src="images/callagent.svg" class="svgs" alt="speak to agent">

                <a href="tel: +2348110867275" class="btn btn-md btn-speak">Speak to an e-acez agent</a>
            </div>
        </div>
    </div>


    <!--- connect with e-acez -->
    <div class="connect columns">
        <div class="container">
            <div class="title text-center">
                <h2 class="blog-head"> Connect with us </h2>
                <hr class="line" width="20%">
                <div class="row services">
                    <div class="col-12 social padding">
                        <a href="http://fb.me/eacez" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="http://twitter.com/acez_e" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCeBhGK7eX1If0pvV30VK-7w" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php

include('include/footer.php');

?>
</body>

</html>