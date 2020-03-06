<?php

include('dbconn.php');

session_start(); 

$get_user = "select * from login where user_id != '".$_SESSION['user_id']."'
";
$run_user = mysqli_query($conn, $get_user);

$output = '
<table class="table table-bordered table-striped">
    <tr>
        <td width="50%">Username</td>
        <td width="10%">Status</td>
        <td width="40%">Action</td>
    </tr>
';

while($row = mysqli_fetch_array($run_user)){

    $status = '';
    $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 seconds');
    $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
    $user_last_activity = fetch_user_last_activity($row['user_id'], $conn);
    if($user_last_activity < $current_timestamp)

    {
        $status = '<span class="badge badge-success">Online</span>';
    }
    else
    {
        $status = '<span class="badge badge-danger">Offline</span>';
    }
    $output .= '
    <tr>
        <td>'.$row['username'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $conn).'
         '.fetch_is_type_status($row['user_id'], $conn).' </td>
        <td>'.$status.'</td>
        <td><Button type="button" class="btn btn-info btn-sm start_chat" data-touserid="'.$row['user_id'].'"
         data-tousername="'.$row['username'].'">Chat </button></td>
    </tr>
    ';
}

$output .= '</table>';

echo $output;

?>