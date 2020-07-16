
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
        body {
            background-color: #17192e;
        }

        .active-customer {
            padding: 10px;
            margin-top: 40%;
            border: 4px solid #0055FF;
            -webkit-box-shadow: 0px 0px 7px 2px rgba(242, 241, 246, 1);
            -moz-box-shadow: 0px 0px 7px 2px rgba(242, 241, 246, 1);
            box-shadow: 0px 0px 7px 2px rgba(242, 241, 246, 1);

        }

        .active-customer .number {
            color: #ff5500;
            font-size: 45px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .active-customer .name {
            color: #fff;
            font-size: 35px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .active-shop {
            padding: 10px;
            margin-top: 20%;
            border: 4px solid #d3d3cc;
            -webkit-box-shadow: 0px 0px 11px 2px rgba(255, 85, 0, 1);
            -moz-box-shadow: 0px 0px 11px 2px rgba(255, 85, 0, 1);
            box-shadow: 0px 0px 11px 2px rgba(255, 85, 0, 1);
        }


        .active-shop .number {
            color: #2b39cf;
            ;
            font-size: 45px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .active-shop .name {
            color: #fff;
            font-size: 35px;
            font-weight: 600;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="active-customer text-center">

                    <h3 class="number" id="active"></h3>
                    <h3 class="name">Customers</h3>

                </div>
                <div class="active-shop text-center">

                    <h3 class="number" id="shop"></h3>
                    <h3 class="name">Active Shop</h3>


                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>

</html>

   <script type="text/javascript">
    function loadDoc() {
     
   
     setInterval(function(){
   
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
        document.getElementById("active").innerHTML = this.responseText;
       }
      };
      xhttp.open("GET", "counter.php", true);
      xhttp.send();
   
     },1000);
   
   
    }
    loadDoc();
</script>
    <script>
    function loadDoc() {
     
   
     setInterval(function(){
   
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
        document.getElementById("shop").innerHTML = this.responseText;
       }
      };
      xhttp.open("GET", "counter.php", true);
      xhttp.send();
   
     },1000);
   
   
    }
    loadDoc();
   </script>
   
