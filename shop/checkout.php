<?php
session_start();
include("includes/dbcon.php");
       
?>
    

            <?php 

            if(isset($_SESSION['customer_email'])){

                include("checkout_info.php");

            }else{
                   
                include("customer_login.php");

            }


            ?>
           
   

