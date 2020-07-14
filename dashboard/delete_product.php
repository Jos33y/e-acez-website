<?php

if(!isset($_SESSION['email'])){

echo "<script>window.open('../sign-in.php', '_self')</script>";

}else{

?>

<?php 
    if(isset($_GET['delete_product'])){

        $delete_id = $_GET['delete_product'];

        $delete_pro = "delete from products where prod_id='$delete_id'";

        $run_delete = mysqli_query($con, $delete_pro);

        if($run_delete){

            echo "<script>alert('Product has been Deleted Successfully')</script>";

            echo "<script>window.open('index.php?view_products=1', '_self')</script>";


        }
    }
?>

<?php } ?>