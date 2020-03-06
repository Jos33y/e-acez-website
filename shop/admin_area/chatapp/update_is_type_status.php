<?php

//update_is_type_status.php

include('dbconn.php');

session_start();

$query = mysqli_query($conn,
"UPDATE login_details
SET is_type = '".$_POST["is_type"]."'
WHERE login_details_id = '".$_SESSION["login_datails_id"]."'
");

?>