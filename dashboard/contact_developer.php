<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../sign-in.php', '_self')</script>";

}else{

?>

    <div class="container">
        <h3 class="dash-title" style="margin-top: 3%;"> <i class="fas fa-headset"></i>Talk to Developer</h3>

        <div class="developer contact">
            <!--row one-->
            <div class="row">
                <div class="col-md-6 text-lg-center bottom">
                    <a href="https://wa.me/2349011151694/?text=Hello, I am <?php echo $firstname . ' ' . $lastname; ?>" class="btn btn-md btn-success"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
                <br>
               
                <div class="col-md-6 text-lg-center">
                    <a href="tel:+2347037344408" class="btn btn-md btn-secondary""><i class=" fas fa-mobile-alt"></i> Phone Call</a>
                </div>
                <br>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a style="padding-top: 5%;" href="index.php?dashboard">
                        <p class="back text-center">Back</p>
                    </a>
                </div>
                <div class="col-md-4"></div>
            </div>

        </div>
    </div>

</body>

</html>

<?php } ?>