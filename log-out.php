<?php


session_start();
session_destroy();
echo "<script>window.open('sign-in.php', '_self')</script>";


?>

