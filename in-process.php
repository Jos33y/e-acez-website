<?php

include('include/dbconn.php');

if(!isset($_SESSION['user_id'])){

  echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>
<?php

 if(isset($_GET['user_id'])){

   $user_id = $_GET['user_id'];

   $get_user = "select * from user_db where user_id = '$user_id'";
      
   $run_user  = mysqli_query($con , $get_user);

    $row = mysqli_fetch_array($run_user);

    $first_name = $row['first_name'];

    $last_name = $row['last_name'];

 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title> welcome to e-acez </title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    
         <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>

         <link rel="stylesheet" href="styles/index.css">
    </head>

<body>
<div class="in-process">
  <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="index.php">
              <img src="images/eiconweb.png" class="logo">
              <span class="logo-head">e-acez </span>
          </a>
                    

            <button class="navbar-toggler " type="button" data-toggle="collapse" 
            data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon my-toggler "></span>
              </button>

              <div class="collapse navbar-collapse"></div>

              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                              </li>
                        <li class="nav-item">
                                <a class="nav-link" href="how-it-works.php"> Blog</a>
                              </li>
                    </ul>
                                      
                            <div class="button">
                                <a href="sign-out.php" class="btn btn-danger btn-sm "> Sign Out </a>
                               </div>
                    
                    </div>
        </div>
        </nav>
</div>
        <!-- first row -->
        <div class="container col-one">
         
        <h2 class="temp-head text-center" style="color: #222;"> <?php echo $last_name . " " . $first_name; ?> </h2>
          <h3 class="text-center" style="letter-spacing: 1px;">WOAH... If you seeing this page, two things might have happened!!!</h3>
      
      <br>
      <hr>

  <div class="row">
    <!-- NEw Column -->
      <div class="col-md-6" style="margin-top: 20px;">
          <div class="card">
              <div class="card-header"><strong>One: You've just registered on e-acez</strong></div>
                
                  <img class="card-img-top rounded align-content-center" src="images/in-process-1.jpg" alt="image">
                  <br>
                   <br>
             <div class="card-body">
                  <p> If you just registered on e-acez, you are welcome on board. We will love to inform you that 
                    the development of your store is in progress and will be ready soonest.</p>
                  <p>  Just in case you have not received a call from any of our in-house developer, kindly click the chat with our developer button to get in touch with one of our developers. 
                    In either case, our developers will take care of your store personalization and attend to every other issue you might encounter.
             </div>
          </div>
      </div>

      <!-- developer circle -->
      <div class="developer">
    <div class="container-fluid">
          <div class="text-center">
            
            <h1 class="four-heading">Our Web developers build the shop</h1>
                <p class="four-sub">In-house web developers personalize the shop for you and upload it online. </p>
                <p class="four-sub">You can communicate with our web developers through this medium to explain how personalize you want your shop to be. </p>
               
                  <div class="row">
                      <div class="col-3">
                         <a href="tel:+2347037344408">
                          <div class="icon-social">                          
                             <i class="fas fa-phone-alt"></i>
                           </div>
                           </a>
                        <p><span class="contact">Call</span></p>
                      </div>

                      <div class="col-3">
                        <a href="https://wa.me/2347037344408">
                             <div class="icon-social">
                                  <i class="fab fa-whatsapp-square"></i>                        
                         </div>
                        </a>
                      <p><span class="contact">WhatsApp</span></p>
                      </div>

                      <div class="col-3">
                            <a href="mailto:josephlagbalu@gmail.com">
                          <div class="icon-social"> 
                             <i class="fas fa-envelope"></i>
                        </div>
                            </a>
                      <p><span class="contact">Email</span></p>
                      </div>

                      <div class="col-3">
                        <a href="https://m.me/lagbalu.joseph">
                         <div class="icon-social">
                            <i class="fab fa-facebook-messenger"></i>                           
                         </div>
                          </a>
                              <p><span class="contact">Messenger</span></p>
                      </div>
                  </div>
               

                </div>
          </div>
</div>

<!--- New Column -->
      <div class="col-md-6" style="margin-top: 20px;">
          <div class="card">
             <div class="card-header"><strong>Two: Your subscription has expired</strong></div>
               
                <img class="card-img-top rounded" src="images/in-process-2.jpg" alt="image2">

             <div class="card-body">
                <p> Hey! Your subscription has expired and your account has been deactivated.  </p>
                <p>We value your web presence and we will help you get back online in no time. Renew your subscription now to get 10% discount on any plan.</p>
                <p>Select a plan below.</p>
                        <!--- Plan Subscription-->
                        <div class="row justify-content-center">
                              <div class="col-sm-8">
                                <div class="card">
                                  <div class="card-body">
                                    <form  method="post">,
                                          <div class="form-group">

                                      <label for="nonthly plan"  class="sr-only">Monthly Plans</i></label>

                                          <select type="text" class="form-control" id="payment" name="amount">

                                              <option  value="100">One Month ---- &#8358; 100</option>
                                              <option  value="5000">One Month ---- &#8358; 5,000</option>
                                              <option value="13500">Three Months ---- &#8358; 13,500</option>
                                              <option value="22000">Five Months ---- &#8358; 22,000</option>
                                              <option value="28000">Seven Months ---- &#8358; 28,000</option>
                                              <option value="35000">Nine Months ---- &#8358; 35,000</option>
                                              <option value="45000">One Year ---- &#8358; 45,000</option>
                                            

                                                </select>

                                          </div>
                                          <div class="form-group text-center">
                                                          <button class="btn btn-sm btn-primary" name="next_pay" >Select Plan </button>
                                                          <a href="index.php"> 
                                                                  </button></a>                 
                                          </div>
                                    </form>
                                  </div>
                              </div>
                            </div>
                        </div>
                          <!-- Plan Subscription End -->
          </div>
      </div>
  </div>
  </div>
        </div>
  <!--Developer circle-->


  <!-- Not interested column -->
  <div class="container">
                  <hr>
        <div class="row justify-content-center" style="margin-top: 20px;">
          <div class="col-md-8">
            <div class="card">
                 <div class="card-header"><strong>Not interested again</strong></div>
            <div class="card-body">
              <p> If for any reason you don't want to renew your subscription or you don't want your store active again
                , kindly send us a message with the form below. </p>

                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <form  method="post">
                                  <div class="form-group">
                                    <label for="reason" class="text-danger"><b>State Reason for deactivation:</b></label>
                                    <textarea class="form-control" rows="8" ></textarea>
                                  </div>
                                  <div class="form-group">
                                    <button class="btn btn-danger">Send message</button>
                                  </div>
                        </form>       
                   </div>
                 </div>
            </div>
            </div>
          </div>
        </div>
  </div>
  </div>
      <hr>
        <p class="mt-5 mb-3 text-muted text-center">&copy; e-acez.com 2020</p>
      </div>
        </div>
    
          
</body>
</html>

<?php
}
?>