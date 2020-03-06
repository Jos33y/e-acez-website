<?php

$connect = new PDO("mysql:host=localhost;dbname:ecom_store_doris;charset=utf8mb4", "Joseey", "");

$conn = mysqli_connect("localhost", "Joseey", "", "ecom_store_doris");

$con = mysqli_connect("localhost", "Joseey", "", "eacez_db");


date_default_timezone_set('Africa/Lagos');

function fetch_user_last_activity($user_id, $conn)
{
    $get_details = " select * from login_details where user_id = '$user_id' ORDER BY last_activity DESC LIMIT 1 ";

    $run_details = mysqli_query($conn, $get_details);

    while($row = mysqli_fetch_array($run_details))
    {
        return $row['last_activity'];
    }
}

function fetch_user_chat_history($from_user_id, $to_user_id, $conn)
{
    $query = "
    SELECT * FROM chat_message 
    WHERE (from_user_id = '".$from_user_id."'
    AND to_user_id = '".$to_user_id."')
    OR (from_user_id = '".$to_user_id."'
    AND to_user_id = '".$from_user_id."')
    ORDER BY timestamp DESC
    ";
    $statement = mysqli_query($conn, $query);

    $output = '<ul class="list-unstyled">';

    while($row = mysqli_fetch_array($statement))
    {

        $user_name = '';
        if($row["from_user_id"] == $from_user_id)
        {
            $user_name = '<b class="text-success">You</b>';
        }
        else
        {
            $user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $conn). '</b>';
        }
        $output .= '
        <li style="border-bottom:1px dotted #ccc">
            <p>'.$user_name.' - '.$row["chat_message"].'
                <div align="right">
                    - <small><em>'.$row['timestamp'].'</em></small>
                </div>
            </p>
        </li>
        ';    
    }
    $output .= '</ul>';
    $query = mysqli_query($conn, "update chat_message set status = '0' where from_user_id = '".$to_user_id."'AND to_user_id = '".$from_user_id."' AND status = '1'
    ");
    return $output;
}

function get_user_name($user_id, $conn)
{
    $query = "SELECT username FROM `login` WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result))
    {
        return $row['username'];
    }
        
}

function count_unseen_message($from_user_id, $to_user_id, $conn)
{
    $query = "SELECT * FROM chat_message WHERE from_user_id = '$from_user_id' AND to_user_id = '$to_user_id' AND status = '1'
    ";
    $result = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);
    $output = '';
    if($count > 0)
    {
        $output = '<span class="badge badge-success">'.$count.'</span>';
    }


    return $output;
}

function fetch_is_type_status($user_id, $conn)
{
    $query = "
    SELECT is_type FROM login_details
    WHERE user_id = '".$user_id."'
    ORDER BY last_activity  DESC 
    LIMIT 1
    ";

    $statement = mysqli_query($conn, $query);
    $output = '';
    $row = mysqli_fetch_array($statement);
    {
        if($row["is_type"] == 'yes')
        {
            $output = ' - <small><em><span class="text-muted">Typing...</span></em></smal>';
        }
    }
   return $output;
}

?>