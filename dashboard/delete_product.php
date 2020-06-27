
<?php include("include/dbconn.php"); ?>
<?php 
    if(isset($_GET['prod_id'])){

        $delete_id = $_GET['prod_id'];

        $delete_pro = "delete from products where prod_id='$delete_id'";

        $run_delete = mysqli_query($con, $delete_pro);

        if($run_delete){

            echo "<script>alert('Product has been Deleted Successfully')</script>";

            echo "<script>window.open('view_products.php', '_self')</script>";


        }
    }
?>