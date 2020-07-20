
<?php      
 include("include/dbconn.php");
if(!isset($_SESSION['email'])){

     echo "<script>window.open('../customer/sign-in.php', '_self')</script>";
  
  }else{
      $admin_session = $_SESSION['email'];
  
      $get_admin = "select * from customers where email = '$admin_session'";
  
      $run_admin = mysqli_query($con, $get_admin);
  
      $row_admin = mysqli_fetch_array($run_admin);
  
      $admin_id = $row_admin['customer_id'];
  
      $email = $row_admin['email'];
  } 

$output = '';
$sql = "SELECT * FROM product_categories WHERE customer_id = '$admin_id' ORDER BY category_name ASC";
$result = mysqli_query($con, $sql);

$output .= '
           <div class="table-responsive">
           <table class="table table-striped table-bordered">
                <tr>
                    <th width="10%">Id</th>
                    <th width="40%">Category Name </th>
                    <th width="10%">Delete</th>
                </tr>';
                        $i=0;
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                         $i++;
                          $output .= '  
                               <tr>  
                                    <td>'.
               
               $i.'</td>  
                                    <td class="category_name" data-id1="'.$row["p_cat_id"].'" contenteditable>'.$row["category_name"].'</td>    
                                    <td><button type="button" name="delete_btn" data-id2="'.$row["p_cat_id"].'" class="btn btn-sm btn-danger btn_delete">Delete</button></td>  
                               </tr>  
                          ';  
                     }  
                     $output .= '  
                          <tr>  
                               <td></td>  
                               <td id="category_name" contenteditable>New Product Category</td>   
                               <td><button type="button" name="btn_add" id="btn_add" class="btn btn-sm btn-success">Add</button></td>  
                          </tr>  
                     ';  
                }  
                else  
                {  
                     $output .= '<tr>  
                                         <td colspan="4" class="text-center">Product Categories not Found</td>  
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td id="category_name" contenteditable> New Product Category</td>
                                    <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>
                                 </tr>
                                    ';  
                }  
                $output .= '</table>  
               
               
                     </div>';  
                echo $output; 

            
?>