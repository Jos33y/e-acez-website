<?php

include('include/dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title> ecommerce survey </title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="styles/index.css">
        <script type="text/javascript" src="script.js"></script>
        </head>

<body>


<div id="content">

  <!-- Navigation bar-->
  <nav class="navbar navbar-dark navbar-expand-md  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="index.php">
              <img src="images/eiconweb.png" class="logo">
              <span class="logo-head">e-acez </span>
          </a>
          </div>
  </nav>
    <div class="container survey-form">
      <div class="text-center survey-title">
          <h5>Ecommerce Survey </h5>
          <p class="text-muted">Kindly fill this form</p>
      </div>
      <form method="POST">
          <div class="form-group">
              <label for="full_name">Full Name </label>
              <input type="text" name="f_name" class="form-control" placeholder="Enter Full Name" required>
          </div>
           <div class="form-group">
              <label for="email">Email </label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
          </div>

          <div class="form-group">
              <label for="phone">Phone Number </label>
              <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
          </div>

          <div class="form-group">
              <label for="gender"> Gender </label>
              <select class="form-control" name="gender" required>
                  <option value="Male"> Male </option>
                  <option  value="Female"> Female </option>
                  <option value="Not Say">Rather not say </option>
              </select>
          </div>

          <div class="form-group">
              <label for="state"> State </label>
                <select type="text" name="state" class="form-control">
                    <option value="state" deselected> Select State</option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue">Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross Rive">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="FCT">Federal Capital Territory</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nasarawa">Nasarawa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Osun">Osun</option>
                    <option value="Oyo">Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option>
                 </select>
                </div>

          <div class="form-group">
              <label for="date">Date of Birth </label>
              <input type="date" name="date" class="form-control" placeholder="Enter Date of Birth" required>
          </div>
          
          <div class="form-group">
              <label for="occupation">Occupation </label>
              <input type="text" name="occupation" class="form-control" placeholder="Enter Occupation" required>
          </div>

          <div class="form-group">
              <label for="hobby">Interest / Hobby </label>
              <input type="text" name="hobby" class="form-control" placeholder="Enter Interest/Hobby" required>
          </div>

           <div class="form-group">
              <label for="section">Favourite Shopping Section <small><strong>(you can select more than one)</strong></small></label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Accesories">Accesories
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Computing">Computing
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Electronics">Electronics
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Fashion">Fashion
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Footwear">Footwear
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Grocery">Grocery
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Health and Beauty">Health and Beauty
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Medicare">Medicare
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Phones and Tablets">Phones and Tablets
                    </label>
                </div>
          </div>

          <div class="form-group">
              <label for="amount-spent">Amount Spent on Shopping(Ranging from lowest-highest)</label>
              <input type="text" name="amount" class="form-control" placeholder="Enter Amount Spent on Shopping" required>
          </div>

          <div class="form-group">
              <label for="hobby">Institution <strong>(for students)</strong> </label>
              <input type="text" name="uni" class="form-control" placeholder="Enter Institution" required>
          </div>

          <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
              </div>
          </div>
          <hr>
                <p class="text-muted text-center">&copy; e-acez.com 2020</p>
          
      </form>
    </div>
</div>
  </div>
</div>            
</body>
</html>
<?php

if(isset($_POST['submit'])){

    $f_name = $_POST['f_name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $gender = $_POST['gender'];

    $state = $_POST['state'];

    $dob = $_POST['date'];

    $job = $_POST['occupation'];

    $hobby = $_POST['hobby'];

    $chkbox = $_POST['chkbox'];

    $amt = $_POST['amount'];

    $uni = $_POST['uni'];

    $section = ""; 

    foreach($chkbox as $chkNew1) 
    { 
        $section .= $chkNew1 . ","; 
    } 
    

    $insert_survey = "insert into ecommercesurvey (fullname, email, phoneno, gender, state, dob, job, hobby, section, amount, university) 
    values ('$f_name', '$email', '$phone', '$gender', '$state', '$dob', '$job', '$hobby', '$section', '$amt', '$uni')";

    $run_survey = mysqli_query($con, $insert_survey) or die(mysqli_error($con));

    if($run_survey){
        echo "<script> alert('Thank You.. Survey Sent')</script>";
        echo "<script>window.open('ecommerce-survey.php', '_self')</script>";  
    }
    else{
        echo "<script> alert('Error.. Retry the survey')</script>";
        echo "<script>window.open('ecommerce-survey.php', '_self')</script>";  
    }

}

?>
