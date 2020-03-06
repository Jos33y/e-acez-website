<?php 
include('dbconn.php');

session_start();


if(isset($_GET['chatapp'])){

    $chat_email = $_GET['chatapp'];

    $get_user = "select * from login where email='$chat_email'";

        $run_user = mysqli_query($conn, $get_user);

        $row = mysqli_fetch_array($run_user);
        
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];

        $sub_query = "insert into login_details (user_id) values ('".$row['user_id']. "')";

        $sub_result = mysqli_query($conn, $sub_query);

        $_SESSION['login_details_id'] = $connect->lastInsertId()
        ;

    header('location:index.php');
}
?>