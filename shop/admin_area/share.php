<?php

if(!isset($_SESSION['email'])){

    echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";
 
 }else{


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> View Social Media Links </title>
    
    
   
</head>
<body>   
    <div class="row"><!-- row Begin -->

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Social Media

                </li>


            </ol>

        </div>

    </div><!--row Finish -->
    <div class="row">

        <div class="col-lg-12 ">
        

            <div class="panel panel-default">

                <div class="panel-heading">
                   
                    <h3 class="panel-title">

                        <i class="fa fa-share"></i> Share Shop Link

                    </h3>

                </div>

                <div class="panel-body">

                    <div class="text-center">
                        <h4> Share Link on the following social platform </h4>
                    </div>
                    <div class="social-link">

                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.e-acez.com/zangawears/index.php" target="_blank" class="fa fa-facebook"></a>
                        <a href="http://twitter.com/share?text=check out my online store&url=https://www.e-acez.com/zangawears/index.php" target="_blank"  class="fa fa-twitter"></a>
                        <a href="whatsapp://send?text=https://www.e-acez.com/zangawears/index.php" data-action="share/whatsapp/share" target="_blank" class="fa fa-whatsapp"></a>
                        <a href="http://pinterest.com/pin/create/button/?url=https://www.e-acez.com/zangawears/index.php" target="_blank" class="fa fa-pinterest-square"></a>
                        <a href="http://www.reddit.com/submit?url=https://www.e-acez.com/zangawears/index.php" target="_blank" class="fa fa-reddit-square"></a>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.e-acez.com/zangawears/index.php" target="_blank" class="fa fa-linkedin-square"></a>
                    </div>


                </div>


        </div>

    </div>

</div>

</body>
</html>

<?php } ?>