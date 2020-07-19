<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<div class="container">

    <div class="row justify-content-center pages">
        <!--row one-->
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 class="dash-title text-center"> <i class="fab fa-intercom"></i> Feedback BOX</h3>
            <br>
            <form method="post" class="form" enctype="multipart/form-data">
            <p class="text-center text-primary">What you feel about your showroom matters to us.  
                How would you describe your online showroom experience?</p>
    <br>
                <div class="form-group container">
                    <label for="Product Name" class="sr-only">Review</label>
                    <textarea name="review" id="review" cols="30" rows="6" placeholder="Write your review here"
                        class="form-control" maxlength="1000" required> </textarea>
                </div>


                <div class="form-group text-center">
                    <button name="submit" class="btn btn-md btn-primary">submit</button>
                </div>

                <div class="form-group text-center">
                    <a href="index.php?dashboard">
                        <p class="back">Back</p>
                    </a>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>


    </div>
</div>

<script src="script.js"></script>
</body>

</html>

<?php 
if(isset($_POST['submit'])){


    $review = $_POST['review'];

    $firstname;
    $lastname;
    $shop_name;
    $email; 
    $admin_id;

    $sql = "INSERT INTO review (firstname, lastname, email, shopname, review) 
    VALUES ('$firstname', '$lastname', '$shop_name', '$email', '$review')";

    $query = mysqli_query($con, $sql) or die(mysqli_error($con));


    if($query){
 
        echo '
        <script>
            swal({
                    title: "Review Sent!",
                    icon: "success",
                 });
    </script>
    ';
    }
    else{
        echo '
        <script>
            swal({
                    title: "Review Not Sent!",
                    icon: "error",
                 });
    </script>
    ';
    }
}
?>

<?php
}

?>