<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title><?php echo $shop_url; ?></title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="styles/showroom.css">
</head>

<body>
    <!--navbar-->
    <nav>
        <div class="navbar">
            <span class="shop-name"><?php echo $shop_name; ?></span>

            <span class="call text-right">Call: &nbsp;<i class="fas fa-phone-alt"></i> <a
                    href="tel:+234<?php echo $p_no; ?>"><?php echo $p_no ?></a></span>
        </div>
    </nav>