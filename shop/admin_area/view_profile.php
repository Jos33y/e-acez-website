<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<?php 

                                    

$email = $_SESSION['email'];          

//$get_customer_info = "select * from user_db where email ='$email'";

$get_customer_info = "select * from customer_info where email = '$email'";

$run_customer_info = mysqli_query($conn, $get_customer_info);

$row_customer_info=mysqli_fetch_array($run_customer_info);

     $admin_id = $row_customer_info['customer_id'];

     $first_name = $row_customer_info['firstname'];

     $last_name = $row_customer_info['lastname'];
     
     $image = $row_customer_info['profile_image'];

     $email = $row_customer_info['email'];

     $phone_no = $row_customer_info['phone_number'];

     $address = $row_customer_info['address'];

     $state = $row_customer_info['state'];      
     
     $country = $row_customer_info['country'];   


?>

<div class="row"><!-- row Begin for Breadcrumb -->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Profile

            </li>
        </ol>
    </div>
</div><!--row Finish -->

<div class="row"><!-- row Begin for Panel and view products -->
        <div class="col-lg-12 ">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Profile 
                    </h3>
                </div>

                <div class="panel-body"><!--Panel Body Begin to view products -->
                    <div class="table-responsive"><!--table responsive begin -->
                        <table class="table table-striped table-borderless table-hover"><!--table Begin -->

                            <thead> 
                                <tr>
                                    <th>Full Name </th>
                                    <td> <h5><?php echo $first_name . " " . $last_name ; ?></h5></td>                                                                                                                                                                                                                                              
                                </tr>
                                <tr>
                                    <th>Image </th>
                                    <td> <img src="admin_images/<?php echo $image; ?>" width="100" height="100"> </td>
                                </tr>
                                <tr>
                                    <th>E-mail </th>
                                    <td> <?php echo $email; ?> </td>
                                </tr>
                                <tr>
                                    <th>Phone No </th>
                                    <td> <?php echo $phone_no; ?>  </td>
                                </tr>
                                <tr>
                                     <th>Address </th>
                                     <td><?php echo $address; ?></td>
                                </tr>
                                <tr>
                                     <th>State </th>  
                                     <td> <?php echo $state; ?> </td> 
                                </tr>
                                <tr>
                                    <th>Country </th> 
                                    <td> <?php echo $country; ?> </td> 
                                    
                                </tr>
                                <tr>
                                    <td>  </td>                                                                                                        
                                    <td> 
                                        <a href="index.php?edit_profile=<?php echo $admin_id; ?>" class="btn btn-primary" >

                                            <i class="fa fa-pencil"></i> Edit

                                        </a>                                        
                                    </td>
                                </tr>                                
                            </thead>

                        </table><!--table Finish -->
                    </div><!--table responsive Finish -->
                </div><!--Panel Body Finish to view products -->

            </div>
        </div>
</div>

</body>
</html>

<?php } ?> 

