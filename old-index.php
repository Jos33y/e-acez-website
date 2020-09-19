<?php
$active = "index";
$title = "welcome to e-acez";
include('include/header.php')

?>

 <!-- home page header-->

 <div class="container-fluid home-page-header">
          <div class="index text-center">
              <br>
              <br>
              <span class="header-text">Get Your Business Online</span> <br>
              <span class="sub-text">The best place to rent an online shop</span>               
                <div class="button">
                <a href="customer/register.php" class="btn btn-outline-light"> Get Started</a>
                </div>
            </div>

</div>
<!-- our features -->
<div class="container">
    <div class="title text-center">
        <h2 class="one"> Our unique features </h2>
        <hr class="line" width="15%" >
    </div>
    <!-- card deck -->
    <div class="card-deck">
        <div class="card bg-primary">
            <div class="card-body text-center">
            <i class="fas fa-store-alt"></i>
            <br>
            <span class="sub-title">Super Responsive Stores</span>
            <p class="card-text">
            The stores are so responsive that they go through no lag.
             A tap and your customer’s are in.
            </p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
            <i class="far fa-credit-card"></i>
            <br>
            <span class="sub-title">Easy and Secured Payment Gateways</span>
            <p class="card-text">
            We offer various mediums of payment both offline and online;
             the good thing is every transaction/form of payment is secured by Paystack!
            </p>
            </div>
        </div>
        <div class="card bg-success">
            <div class="card-body text-center">
            <i class="far fa-comments"></i>
            <br>
                <span class="sub-title">Chat Redirect</span>
            <p class="card-text">Stores possess a chat function where customers and sellers can communicate efficiently on whatsapp.
                 This makes communication between sellers and customers easier.</p>
            </div>
        </div>
        <div class="card bg-danger">
            <div class="card-body text-center">
            <i class="fab fa-buromobelexperte"></i>
            <br>
            <span class="sub-title">Online Showroom</span>
            <p class="card-text">  We offer an amazing showroom features for you to showcase your products in any order you want.</p>
            </div>
        </div>
    </div>

</div>

<!-- our services -->
<div class="container">
    <div class="title text-center">
        <h2 class="one"> Our unique services </h2>
        <hr class="line" width="15%">
    </div>

    <div class="row services">
        <div class="col-lg">
            <i class="fas fa-headset"></i>
            <br>
            <span class="sub-title">24X7 live support</span>
            <br>
            <p class="title-text">
            E-acez Live Chat enables you to chat online to with a member
             of our customer service representative about selected products and services. 
            </p>
        </div>

        <div class="col-lg">
            <i class="fas fa-tachometer-alt"></i>
            <br>
            <span class="sub-title">Easy to use Dashboard</span>
            <br>
            <p class="title-text">
            The seller’s dashboard where the store is managed: it is very easy to use and understand. No complexities at all!
            </p>

        </div>

        <div class="col-lg">
            <i class="fas fa-user-edit"></i>
            <br>
            <span class="sub-title">Personalization</span>
            <br>
            <p class="title-text">
            Each e-commerce store is built to suit the taste of the store owner(seller), 
            the store carries the Brand's name, Brand's logo, and everything the Store's owner wants to integrate.
            </p>
        </div>

        <div class="col-lg">
            <i class="far fa-clock"></i>
            <br>
            <span class="sub-title">99.8% store uptime</span>
            <br>
            <p class="title-text">
            Every store has a 99.8% uptime which means your store is accessible at every hour. 
                Smoky put, all stores are available 24/7.
            </p>

        </div>
    </div>
</div>

<!--- shops for rent -->
<div class="shop-rent">
    <div class="container"> 
        <div class="title text-center">
            <h2 class="one"> Shops for rent </h2>

            <div class="row services">
                <div class="col">
                    <i class="fas fa-tshirt"></i>
                    <br>
                    <span class="sub-title">Fashion</span>
                    <br>
                </div>

                <div class="col">
                    <i class="fas fa-glasses"></i>
                    <br>
                    <span class="sub-title">Beauty</span>
                    <br>
                </div>

                <div class="col">
                   <i class="fas fa-laptop"></i>
                    <br>
                    <span class="sub-title">Electronics</span>
                    <br>
                </div>

                <div class="col">
                    <i class="fas fa-network-wired"></i>
                    <br>
                    <span class="sub-title">Others</span>
                    <br>
                </div>
            </div>

        <div class="button">
        <a href="customer/register.php" class="btn btn-light"> Rent shop</a>
        </div>
    </div>
    </div>
</div>


    <!-- recent blog post  -->
<div class="container">
    <div class="title text-center">
        <h2 class="one"> Recent blog posts </h2>
        <hr class="line" width="15%" >
    </div>

    <div class="row post-box">
        <div class="col-md-4 col-sm-4">
          <span class="steps">Post one:</span>
          <div class="card">
            <div class="card-header"> Welcome to e-acez</div>
            <img class="card-img-top" src="images/post-one.jpg" alt="Post Image">
            <div class="card-footer">
              <p>Hi there! Welcome to E-acez;
                   an online platform that provides personalised e-commerce stores.</p>
              <a href ="http://bit.ly/eacez-post-2" class="btn btn-sm btn-info stretched-link" target="_blank" style="float: right">Read...</a>
            </div>
          </div>
        </div>

       <!-- post 2 -->
       <div class="col-md-4 col-sm-4"> 
        <span class="steps">Post two:</span>
          <div class="card">
            <div class="card-header"> What is e-acez all about?</div>
            <img class="card-img-top" src="images/post-two.jpg" alt="Post Image">
            <div class="card-footer">
              <p>We are giving a quick insight into what E-acez is all about 
                  with focus on some of it unique features and service.</p>
              <a href ="http://bit.ly/eacez-post-1" class="btn btn-sm btn-info stretched-link" target="_blank" style="float: right">Read...</a>
            </div>
          </div>
       </div>

      <!-- post 3 -->
        <div class="col-md-4 col-sm-4"> </div>

      </div>
</div>

<!--- connect with e-acez -->
<div class="connect">
    <div class="container"> 
        <div class="title text-center">
            <h2 class="one"> Connect with us </h2>
            <hr class="line" width="15%">
            <div class="row services">
                <div class="col-12 social padding">
                               <a href="http://fb.me/eacez" target="_blank"><i class="fab fa-facebook"></i></a>
                               <a href="http://twitter.com/acez_e" target="_blank"><i class="fab fa-twitter"></i></a>
                               <a href="#"><i class="fab fa-instagram"></i></a>
                               <a href="https://www.youtube.com/channel/UCeBhGK7eX1If0pvV30VK-7w" target="_blank"><i class="fab fa-youtube"></i></a>
                           </div>
            </div>

    </div>
    </div>
</div>

<?php

include('include/footer.php');

?>

</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>

