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
</head>

<body>

    <!-- Registration Page -->
    <!--navigation bar -->
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
                    <a href="sign-in.php" class="btn btn-sm btn-primary">Log in</a>
                    <a href="register.php" class="btn btn-sm btn-sign-up "> Sign up </a>
                </div>
            </div>
        </div>
    </nav>


    <!--hero section -->
    <div class="land-home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-text">
                        <h1>Get Your Showroom</h1>
                        <p>Help your customers find you in just three easy steps...</p>
                        <a class="btn btn-md btn-hero">Get Started</a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-svg">
                        <img src="images/hero-svg.svg" alt="showroom image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- three easy steps -->
    <div class="container-fluid">
        <div class="row sub-hero">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <h1> <span class="number">1</span> <span class="h1"> Register your showroom<span /></h1>
                        <p>
                            You can easily register for a showroom by filling the form in the registration
                            section.
                            your shop url is important and unique, it should be a simple name that can be used to
                            identify
                            your store and no additional characters should be mixed just alphabet.
                            this is an example:<span class="example">www.e-acez.com/</span><span
                                class="example-2">shopname</span>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="sub-hero">
                            <svg xmlns="http://www.w3.org/2000/svg" width="484.373" height="304.613"
                                viewBox="0 0 484.373 304.613">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #a0616a;
                                        }

                                        .cls-2 {
                                            fill: #575a89;
                                        }

                                        .cls-3 {
                                            opacity: 0.1;
                                        }

                                        .cls-4 {
                                            fill: #3f3d56;
                                        }

                                        .cls-5 {
                                            fill: #0b168f;
                                        }

                                        .cls-6 {
                                            fill: #2f2e41;
                                        }

                                        .cls-7 {
                                            fill: #d0cde1;
                                        }

                                        .cls-8 {
                                            fill: #f50;
                                        }
                                    </style>
                                </defs>
                                <g id="fill-form" transform="translate(-0.001 0)">
                                    <path id="Path_66" data-name="Path 66" class="cls-1"
                                        d="M467.953,398.128s39.715,1.914,42.107,15.79-46.414,1.435-46.414,1.435Z"
                                        transform="translate(-286.704 -270.642)" />
                                    <path id="Path_67" data-name="Path 67" class="cls-2"
                                        d="M338.518,306.128s6.7,1.914,11.962,13.4,15.79,22.011,15.79,22.011l42.586,8.134L401.679,371.2l-40.672-5.263-25.36-14.355Z"
                                        transform="translate(-219.951 -222.663)" />
                                    <path id="Path_68" data-name="Path 68" class="cls-3"
                                        d="M338.518,306.128s6.7,1.914,11.962,13.4,15.79,22.011,15.79,22.011l42.586,8.134L401.679,371.2l-40.672-5.263-25.36-14.355Z"
                                        transform="translate(-219.951 -222.663)" />
                                    <rect id="Rectangle_32" data-name="Rectangle 32" class="cls-4" width="50.241"
                                        height="0.957" transform="translate(394.416 44.468)" />
                                    <rect id="Rectangle_33" data-name="Rectangle 33" class="cls-4" width="159.337"
                                        height="0.957" transform="translate(195.843 44.468)" />
                                    <rect id="Rectangle_34" data-name="Rectangle 34" class="cls-5" width="377.528"
                                        height="144.025" transform="translate(14.495 159.784)" />
                                    <path id="Path_69" data-name="Path 69" class="cls-1"
                                        d="M115.793,115.918l4.306,27.274,29.666,1.435-3.349-40.193Z"
                                        transform="translate(-60.387 -54.463)" />
                                    <path id="Path_70" data-name="Path 70" class="cls-6"
                                        d="M142.582,630.7l-1.435,60.29h44.978l6.7-23.925,5.263,23.925h46.892s.957-68.9-4.306-69.381S142.582,630.7,142.582,630.7Z"
                                        transform="translate(-118.517 -387.18)" />
                                    <circle id="Ellipse_15" data-name="Ellipse 15" class="cls-1" cx="25.838" cy="25.838"
                                        r="25.838" transform="translate(39.137 16.955)" />
                                    <path id="Path_71" data-name="Path 71" class="cls-2"
                                        d="M133.953,457.382l13.4-66.032-17.7-87.564,40.774-15.3,19.994-2.4,10.051-1.876,7.174,1.876s28.709,7.177,30.145,12.441-5.742,48.327-5.742,48.327l-6.7,35.408L240.178,445.9s-61.725,21.054-105.268,11.484Z"
                                        transform="translate(-112.52 -211.23)" />
                                    <path id="Path_72" data-name="Path 72" class="cls-3"
                                        d="M82.293,243.934v17.7l56.458.077L85.164,255.9Z"
                                        transform="translate(-42.916 -127.214)" />
                                    <path id="Path_73" data-name="Path 73" class="cls-3"
                                        d="M72.159,335.071l70.881-10.137L72.159,345.01Z"
                                        transform="translate(-37.631 -169.456)" />
                                    <path id="Path_74" data-name="Path 74" class="cls-3"
                                        d="M299.011,248.934l-7.6,27.382,12.862-26.478Z"
                                        transform="translate(-151.974 -129.821)" />
                                    <path id="Path_75" data-name="Path 75" class="cls-6"
                                        d="M212.258,148.574l4.751-1.9s-9.935-10.938-23.757-9.986l3.888-4.28s-9.5-3.8-18.142,6.182c-4.541,5.25-9.8,11.42-13.071,18.372h-5.088l2.124,4.676-7.433,4.676,7.629-.84a26.131,26.131,0,0,0-.207,7.756,10.036,10.036,0,0,0,3.675,6.565h0s5.893-12.2,5.893-14.1v4.756s4.751-4.28,4.751-7.133l2.592,3.329,1.3-5.231,15.982,5.231-2.592-4.28,9.935,1.427-3.888-5.231s11.231,6.182,11.663,11.413,3.719,10.188,3.719,10.188S224.785,155.707,212.258,148.574Z"
                                        transform="translate(-126.018 -131.694)" />
                                    <rect id="Rectangle_35" data-name="Rectangle 35" class="cls-7" width="183.74"
                                        height="191.874" transform="translate(111.629 112.414)" />
                                    <path id="Path_83" data-name="Path 83" class="cls-8" d="M0,0H135.891V19.14H0Z"
                                        transform="translate(130.768 154.521)" />
                                    <path id="Path_84" data-name="Path 84" class="cls-5" d="M0,0H89V9.57H0Z"
                                        transform="translate(154.129 205.241)" />
                                    <path id="Path_85" data-name="Path 85" class="cls-5" d="M0,0H89V9.57H0Z"
                                        transform="translate(154.301 221.988)" />
                                    <rect id="Rectangle_39" data-name="Rectangle 39" class="cls-5" width="44.498"
                                        height="9.57" transform="translate(154.473 238.735)" />
                                    <rect id="Rectangle_40" data-name="Rectangle 40" class="cls-5" width="20.575"
                                        height="9.57" transform="translate(248.477 287.063)" />
                                    <path id="Path_76" data-name="Path 76" class="cls-1"
                                        d="M299.647,414.865s41.629-6.22,47.849,2.871-44.021,13.876-44.021,13.876Z"
                                        transform="translate(-201.177 -278.287)" />
                                    <path id="Path_77" data-name="Path 77" class="cls-2"
                                        d="M115.765,324.128h-3a4.888,4.888,0,0,0-3.328,1.3c-2.846,2.643-8.864,9.462-11.378,21.672-3.349,16.269-9.091,47.849,3.828,50.241s97.612-9.091,97.612-9.091l-6.22-22.011-61.247.478s.957-10.527-.957-17.226S115.765,324.128,115.765,324.128Z"
                                        transform="translate(-93.853 -232.05)" />
                                    <path id="Path_81" data-name="Path 81" class="cls-8"
                                        d="M19.618,0A19.618,19.618,0,1,1,0,19.618,19.618,19.618,0,0,1,19.618,0Z"
                                        transform="translate(176.225 25.329)" />
                                    <path id="Path_82" data-name="Path 82" class="cls-5"
                                        d="M19.618,0A19.618,19.618,0,1,1,0,19.618,19.618,19.618,0,0,1,19.618,0Z"
                                        transform="translate(265.702 25.329)" />
                                    <path id="Path_78" data-name="Path 78" class="cls-4"
                                        d="M855.244,223.821a20.1,20.1,0,1,1,20.1-20.1A20.1,20.1,0,0,1,855.244,223.821Zm0-39.236a19.14,19.14,0,1,0,19.14,19.14A19.14,19.14,0,0,0,855.244,184.585Z"
                                        transform="translate(-480.445 -158.778)" />
                                    <path id="Path_79" data-name="Path 79" class="cls-4"
                                        d="M1042.247,223.821a20.1,20.1,0,1,1,20.1-20.1A20.1,20.1,0,0,1,1042.247,223.821Zm0-39.236a19.14,19.14,0,1,0,19.14,19.14A19.14,19.14,0,0,0,1042.247,184.585Z"
                                        transform="translate(-577.969 -158.778)" />
                                    <path id="Path_80" data-name="Path 80" class="cls-4"
                                        d="M394.375,75.7l-8.5-11.335,3.062-2.3,5.853,7.8L421.7,42.959l2.706,2.706Z"
                                        transform="translate(-201.236 -22.403)" />
                                    <rect id="Rectangle_41" data-name="Rectangle 41" class="cls-4" width="390.732"
                                        height="1.331" transform="translate(7.893 303.282)" />
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <h1> <span class="number">2</span> <span class="h1"> Make payment<span /></h1>
                        <p>
                            Kindly make a simple payment to activate your showroom using the best and most secured
                            payment option(paystack).
                            The list of methods of payment are available:
                            <ul>
                                <li>Pay with debit card</li>
                                <li>Pay with ussd</li>
                                <li>Pay with transfer</li>
                                <li>Pay with bank/account number</li>
                            </ul>

                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="sub-hero">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="543.878" height="404.51" viewBox="0 0 543.878 404.51">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                        }

                                        .cls-3 {
                                            fill: #f50;
                                        }

                                        .cls-4 {
                                            fill: #bdbdbd;
                                        }

                                        .cls-5 {
                                            fill: #e0e0e0;
                                        }

                                        .cls-6 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-7 {
                                            fill: #6c63ff;
                                            opacity: 0.1;
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="0.5" y1="1.198" x2="0.5" y2="-0.168"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="gray" stop-opacity="0.251" />
                                        <stop offset="0.535" stop-color="gray" stop-opacity="0.122" />
                                        <stop offset="1" stop-color="gray" stop-opacity="0.102" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="0.5" y1="1" x2="0.5" y2="0"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <g id="credit-card" transform="translate(6.915 6.911)">
                                    <rect id="Rectangle_10" data-name="Rectangle 10" class="cls-1" width="429.525"
                                        height="262.33" rx="27.5"
                                        transform="translate(-6.915 120.542) rotate(-17.261)" />
                                    <rect id="Rectangle_11" data-name="Rectangle 11" class="cls-2" width="420.762"
                                        height="253.046" rx="27.5"
                                        transform="translate(-0.51 121.409) rotate(-17.261)" />
                                    <rect id="Rectangle_12" data-name="Rectangle 12" class="cls-3" width="420.762"
                                        height="36.289" transform="translate(9.385 153.254) rotate(-17.261)" />
                                    <rect id="Rectangle_13" data-name="Rectangle 13" class="cls-4" width="106.907"
                                        height="15.693" transform="translate(92.452 308.204) rotate(-17.261)" />
                                    <rect id="Rectangle_14" data-name="Rectangle 14" class="cls-5" width="185.371"
                                        height="15.693" transform="translate(84.594 282.915) rotate(-17.261)" />
                                    <rect id="Rectangle_15" data-name="Rectangle 15" class="cls-6" width="431.947"
                                        height="262.588" rx="27.5" transform="translate(105.016 135.01)" />
                                    <rect id="Rectangle_16" data-name="Rectangle 16" class="cls-2" width="420.762"
                                        height="253.046" rx="27.5" transform="translate(109.92 137.688)" />
                                    <rect id="Rectangle_17" data-name="Rectangle 17" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(209.98 260.53)" />
                                    <rect id="Rectangle_18" data-name="Rectangle 18" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(225.673 260.53)" />
                                    <rect id="Rectangle_19" data-name="Rectangle 19" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(241.365 260.53)" />
                                    <rect id="Rectangle_20" data-name="Rectangle 20" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(268.828 260.53)" />
                                    <rect id="Rectangle_21" data-name="Rectangle 21" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(284.52 260.53)" />
                                    <rect id="Rectangle_22" data-name="Rectangle 22" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(300.213 260.53)" />
                                    <rect id="Rectangle_23" data-name="Rectangle 23" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(327.675 260.53)" />
                                    <rect id="Rectangle_24" data-name="Rectangle 24" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(343.368 260.53)" />
                                    <rect id="Rectangle_25" data-name="Rectangle 25" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(359.061 260.53)" />
                                    <rect id="Rectangle_26" data-name="Rectangle 26" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(386.523 260.53)" />
                                    <rect id="Rectangle_27" data-name="Rectangle 27" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(402.216 260.53)" />
                                    <rect id="Rectangle_28" data-name="Rectangle 28" class="cls-5" width="12.26"
                                        height="34.818" transform="translate(417.908 260.53)" />
                                    <rect id="Rectangle_29" data-name="Rectangle 29" class="cls-3" width="73.098"
                                        height="40.086" transform="translate(136.69 203.982)" />
                                    <rect id="Rectangle_30" data-name="Rectangle 30" class="cls-7" width="44.802"
                                        height="44.802" transform="translate(420.831 335.441)" />
                                    <rect id="Rectangle_31" data-name="Rectangle 31" class="cls-7" width="44.802"
                                        height="44.802" transform="translate(443.232 335.441)" />
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!--- second row-->

        <div class="row sub-hero">
            <div class="col-md-6 mx-auto">
                <div class="row">
                    <div class="col-sm-6">
                        <h1> <span class="number">3</span> <span class="h1"> log in<span /></h1>

                        <p>
                            After making payment you can login to your dashboard instantly to start using your showroom.
                            You can do the following and more on your dashboard.
                            <ul>
                                <li>Insert products</li>
                                <li>View products</li>
                                <li>Edit your profile</li>
                                <li>Share your shop link</li>
                                <li>Renew your subscription</li>
                            </ul>

                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="sub-hero">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="903.822" height="748.216" viewBox="0 0 903.822 748.216">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #3f3d56;
                                        }

                                        .cls-2 {
                                            fill: #f2f2f2;
                                        }

                                        .cls-3 {
                                            opacity: 0.7;
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-5 {
                                            fill: #6c63ff;
                                        }

                                        .cls-6 {
                                            opacity: 0.1;
                                        }

                                        .cls-7 {
                                            fill: #eee;
                                        }

                                        .cls-10,
                                        .cls-8 {
                                            fill: none;
                                            stroke-miterlimit: 10;
                                        }

                                        .cls-8 {
                                            stroke: #e0e0e0;
                                            stroke-width: 8px;
                                        }

                                        .cls-9 {
                                            fill: #39447a;
                                        }

                                        .cls-10 {
                                            stroke: #bdbdbd;
                                            stroke-width: 5px;
                                        }

                                        .cls-11 {
                                            fill: #b84733;
                                        }

                                        .cls-12 {
                                            fill: #535461;
                                        }

                                        .cls-13 {
                                            fill: #f77f44;
                                        }

                                        .cls-14 {
                                            opacity: 0.05;
                                        }

                                        .cls-15 {
                                            fill: #fcbea2;
                                        }

                                        .cls-16 {
                                            fill: #333;
                                        }

                                        .cls-17 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-18 {
                                            fill: #e0e0e0;
                                        }

                                        .cls-19 {
                                            fill: #3e3f49;
                                        }

                                        .cls-20 {
                                            fill: #fefefe;
                                            font-size: 26px;
                                            font-family: SegoeUI-BoldItalic, Segoe UI;
                                            font-weight: 700;
                                            font-style: italic;
                                            letter-spacing: 0.1em;
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="gray" stop-opacity="0.251" />
                                        <stop offset="0.535" stop-color="gray" stop-opacity="0.122" />
                                        <stop offset="1" stop-color="gray" stop-opacity="0.102" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-3" x1="0.5" y1="1" x2="0.5" y2="0"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <g id="register-man" transform="translate(0 0)">
                                    <path id="Path_1" data-name="Path 1" class="cls-1"
                                        d="M287.076,677.787c0,45.239-26.895,61.036-60.068,61.036-.772,0-1.541-.008-2.3-.029-1.536-.033-3.06-.1-4.563-.209-29.942-2.117-53.2-18.728-53.2-60.8,0-43.536,55.626-98.473,59.822-102.551l.008,0c.159-.159.242-.238.242-.238S287.076,632.544,287.076,677.787Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_2" data-name="Path 2" class="cls-2"
                                        d="M224.817,731.9l21.972-30.7-22.027,34.067-.058,3.524c-1.536-.033-3.06-.1-4.563-.209l2.367-45.26-.017-.351.042-.067.221-4.275-22.081-34.154,22.148,30.948.054.906,1.791-34.2-18.9-35.29L224.9,646.129l1.862-70.893.008-.242v.238l-.309,55.906,18.816-22.164-18.9,26.978-.5,30.619,17.572-29.383-17.647,33.891L225.53,688.1l25.508-40.9-25.6,46.842Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <g id="Group_1" data-name="Group 1" class="cls-3">
                                        <path id="Path_3" data-name="Path 3" class="cls-4"
                                            d="M983.788,360.7V349.8H929.312v50.39a10.623,10.623,0,0,0,10.623,10.623h33.23a10.623,10.623,0,0,0,10.623-10.623V389.025a14.164,14.164,0,1,0,0-28.327Zm0,22.88V366.145a8.716,8.716,0,0,1,0,17.432Z"
                                            transform="translate(-149.803 -75.892)" />
                                    </g>
                                    <path id="Path_4" data-name="Path 4" class="cls-5"
                                        d="M982.035,362.4a12.932,12.932,0,1,0,12.932,12.932A12.932,12.932,0,0,0,982.035,362.4Zm0,20.89a7.958,7.958,0,1,1,7.958-7.958,7.958,7.958,0,0,1-7.958,7.958Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_5" data-name="Path 5" class="cls-6"
                                        d="M982.035,362.4a12.932,12.932,0,1,0,12.932,12.932A12.932,12.932,0,0,0,982.035,362.4Zm0,20.89a7.958,7.958,0,1,1,7.958-7.958,7.958,7.958,0,0,1-7.958,7.958Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_6" data-name="Path 6" class="cls-5"
                                        d="M782.493,276.563h49.739V322.52a9.75,9.75,0,0,1-9.75,9.75H792.243a9.75,9.75,0,0,1-9.75-9.75Z" />
                                    <path id="Path_7" data-name="Path 7" class="cls-6"
                                        d="M973.082,352.455v46.008a9.7,9.7,0,0,1-9.7,9.7h4.974a9.7,9.7,0,0,0,9.7-9.7V352.455Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_8" data-name="Path 8" class="cls-7"
                                        d="M942.112,315.373a2.9,2.9,0,0,0-2.2,1.115c-.653,1.183.53,2.516,1.609,3.329,1.993,1.5,4.094,2.976,5.449,5.072s1.781,5.02.3,7.029c-1.934,2.622-6.548,3.187-6.994,6.414-.287,2.072,1.5,3.84,3.32,4.88,4.48,2.566,10.256,3.251,13.5,7.267,1.342-2.761,4.345-4.356,7.338-5.038s6.1-.631,9.138-1.093a3.159,3.159,0,0,0,2.521-1.337c.848-1.722-1.569-3.786-.735-5.515.635-1.315,2.5-1.213,3.863-1.74,2.218-.858,3.133-3.713,2.5-6.007s-2.408-4.086-4.278-5.556c-5.04-3.961-11.1-6.29-17.231-7.965-2.851-.779-6.2-2-9.159-2.119C948.2,314,944.941,314.889,942.112,315.373Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <line id="Line_1" data-name="Line 1" class="cls-8" x1="104" y2="324"
                                        transform="translate(339.209 344.016)" />
                                    <g id="Group_2" data-name="Group 2" class="cls-3">
                                        <path id="Path_9" data-name="Path 9" class="cls-4"
                                            d="M673.591,780.4c-12.793.742-24.189,11.459-24.189,11.459l-5.511-13.67-.45.146c2.692-11.785,57.466-254.719,2.634-275.663-42.133-16.093-86.824-36.008-121.838-35.26V410.022h49.089v-2.045h38.862c7.45-5.321-3.375-8.98-15.473-11.267a11.057,11.057,0,0,0,1.3-1.829l62.243-111.671s14.318-23.522,5.113-34.771-22.5,28.635-22.5,28.635l-51.134,73.633s-51.609-53.79-84.439-80.541a57.468,57.468,0,0,0-12.221-9.237c-5.993-4.055-10.529-6.155-12.766-5.332-.023.008-.041.022-.064.031a57.287,57.287,0,0,0-15.276-2.077h-4.091V245.16a65.608,65.608,0,0,0,40.526-38.4,73.7,73.7,0,0,0,5.84-64.168,4.258,4.258,0,0,0,1.722-.6c1.852-1.192,2.035-3.8,1.857-6A45.555,45.555,0,0,0,489.7,100.38c-5.182-2.833-11.116-4.786-14.937-9.289-3.283-3.869-4.663-9.281-8.636-12.438-4.72-3.751-11.538-3.106-17.33-1.432a63.059,63.059,0,0,0-18.088,8.536c-6.265,4.291-11.919,9.8-19.131,12.178-5.125,1.688-10.682,1.654-15.84,3.239a26.6,26.6,0,0,0-17.117,16.694,34.751,34.751,0,0,0-1.464,13.048,73.218,73.218,0,0,0-7.346,16.712c-.386.208-.774.412-1.156.627l1.121-.5a73.617,73.617,0,0,0,20.742,75.089,65.552,65.552,0,0,0,31.45,22.32v10.152a77.333,77.333,0,0,0-25.1,10.28l-.011-.013s-.653.4-1.77,1.155l-.335.227c-7.568,5.136-32.926,23.9-32.069,44.183q-.05,1.169.013,2.346a77.975,77.975,0,0,0-2.089,17.883v147.17a72.275,72.275,0,0,0,15.511,44.826c-21.341,4.783-34.942,12.018-34.942,20.114a6.55,6.55,0,0,1,0,2.045c0,14.4,43.04,26.078,96.132,26.078,6.419,0,12.69-.172,18.757-.5l59.99,48.564L419.924,774.1s-31.7,24.544-7.159,32.725,74.656,14.318,74.656,14.318,8.181-14.318-3.068-20.454-26.59-3.068-26.59-3.068l2.045-12.272s166.7-143.175,131.926-192.264c-6.652-9.391-13.3-19.081-20.014-28.62l26.242,2.391,5.971,224.757.747-.243c-1.5,4.415-12.1,37.74,11.4,32.1,25.158-6.037,70.933-27.332,70.933-27.332S686.384,779.657,673.591,780.4ZM573.326,393.659l-49.089-14.252v-42l53.354,56.637C574.968,393.785,573.326,393.659,573.326,393.659Z"
                                            transform="translate(-149.803 -75.892)" />
                                    </g>
                                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="72" cy="72" r="72"
                                        transform="translate(220.209 27.016)" />
                                    <path id="Path_10" data-name="Path 10" class="cls-9"
                                        d="M524.012,339.908l54.948,58.329a10.735,10.735,0,0,0,17.191-2.134l60.862-109.194-17-6-50,72s-93.867-97.837-107-93S524.012,339.908,524.012,339.908Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <line id="Line_2" data-name="Line 2" class="cls-10" x1="81" y2="210"
                                        transform="translate(188.209 466.016)" />
                                    <line id="Line_3" data-name="Line 3" class="cls-10" x2="81" y2="210"
                                        transform="translate(309.209 466.016)" />
                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" class="cls-11" cx="94" cy="25.5"
                                        rx="94" ry="25.5" transform="translate(195.209 442.016)" />
                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" class="cls-12" cx="94" cy="25.5"
                                        rx="94" ry="25.5" transform="translate(195.209 440.016)" />
                                    <line id="Line_4" data-name="Line 4" class="cls-10" x2="88.69" y2="27.33"
                                        transform="translate(249.655 512.154)" />
                                    <line id="Line_5" data-name="Line 5" class="cls-10" x1="88.69" y2="27.33"
                                        transform="translate(240.073 512.154)" />
                                    <path id="Path_11" data-name="Path 11" class="cls-9"
                                        d="M290.3,182.016h27.905a56,56,0,0,1,56,56v148h-160v-127.9a76.1,76.1,0,0,1,76.1-76.095Z" />
                                    <path id="Path_12" data-name="Path 12" class="cls-13"
                                        d="M214.209,386.016h160v87h-89a71,71,0,0,1-71-71v-16Z" />
                                    <path id="Path_13" data-name="Path 13" class="cls-14"
                                        d="M366.173,317.948l97.839,92.961h108v-14l-93-27-79.553-98.241S363.334,293.987,366.173,317.948Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_14" data-name="Path 14" class="cls-9"
                                        d="M366.173,315.948l97.839,92.961h108v-14l-93-27-79.553-98.241S363.334,291.987,366.173,315.948Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_15" data-name="Path 15" class="cls-15"
                                        d="M572.012,394.908s52,4,38,14h-38Z" transform="translate(-149.803 -75.892)" />
                                    <path id="Path_16" data-name="Path 16" class="cls-15"
                                        d="M640.012,280.908s13-39,22-28-5,34-5,34Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_17" data-name="Path 17" class="cls-14"
                                        d="M214.209,386.016v4.667l160,.333v-5Z" />
                                    <path id="Path_18" data-name="Path 18" class="cls-13"
                                        d="M488.475,554.453,596.1,564.261l5.839,219.772,38.531-12.544s57.626-249,2.676-269.986S528.8,452.877,493.336,475.4,488.475,554.453,488.475,554.453Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_19" data-name="Path 19" class="cls-6"
                                        d="M495.012,486.908s59,30,67,64" transform="translate(-149.803 -75.892)" />
                                    <path id="Path_20" data-name="Path 20" class="cls-13"
                                        d="M432.013,547.908l84,68-94,151,39,11s163-140,129-188-68-104-110-105S432.013,547.908,432.013,547.908Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_21" data-name="Path 21" class="cls-14"
                                        d="M414.209,251.016l21,36,5-10Z" />
                                    <path id="Path_22" data-name="Path 22" class="cls-16"
                                        d="M422.012,766.908s-31,24-7,32,73,14,73,14,8-14-3-20-26-3-26-3l2-12Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_23" data-name="Path 23" class="cls-16"
                                        d="M602.835,783.323s-13.617,37.764,10.983,31.861,69.36-26.725,69.36-26.725-.615-16.113-13.123-15.388-23.653,11.2-23.653,11.2l-5.388-13.367Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <rect id="Rectangle_1" data-name="Rectangle 1" class="cls-15" width="40" height="60"
                                        rx="20" transform="translate(274.209 147.016)" />
                                    <path id="Path_24" data-name="Path 24" class="cls-14"
                                        d="M444.012,224.908a20,20,0,0,0-20,20v6.8a64.006,64.006,0,0,0,40,0v-6.8a20,20,0,0,0-20-20Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <circle id="Ellipse_4" data-name="Ellipse 4" class="cls-15" cx="64" cy="64" r="64"
                                        transform="translate(230.209 49.016)" />
                                    <path id="Path_25" data-name="Path 25" class="cls-14"
                                        d="M380.012,186s16,4.123,25-14.062,16-28.1,53-17.358,44.443,12.057,46.222,1.9c1.215-6.944-11.941-23.809-20.4-33.794-4.124-4.871-10.855-7.777-18.048-7.777H424.012l-25,11.572-19,16.532-4,22.318Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <path id="Path_26" data-name="Path 26"
                                        d="M380.012,184s16,4.123,25-14.062,16-28.1,53-17.358,44.443,12.057,46.222,1.9c1.215-6.944-11.941-23.809-20.4-33.794-4.124-4.871-10.855-7.777-18.048-7.777H424.012l-25,11.572-19,16.532-4,22.318Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <ellipse id="Ellipse_5" data-name="Ellipse 5" class="cls-15" cx="6.5" cy="13"
                                        rx="6.5" ry="13" transform="translate(230.209 95.016)" />
                                    <path id="Path_27" data-name="Path 27"
                                        d="M381.867,150.458c-1.483-8.371-2.94-17.162-.24-25.223a26.014,26.014,0,0,1,16.737-16.324c5.043-1.55,10.477-1.517,15.488-3.167,7.052-2.322,12.581-7.712,18.707-11.908a61.657,61.657,0,0,1,17.687-8.346c5.663-1.637,12.33-2.267,16.945,1.4,3.885,3.087,5.234,8.379,8.444,12.162,3.736,4.4,9.539,6.312,14.605,9.083a44.545,44.545,0,0,1,22.61,34.829c.175,2.147,0,4.7-1.816,5.863a6.483,6.483,0,0,1-3.647.666c-25.579-.366-51.188-.733-76.661-3.081-7.919-.73-15.853-1.652-23.8-1.351a77.855,77.855,0,0,0-35.045,9.888"
                                        transform="translate(-149.803 -75.892)" />
                                    <rect id="Rectangle_2" data-name="Rectangle 2" class="cls-5" width="154.085"
                                        height="65.568" rx="32.784" transform="translate(0 645.267)" />
                                    <path id="Path_28" data-name="Path 28" class="cls-17"
                                        d="M725.679,487.075a1.5,1.5,0,1,0-1.448-1.5A1.5,1.5,0,0,0,725.679,487.075Z"
                                        transform="translate(-149.803 -75.892)" />
                                    <line id="Line_6" data-name="Line 6" class="cls-8" x2="104" y2="370.092"
                                        transform="translate(795.971 344.016)" />
                                    <rect id="Rectangle_3" data-name="Rectangle 3" class="cls-18" width="561.606"
                                        height="21.885" transform="translate(338.787 333.178)" />
                                    <rect id="Rectangle_4" data-name="Rectangle 4" class="cls-12" width="92" height="13"
                                        rx="6.5" transform="translate(477.209 328.016)" />
                                    <g id="Group_3" data-name="Group 3" class="cls-3">
                                        <rect id="Rectangle_5" data-name="Rectangle 5" class="cls-4" width="228.659"
                                            height="158.101" rx="28.22" transform="translate(533.209 183.077)" />
                                    </g>
                                    <rect id="Rectangle_6" data-name="Rectangle 6" class="cls-19" width="216.609"
                                        height="155.184" rx="26.835" transform="translate(537.286 185.994)" />
                                    <rect id="Rectangle_7" data-name="Rectangle 7" class="cls-12" width="216.609"
                                        height="155.184" rx="26.835" transform="translate(540.286 185.994)" />
                                    <circle id="Ellipse_6" data-name="Ellipse 6" class="cls-18" cx="7" cy="7" r="7"
                                        transform="translate(651.709 255.516)" />
                                    <text id="E-ACEZ" class="cls-20" transform="translate(22 687)">
                                        <tspan x="0" y="0">E-ACEZ</tspan>
                                    </text>
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--registration section-->
    <div class="container-fluid">
        <div class="row sub-hero">
            <div class="col-md-6 register-svg">
                <svg xmlns="http://www.w3.org/2000/svg" width="829.652" height="613.783" viewBox="0 0 829.652 613.783">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #ffb8b8;
                            }

                            .cls-2 {
                                fill: #2f2e41;
                            }

                            .cls-3 {
                                fill: #3f3d56;
                            }

                            .cls-4 {
                                fill: #f50;
                            }

                            .cls-5 {
                                fill: #fff;
                            }

                            .cls-6 {
                                fill: #e6e6e6;
                            }

                            .cls-7 {
                                fill: #e84d0a;
                            }

                            .cls-8 {
                                fill: #f0c1aa;
                            }

                            .cls-9 {
                                fill: #6c63ff;
                            }
                        </style>
                    </defs>
                    <g id="profile" transform="translate(0 0)">
                        <path id="Path_6" data-name="Path 6" class="cls-1"
                            d="M609.4,522.909H591.573V349.531l40.509-.81Z" transform="translate(0 64.928)" />
                        <path id="Path_7" data-name="Path 7" class="cls-1"
                            d="M695.276,522.909H713.1V349.531l-40.509-.81Z" transform="translate(0 64.928)" />
                        <path id="Path_8" data-name="Path 8" class="cls-2"
                            d="M786.208,722.6l-37.924-.348A12.327,12.327,0,0,1,733,710.283h0a12.327,12.327,0,0,1,6.984-11.109l8.651-4.161L776.748,675.8,797,681.469l3.879,17.457A19.931,19.931,0,0,1,786.208,722.6Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_9" data-name="Path 9" class="cls-2"
                            d="M888.29,722.383l-37.924-.348a12.327,12.327,0,0,1-15.285-11.967h0a12.327,12.327,0,0,1,6.984-11.109l8.651-4.161,28.115-19.215,20.254,5.671,3.879,17.457A19.931,19.931,0,0,1,888.29,722.383Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_10" data-name="Path 10" class="cls-2"
                            d="M903.116,553.521l-55.842-4.986-7.352-65.5-16.465,63.373-56.451-5.04c2.081-38.806,6.559-71.177,17.014-87.5L902.306,432.8Z"
                            transform="translate(-185.174 -136.563)" />
                        <circle id="Ellipse_3" data-name="Ellipse 3" class="cls-1" cx="30.173" cy="30.173" r="30.173"
                            transform="translate(631.334 14.266)" />
                        <path id="Path_11" data-name="Path 11" class="cls-1"
                            d="M870.709,282.922l-52.661-6.481c6.7-14.267,9.719-27.589,4.861-38.889h40.509C857.155,248.727,862.755,265.29,870.709,282.922Z"
                            transform="translate(-185.174 -175.573)" />
                        <path id="Path_12" data-name="Path 12" class="cls-3"
                            d="M902.306,434.425c-37.055,27.17-77.5,36.44-121.526,26.736,26.715-60.992,22.9-121.105,0-180.67l42.129-17.824c11.813,11.523,25.36,11.774,40.509,1.62l41.319,8.912C897.179,332.621,894.645,387.814,902.306,434.425Z"
                            transform="translate(-185.174 -159.259)" />
                        <path id="Path_13" data-name="Path 13" class="cls-2"
                            d="M824.422,193.674l-5.095-2.04s10.653-11.728,25.475-10.709l-4.169-4.589s10.19-4.079,19.453,6.629c4.87,5.629,10.5,12.246,14.016,19.7h5.456l-2.277,5.014,7.971,5.014-8.181-.9a27.748,27.748,0,0,1-.774,12.987l.219,3.963s-9.483-14.672-9.483-16.712v5.1s-5.095-4.589-5.095-7.649l-2.779,3.57-1.39-5.609-17.138,5.609,2.779-4.589-10.653,1.53,4.169-5.609s-12.043,6.629-12.506,12.238-6.484,12.748-6.484,12.748l-2.779-5.1S810.99,201.323,824.422,193.674Z"
                            transform="translate(-185.174 -175.573)" />
                        <path id="Path_14" data-name="Path 14" class="cls-4"
                            d="M909.7,498.573h-183a7.008,7.008,0,0,1-7-7v-28a7.008,7.008,0,0,1,7-7h183a7.009,7.009,0,0,1,7,7v28a7.008,7.008,0,0,1-7,7Z"
                            transform="translate(-185.174 -139.577)" />
                        <path id="Path_40" data-name="Path 40" class="cls-5"
                            d="M754.055,471.627a5.946,5.946,0,1,0,0,11.893H882.14a5.947,5.947,0,1,0,.2-11.892q-.1,0-.2,0Z"
                            transform="translate(-185.174 -139.775)" />
                        <path id="Path_15" data-name="Path 15" class="cls-1"
                            d="M799.414,449.818l9.3,16.582a14.724,14.724,0,0,1-9.125,21.451h0a14.724,14.724,0,0,1-18.437-14.53l.436-22.692c-6.989-40.336-12.661-78.527-11.343-105.323h32.407l-6.482,30.787Z"
                            transform="translate(-185.174 -148.418)" />
                        <path id="Path_16" data-name="Path 16" class="cls-1"
                            d="M906.357,453.869l-6.813,11.356a13.12,13.12,0,0,1-21.861.967h0a13.12,13.12,0,0,1,2.985-18.393l11.917-8.512L909.6,368.8l-10.532-29.166,29.167-4.861C941.926,366.423,928.132,408.615,906.357,453.869Z"
                            transform="translate(-185.174 -150.486)" />
                        <path id="Path_17" data-name="Path 17" class="cls-3"
                            d="M809.946,351.787l-42.939-2.431,2.95-46.01a29.012,29.012,0,0,1,21.581-28.705l5.446-1.442Z"
                            transform="translate(-185.174 -162.094)" />
                        <path id="Path_18" data-name="Path 18" class="cls-3"
                            d="M931.473,337.2l-39.7,9.722V270.769l1.638-.106a27.257,27.257,0,0,1,28.407,21.489Z"
                            transform="translate(-185.174 -162.515)" />
                        <rect id="Rectangle_5" data-name="Rectangle 5" class="cls-6" width="606.096" height="2"
                            transform="translate(223.556 611.782)" />
                        <path id="Path_19" data-name="Path 19" class="cls-6"
                            d="M211.812,663.409A215.892,215.892,0,0,0,221.9,723.088c.14.448.288.89.435,1.338h37.636c-.04-.4-.08-.85-.12-1.338-2.509-28.849-16.978-204.433.321-234.46C258.656,491.064,208.894,571.742,211.812,663.409Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_20" data-name="Path 20" class="cls-6"
                            d="M214.636,723.089c.315.448.642.9.977,1.338h28.233c-.214-.381-.462-.83-.749-1.338-4.664-8.419-18.47-33.587-31.285-59.679-13.772-28.039-26.407-57.143-25.343-67.676C186.141,598.109,176.612,670.53,214.636,723.089Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_21" data-name="Path 21" class="cls-7"
                            d="M567.057,399.892h-307a7.008,7.008,0,0,1-7-7v-171a7.008,7.008,0,0,1,7-7h307a7.009,7.009,0,0,1,7,7v171a7.008,7.008,0,0,1-7,7Z"
                            transform="translate(-185.174 -175.573)" />
                        <path id="Path_22" data-name="Path 22" class="cls-6"
                            d="M570.855,789.355h-315c-2.76,0-5-2.525-5-5.637V220.088c0-3.111,2.24-5.633,5-5.637h315c2.76,0,5,2.525,5,5.637V783.719C575.852,786.83,573.615,789.352,570.855,789.355Zm-315-572.65a3.212,3.212,0,0,0-3,3.382V783.719a3.212,3.212,0,0,0,3,3.382h315a3.212,3.212,0,0,0,3-3.382V220.088a3.212,3.212,0,0,0-3-3.382Z"
                            transform="translate(-185.174 -175.573)" />
                        <circle id="Ellipse_4" data-name="Ellipse 4" class="cls-6" cx="11" cy="11" r="11"
                            transform="translate(96.883 331.714)" />
                        <path id="Path_23" data-name="Path 23" class="cls-8"
                            d="M525.057,502.892h-183a7.008,7.008,0,0,1-7-7v-28a7.008,7.008,0,0,1,7-7h183a7.009,7.009,0,0,1,7,7v28a7.009,7.009,0,0,1-7,7Z"
                            transform="translate(-185.174 -139.024)" />
                        <path id="Path_24" data-name="Path 24" class="cls-3"
                            d="M532.057,503.892h-197a1,1,0,0,1,0-2h197a1,1,0,0,1,0,2Z"
                            transform="translate(-185.174 -136.829)" />
                        <circle id="Ellipse_5" data-name="Ellipse 5" class="cls-6" cx="11" cy="11" r="11"
                            transform="translate(96.883 405.847)" />
                        <path id="Path_25" data-name="Path 25" class="cls-8"
                            d="M525.057,568.892h-183a7.008,7.008,0,0,1-7-7v-28a7.008,7.008,0,0,1,7-7h183a7.008,7.008,0,0,1,7,7v28a7.009,7.009,0,0,1-7,7Z"
                            transform="translate(-185.174 -130.569)" />
                        <path id="Path_26" data-name="Path 26" class="cls-3"
                            d="M532.057,569.892h-197a1,1,0,0,1,0-2h197a1,1,0,0,1,0,2Z"
                            transform="translate(-185.174 -128.993)" />
                        <circle id="Ellipse_6" data-name="Ellipse 6" class="cls-6" cx="11" cy="11" r="11"
                            transform="translate(96.883 479.981)" />
                        <path id="Path_27" data-name="Path 27" class="cls-8"
                            d="M418.057,634.892h-76a7.008,7.008,0,0,1-7-7v-28a7.008,7.008,0,0,1,7-7h76a7.009,7.009,0,0,1,7,7v28a7.008,7.008,0,0,1-7,7Z"
                            transform="translate(-185.174 -122.114)" />
                        <path id="Path_28" data-name="Path 28" class="cls-3"
                            d="M425.057,635.892h-90a1,1,0,0,1,0-2h90a1,1,0,0,1,0,2Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_29" data-name="Path 29" class="cls-8"
                            d="M525.057,634.892h-76a7.008,7.008,0,0,1-7-7v-28a7.008,7.008,0,0,1,7-7h76a7.008,7.008,0,0,1,7,7v28A7.008,7.008,0,0,1,525.057,634.892Z"
                            transform="translate(-185.174 -122.114)" />
                        <path id="Path_30" data-name="Path 30" class="cls-3"
                            d="M532.057,635.892h-90a1,1,0,0,1,0-2h90a1,1,0,0,1,0,2Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_40-2" data-name="Path 40" class="cls-5"
                            d="M293.417,268.446a5.946,5.946,0,1,0,0,11.893H533.5a5.947,5.947,0,1,0,.2-11.892q-.1,0-.2,0Z"
                            transform="translate(-185.174 -175.573)" />
                        <path id="Path_40-3" data-name="Path 40" class="cls-5"
                            d="M293.417,301.446a5.946,5.946,0,1,0,0,11.893H533.5a5.947,5.947,0,1,0,.2-11.892q-.1,0-.2,0Z"
                            transform="translate(-185.174 -160.353)" />
                        <path id="Path_40-4" data-name="Path 40" class="cls-5"
                            d="M293.417,334.446a5.946,5.946,0,1,0,0,11.893H533.5a5.947,5.947,0,1,0,.2-11.892q-.1,0-.2,0Z"
                            transform="translate(-185.174 -156.363)" />
                        <path id="Path_31" data-name="Path 31" class="cls-9"
                            d="M522.854,684.189l-2.517-2.517a.584.584,0,0,0-.414-.171H518.7a.585.585,0,0,0-.413,1l1.393,1.392H508.557a1,1,0,0,0,0,2h11.122l-1.251,1.25a.668.668,0,0,0,.472,1.14h.989a.668.668,0,0,0,.472-.2l2.492-2.492a.994.994,0,0,0,0-1.406Z"
                            transform="translate(-185.174 -110.645)" />
                        <path id="Path_32" data-name="Path 32" class="cls-3"
                            d="M516.057,700.892a16,16,0,1,1,16-16,16,16,0,0,1-16,16Zm0-30a14,14,0,1,0,14,14,14,14,0,0,0-14-14Z"
                            transform="translate(-185.174 -110.645)" />
                    </g>
                </svg>


            </div>
            <div class="col-md-6">
                <br>
                <form method="POST" class="register" id="paymentForm">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="first-name">First Name</label>
                                    <input type="text" name="firstname" id="firstName" class="form-control"
                                        maxlength="50" placeholder="Enter First Name" required>
                                </td>
                                <td>
                                    <label for="last-name">Last Name</label>
                                    <input type="text" name="lastname" id="lastName" class="form-control" maxlength="50"
                                        placeholder="Enter Last Name" required>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <label for="email">Email </label>
                                    <input type="email" name="email" id="email" class="form-control" maxlength="100"
                                        placeholder="Enter Email" required>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="phone no">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" maxlength="15"
                                        placeholder="Enter Phone Number">
                                </td>
                                <td>
                                    <label for="whatsapp no">Whatsapp Number</label>
                                    <input type="tel" name="whatsappno" id="whatsappno" class="form-control"
                                        maxlength="15" placeholder="Enter Business WhatsApp Number">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label for="shop-name">Business Name</label>
                                    <input type="text" name="shopname" id="shopName" class="form-control" maxlength="50"
                                        placeholder="Enter Business Name">
                                </td>
                                <td>
                                    <label for="shop-url">Store URL</label>
                                    <input type="text" name="shopurl" id="shopUrl" class="form-control" maxlength="50"
                                        placeholder="Enter Store URL without spacing">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        maxlength="20" placeholder="Enter desired Password">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="code">CODE</label>
                                    <input type="text" name="code" id="code" class="form-control"
                                        placeholder="Enter discount code">
                                </td>
                                <td>
                                    <label for="plan">Select a plan</label><br>
                                    <select name="amount" id="amount" class="form-control">
                                        <option value="nil" disabled>select a plan</option>
                                        <option value="500" id="plan">One Month -- &#8358;5,000</option>
                                        <option value="null" disabled>Other plans coming soon!!!</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button class="btn btn-md btn-success" type="submit" onclick="payWithPaystack()"> Sign up</button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </form>
            </div>
        </div>
    </div>



    <!--paystack script-->
    <script src="https://js.paystack.co/v1/inline.js"></script>
</body>

</html>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_test_6915e45b1bb5261b2fd67ea798081b572cb74753', // Replace with your public key
            email: document.getElementById("email").value,
            amount: document.getElementById("amount").value * 100,
            firstname: document.getElementById("firstName").value,
            lastname: document.getElementById("lastName").value,
            ref: '' + Math.floor((Math.random() * 1000000000) +
                1
            ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
    }
</script>

<?php

if(isset($_POST['register'])){

    define('SALT', 'd#f453dd');
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pno = $_POST['phone'];
    $wno = $_POST['whatsappno'];
    $bname = $_POST['shopname'];
    $surl = $_POST['shopurl'];
    $pword = md5(SALT.$_POST['password']);
    $code = $_POST['code'];
    $user_ip = getRealIpUser();

    $check_customer = "select customer_id from customers where email = '$email' ";

    $run_check = mysqli_query($con, $check_customer);

    if (mysqli_num_rows($run_check) == 0){

    $sql = "INSERT INTO customers (firstname, lastname, email, password, phone_no, whatsapp_no, shop_name, shop_url, code, reg_date, user_ip)
    VALUES ('$fname', '$lname', '$email', '$pword', '$pno', '$wno', '$bname', '$surl', '$code', NOW(), '$user_ip')";
    $query = mysqli_query($con, $sql) or die(mysqli_error($con));

    if($query){

        echo "<script>window.open('sign-in.php', '_self')</script>";
    }
    
}
else{
    echo '
    <script>
    swal({
            title: "Email has been Registered!",
            icon: "error",
        });
</script>';
  
}

}
 

?>
