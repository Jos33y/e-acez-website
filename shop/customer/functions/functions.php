<?php

$db = mysqli_connect("localhost", "Joseey", "", "eacez-shop");

//$db = mysqli_connect("localhost", "u721127448_Zanga", "LagbaluJ19", "u721127448_zangawears");


///  getipUser functions begin ///

function getRealIpUser(){

    switch(true){

            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

            default : return $_SERVER['REMOTE_ADDR'];
    }

}

///  getcart functions begin ///
function add_cart(){

    global $db;

    if(isset($_GET['add_cart'])){

        $ip_add = getRealIpUser();

        $p_id = $_GET['add_cart'];

        $product_qty = $_POST['product_qty'];

        $product_size = $_POST['product_size'];

        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

        $run_check = mysqli_query($db, $check_product);

        if(mysqli_num_rows($run_check)> 0) {

            echo "<script> alert('This Product has been added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id', '_self')</script>";

        }else{

                $query = "insert into cart (p_id, ip_add, quantity, size) values ('$p_id', '$ip_add', '$product_qty', '$product_size') ";

                $run_query = mysqli_query($db, $query);

                 echo "<script>window.open('details.php?pro_id=$p_id', '_self')</script>";
        }
        }
    
    }


///  getcart functions finish ///


///  getipUser functions finish ///


///  getitems functions begin ///

function items(){

    global $db;

    $ip_add = getRealIpUser();

    $get_items = "select * from cart where ip_add='$ip_add'";

    $run_items = mysqli_query($db, $get_items);

    $count_items = mysqli_num_rows($run_items);

    echo $count_items;
}

///  getitems functions finish ///


///  getTotalprice functions begin ///

function total_price(){

    global $db;

    $ip_add = getRealIpUser();

    $total = 0;

    $select_cart = "select * from cart where ip_add='$ip_add'";

    $run_cart = mysqli_query($db, $select_cart);

    while($record=  mysqli_fetch_array($run_cart)){

        $pro_id = $record['p_id'];

        $pro_qty =$record['quantity'];

        $get_price = "select * from products where product_id='$pro_id'";

        $run_price = mysqli_query($db, $get_price);

        while($row_price=mysqli_fetch_array($run_price)){

            $sub_total = $row_price['product_price'] * $pro_qty;

            $total += $sub_total; 

        }
    }

    echo "&#8358; " . $total;
}

///  getTottalprice functions finish ///


///  getPro functions begin ///

function getPro(){

    global $db;

    $get_products = "select * from products  order by 1 ASC LIMIT 0,10";

    $run_products = mysqli_query($db, $get_products);

    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "

        <div class='top-box'><!-- Box Begin -->

                <table class='table'><!-- table Begin -->

                    <tbody>
                     <tr>
                         <td colspan='8'>
                         <a href='details.php?pro_id=$pro_id'>
                              
                         <img class='pro-images' src='admin_area/product_images/$pro_img1' alt='product_image'><br>
                            
                                <span class='pro-name'>$pro_title </span><br>
                                  <span class='pro-price'> &#8358; $pro_price </span> 
                             
                     </a>
                         </td>
                      </tr>
                    </tbody>

                </table>
        </div>

                    ";
    }
}

///  getPro functions finish ///


///  getPCats functions begin ///

function getPCats(){
    

    global $db;

    $get_p_cats = "select * from product_categories";

    $run_p_cats = mysqli_query($db, $get_p_cats);

    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cats['p_cat_id']; 

        $p_cat_title = $row_p_cats['p_cat_title'];
        
        
        echo "
        
        <li class='nav-item'>
        <a class='nav-link' href='../showroom.php?p_cat=$p_cat_id'  > $p_cat_title </a>
    </li>
        ";                               

     
}
}

///  getPCats functions finish ///


///  getpCatsPro functions begin ///

function getpcatpro(){

    global $db;

    if(isset($_GET['p_cat'])){

        $p_cat_id = $_GET['p_cat'];

        $get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";

        $run_p_cat = mysqli_query($db, $get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";

        $run_products = mysqli_query($db, $get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0){

            echo "

                <div class='box'>
                        <h3> No Products Found in this Product Categories </h3>
                </div>
            
            ";

        }else{

            echo "

                <div class='box'>

                    <h2> $p_cat_title </h2>

                    <p> $p_cat_desc </p>

                </div>
         
            <div class='col-sm-4 mobile-responsive'>

            <div class='table-responsive'><!-- table Responsive Begin -->

            <table class='table shop'><!-- table Begin -->

              <tbody><!-- Tbody Begin -->
                
                    <tr>
";
        }
       
                

        while($row_products= mysqli_fetch_array($run_products)){
            
        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "
             <td>
                                    <a href='details.php?pro_id=$pro_id;'>
                                      
                                        <img class='top-images' src='admin_area/product_images/$pro_img1 ' alt='product_image'><br>
                                           
                                               <span class='top-name'> $pro_title </span><br>
                                                 <span class='top-price'> &#8358; $pro_price </span> 
                                            
                                    </a>
        
                                  
                                  </td>
                    
                        ";

                        }
                                        echo" </tr>
                                    
                                    </tbody><!-- Finish -->

                            </table><!-- table Finish -->

                            </div><!-- table-responsive Finish -->

                            ";
        
    }
}

///  getpCatsPro functions finish ///

///  getCatsPro functions begin ///

function getcatpro(){

    global $db;

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];

        $get_cat = "select * from categories where cat_id = '$cat_id' ";

        $run_cat = mysqli_query($db, $get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['cat_title'];

        $cat_desc = $row_cat['cat_desc'];

        $get_products = "select * from products where cat_id= '$cat_id' LIMIT 0,6 " ;

        $run_products = mysqli_query($db, $get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0){

            echo "

            <div class='box'>
                    <h3> No Products Found in this Categories </h3>
            </div>
        
        ";

    }else{

        echo "

            <div class='box'>

                <h1> $cat_title </h3>

                <p> $cat_desc </p>

            </div>
        
        ";
    }


while($row_products= mysqli_fetch_array($run_products)){
            
    $pro_id = $row_products['product_id'];

    $pro_title = $row_products['product_title'];

    $pro_price = $row_products['product_price'];

    $pro_img1 = $row_products['product_img1'];

        echo "
            <div class='col-sm-4 mobile-responsive'>

                <div class='card shadow-nohover'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='card-img-top img-fluid' src='admin_area/product_images/$pro_img1'>

                    </a>

                    <div class='card-body'>

                        <h5 class='card-title'>

                            <a href='details.php?pro_id=$pro_id'>

                                $pro_title

                            </a>

                        </h5>

                        <p class='price'>

                        &#8358; $pro_price

                        </p>

                        <p class='button'>

                        <a href='details.php?pro_id=$pro_id' class='btn btn-info btn-sm'> View Details </a>

                        <a href='details.php?pro_id=$pro_id' class='btn btn-success btn-sm'>

                        <i class='fa fa-shopping-cart'>

                        Add To Cart

                            </i>

                        </a>
                        </p>

                                </a>
                                </div>
                            </div>
                        </div>
            
            ";

    }

}
}
///  getCatsPro functions finish ///

?>