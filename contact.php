<?php
$active = "contact";
$title = "contact us";
include('include/header.php')

?>
<style>

  </style>

  <div class="container-fluid contact-us">
    <div class="row justify-content-center">

      <div class="col-md-12">
        <h3 class="sign-in-head"> Contact US </h3>
      </div>

      <div class="col-md-6 d-none">
      </div>

      <div class="col-md-6 mx-auto">
        <form method="post" class="sign-in">
          <table>
            <tbody>
              <tr>

                <label for="Full Name" class="form-text">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required autofocus>

              </tr>
              <tr>

                <label for="Email" class="form-text">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" maxlength="200" required
                  autofocus>

              </tr>

              <tr>
                <label for="message" class="form-text">Message</label>
                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                  placeholder="Type your message here..."></textarea>
              </tr>

              <tr>
                <br>
                <div class="col-md-12 text-center">
                  <button class="btn btn-md btn-primary" name="submit" type="submit">Send Message</button>
                </div>
              </tr>

            </tbody>
          </table>
        </form>

      </div>
      <div class="col-md-12">
        <p class="footer">Copyright &copy; 2020 e-acez</p>
      </div>
    </div>
  </div>
</body>
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