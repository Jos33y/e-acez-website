
<?php
//update last activity

include('dbconn.php');

session_start();

$query = mysqli_query($conn, "update login_details set last_activity = now() where login_details_id = '".$_SESSION["login_details_id"]."' ");


?>