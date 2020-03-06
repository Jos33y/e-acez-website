<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<?php 
    if(isset($_GET['delete_order'])){

          $delete_order_id = $_GET['delete_order'];

          $get_p_orders = "select * from pending_orders where order_id='$delete_order_id'";

                $run_p_orders = mysqli_query($con, $get_p_orders);
        
              $row_p_orders = mysqli_fetch_array($run_p_orders);
        
                     $invoice = $row_p_orders['invoice_no'];
              

        $delete_p_order = "delete from pending_orders where invoice_no='$invoice'";

        $run_delete_p_order = mysqli_query($con, $delete_p_order);

        $delete_c_order = "delete from customer_orders where invoice_no='$invoice'";

        $run_delete_c_order = mysqli_query($con, $delete_c_order);

        if($run_delete_p_order){
            if($run_delete_c_order){


            echo "<script>alert('Customer Order has been Deleted Successfully')</script>";

            echo "<script>window.open('index.php?view_orders', '_self')</script>";

            }

        }
    }
?>


<?php } ?>