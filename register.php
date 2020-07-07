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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 register-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="903.822"
                    height="748.216" viewBox="0 0 903.822 748.216">
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
                        <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
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
                        <ellipse id="Ellipse_2" data-name="Ellipse 2" class="cls-11" cx="94" cy="25.5" rx="94" ry="25.5"
                            transform="translate(195.209 442.016)" />
                        <ellipse id="Ellipse_3" data-name="Ellipse 3" class="cls-12" cx="94" cy="25.5" rx="94" ry="25.5"
                            transform="translate(195.209 440.016)" />
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
                        <path id="Path_15" data-name="Path 15" class="cls-15" d="M572.012,394.908s52,4,38,14h-38Z"
                            transform="translate(-149.803 -75.892)" />
                        <path id="Path_16" data-name="Path 16" class="cls-15"
                            d="M640.012,280.908s13-39,22-28-5,34-5,34Z" transform="translate(-149.803 -75.892)" />
                        <path id="Path_17" data-name="Path 17" class="cls-14" d="M214.209,386.016v4.667l160,.333v-5Z" />
                        <path id="Path_18" data-name="Path 18" class="cls-13"
                            d="M488.475,554.453,596.1,564.261l5.839,219.772,38.531-12.544s57.626-249,2.676-269.986S528.8,452.877,493.336,475.4,488.475,554.453,488.475,554.453Z"
                            transform="translate(-149.803 -75.892)" />
                        <path id="Path_19" data-name="Path 19" class="cls-6" d="M495.012,486.908s59,30,67,64"
                            transform="translate(-149.803 -75.892)" />
                        <path id="Path_20" data-name="Path 20" class="cls-13"
                            d="M432.013,547.908l84,68-94,151,39,11s163-140,129-188-68-104-110-105S432.013,547.908,432.013,547.908Z"
                            transform="translate(-149.803 -75.892)" />
                        <path id="Path_21" data-name="Path 21" class="cls-14" d="M414.209,251.016l21,36,5-10Z" />
                        <path id="Path_22" data-name="Path 22" class="cls-16"
                            d="M422.012,766.908s-31,24-7,32,73,14,73,14,8-14-3-20-26-3-26-3l2-12Z"
                            transform="translate(-149.803 -75.892)" />
                        <path id="Path_23" data-name="Path 23" class="cls-16"
                            d="M602.835,783.323s-13.617,37.764,10.983,31.861,69.36-26.725,69.36-26.725-.615-16.113-13.123-15.388-23.653,11.2-23.653,11.2l-5.388-13.367Z"
                            transform="translate(-149.803 -75.892)" />
                        <rect id="Rectangle_1" data-name="Rectangle 1" class="cls-15" width="40" height="60" rx="20"
                            transform="translate(274.209 147.016)" />
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
                        <ellipse id="Ellipse_5" data-name="Ellipse 5" class="cls-15" cx="6.5" cy="13" rx="6.5" ry="13"
                            transform="translate(230.209 95.016)" />
                        <path id="Path_27" data-name="Path 27"
                            d="M381.867,150.458c-1.483-8.371-2.94-17.162-.24-25.223a26.014,26.014,0,0,1,16.737-16.324c5.043-1.55,10.477-1.517,15.488-3.167,7.052-2.322,12.581-7.712,18.707-11.908a61.657,61.657,0,0,1,17.687-8.346c5.663-1.637,12.33-2.267,16.945,1.4,3.885,3.087,5.234,8.379,8.444,12.162,3.736,4.4,9.539,6.312,14.605,9.083a44.545,44.545,0,0,1,22.61,34.829c.175,2.147,0,4.7-1.816,5.863a6.483,6.483,0,0,1-3.647.666c-25.579-.366-51.188-.733-76.661-3.081-7.919-.73-15.853-1.652-23.8-1.351a77.855,77.855,0,0,0-35.045,9.888"
                            transform="translate(-149.803 -75.892)" />
                        <rect id="Rectangle_2" data-name="Rectangle 2" class="cls-5" width="154.085" height="65.568"
                            rx="32.784" transform="translate(0 645.267)" />
                        <path id="Path_28" data-name="Path 28" class="cls-17"
                            d="M725.679,487.075a1.5,1.5,0,1,0-1.448-1.5A1.5,1.5,0,0,0,725.679,487.075Z"
                            transform="translate(-149.803 -75.892)" />
                        <line id="Line_6" data-name="Line 6" class="cls-8" x2="104" y2="370.092"
                            transform="translate(795.971 344.016)" />
                        <rect id="Rectangle_3" data-name="Rectangle 3" class="cls-18" width="561.606" height="21.885"
                            transform="translate(338.787 333.178)" />
                        <rect id="Rectangle_4" data-name="Rectangle 4" class="cls-12" width="92" height="13" rx="6.5"
                            transform="translate(477.209 328.016)" />
                        <g id="Group_3" data-name="Group 3" class="cls-3">
                            <rect id="Rectangle_5" data-name="Rectangle 5" class="cls-4" width="228.659"
                                height="158.101" rx="28.22" transform="translate(533.209 183.077)" />
                        </g>
                        <rect id="Rectangle_6" data-name="Rectangle 6" class="cls-19" width="216.609" height="155.184"
                            rx="26.835" transform="translate(537.286 185.994)" />
                        <rect id="Rectangle_7" data-name="Rectangle 7" class="cls-12" width="216.609" height="155.184"
                            rx="26.835" transform="translate(540.286 185.994)" />
                        <circle id="Ellipse_6" data-name="Ellipse 6" class="cls-18" cx="7" cy="7" r="7"
                            transform="translate(651.709 255.516)" />
                        <text id="E-ACEZ" class="cls-20" transform="translate(22 687)">
                            <tspan x="0" y="0">E-ACEZ</tspan>
                        </text>
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
                                        placeholder="Enter Phone Number" required>
                                </td>
                                <td>
                                    <label for="whatsapp no">Whatsapp Number</label>
                                    <input type="tel" name="whatsappno" id="whatsappno" class="form-control"
                                        maxlength="15" placeholder="Enter Business WhatsApp Number" required>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label for="shop-name">Business Name</label>
                                    <input type="text" name="shopname" id="shopName" class="form-control" maxlength="50"
                                        placeholder="Enter Business Name" required>
                                </td>
                                <td>
                                    <label for="shop-url">Store URL</label>
                                    <input type="text" name="shopurl" id="shopUrl" class="form-control" maxlength="50"
                                        placeholder="Enter Store URL without spacing" required>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        maxlength="20" placeholder="Enter desired Password" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="code">CODE</label>
                                    <input type="text" name="code" id="code" class="form-control"
                                        placeholder="Enter discount code" required>
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
                                    <button class="btn btn-md btn-success" name="register">
                                        Sign up</button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </form>
            </div>
        </div>
    </div>
    <!-- onclick="payWithPaystack()"
add it to the button for paystack payment -->
    <!-- Registratio Page Ends -->


    <!--paystack script-->
    <script src="https://js.paystack.co/v1/inline.js"></script>
</body>

</html>

<?php

if(isset($_POST['register'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pno = $_POST['phone'];
    $wno = $_POST['whatsappno'];
    $bname = $_POST['shopname'];
    $surl = $_POST['shopurl'];
    $pword = $_POST['password'];
    $code = $_POST['code'];
    $user_ip = getRealIpUser();

    $check_customer = "select customer_id from customers where email = '$email' ";

    $run_check = mysqli_query ($con, $check_customer);

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

<!--
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
            onClose: function () {
                alert('Window closed.');
            },
            callback: function (response) {


                $.ajax({
                    url: 'http://www.yoururl.com/verify_transaction?reference=' + response
                        .reference,
                    method: 'get',
                    success: function (response) {
                        let message = 'Payment complete! Reference: ' + response.reference;
                        alert(message);
                        // the transaction status is in response.data.status
                    }
                });
            }
        });
        handler.openIframe();
    }
</script>