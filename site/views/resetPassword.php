<div class="container pb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="reset_box bg-light">

                <form action="" method="post">
                    <div class="d-flex justify-content-center mt-5 ">
                        <input type="password" name="new_pass" placeholder="Nhập mật khẩu mới" id="pass_new">
                    </div>
                    <div class="d-flex justify-content-center mt-2 ">
                        <input type="password" placeholder="Xác nhận lại mật khẩu khẩu mới" id="confirm_pass_new">
                    </div>
                    <div class="d-flex justify-content-center mt-2 ">
                        <p id="check_pass_new"><?php if(isset($check_success_change_pass) && $check_success_change_pass!="") echo $check_success_change_pass; ?></p>
                    </div>
                    <div class="d-flex justify-content-center  ">
                        <button type="button" class="btn btn-info" name="resetpass" id="matkhaumoi">Đổi mật khẩu</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
<?php
