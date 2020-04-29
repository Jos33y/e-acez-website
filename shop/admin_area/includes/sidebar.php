<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>


<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top Begin -->
    <div class="navbar-header"><!-- navbar-header Begin -->

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse" ><!-- navbar-toggle Begin -->

            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button><!-- navbar-toggle Finish -->

        <a href="index.php?dashboard" class="navbar-brand">Admin </a>
        <a href="https://www.e-acez.com/zangawears/index.php" class="navbar-brand" target="_blank"><small>View Store </small> </a>

    </div><!-- navbar-header Finish -->

    <ul class="nav navbar-right top-nav"><!-- nav navbar-right-top-nav Begin -->

        <li><!-- dropdown Begin -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                <i class="fa fa-user"></i> <?php echo $admin_name ;?> <b class="caret"></b>

            </a>

        <ul class="dropdown-menu"><!-- dropdown-menu Begin -->

            <li><!-- list Begin -->
                <a href="index.php?view_profile"><!-- href Begin -->

                    <i class="fa fa-fw fa-user"></i> Profile

                </a><!-- href Finish -->
            </li> <!--list FInish-->

            <li><!-- list Begin -->
                <a href="index.php?view_products"><!-- href Begin -->

                    <i class="fa fa-fw fa-envelope"></i> Products

                    <span class="badge badge-secondary"><?php echo $count_products ;?></span>

                </a><!-- href Finish -->
            </li> <!--list FInish-->

            <li><!-- list Begin -->
                <a href="index.php?view_customers"><!-- href Begin -->

                    <i class="fa fa-fw fa-users"></i> Customers

                    <span class="badge badge-secondary"><?php echo $count_customers ;?></span>

                </a><!-- href Finish -->
            </li> <!--list FInish-->

            <li><!-- list Begin -->
                <a   href="index.php?view_cats"><!-- href Begin -->

                    <i class="fa fa-fw fa-gear"></i> Product Categories

                    <span class="badge badge-secondary"><?php echo $count_p_categories ;?></span>

                </a><!-- href Finish -->
            </li> <!--list FInish-->

            <li class="divider"></li>

            <li><!-- list Begin -->
                <a  href="logout.php"><!-- href Begin -->

                    <i class="fa fa-fw fa-power-off"></i> Logout

                </a><!-- href Finish -->
            </li> <!--list FInish-->

        </ul><!-- drop-down-menu Finish -->

        </li><!--  Dropdown Finish -->

    
    </ul><!-- nav navbar-right-top-nav Finish -->

    <div class="collapse navbar-collapse navbar-exl-collapse"><!-- collapse navbar-collapse navbar-exl-collapse Begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Begin -->
            <li><!-- list Begin -->
                <a href="index.php?dashboard"><!-- href Begin -->

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a><!-- href Finish -->

            </li><!-- list Finish -->

            <li><!-- list Begin -->
                <a href="chatapp/login.php?chatapp=<?php echo $admin_email; ?>"><!-- href Begin -->

                    <i class="fa fa-fw fa-comments"></i> Chat with Customers

                </a><!-- href Finish -->

            </li><!-- list Finish -->

            <li  ><!-- list Begin -->
                <a href="#" data-toggle="collapse" data-target="#products"><!-- href Begin -->

                    <i class="fa fa-fw fa-tag"></i> Products
                    <i class="fa fa-fw fa-caret-down"></i> 

                </a><!-- href Finish -->

                <ul id="products" class="collapse"><!-- Begin Finish -->
                    <li>
                        <a href="index.php?insert_products"> Insert Product </a>
                    </li>
                    <li>
                        <a href="index.php?view_products"> View Products </a>
                    </li>
                </ul><!-- collapse Finish -->

            </li><!-- list Finish -->

            <li  ><!-- list Begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- href Begin -->

                    <i class="fa fa-fw fa-edit"></i> Products Categories
                    <i class="fa fa-fw fa-caret-down"></i> 

                </a><!-- href Finish -->

                <ul id="p_cat" class="collapse"><!-- Begin Finish -->
                    <li>
                        <a  href="index.php?insert_p_cat"> Insert Product Category </a>
                    </li>
                    <li>
                        <a  href="index.php?view_p_cats"> View Products Categories</a>
                    </li>
                </ul><!-- collapse Finish -->

            </li><!-- list Finish -->

            <li><!-- list Begin -->
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a>
            </li><!-- list Finish -->

            <li><!-- list Begin -->
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-book"></i> View Orders
                </a>
            </li><!-- list Finish -->

            <li><!-- list Begin -->
                <a href="index.php?view_payments">
                    <i class="fa fa-fw fa-money"></i> View Payments
                </a>
            </li><!-- list Finish -->

          
            <li  ><!-- list Begin -->
                <a href="#" data-toggle="collapse" data-target="#social"><!-- href Begin -->

                    <i class="fa fa-share-square"></i> Social Media
                    <i class="fa fa-fw fa-caret-down"></i> 

                </a><!-- href Finish -->

                <ul id="social" class="collapse"><!-- Begin Finish -->
                    <li>
                        <a href="index.php?edit_social"> Edit Social Medial Links </a>
                    </li>
                    <li>
                        <a href="index.php?view_social"> View Social Media Link </a>
                    </li>
                    <li>
                        <a href="index.php?share"> Share on Social Medias </a>
                    </li>
                </ul><!-- collapse Finish -->

            </li><!-- list Finish -->

            <li><!-- list Begin -->
                <a href="index.php?edit_css">
                    <i class="fa fa-fw fa-pencil"></i> Edit CSS
                </a>
            </li><!-- list Finish -->

            <li  ><!-- list Begin -->
                <a href="#" data-toggle="collapse" data-target="#users"><!-- href Begin -->

                    <i class="fa fa-fw fa-users"></i> Profile
                    <i class="fa fa-fw fa-caret-down"></i> 

                </a><!-- href Finish -->

                <ul id="users" class="collapse"><!-- Begin Finish -->

                    <li>
                        <a href="index.php?view_profile"> View Profile</a>
                    </li>
                    <li>
                        <a href="index.php?view_shop_profile"> View Shop Profile</a>
                    </li>
                </ul><!-- collapse Finish -->

            </li><!-- list Finish -->

            <li><!-- list Begin -->
                <a href="index.php?view_users"><!-- href Begin -->

                    <i class="fa fa-fw fa-comments"></i> View users

                </a><!-- href Finish -->

            </li><!-- list Finish -->


            <li  ><!-- list Begin -->
                <a href="#" data-toggle="collapse" data-target="#developer"><!-- href Begin -->

                    <i class="fa fa-fw fa-phone"></i> Contact Developer
                    <i class="fa fa-fw fa-caret-down"></i> 

                </a><!-- href Finish -->

                <ul id="developer" class="collapse"><!-- Begin Finish -->
                    <li>
                        <a href="tel:+2347037344408"> Call Developer </a>
                    </li>
                    <li>
                        <a href="mailto:josephlagbalu@gmail.com"> Mail Developer </a>
                    </li>
                    
                </ul><!-- collapse Finish -->

            </li><!-- list Finish -->
            <br>

        </ul><!-- nav navbar-nav side-nav Finish -->
    </div><!-- collapse navbar-collapse navbar-exl-collapse Finish -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Finish -->

<?php   } ?>