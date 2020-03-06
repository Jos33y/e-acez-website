<?php
         $active ='Account';
        include("includes/header.php");
?>
</nav>
</header>

<div id="content"><!-- content Begin -->
    <div class="container"><!-- container-fluid Begin -->
        <div class="row">
            <div class="col-md-12"><!-- col-md-12 Begin -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"><!-- breadcrumb Begin -->
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            My Account
                        </li>
                    </ol><!-- breadcrumb Finish -->
                </nav>
            </div><!-- col-md-12 Finish -->
        </div>
    </div>

<div class="row"><!--row begin -->

        <div class="col-md-3"><!-- col-sm-3 Begin -->

        
                <?php

                include("includes/sidebar.php");

                ?>

        </div><!-- col-sm-3 Finish -->

        <div class="col-md-9">

            <div class="box">

                <?php

                    if (isset($_GET['my_orders'])){
                        include("my_orders.php");

                    }

                ?>
                <?php

                    if (isset($_GET['pay_offline'])){
                        include("pay_offline.php");

                    }

                ?>

                
                <?php

                    if (isset($_GET['chat_seller'])){
                        include("chat.php");

                    }

                ?>

                <?php

                    if (isset($_GET['edit_account'])){
                        include("edit_account.php");

                    }

                ?>

                <?php

                    if (isset($_GET['change_pass'])){
                        include("change_pass.php");

                    }

                ?>

                <?php

                    if (isset($_GET['delete_account'])){
                        include("delete_account.php");

                    }

                ?>
            </div>
        </div>

        </div><!-- row finish -->

</div><!-- container finish -->
</div>

<?php

    include("includes/footer.php");

    ?>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</body>
</html>

