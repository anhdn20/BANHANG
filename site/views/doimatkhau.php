<div class="container" >
    <div class="row d-flex justify-content-center " ng-app="myapp">
        <div class="col-md-6 bg-light p-5 m-5" ng-controller="PasswordController">
            <form action="?ctrl=home&act=doimatkhau" method="post">
                <label for="MK_cu" class="form-label">Mật khẩu cũ</label>
                <input type="password" id="MK_cu" class="form-control mb-3" name="MK_cu" aria-describedby="passwordHelpBlock">

                <label for="MK_moi" class="form-label">Mật khẩu mới</label>
                <input type="password" id="MK_moi" ng-model="password" ng-change="analyze(password)" class="form-control mb-3" name="MK_moi" aria-describedby="passwordHelpBlock">

                <label for="verify_MK_moi" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" id="verify_MK_moi" class="form-control mb-3" aria-describedby="passwordHelpBlock">
                <div class="form-text" id="check_match_doi_mk">

                </div>
                <div class="form-text" >
                    <?php if(isset($wanning_error_pass)) echo $wanning_error_pass; else echo ""; ?>
                </div>
                <div class="form-text" >
                    <?php if(isset($annouce_change_pass_success)) echo $annouce_change_pass_success; else echo ""; ?>
                </div>
                <div ng-style="passwordStrength"></div>
                <button class="btn btn-primary doimatkhau mt-3" id="oke" type="submit" value="doimk" name="doimk">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
</div>

<?php
