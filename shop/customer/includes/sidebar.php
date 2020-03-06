
<div class="card sidebar-menu "><!--card begin-->

    <div class="card-header"><!-- card header sidebar-menu begin-->

       <?php

       $customer_session = $_SESSION['customer_email'];

       $get_customer = "select * from customers where customer_email='$customer_session'";

       $run_customer = mysqli_query($con, $get_customer);

       $row_customer = mysqli_fetch_array($run_customer);

       $customer_image = $row_customer['customer_image'];

       $customer_email   = $row_customer['customer_email'];

       $firstname = $row_customer['firstname'];

       $lastname = $row_customer['lastname'];

       if(!isset($_SESSION['customer_email'])){

       }else{

        echo "
        <div class='text-center'>

        <img class='customer-image rounded' src='customer_images/$customer_image' width='200' height='200' alt='$customer_image' >

    </div>
    <br/>

        <h5 class='card-title text-center'> $lastname  $firstname</h5>
        
        ";

       }
       ?>

    </div><!--card-header finish-->

    <div class="card-body"><!--card-body begin -->

        <ul class="nav nav-pills flex-column flex-sm-row"><!--nav nav-pills nav-stacked category-menu begin-->

                <li class="nav-item <?php if(isset($_GET['my_orders'])) {echo"active"; }?>">
                        <a  class="nav-link" href="my_account.php?my_orders">
                                <i class="fa fa-list"></i> My Orders   </a>
                </li>

                 <li class="nav-item <?php if(isset($_GET['chat_seller']))  {echo"active"; } ?>">
                        <a class="nav-link" href="chatapp/login.php?chatapp=<?php echo $customer_email; ?>" target="_blank">
                                <i class="fa fa-comments"></i> Chat with Seller
                        </a>
                </li>

                <li class="nav-item <?php if(isset($_GET['edit_account'])) {echo"active"; }  ?>">
                        <a  class="nav-link" href="my_account.php?edit_account">
                                <i class="fa fa-pencil"></i> Edit Account
                        </a>
                </li>

                <li class="nav-item <?php if(isset($_GET['change_pass'])) {echo"active"; }  ?>">
                        <a class="nav-link" href="my_account.php?change_pass">
                                <i class="fa fa-user"></i> Change Passowrd
                        </a>
                </li>

                <li class="nav-item <?php if(isset($_GET['delete_account'])) {echo"active"; }  ?>">
                        <a  class="nav-link" href="my_account.php?delete_account">
                                <i class="fa fa-trash-o"></i> Delete Account
                        </a>
                </li>

                <li class=" nav-item">
                        <a class="nav-link" href="../logout.php">
                                <i class="fa fa-sign-out"></i> Log Out
                        </a>
                </li>

    </ul><!--nav nav-pills nav-stacked category-menu finish-->

    </div><!--panel-body finish-->
</div><!-- card sidebar-menu finish-->

