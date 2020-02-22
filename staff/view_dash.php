<?php
$active = "view-dash";
$title = "view dashboards";
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
                    <th>coupon</th>
                    <th>dashboards</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $i = 0;    
    $get_dash = "select * from dashboard_db";
    $run_dash = mysqli_query($con, $get_dash);
    while ($row = mysqli_fetch_array($run_dash)){

            $user_id = $row['user_id'];
            $coupon = $row['coupon'];
            $dashboard = $row['dashboard'];
            $i++;

        $get_info = "select * from user_db where user_id = '$user_id'";
        $run_info = mysqli_query($con, $get_info);
        $row = mysqli_fetch_array($run_info);
            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
           
        ?>
                <tr>
                    
                    <td><?php echo $i;?></td>
                    <td><?php echo $firstname;?></td>
                    <td><?php echo $lastname;?></td>
                    <td><?php echo $coupon;?></td>
                    <td><?php echo $dashboard;?></td>
                </tr>
    <?php } ?>
            </tbody>
        </table>
        
        
        </div>
    </div>
</div>


</div>
</body>
</html>