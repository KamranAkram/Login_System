
$(document).on('submit' , '#ajax' , function(e){
    e.preventDefault();
    $.ajax({
        url: $(this).prop('action'),
        method : $(this).prop('method'),
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'JSON',
        data: new FormData(this),
        success:function(result){
            if(result.first == "error"){
                toastr.error(result.msg , "Error");
            }else if(result.last == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.email == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.pwd == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.pwd_match == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.cpwd == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.con_pwd == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.phone == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.phone_match == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.address == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.check == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.email_match == "error"){
                toastr.error(result.msg , "Error");
            }
            else if(result.insert == "success"){
              window.location = 'login1.php';
            }

        }
    });
});







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





/////////////////////////
// $(document).on('submit' , '#log' , function(e){
//     e.preventDefault();
//     $.ajax({
//         url: $(this).prop('action'),
//         method : $(this).prop('method'),
//         contentType: false,
//         cache: false,
//         processData: false,
//         dataType: 'JSON',
//         data: new FormData(this),
//         success:function(result1){
//             if(result1.email == "error"){
//                 toastr.error(result1.msg , "Error");
//             }else if(result1.pwd == "error"){
//                     toastr.error(result1.msg , "Error");
//             }else if(result1.pass_match == "error"){
//                     toastr.error(result1.msg , "Error");
//             }else if(result1.check == "success"){
//             }else if(result1.message == "error"){
//                     toastr.error(result1.msg , "Error");
//             }else if(result1.check == "success"){
//                 window.location= result1.location;
//             }else if(result1.check1 == "success"){
//                 window.location= result1.location;
//             }
//         }
//     });
// });