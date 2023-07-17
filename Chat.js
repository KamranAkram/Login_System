// $(document).ready(function(){
//     $('#action_menu_btn').click(function(){
//         $('.action_menu').toggle();
//     });
//         });

$(document).on('submit' , '#ajax1' , function(e){
    e.preventDefault();
    $.ajax({
        url: $(this).prop('action'),
        method : $(this).prop('method'),
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'JSON',
        data: new FormData(this),
        success:function(result1){
            if(result1.email == "error"){
                toastr.error(result1.msg , "Error");
            }
            else if(result1.pwd == "error"){
                toastr.error(result1.msg , "Error");
            }
            else if(result1.pwd_match == "error"){
                toastr.error(result1.msg , "Error");
            }else if(result1.para == "error"){
                    toastr.error(result1.msg , "Error");
            }else if(result1.check == "success"){
                window.location= result1.location;
            }else if(result1.check1 == "success"){
                window.location= result1.location;
            }

        }
    });
});

//Group creation Validaton
$(document).on('submit' , '#create_group' , function(e){
    e.preventDefault();
    $.ajax({
        url: $(this).prop('action'),
        method : $(this).prop('method'),
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'JSON',
        data: new FormData(this),
        success:function(result2){
            if(result2.name == "error"){
                toastr.error(result2.msg , "Error");
            }else if(result2.user_id == "error"){
                    toastr.error(result2.msg , "Error");
            }else if(result2.check == "error"){
                toastr.error(result2.msg , "Error");
            }
            else if(result2.sql == "success"){
                window.location='users.php';            }
        }
    });
});


var id = '';
var is_group = false;
$(function(){
    $(document).on('click' , '.chat_list' , function(){
        is_group = false;
        var name = $(this).data('name');
        $('.heading-name-meta').html(name);
        $('.chat_list').removeClass('chat_active');
        $(this).addClass('chat_active');
        id = $(this).data('id');
        $("#rec_id").val(id);
        var url = "getmsgs.php?uid="+id; 
        $.get(url , function(res){
            $('.msg_history').html(res);
            $('.user_log').html(name);
        })
    })
})

//Group chat list
var id = '';

$(function(){
    $(document).on('click' , '.group_list' , function(){
        is_group = true;
        var name = $(this).data('name');
        $('.heading-name-meta').html(name);
        $('.chat_list').removeClass('chat_active');
        $(this).addClass('chat_active');
        id = $(this).data('id');
        $("#rec_id").val(id);
        var url = "group_msg.php?uid="+id; 
        $.get(url , function(res){
            $('.msg_history').html(res);
            $('.user_log').html(name);
        })
    })
})

//////////////////////////////
setInterval(function(){
    var url = "getmsgs.php?uid="+id; 
    $.get(url , function(res){
        $('.msg_history').html(res);
    })
} , 1000);

//group sending
$(document).on('click' , '.msg_send_btn' , function(e){
    e.preventDefault();
    var msg = $("#message").val();
    var id = $("#rec_id").val();
    var url = "Group_insert_chat.php?msg="+ msg +"&group_id=" + id; 
        $.get(url , function(){
            var url = "group_msg.php?uid="+id; 
            $.get(url , function(res){
                $('.msg_history').html(res);
            })
            });    
    });

    //Chat Sending
$(document).on('click' , '.msg_send_btn' , function(e){
    e.preventDefault();
    var msg = $("#message").val();
    var id = $("#rec_id").val();
    var url = "Chat_insert.php?msg="+ msg +"&receiver_id=" + id; 
        $.get(url , function(){
            var url = "getmsgs.php?uid="+id; 
            $.get(url , function(res){
                $('.msg_history').html(res);
            })
            });    
    });