<?php

//$con = mysqli_connect("localhost", "root", "", "showroom");

$con = mysqli_connect("localhost", "u721127448_joseey", "LagbaluJ19", "u721127448_showroom");

date_default_timezone_set('Africa/Lagos');

$sql = "UPDATE customers SET visits = 0 WHERE customer_id = 1";
$con->query($sql);




?>