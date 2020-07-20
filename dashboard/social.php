<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<?php 

    $get_admin = "select * from social where customer_id = '$admin_id'";
    $run_social = mysqli_query($con, $get_admin);
    $check_social = mysqli_num_rows($run_social);

    if($check_social==false){
       
        $social_id = "";
        $facebook = "";     
        $twitter =""; 
        $instagram = "";
        $youtube = "";
    }
    else
    {  

    $row = mysqli_fetch_array($run_social);

    $social_id = $row['social_id'];

    $facebook = $row['facebook'];
    
    $twitter = $row['twitter'];

    $instagram = $row['instagram'];

    $youtube = $row['youtube'];

    }

    ?>

    <div class="container">

        <div class="pages row justify-content-center">
            <div class="col-md-6">
                <h3 class="dash-title"><i class="fas fa-user-friends"></i></i> Social Link</h3>
                <form method="post">

                    <div class="profile">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td  width="10%">
                                        <label for="Facebook" style="font-weight: 600; color: blue;">Facebook</label>
                                   </td>
                                    <td>
                                        <input type="text" name="facebook" class="form-control-md form-control-lg"
                                            id="fb" value="<?php echo $facebook ; ?>" placeholder="Facebook URL" onkeypress="return blockChar(event)">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="Twitter" style="font-weight: 600; color: skyblue;">Twitter</label>
</td>
<td>
                                        <input type="text" name="twitter" id="tweet" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $twitter; ?>" placeholder="Twitter URL" onkeypress="return blockChar(event)">

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="Instagram" style="font-weight: 600; color: purple;">Instagram</label>
                                    </td>
                                    <td>
                                        <input type="tel" name="instagram" id="insta" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $instagram; ?>" placeholder="Instagram URL" onkeypress="return blockChar(event);">

                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <label for="Youtube" style="font-weight: 600; color: red;">YouTube</label>
                                    </td>
                                    <td>
                                        <input type="text" name="youtube" id="ytube" class="form-control-md form-control-lg"
                                            id="" value="<?php echo $youtube ; ?>" placeholder="YouTube URL" onkeypress="return blockChar(event)">
                                    </td>
                                </tr>

                                
                            </tbody>
                        </table>


                        <div class="form-group text-center">
                            <button type="submit" name="update" class="btn btn-md btn-info">Save</button>
                        </div>

                        <div class="form-group text-center">
                            <a href="index.php?dashboard">
                                <p class="back">Back</p>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


<script type="text/javascript">
        function blockChar(e) {
          var k = e.keyCode;
          return (k != 39);
      }
    </script>

<script>
      document.getElementById('tweet').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });

    document.getElementById('fb').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });

    document.getElementById('insta').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });

    document.getElementById('ytube').addEventListener('keydown', function (e) {
        var k = e.keyCode
        k == 32 && e.preventDefault()
    });
</script>


<?php

if(isset($_POST['update'])){

    $f = $_POST['facebook'];
    $t = $_POST['twitter'];
    $i = $_POST['instagram'];
    $y = $_POST['youtube'];


    $get_admin = "select * from social where customer_id = '$admin_id'";
    $run_social = mysqli_query($con, $get_admin);
    $check_social = mysqli_num_rows($run_social);

    if($check_social==false){

        $sql = "INSERT INTO social (customer_id, facebook, twitter, instagram, youtube)
        VALUES ('$admin_id', '$f', '$t', '$i', '$y')";

        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
    
    }
    else
    {  

    $sql = "UPDATE social
     SET facebook='$f', twitter='$t', instagram='$i',youtube='$y'
    WHERE social_id = '$social_id'";
    
    $query = mysqli_query($con, $sql) or die(mysqli_error($con));
    }
    if($query){

        echo "
        <script>
        alert('Update Successful')
    </script>";
    echo "<script>window.open('index.php?social' , '_self')</script>";
    }
    
else{
    echo '
    <script>
    swal({
            title: "Update Error",
            icon: "error",
        });
</script>';
  
}

}


?>




<?php } ?>
