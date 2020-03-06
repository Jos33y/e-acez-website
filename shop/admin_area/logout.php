<?php 

session_start();

session_destroy();

echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

?>