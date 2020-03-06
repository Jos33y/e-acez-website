<?php
// insert_chat.php 

include('dbconn.php');

session_start();

$data = array(
    $to_user_id     = $_POST['to_user_id'],
    $from_user_id   = $_SESSION['user_id'],
    $chat_message   = $_POST['chat_message'],
    $status         =  1
);


$query = "insert into chat_message (to_user_id, from_user_id, chat_message, status) values ('$to_user_id', '$from_user_id', '$chat_message', '$status')
"; 

$statement = mysqli_query($conn, $query);

if($statement == 1)
{
    echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $conn);
}
?>