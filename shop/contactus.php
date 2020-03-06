<?php
        $active ='Contact Us';
        include("includes/header.php");
?>
</nav>
</header>

<div id="content"><!-- content Begin -->
    <div class="container-fluid"><!-- container Begin -->
    <div class="row">
        <div class="col-sm-12"><!-- col-md-12 Begin -->
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb"><!-- breadcrumb Begin -->
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Contact Us
                </li>
            </ol><!-- breadcrumb Finish -->
</nav>
        </div><!-- col-md-12 Finish -->
</div>

            <div class="container">
                    <div class="text-center"><!-- Center Begin -->
                        <h4 class="contact-title"> Feel Free to Contact Us</h4>

                    </div><!-- Center Finish  -->

                    <form action="contactus.php" method="post" class="contact-form"><!--form Begin -->
                        <div class="row">
                        <div class="form-group col-md-6"><!--form-group Begin -->

                            <label for="Name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div><!--form-group Finish -->

                        <div class="form-group col-md-6"><!--form-group Begin -->

                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div><!--form-group Finish -->

                        <div class="form-group col-md-12"><!--form-group Begin -->

                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required>
                        </div><!--form-group Finish -->

                        <div class="form-group col-md-12"><!--form-group Begin -->

                            <label for="message">Message</label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control" required></textarea>

                        <div class="text-center"><!--text-center Begin -->
                            <button type="submit" name="submit" class="site-btn">
                             Send Message
                            </button>
                        </div><!--text-center Finish -->
                        </div><!--form-group Finish -->

                    </form><!-- Form  Finish -->
                
                    <?php 
                    
                    if(isset($_POST['submit'])){

                        /// Admin receives messafe with this ///

                        $sender_name = $_POST['name'];

                        $sender_email = $_POST['email'];

                        $sender_subject = $_POST['subject'];

                        $sender_message = $_POST['message'];

                        $receiver_email = "kolawoleolayinka16@gmail.com";

                        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                        /// Auto reply to sender with this ///

                        $email = $_POST['email'];

                        $subject = "Welcome to my website";

                        $msg = "Thanks for sending us a message. we will reply your messgae ASAP";

                        $from = "kolawoleolayinka16@gmail.com";

                        mail($email, $subject, $msg, $from);

                        echo "<h2 align='center'> Your Message has been sent successfully <h2/>";





                    }
                    
                    ?>

            </div>

            </div><!-- box Begin -->

        </div><!-- container Finish -->
</div><!-- content Finish -->

</div>
                </div>
<?php

        include("includes/footer.php");

        ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>
