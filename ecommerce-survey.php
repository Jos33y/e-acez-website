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
              <label for="phone">City of Residence </label>
              <input type="text" name="city" class="form-control" placeholder="Enter City of Residence" required>
          </div>

          <div class="form-group">
              <label for="state"> State of Residence </label>
                <select type="text" name="state" class="form-control">
                    <option value="state" deselected> Select State of Residence</option>
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
              <label for="date">Age </label>
                <select type="text" name="date" class="form-control">
                    <option value="no selection made" deselected> Select age range</option>
                    <option value="18 and below">18 and below</option>
                    <option value="19 - 29">19 - 29</option>
                    <option value="30 - 39">30 - 39</option>
                    <option value="40 - 49">40 - 49</option>
                    <option value="50 and above">50 and above</option>
                 </select>
          </div>
    
          <div class="form-group">
              <label for="occupation">Occupation </label>
              <select type="text" name="occupation" class="form-control">
                    <option value="no selection made" deselected> Select occupation</option>
                    <option value="Clerical/ Secretary Support">Clerical/ Secretary Support</option>
                    <option value="Craft/Trade">Craft/Trade</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Government/Civil Services">Government/Civil Services</option>
                    <option value="Journalism/Broadcast">Journalism/Broadcast</option>
                    <option value="Laborer">Laborer</option>
                    <option value="Manager/Supervisor">Manager/Supervisor</option>
                    <option value="Medical/Health-care Professional">Medical/Health-care Professional</option>
                    <option value="Retired">Retired</option>
                    <option value="Sales">Sales</option>
                    <option value="Self Employed/Business Owner">Self Employed/Business Owner</option>
                    <option value="Student">Student</option>
                    <option value="Teacher/Educator">Teacher/Educator</option>
                    <option value="Technology/Engineering">Technology/Engineering</option>
                    <option value="Transportation">Transportation</option>                   
                    <option value="Others">Others(if selected fill occupation below)</option>
              </select>
              <br>
              <input type="text" name="others" class="form-control" placeholder="If others enter occupation here">
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
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Baked Products">Baked products (cake, pasteries, e.t.c.)
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Books">Books
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
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Home and Office">Home and Office
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Medicare">Medicare
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Pets">Pets
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Phones and Tablets">Phones and Tablets
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="chkbox[]" class="form-check-input" value="Sport Wears">Sport Wears(Jersey)
                    </label>
                </div>
          </div>

          <div class="form-group">
              <label for="amount-spent">Amount Spent on Shopping(Ranging from lowest-highest)</label>
                <select type="text" name="amount" class="form-control">
                    <option value="no selection made" deselected> Select amount spent</option>
                    <option value="Below 5,000">Below 5,000</option>
                    <option value="5,000 - 9,999">5,000 - 9,999</option>
                    <option value="10,000 - 14,999">10,000 - 14,999</option>
                    <option value="15,000 - 19,999">15,000 - 19,999</option>
                    <option value="20,000 Above">20,000 Above</option>
                </select>
          </div>

          <div class="form-group">
              <label for="hobby">Institution <strong>(for students)</strong> </label>
              <input type="text" name="uni" class="form-control" placeholder="Enter Institution">
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

    $city = $_POST['city'];

    $state = $_POST['state'];

    $dob = $_POST['date'];

    $job = $_POST['occupation'];

    $others = $_POST['others'];

    $hobby = $_POST['hobby'];

    $chkbox = $_POST['chkbox'];

    $amt = $_POST['amount'];

    $uni = $_POST['uni'];

    $section = ""; 

    foreach($chkbox as $chkNew1) 
    { 
        $section .= $chkNew1 . ","; 
    } 
    

    $insert_survey = "insert into ecommercesurvey (fullname, email, phoneno, gender, city, state, dob, job, hobby, section, amount, university, others) 
    values ('$f_name', '$email', '$phone', '$gender', '$city', '$state', '$dob', '$job', '$hobby', '$section', '$amt', '$uni', '$others')";

    $run_survey = mysqli_query($con, $insert_survey) or die(mysqli_error($con));

    if($run_survey){
        echo "<script> alert('Thank You.. Survey Submitted.. check out e-acez site')</script>";
        echo "<script>window.open('index.php', '_self')</script>";  
    }
    else{
        echo "<script> alert('Error.. Retry the survey')</script>";
        echo "<script>window.open('ecommerce-survey.php', '_self')</script>";  
    }

}

?>
