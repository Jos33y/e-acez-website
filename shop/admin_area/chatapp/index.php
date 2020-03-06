<!--
Index.php
-->

<?php
include('dbconn.php');

session_start();

if(!isset($_SESSION['user_id']))
{
    header('location:login.php');
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> e-acez Chat App 2.0</title>

    <link rel="stylesheet" href="css/jquery-ui-1.12.1/jquery-ui.css">
     <link rel="stylesheet" href="css/jquery-ui-themes-1.12.1/jquery-ui.theme.css">
     <link rel="stylesheet" href="css/jquery-ui-1.12.1/jquery-ui.min.css">
     <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
     <script src="css/jquery-ui-1.12.1/jquery-ui.js"></script>  
     <script src="css/jquery-ui-1.12.1/jquery-ui.min.js"></script>
     <script src="css/jquery-ui-themes-1.12.1/jquery-ui.theme.min.js"></script>
     <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/dcfefef11a.js"></script>

</head>
<body>
    <div class="container">
    <br>
        <h3 class="text-center"> E-ACEZ CHAT APPLICATION 2.0 </h3>
        <br>
        <br>
        <div class="table table-responsive">
            <h4 class="text-center">Online Users</h4>
            <p class="text-left"><a href="https://www.e-acez.com/zangawears/admin_area/index.php?dashboard" class="btn btn-success btn-sm">Dashboard</a> </p>
            <p class="text-right">Hi - <?php echo $_SESSION['username'];?> - <a href="logout.php">Log Out</a></p>
            <div id="user_details"> </div>
            <div id="user_model_details"></div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>

</html>

<script>
$(document).ready(function(){

    fetch_user();

    setInterval(function(){
        update_last_activity();
        fetch_user();
        update_chat_history_data();
    }, 5000);

    function fetch_user()
    {
        $.ajax({
            url:"fetch_user.php",
            method: "POST",
            success:function(data){
                $('#user_details').html(data);
            }
        })
    }

    function update_last_activity()
    {
        $.ajax({
            url: "update_last_activity.php",
            success:function()
            {

            }
        })
    }

    function make_chat_dialog_box(to_user_id, to_user_name)
 {
  var modal_content = '<div id="modal_dialog_'+to_user_id+'" class="modal_dialog" title="You have chat with '+to_user_name+'">';
  modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
  modal_content += '</div>';
  modal_content += '<div class="form-group">';
  modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
  modal_content += '</div><div class="form-group" align="right">';
  modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
  $('#user_model_details').html(modal_content);
 }


    $(document).on('click', '.start_chat', function(){
    var to_user_id = $(this).data('touserid');
    var to_user_name = $(this).data('tousername');
    make_chat_dialog_box(to_user_id, to_user_name);
    $("#user_dialog_"+to_user_id).dialog({
    autoOpen:false,
    width:400
    });
    $('#user_dialog_'+to_user_id).dialog('open');
    $('#chat_message_'+to_user_id).emojioneArea({
        pickerPosition:"top",
        toneStyle: "bullet"
        });

    });

    $(document).on('click', '.send_chat', function(){
        var to_user_id = $(this).attr('id');
        var chat_message = $('#chat_message_'+to_user_id).val();
            $.ajax({
            url:"insert_chat.php",
            method:"POST",
            data:{to_user_id:to_user_id, chat_message:chat_message},
            success:function(data)
            {
                $('#chat_message_'+to_user_id).val('');
                var element = $('#chat_message_'+to_user_id).emojioneArea();
                element[0].emojioneArea.setText('');
                $('#chat_history_'+to_user_id).html(data);
            }
                })
    });
 


    function fetch_user_chat_history(to_user_id)
    {
        $.ajax({
            url:"fetch_user_chat_history.php",
            method:"POST",
            data:{to_user_id:to_user_id},
            success:function(data){
                $('#chat_history_'+to_user_id).html(data);
            }
        })
    }

    function update_chat_history_data()
    {
        $('.chat_history').each(function(){
            var to_user_id = $(this).data('touserid');
            fetch_user_chat_history(to_user_id);
        });
    }

    $(document).on('click', '.ui-button-icon', function(){
        $('.user_dialog').dialog('destroy').remove();
    });

    $(document).on('focus', '.chat_message', function(){
        var is_type = 'yes';
        $.ajax({
            url:"update_is_type_status.php",
            method:"POST",
            data:{is_type:is_type},
            success:function()
            {

            }
        })
    });

    $(document).on('blur', '.chat_message', function(){
        var is_type = 'no';
        $.ajax({
            url:"update_is_type_status.php",
            method:"POST",
            data:{is_type:is_type},
            success:function()
            {

            }
        })
    });
});
</script>