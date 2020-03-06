<?php
session_start();

include("includes/dbcon.php");
include("functions/functions.php");

?>

<?php 
$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con, $get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['customer_email'];

?>

<?php

if(isset($_GET['c_id'])){

    $customer_id = $_GET['c_id'];

}
$total =0;
$ip_add = getRealIpUser();

$status = "pending";

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con, $select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

    $pro_id = $row_cart['p_id'];

    $pro_qty = $row_cart['quantity'];

    $pro_size = $row_cart['size'];

    $get_products = "select * from products where product_id='$pro_id'";

    $run_products = mysqli_query($con, $get_products);

    while($row_products = mysqli_fetch_array($run_products)){

        $product_title = $row_products['product_title'];

        $sub_total = $row_products['product_price'] * $pro_qty;

        $total += $sub_total; 

    }

       
        $insert_pending_order = "insert into pending_orders 
        (customer_email, invoice_no, product_name, quantity, size, order_status) 
        values ('$customer_email', '$invoice_no', '$product_title', '$pro_qty', '$pro_size', '$status') ";

        $run_pending_order = mysqli_query($con, $insert_pending_order);

        $insert_customer_order = "insert into customer_orders 
        (customer_email, due_amount, invoice_no, quantity, size, order_date, order_status) 
        values ('$customer_email', '$sub_total', '$invoice_no', '$pro_qty', '$pro_size', NOW(), '$status') ";
        
        $run_customer_order = mysqli_query($con, $insert_customer_order);

        $insert_into_payment = "insert into payments (customer_email, invoice_no, amount) values ('$customer_email', '$invoice_no','$total')";

        $run_payment = mysqli_query($con, $insert_into_payment);

        $delete_cart = "delete from cart where ip_add='$ip_add'";

        $run_delete = mysqli_query($con, $delete_cart);      
}





    echo "<script>alert('Your orders has been submitted, Thanks')</script>";
        
        echo "<script>window.open('customer/my_account.php?pay_offline', '_self')</script>";

?>