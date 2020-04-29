<?php
$active = "view-user";
$title = "view users";
include('header.php');
include('dbconn.php');

?>

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>shop_name</th>
                    <th>phone_no</th>
                    <th>email</th>
                    <th>template</th>
                    <th>reg-date</th>
                    <th>user_ip</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $i = 0;
    $get_info = "select * from user_db";
    $run_info = mysqli_query($con, $get_info);
    while ($row = mysqli_fetch_array($run_info)){
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $b_name = $row['business_name'];
        $phone_no =  $row['phone_number'];
        $email = $row['email'];
        $template = $row['shop_template'];
        $date = $row['registration_date'];
        $ip = $row['user_ip'];

        $i++;
        ?>
        
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $firstname;?></td>
                    <td><?php echo $lastname;?></td>
                    <td><?php echo $b_name;?></td>
                    <td><?php echo $phone_no;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $template;?></td>
                    <td><?php echo $date;?></td>
                    <td><?php echo $ip;?></td>
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