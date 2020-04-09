<?php
$active = "view-survey";
$title = "View Survey";
include('header.php');
include('dbconn.php');

?>

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>State</th>
                    <th>DOB</th>
                    <th>Job</th>
                    <th>Hobby</th>
                    <th>Favourite Section</th>
                    <th>Amount Spent</th>
                    <th>Institution</th>
                    <th>other occupation</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $i = 0;
    $get_info = "select * from ecommercesurvey";
    $run_info = mysqli_query($con, $get_info);
    while ($row = mysqli_fetch_array($run_info)){
        $name = $row['fullname'];
        $email = $row['email'];
        $phone = $row['phoneno'];
        $gender =  $row['gender'];
        $city = $row['city'];
        $state = $row['state'];
        $dob = $row['dob'];
        $job = $row['job'];
        $hobby = $row['hobby'];
        $section = $row['section'];
        $amt = $row['amount'];
        $uni = $row['university'];
        $other = $row['others'];
        $i++;
        ?>
        
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $phone;?></td>
                    <td><?php echo $gender;?></td>
                    <td><?php echo $city;?></td>
                    <td><?php echo $state;?></td>
                    <td><?php echo $dob;?></td>
                    <td><?php echo $job;?></td>
                    <td><?php echo $hobby;?></td>
                    <td><?php echo $section;?></td>
                    <td><?php echo $amt;?></td>
                    <td><?php echo $uni;?></td>
                    <td><?php echo $other;?></td>
                </tr>
                <?php 
}

?>
            </tbody>
        </table>
        
        
        </div>
    </div>
</div>


</div>
</body>
</html>