
<?php      

if(!isset($_SESSION['email'])){

    echo "<script>window.open('../customer/sign-in.php', '_self')</script>";

}else{

?>

<div class="container">
                <br>
                <h3 class="dash-title"><i class="fas fa-layer-group"></i> View Categories </h3>
                <h6 class="text-center text-info">Tap on the new product category to input a category and click add.</h6>
                <h6 class="text-center text-info">To edit a category tap on the category you want to edit and tap outside the category to save it.</h6>
                <br>
                <div class="table-responsive">
                <div id="live_data"></div> 

                <div class="form-group text-center">
                            <a href="index.php?insert_product">
                                <p class="back">Insert Product</p>
                            </a>
                        </div>

</div>
</div>
</body>
       
</html>
<script>
           $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      } 
      fetch_data();  

      $(document).on('click', '#btn_add', function(){  
           var category_name = $('#category_name').text();   
           if(category_name == '')  
           {  
                alert("Enter Category Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{category_name:category_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(p_cat_id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{p_cat_id:p_cat_id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.category_name', function(){  
           var p_cat_id = $(this).data("id1");  
           var category_name = $(this).text();  
           edit_data(p_cat_id, category_name, "category_name");  
      });  


      $(document).on('click', '.btn_delete', function(){  
           var p_cat_id=$(this).data("id2");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{p_cat_id:p_cat_id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
            });

          
        </script>

 <?php     } ?>