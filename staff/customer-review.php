<?php

include('dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>customer review</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Roboto&display=swap');

        body {
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            color: #222;
            background-color: #f2f1f6;
            overflow-x: hidden;
        }

        .title {
            margin-top: 5%;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #0b168f;
            font-family: 'Bangers', cursive;
        }

        .header th {
            text-align: center;
            font-size: 15px;
            letter-spacing: 2px;
            font-weight: 600;
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>

<body>

    <div class="container">
        <h3 class="title text-center">Customer Review</h3>
        <hr width="30%" style="border: 1px solid #ff5500;">

        <table class="table-bordered table-responsive">
            <thead class="header">
                <tr>
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Shop Name</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $i = 0;
    $get_info = "select * from review";
    $run_info = mysqli_query($con, $get_info);
    while ($row = mysqli_fetch_array($run_info)){
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $email = $row['email'];
        $sname =  $row['shopname'];
        $review = $row['review'];
        $i++;
        ?>

                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $fname;?></td>
                    <td><?php echo $lname;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $sname;?></td>
                    <td><?php echo $review;?></td>
                </tr>
                <?php 
}

?>
            </tbody>
        </table>

    </div>

</body>

</html>