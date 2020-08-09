<!DOCTYPE html>
<html lang="en">
  <head>
  <title> <?php echo $title; ?> </title>
  <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta
  name="description"           
  content="e-acez is an online showroom provider.">
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/eacez.css">
   <script type="text/javascript" src="js/script.js"></script>

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d6501adeb1a6b0be6098f3d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </head>

<body>


<div id="content">

  <!-- Navigation bar-->
  <nav class="navbar navbar-dark navbar-expand-lg  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-3" href="index.php">
              <img src="images/eiconweb.png" class="logo">
              <span class="logo-head">e-acez</span>
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
                            <li class="nav-item">
                                <a class="nav-link" href="customer/register.php#howitworks">How It Works</a>
                              </li>
                              <li class="nav-item <?php if($active=='blog') echo'active';?>">
                                <a class="nav-link" href="https://dazzling-davinci-70e6ae.netlify.com/" target="_blank">Blog</a>
                              </li>
                              <li class="nav-item <?php if($active=='about') echo'active';?>">
                                <a class="nav-link" href="about.php">About Us</a>
                              </li>
                               <li class="nav-item <?php if($active=='contact') echo'active';?>">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                    </ul>                                              
                        </form>
                        &nbsp;
                        &nbsp;                       
                            <div class="button">
                                <a href="customer/sign-in.php" class="btn btn-sm btn-primary">Login</a>
                                  <a href="customer/register.php#register" class="btn btn-signup btn-sm "> Sign Up </a>
                  </div>
                    </div>
        </div>
  </nav>
