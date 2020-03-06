<?php      

if(!isset($_SESSION['email'])){

   echo "<script>window.open('https://e-acez.com/sign-in.php', '_self')</script>";

}else{

?>

<?php 
    if(isset($_GET['delete_p_cat'])){

        $delete_p_cat_id = $_GET['delete_p_cat'];

        $delete_p_cat = "delete from product_categories where p_cat_id='$delete_p_cat_id'";

        $run_delete_p_cat = mysqli_query($con, $delete_p_cat);

        if($run_delete_p_cat){

            echo "<script>alert('One of your Product Category has been Deleted Successfully')</script>";

            echo "<script>window.open('index.php?view_p_cats', '_self')</script>";



        }
    }
?>


<?php } ?>