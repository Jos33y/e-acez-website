
<?php

//fetch.php

include('dbconn.php');

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 
 $query = "
 SELECT * FROM customers 
 WHERE code IN (".$search_text.") 
 ORDER BY customer_id DESC
 ";
}
else
{
 $query = "SELECT * FROM customers ORDER BY customer_id DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)

{
    $i = 0;
 foreach($result as $row)
 {
   
    $i++; 
  $output .= '
  <tr>
  <td>'.$i.'</td>
   <td>'.$row["firstname"].'</td>
   <td>'.$row["lastname"].'</td>
   <td>'.$row["email"].'</td>
   <td>'.$row["phone_no"].'</td>
   <td>'.$row["shop_name"].'</td>
   <td>'.$row["shop_url"].'</td>
   <td>'.$row["code"].'</td>
   <td>'.$row["reg_date"].'</td>
   <td>'.$total_row.'</td>

  </tr>
  ';
 }

}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}
echo $total_row;
echo $output;


?>



