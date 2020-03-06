<div class="text-center">

    <h2 class="display-6"> Do You Really Want To Delete Your Account ? </h2>

    <hr>
    <br/>

        <form action="" method="post">

            <input type="submit" name="Yes" value="Yes, I Want To Delete" class="btn btn-danger">

            <input type="submit" name="No" value="No, I Don't Want To Delete" class="btn btn-primary">

        </form>

        <br/>

</div>

<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){

    $delete_customer = "delete from customers where customer_email='$c_email'";

    $run_delete_customer = mysqli_query($con, $delete_customer);

    if($run_delete_customer){

        session_destroy();

        echo "<script>alert('Account deleted successfully, we feel sorry for you having to leave us')</script>";

        echo "<script>window>open('../index.php', '_self')</script>";

    }
}

if(isset($_POST['No'])){

    echo "<script>window.open('My_account.php', '_self')</script>";
}

?>