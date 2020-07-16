<?php
include('dbconn.php');

?>


<?php
   
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "SELECT * FROM customers";
$result = $con->query($sql);

echo $result->num_rows;
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Notification: " . $row["description"];
    }
} else {
    echo "0 results";
}
*/
$con->close();
?>