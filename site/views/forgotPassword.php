<div class="container mt-5 pb-5">
    <div class="row">
        <div class="reset">
            <div class="row">
                <div class="reset_box">

                    <div class="col-md-12 d-flex justify-content-center mt-5">
                        <input type="text" name="email" id="email_reset" placeholder="Nhập Email Của Bạn">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-warning" id="Reset_pass">Gửi mã xác nhận</button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center text-center" id="announce_email">
                    </div>
                    <form action="#" method="post">
                        <div class="col-md-12 d-flex justify-content-center ">
                            <input type="text" name="code_otp" id="OTP_code" placeholder="Nhập mã xác nhận">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-info" name="OTP" value="OTP"  id="verify_OTP_toResetpass"> Xác nhận</button>
                        </div>
                    </form>
                    <div id="countdown"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
