function fireErr(text) {
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: text,
        showConfirmButton: true,
        showCancelButton: false,
        icon: 'error',
    });
}
$(document).ready(function () {
    $("#confirm_pass_new").keyup(function () {
        var pass_new=$("#pass_new").val();
        var confirm_pass_new=$("#confirm_pass_new").val();
        if(pass_new == confirm_pass_new){
            $("#check_pass_new").text("");
        }else{
            $("#check_pass_new").text("Mật khẩu không trùng khớp");
            $("#check_pass_new").css("color", "red");
        }

    });
});
//Email
$("#Reset_pass").click(async function(e) {
    e.preventDefault();
    let Email = $("#email_reset").val();

    // let remember = $("#remember").val();

    let Loading = Swal.fire({ // sweetAlert
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: 'views/assets/img/loading.gif',
    });
    if(Email != ""){
        let Emailcheck = new FormData();

        Emailcheck.append('Email', Email); //mã otp
        Emailcheck.append('Action', 'SendOTP');

        await $.ajax({
            type: 'POST',
            url: 'controllers/ajax/loginregister.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: Emailcheck,
            success:async function(response) {

                if (response.StatusCode === 0) {
                    Swal.fire({
                        timer: 3000,
                        type: 'success',
                        title: 'Thành công',
                        text: 'Vui lòng xác nhận Email của bạn',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "success"
                    });
                    var timeleft = 60;
                    var downloadTimer = setInterval(async function(){
                        if(timeleft <= 0){
                            clearInterval(downloadTimer);
                            document.getElementById("countdown").innerHTML = "" ;
                            let ClearOTP = new FormData();

                            ClearOTP.append('Action', 'ClearOTP');
                            await $.ajax({
                                url:"controllers/ajax/loginregister.php",
                                method:"POST",
                                dataType: 'JSON',
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: ClearOTP,
                                success:function(response){
                                    console.log(response.StatusCode)
                                }
                            });
                        } else {
                            document.getElementById("countdown").style.marginLeft = "40px";
                            document.getElementById("countdown").innerHTML = "Mã OTP có hiệu lực trong vòng " + timeleft+"s" ;
                        }
                        timeleft -= 1;
                    }, 1000);


                }else{
                    Swal.fire({
                        timer: 3000,
                        type: 'error',
                        title: 'Thất bại',
                        text: 'Có vấn đề trong lúc gửi Email',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "error"
                    });
                }
            },
            error: function() {
                Loading.close();
                    Swal.fire({
                    timer: 3000,
                    type: 'error',
                    title: 'Có lỗi xảy ra trong quá trình xử lý dữ liệu. Vui lòng thử lại sau.',
                    showConfirmButton: false,
                    showCancelButton: false,
                });
            }
        });
    }else{
        fireErr("Bạn chưa nhập Email")
    }
});

//OTP
$("#verify_OTP_toResetpass").click(async function(e) {
    e.preventDefault();
    let OTP_code = $("#OTP_code").val();

    // let remember = $("#remember").val();

    let Loading = Swal.fire({ // sweetAlert
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: 'views/assets/img/loading.gif',
    });
    if(OTP_code != ""){
        let Verify_OTP = new FormData();

        Verify_OTP.append('OTP', OTP_code); //mã otp
        Verify_OTP.append('Action', 'ForgotPass');

        await $.ajax({
            type: 'POST',
            url: 'controllers/ajax/loginregister.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: Verify_OTP,
            success:async function(response) {
                console.log(response.StatusCode);
                if (response.StatusCode === 0) {
                    Swal.fire({
                        timer: 3000,
                        type: 'success',
                        title: 'Thành công',
                        text: 'Mã hợp lệ',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "success"
                    });
                    window.location.href = "?ctrl=home&act=matkhaumoi";
                }else if(response.StatusCode === 1){
                    Swal.fire({
                        timer: 3000,
                        type: 'error',
                        title: 'Thất bại',
                        text: 'Mã OTP của bạn sai',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "error"
                    });
                }else{
                    Swal.fire({
                        timer: 3000,
                        type: 'error',
                        title: 'Thất bại',
                        text: 'Mã OTP Đã hết hạn',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "error"
                    });
                }
            },
            error: function() {
                Loading.close();
                Swal.fire({
                    timer: 3000,
                    type: 'error',
                    title: 'Có lỗi xảy ra trong quá trình xử lý dữ liệu. Vui lòng thử lại sau.',
                    showConfirmButton: false,
                    showCancelButton: false,
                });
            }
        })

    }else{
        fireErr("Bạn chưa nhập mã OTP")
    }
});
//nhap mat khau moi
$("#matkhaumoi").click(async function(e) {
    e.preventDefault();
    let pass_new = $("#pass_new").val();
    let confirm_pass_new = $("#confirm_pass_new").val();

    // let remember = $("#remember").val();

    let Loading = Swal.fire({ // sweetAlert
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: 'views/assets/img/loading.gif',
    });
    if(pass_new != "" && confirm_pass_new!=""){
        let ResetPass = new FormData();

        ResetPass.append('Pass', pass_new); //mã otp
        ResetPass.append('Action', 'UpdatePassNew');

        await $.ajax({
            type: 'POST',
            url: 'controllers/ajax/loginregister.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: ResetPass,
            success:async function(response) {
                console.log(response.StatusCode);
                if (response.StatusCode === true) {
                    Swal.fire({
                        timer: 3000,
                        type: 'success',
                        title: 'Thành công',
                        text: 'Mã hợp lệ',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "success"
                    });
                    window.location.href = "?ctrl=home";
                }else{
                    Swal.fire({
                        timer: 3000,
                        type: 'error',
                        title: 'Thất bại',
                        text: 'Có lỗi',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "error"
                    });
                }
            },
            error: function() {
                Loading.close();
                Swal.fire({
                    timer: 3000,
                    type: 'error',
                    title: 'Có lỗi xảy ra trong quá trình xử lý dữ liệu. Vui lòng thử lại sau.',
                    showConfirmButton: false,
                    showCancelButton: false,
                });
            }
        })

    }else{
        fireErr("Bạn chưa nhập mật khẩu")
    }
});


