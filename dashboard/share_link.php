<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<div class="container">
    <h3 class="dash-title" style="margin-top: 3%;"> <i class="fas fa-share-alt-square"></i> Share Shop URL</h3>

</div>


<div class="social-link">

    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.e-acez.com/<?php echo $url; ?>" target="_blank"
        class="fa fa-facebook"></a>
    <a href="http://twitter.com/share?text=check out my online store&url=https://www.e-acez.com/<?php echo $url; ?>"
        target="_blank" class="fa fa-twitter"></a>
    <a href="whatsapp://send?text=https://www.e-acez.com/<?php echo $url; ?>" data-action="share/whatsapp/share"
        target="_blank" class="fa fa-whatsapp"></a>
    <a href="http://pinterest.com/pin/create/button/?url=https://www.e-acez.com/<?php echo $url; ?>" target="_blank"
        class="fa fa-pinterest-square"></a>
    <a href="http://www.reddit.com/submit?url=https://www.e-acez.com/<?php echo $url; ?>" target="_blank"
        class="fa fa-reddit-square"></a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.e-acez.com/<?php echo $url; ?>"
        target="_blank" class="fa fa-linkedin-square"></a>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto text-center">

            <input type="text" id="userInput" class="form-control" value="https://www.e-acez.com/<?php echo $url; ?>"
                readonly>
            <button onclick="copyText()" class="btn btn-md btn-success" style="margin-top: 5%;">Copy Link to
                Clipboard</button>

        </div>
    </div>
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

<?php } ?>

<script type="text/javascript">
    function copyText() {
        var text = document.getElementById("userInput");
        text.select();
        document.execCommand("copy");
        alert("Copy text to Clipboard: " + text.value);
    }
</script>