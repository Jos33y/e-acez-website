<?php

include('dbconn.php');

$query = "SELECT DISTINCT code FROM customers ORDER BY code ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>customer_table</title>
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
        <h3 class="title text-center">Customer Table</h3>
        <hr width="30%" style="border: 1px solid #ff5500;">

        <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
            <?php
		foreach($result as $row)
		{
			echo '<option value="'.$row["code"].'">'.$row["code"].'</option>';
		}

		?>
        </select>
        <input type="hidden" name="hidden_code" id="hidden_code" />
        <div style="clear:both"></div>
        <br />

        <table class="table table-bordered table-responsive">

            <thead class="header">
                <tr>
                    <th>S/N</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone_No</th>
                    <th>Brand_Name</th>
                    <th>Shop URL</th>
                    <th>CODE</th>
                    <th>Reg-Date</th>
                    <th>TT</th>
                </tr>
            <tbody>
            </tbody>

            </thead>
        </table>
    </div>



</body>

</html>

<script>
    $(document).ready(function () {

        load_data();

        function load_data(query = '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function (data) {
                    $('tbody').html(data);
                }
            })
        }

        $('#multi_search_filter').change(function () {
            $('#hidden_code').val($('#multi_search_filter').val());
            var query = $('#hidden_code').val();
            load_data(query);
        });

    });
</script>