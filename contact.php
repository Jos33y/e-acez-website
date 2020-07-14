<?php
$active = "contact";
$title = "contact us";
include('include/header.php')

?>

<div class="container-fluid bg" style="color:#fff;">
         
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    <!-- Form Start -->
        <form method="POST" class="form-container">
          <div class="text-center">
              <h3> Contact US </h3>
          </div>
          <div class="form-group">
              <label for="Full Name" class="form-text">Full Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required autofocus>
            </div>
          <div class="form-group">
              <label for="Email" class="form-text">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required autofocus>
            </div>

            <div class="form-group">
              <label for="message" class="form-text">Message</label>
             <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type your message here..."></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block" name="submit" >Send Message</button>
            </div>
            <div class="footer text-center">
        
                <hr>
                <p class="lead" style="clear:both; color: #fff">&copy; e-acez.com 2020</p>
          </div>
        </form>
 
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>
</div>

<?php

include('include/footer.php');

?>
    </div>
</body>
</html>

<?php 
                    
                    if(isset($_POST['submit'])){

                        /// Admin receives message with this ///

                        $sender_name = $_POST['name'];

                        $sender_email = $_POST['email'];

                        $sender_subject = "e-acez contact";

                        $sender_message = $_POST['message'];

                        $receiver_email = "info@e-acez.com";

                        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                        /// Auto reply to sender with this ///

                        $email = $_POST['email'];

                        $subject = "Welcome to E-ACEZ";

                        $msg = "Thanks for sending us a message. we will reply your message ASAP";

                        $from = "eacez@e-acez.com";

                        mail($email, $subject, $msg, $from);

                    }
                    
                    ?>
