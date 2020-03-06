<?php 

session_start();

session_destroy();

echo "<script>window.open('../index.php', '_self')</script>";

?>

<?php 
              if(isset($_POST['logout'])) {
                  $update_msg = mysqli_query($con, "UPDATE chat_users SET Log_in='Offline' WHERE user_name='$user_name'");
                  header("Location:logout.php");
                  exit();
              }
              ?>