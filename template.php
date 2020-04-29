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
  <title> select template </title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    
         <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>

         <link rel="stylesheet" href="styles/index.css">
    </head>
    <style> 
    *{
        color: #fff;
       }
    </style>

<body class="bg">
  <div class="container temp">
      <form method="POST">
         <div class="text-center">
          <a href="index.php"><img class="form-logo" style="margin-top: 10vh" src="images/eiconweb.png" alt=""></a>      
          </div>
     
         <h2 class="temp-head text-center"> <?php echo $last_name . " " . $first_name; ?>  Select a template of your choice </h2>
        
         <div class="row shop-box">
            <div class="col-md">
              <span class="steps">Template one:</span>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="e-acez_store">
                      <div class="card">
                        <div class="card-header"> e-acez store</div>
                        <img class="card-img-top" src="images/store-img.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>



            <!-- shop 2-->
            <div class="col-md">
              <span class="steps">Template two:</span>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="aStar">
                      <div class="card">
                        <div class="card-header"> aStar</div>
                        <img class="card-img-top" src="images/aStar.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>

          <!-- shop 3 -->
            <div class="col-md">
              <span class="steps">Template three:</span>
              <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Coza_Store">
                      <div class="card ">
                        <div class="card-header"> Coza Store</div>
                          <img class="card-img-top" src="images/cozastore.jpg" alt="Shop Image">
                        </div>
                  </label>
                </div>            
            </div>

            <div class="col-md">
              <span class="steps">Template four:</span>
              <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Coloshop">
                       <div class="card">
                        <div class="card-header"> Coloshop</div>
                        <img class="card-img-top" src="images/coloshop.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>        
          </div>

       <div class="row shop-box">
        <div class="col-md ">
            <span class="steps">Template five:</span>
               <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Divisima">
                      <div class="card">
                        <div class="card-header"> Divisima</div>
                        <img class="card-img-top" src="images/divisima.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>

        <!-- shop 3 -->
          <div class="col-md">
            <span class="steps">Template six:</span>
              <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Eiser">
                      <div class="card">
                        <div class="card-header"> Eiser</div>
                        <img class="card-img-top" src="images/eiser.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>

          <div class="col-md">
          <span class="steps">Template seven:</span>
            <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Fashi">
                      <div class="card">
                        <div class="card-header"> Fashi</div>
                        <img class="card-img-top" src="images/fashi.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>

        <!-- shop 2-->
        <div class="col-md ">
          <span class="steps">Template eight:</span>
            <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Fashiop">
                      <div class="card">
                        <div class="card-header"> Fashiop</div>
                        <img class="card-img-top" src="images/fashiop.jpg" alt="Shop Image">
                     </div>
                  </label>
                </div>            
            </div>
       </div>

      <div class="row shop-box">
       <div class="col-md">
          <span class="steps">Template nine:</span>
            <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Karma">
                       <div class="card">
                        <div class="card-header"> Karma</div>
                        <img class="card-img-top" src="images/karma.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div>
  
        <div class="col-md">
          <span class="steps">Template ten:</span>
            <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Mini_Shop">
                      <div class="card">
                        <div class="card-header"> Mini Shop</div>
                        <img class="card-img-top" src="images/minishop.jpg" alt="Shop Image">
                      </div>
                  </label>
                </div>            
            </div> 

        <div class="col-md"></div>
         <div class="col-md"></div>

       </div>
       <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block" name="next">Next</button>
        </div>

        <div class="footer text-center">
         
          <hr>
          <p class="lead" style="clear:both; color: #fff">&copy; e-acez.com 2020</p>
      </div>
         </form>
  </div>
  
</body>
</html>

<?php 
if(isset($_POST['next'])){

  
$template = $_POST['optradio'];

$query = mysqli_query($con, "update user_db set shop_template = '$template' where user_id = '$user_id'");

if($query){

  echo "<script>window.open('select-plan.php?user_id=$user_id', '_self')</script>"; 
  
}

}
?>

<?php 

      }
       ?>