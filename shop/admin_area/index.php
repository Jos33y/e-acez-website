    <?php  

session_start();
include("includes/dbcon.php");
include("includes/header.php");
    

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://www.e-acez.com/sign-in.php', '_self')</script>";

}else{
    $admin_session = $_SESSION['email'];

    //$get_admin = "select * from user_db where email = '$admin_session'";

    $get_admin = "select * from customer_info where email = '$admin_session'";

    $run_admin = mysqli_query($conn, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['customer_id'];

    $admin_name = $row_admin['firstname'];

    $admin_name2 = $row_admin['lastname'];

    $shop_name = $row_admin['business_name'];

    $admin_email = $row_admin['email'];

    $admin_phone = $row_admin['phone_number'];

    $shop_address = $row_admin['address'];

    $admin_state = $row_admin['state'];

    $admin_country = $row_admin['country'];

    $admin_about = $row_admin['about'];

    $admin_image = $row_admin['profile_image'];


    $get_products = "select * from products";

    $run_products = mysqli_query($con, $get_products);

    $count_products = mysqli_num_rows($run_products);

    $get_customers = "select * from customers";

    $run_customers = mysqli_query($con, $get_customers);

    $count_customers = mysqli_num_rows($run_customers);

    $get_p_categories = "select * from product_categories";

    $run_p_categories = mysqli_query($con, $get_p_categories);

    $count_p_categories = mysqli_num_rows($run_p_categories);

    $get_pending_orders = "select * from pending_orders";

    $run_pending_orders = mysqli_query($con, $get_pending_orders);

    $count_pending_orders = mysqli_num_rows($run_pending_orders);
     
?>
   
<body>

        <div id="wrapper"><!-- wrapper Begin -->

            <?php include("includes/sidebar.php"); ?>

            <div id="page-wrapper"><!-- page-wrapper Begin -->
                <div class="container-fluid"><!-- container-fluid Begin -->

                    <?php 

                        if(isset($_GET['dashboard'])){

                            include("dashboard.php");
                        }
                        if(isset($_GET['chat'])){

                            include("chat.php");
                        }
                        if(isset($_GET['insert_products'])){

                            include("insert_product.php");
                        }
                        if(isset($_GET['view_products'])){

                            include("view_products.php");
                        }

                        if(isset($_GET['delete_product'])){

                            include("delete_product.php");
                        }
                        if(isset($_GET['edit_product'])){

                            include("edit_product.php");
                        }
                        if(isset($_GET['insert_p_cat'])){

                            include("insert_p_cat.php");
                        }
                        if(isset($_GET['view_p_cats'])){

                            include("view_p_cats.php");
                        }
                        if(isset($_GET['delete_p_cat'])){

                            include("delete_p_cat.php");
                        }
                        if(isset($_GET['edit_p_cat'])){

                            include("edit_p_cat.php");
                        }
                        if(isset($_GET['insert_slide'])){

                            include("insert_slide.php");
                        }
                        if(isset($_GET['view_slides'])){

                            include("view_slides.php");
                        }
                        if(isset($_GET['delete_slide'])){

                            include("delete_slide.php");
                        }
                        if(isset($_GET['edit_slide'])){

                            include("edit_slide.php");
                        }
                        if(isset($_GET['view_customers'])){

                            include("view_customers.php");
                        }
                        if(isset($_GET['delete_customer'])){

                            include("delete_customer.php");
                        }
                        if(isset($_GET['view_orders'])){

                            include("view_orders.php");
                        }
                        if(isset($_GET['delete_order'])){

                            include("delete_order.php");
                        }                       
                        if(isset($_GET['view_payments'])){

                            include("view_payments.php");
                        }
                        if(isset($_GET['delete_payment'])){

                            include("delete_payment.php");
                        }
                        if(isset($_GET['view_profile'])){

                            include("view_profile.php");
                        }
                        if(isset($_GET['view_shop_profile'])){

                            include("view_shop_profile.php");
                        }
                        if(isset($_GET['edit_profile'])){

                            include("edit_profile.php");
                        }
                        if(isset($_GET['edit_shop_profile'])){

                            include("edit_shop_profile.php");
                        }
                        if(isset($_GET['insert_term'])){

                            include("insert_term.php");
                        }
                        if(isset($_GET['view_terms'])){

                            include("view_terms.php");
                        }
                        if(isset($_GET['delete_term'])){

                            include("delete_term.php");
                        }
                        if(isset($_GET['edit_term'])){

                            include("edit_term.php");
                        }
                        if(isset($_GET['edit_css'])){

                            include("edit_css.php");
                        }
                        if(isset($_GET['edit_social'])){

                            include("edit_social.php");
                        }
                        if(isset($_GET['view_social'])){

                            include("view_social.php");
                        }
                        if(isset($_GET['share'])){

                            include("share.php");
                        }
                        if(isset($_GET['view_users'])){

                            include("view_users.php");
                        }                                        
                        
                    ?>

                </div><!-- container-fluid Finish -->
            </div><!-- page-wrapper Finish -->
        </div><!-- wrapper Finish -->


        <script src="js/jquery-331.min.js"></script> 
        <script src="js/bootstrap-337.min.js"></script>
</body>
</html>

                    <?php  } ?>