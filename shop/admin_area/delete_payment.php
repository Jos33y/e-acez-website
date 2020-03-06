<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<?php 
    if(isset($_GET['delete_payment'])){

        $delete_payment_id = $_GET['delete_payment'];

        $delete_payment = "delete from payments where payment_id='$delete_payment_id'";

        $run_delete_payment = mysqli_query($con, $delete_payment);

        if($run_delete_payment){

            echo "<script>alert('Payment has been Deleted Successfully')</script>";

            echo "<script>window.open('index.php?view_payments', '_self')</script>";



        }
    }
?>


<?php } ?>