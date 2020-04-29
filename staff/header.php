<!DOCTYPE html>
<html lang="en">
  <head>
  <title> <?php echo $title; ?> </title>
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
<div id="loader"></div>

<div id="content">

  <!-- Navigation bar-->
  <nav class="navbar navbar-dark navbar-expand-md  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="index.php">
              <img src="images/eiconweb.png" class="logo">
              <span class="logo-head">e-acez </span>
          </a>
                    

            <button class="navbar-toggler " type="button" data-toggle="collapse" 
            data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon my-toggler "></span>
              </button>
              <div class="collapse navbar-collapse"></div>

              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                            <li class="nav-item <?php if($active=='index') echo'active';?>">
                                <a class="nav-link" href="index.php">Home</a>
                              </li>
                            <li class="nav-item <?php if($active=='view-user') echo'active';?>">
                                <a class="nav-link" href="view-user.php">Users</a>
                              </li>                           
                              <li class="nav-item <?php if($active=='view-dash') echo'active';?>">
                                <a class="nav-link" href="view_dash.php">Users Dashboard</a>
                              </li>
                              <li class="nav-item <?php if($active=='view-survey') echo'active';?>">
                                <a class="nav-link" href="view-survey.php">Survey</a>
                              </li>
                    </ul>                                                                     
                    </div>
        </div>
  </nav>
