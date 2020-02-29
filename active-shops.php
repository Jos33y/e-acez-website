
<?php
$active = "shop";
$title = "active shops";
include('header.php')

?>
  <!-- active shops header-->

  <div class="container-fluid active-shops-header">
          <div class="text-center">
            <h1 class="heading">Active Shops</h1>
                <p class="sub-heading">View regisered and active shops developed by e-acez</p>
                <div class="button">
                <a href="sign-up.php" class="btn btn-temp-head"> Rent Shop</a>
                </div>

        </div>
    </div>

    <!-- active shops body -->
    <!-- row one -->
      <!-- shop 1 -->
    <div class="container">
      <div class="row shop-box">
        <div class="col-md-4 col-sm-4">
          <span class="steps">Shop One:</span>
          <div class="card">
            <div class="card-header"> Zanga Wears</div>
            <img class="card-img-top" src="images/zangawears.jpg" alt="Shop Image">
            <div class="card-footer">
              <span class="text-right">Fashion</span>
              <a href="https://e-acez.com/zangawears/" target="_blank" class="btn btn-sm btn-primary" style="float: right">Visit Shop</a>
            </div>
          </div>
        </div>

      <!-- shop 2-->
        <div class="col-md-4 col-sm-4 ">
          <span class="steps">Shop Two:</span>
          <div class="card">
            <div class="card-header"> Beta shop in progress</div>
            <img class="card-img-top shop-img" src="images/aStar.jpg" alt="Shop Image">
            <div class="card-footer">
              <span class="text-right">Shop category</span>
              <button onclick="alert()" class="btn btn-sm btn-primary" style="float: right">Visit Shop</button>
            </div>
          </div>
        </div>

      <!-- shop 3 -->
        <div class="col-md-4 col-sm-4">
          <span class="steps">Shop Three:</span>
          <div class="card">
            <div class="card-header"> Beta shop in progress</div>
            <img class="card-img-top shop-img" src="images/cozastore.jpg" alt="Shop Image">
            <div class="card-footer">
              <span class="text-right">Shop category</span>
              <button onclick="alert()" class="btn btn-sm btn-primary" style="float: right">Visit Shop</button>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--row two -->
    
  
        <?php

include('footer.php');

?>
    </div>
    <script>
      function alert(){
        swal("Coming soon!", "Beta shop in development!", "error");
      }
    </script>
    </body>
</html>


