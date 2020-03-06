<?php 

$con = mysqli_connect("localhost", "Joseey", "", "ecom_store_doris");


      $user = "select * from chat_users where level='1'";
       $run_user= mysqli_query($con, $user);
       
       while($row_user= mysqli_fetch_array($run_user)) {
           
           $user_id = $row_user['users_id'];
           $user_name= $row_user['user_name'];
           $user_profile = $row_user['user_profile'];
           $login = $row_user['log_in'];
           
          
           
         }
       
?>