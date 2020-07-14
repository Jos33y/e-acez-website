<?php
//check.php
include('include/dbconn.php');

if(isset($_POST["shop_url"]))
{
        $sql  = "SELECT * FROM customers WHERE shop_url = '".$_POST["shop_url"]. "'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            echo '<span class="text-danger check_data">Shop URL not available </span>';
        }
        else
        {
            echo '<span class="text-success check_data">Shop URL Available</span>';

        }
}


if(isset($_POST["email"]))
{
        $sql  = "SELECT * FROM customers WHERE email = '".$_POST["email"]. "'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            echo '<span class="text-danger check_data">email has been registered </span>';
        }
        else
        {
            echo '<span class="text-success check_data">email available</span>';

        }
}
?>