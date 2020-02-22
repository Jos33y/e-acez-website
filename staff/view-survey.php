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
                    <th>Business Name</th>
                    <th>Cash On Delivery</th>
                    <th>Direct Transfer</th>
                    <th>Online Payment</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $i = 0;
    $get_info = "select * from payment_survey";
    $run_info = mysqli_query($con, $get_info);
    while ($row = mysqli_fetch_array($run_info)){
        $b_name = $row['business_name'];
        $cash = $row['cash_on_delivery'];
        $transfer = $row['direct_transfer'];
        $paystack =  $row['online_payment'];

        $i++;
        ?>
        
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $b_name;?></td>
                    <td><?php echo $cash;?></td>
                    <td><?php echo $transfer;?></td>
                    <td><?php echo $paystack;?></td>
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