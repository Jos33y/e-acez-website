<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<?php 
    if(isset($_GET['delete_customer'])){

        $delete_customer_id = $_GET['delete_customer'];

        $delete_customer = "delete from customers where customer_id='$delete_customer_id'";

        $run_delete_customer = mysqli_query($con, $delete_customer);

        if($run_delete_customer){

            echo "<script>alert('Customer details has been Deleted Successfully')</script>";

            echo "<script>window.open('index.php?view_customers', '_self')</script>";



        }
    }
?>


<?php } ?>