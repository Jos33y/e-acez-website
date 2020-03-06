<?php 


$con = mysqli_connect("localhost", "Joseey", "", "ecom_store_doris");


      $user = "select * from chat_users where level='0'";
       $run_user= mysqli_query($con, $user);
       
       while($row_user= mysqli_fetch_array($run_user)) {
           
           $user_id = $row_user['users_id'];
           $user_name= $row_user['user_name'];
           $user_profile = $row_user['user_profile'];
           $login = $row_user['log_in'];
           
           echo "
                 <li>
                  <div class='chat-left-img'>
                  <img src='admin_images/$user_profile' width='50' height='50'>
                 </div>
                <div class='chat-left-detail'>
                <p><a href='chatapp.php?user_name=$user_name'>$user_name</a></p>";
               
           if($login == 'Offline') {
               echo"<span><i class='fa fa-circle-o' aria-hidden='true'></i> Away</span>";
           }else {
               echo"<span><i class='fa fa-circle' aria-hidden='true'></i> Available</span>";
           }
           "
           </div>
          </li>

           ";  
           
         }
       
?>