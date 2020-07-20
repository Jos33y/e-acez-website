<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <meta name="title" content="<?php echo $shop_name; ?>">
  <title><?php echo $shop_name; ?></title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="styles.css">
<style>

      /* =======================================================
* Website Name: Showroom 1.0 (e-acez 4.0)
* Website URL: www.e-acez.com/
* Author: Lagbalu Joseph (Jos33y)
======================================================== */


body {
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
  background: rgb(248, 248, 253);
  overflow-x: hidden;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #17192e;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #f5ede9;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #818181;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

.top {
  margin-top: 10px;
}

.pointer {
  color: #000000d3;
  font-size: 27px;
  cursor: pointer;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}

/** Nav Styles **/
nav {
  background-image: linear-gradient(to right, #292c4a, #17192e);
  color: #f5ede9;
}

.navbar {
  margin-left: 2%;
  margin-right: 2%;
}

.navbar .shop-name {
  color: #f5ede9;
  font-size: 27px;
  font-weight: 700;
  font-style: italic;
  text-transform: lowercase;
  letter-spacing: 1px;
}

nav .call {
  color: #f5ede9;
  font-size: 15px;
  font-weight: 550;
  text-transform: capitalize;
}

.call a {
  color: #f5ede9;
  text-decoration: none;
}

h3.no-url {
  text-align: center;
  font-size: 40px;
  font-weight: 700;
}

/** responsive design **/



/** Product Styles **/

.product {
  margin-top: 2%;
  margin-bottom: 5%;
}

.card-header {
  padding-top: 5px;
  padding-bottom: 0;
}

.product .card {
  margin-bottom: 10%;
  min-height: 310px;
  background-color: #fcf9f9;
  border: 0px solid #707070;
  border-radius: 15px;
  /**shadow box style **/
  -webkit-box-shadow: 0px 0px 4px 1px rgba(143, 139, 143, 1);
  -moz-box-shadow: 0px 0px 4px 1px rgba(143, 139, 143, 1);
  box-shadow: 0px 0px 4px 1px rgba(143, 139, 143, 1);
}

.card-img-top {
  border-radius: 15px;
  min-height: 160px;
}

.card-body {
  padding-top: 10px;
  padding-bottom: 0;
}

.row {
  padding: 0;
}

/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {
  opacity: 0.7;
}

/* The Modal (background) */
.modal {
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 1;
  /* Sit on top */
  padding-top: 100px;
  /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.9);
  /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}


/* Add Animation - Zoom in the Modal */
.modal-content,
#caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {
    transform: scale(0)
  }

  to {
    transform: scale(1)
  }
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.product .name {
  font-size: 17px;
  font-weight: 550;
  text-transform: lowercase;
}

.product .price {
  color: #ff5500;
  font-size: 20px;
  font-weight: 700;
  letter-spacing: 1px;
}

.product .btn {
  color: #f5ede9;
  font-size: 16px;
  font-weight: 600;
  background-color: #075e54;
  border: #075e54;
  border-radius: 20px;
  text-transform: lowercase;
}

.product .col-6 {
  padding: 10px;
  margin-bottom: 20px;
}

.product .btn {
  -webkit-box-shadow: 0px 0px 3px 0.5px rgba(23, 25, 46, 1);
  -moz-box-shadow: 0px 0px 3px 0.5px rgba(23, 25, 46, 1);
  box-shadow: 0px 0px 3px 0.5px rgba(23, 25, 46, 1);
}

/** Footer Styles **/
footer {
  background-image: linear-gradient(to right, #292c4a, #17192e);
  color: #f5ede9;
}

footer .row {
  padding-top: 1%;
}

.social li {
  list-style: none;
  display: inline;
  margin: 5%;
}

.social li a {
  color: #f5ede9;
}

.contact li {
  list-style: none;
}

.contact li a {
  color: #f5ede9;
  font-size: 12px;
  font-weight: 550;
}

.copyright {
  font-size: 12px;
  font-weight: 550px;
}

footer .orange {
  color: #ff5500;
}


/* Medium devices (tablets, less than 992px) */
@media (max-width: 991.98px) {

  .navbar .shop-name {
    font-size: 25px;
  }

  .call {
    font-size: 13px;
  }

  .product .name {
    font-size: 16px;
  }

  .product .price {
    font-size: 18px;
  }

  .product .btn {
    font-size: 14px;
  }

  .sidenav a {
    padding: 4px 4px 4px 24px;
    font-size: 20px;
  }
}

/* Small devices (landscape phones, less than 768px) */
@media (max-width: 767.98px) {
  .navbar .shop-name {
    font-size: 24px;
  }

  nav .call {
    font-size: 13px;
  }

  .modal-content {
    width: 100%;
  }

  .product .name {
    font-size: 15px;
  }

  .product .price {
    font-size: 16px;
  }

  .product .btn {
    font-size: 13px;
  }

  .pointer {
    font-size: 25px;
  }
}

/* Extra small devices (portrait phones, less than 576px) */

@media (max-width: 575.98px) {
  .navbar .shop-name {
    font-size: 22px;
  }

  .call {
    font-size: 12px;
  }



  .product .name {
    font-size: 13px;
  }

  .product .price {
    font-size: 15px;
  }

  .product .btn {
    font-size: 12px;
  }

  p.text-primary {
    font-size: 12px;
  }

  .pointer {
    font-size: 20px;
  }

  .sidenav a {
    padding: 4px 4px 4px 24px;
    font-size: 18px;
  }
}

/* Extra small devices (portrait phones, less than 345px) */

@media (max-width: 375px) {

  .navbar .shop-name {
    font-size: 20px;

  }

  .call {
    font-size: 10px;
  }

  .product .name {
    font-size: 12px;
  }

  .product .price {
    font-size: 14px;
  }

  .product .btn {
    font-size: 11px;
  }

  .sidenav a {
    padding: 4px 4px 4px 24px;
    font-size: 16px;
  }

}
</style>


</head>
