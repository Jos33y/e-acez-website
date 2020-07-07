<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "showroom");

//$con = mysqli_connect("localhost", "u721127448_Admin", "LagbaluJ19", "u721127448_eacez");

function getRealIpUser(){

            switch(true){
        
                    case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                    case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                    case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        
                    default : return $_SERVER['REMOTE_ADDR'];
            }
        }
?>