
<form class="pb-5" action="?ctrl=home&act=dangky" method="post">
    <div class="container">
        <div class="row">
            <div class="boxcenter">
                <div class="titlelogin bg-white  p-3">
                    <div class="d-flex justify-content-center mt-4">
                        <h2>Đăng Ký</h2>
                    </div>

                    <div class="keyregis">
                        <div class="input-div one ">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h5>Tên đăng nhập</h5>
                                <input class="input"  type="text" name="username" id="nameuser"><br>

                            </div>
                        </div>
                        <div class="mt-1" id="alert_signup1"></div>

                        <div class="input-div two">
                            <div class="i">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Địa chỉ email</h5>
                                <input class="input"  type="email" name="email" id="email" ><br>

                            </div>
                        </div>
                        <div class="mt-1" id="alert_signup2"></div>

                        <div class="input-div five">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <h5>Mật khẩu</h5>
                                <input class="input" type="password" name="pass" id="pass" ><br>

                            </div>
                        </div>
                        <div class="mt-1" id="alert_signup5"></div>

                        <div class="input-div three">
                            <div class="i">
                                <i class="fas fa-key"></i>
                            </div>
                            <div>
                                <h5>Nhập lại mật khẩu</h5>
                                <input class="input"  type="password" name="resetpass"  id="confirm_pass"><br>

                            </div>
                        </div>
                        <div class="mt-1" id="alert_signup3"></div>

                        <div class="input-div four">
                            <div class="i">
                                <i class="fas fa-phone-square-alt"></i>
                            </div>
                            <div>
                                <h5>Số điện thoại</h5>
                                <input class="input"  type="text" name="phonenumber" id="phonenumber" >

                            </div>
                        </div>
                        <div class="mt-1" id="alert_signup4"></div>


                        <div class="row">

<!--                            <input class="btn" type="submit" name="regis" id="regis" value="Đăng Ký">-->

<!--                            <span class="ml-5 mt-2">--><?php //if(isset($warning_null)) echo $warning_null;?><!--</span>-->
                            <button class="btn btn-dangky mt-2" type="submit" name="regis" id="regis" value="regis">Đăng Ký</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>

    //
    const inputs = document.querySelectorAll(".input");


    function addcl(){
        let parent = this.parentNode.parentNode;
        parent.classList.add("focus");
    }

    function remcl(){
        let parent = this.parentNode.parentNode;
        if(this.value == ""){
            parent.classList.remove("focus");
        }
    }


    inputs.forEach(input => {
        input.addEventListener("focus", addcl);
        input.addEventListener("blur", remcl);
    });
</script>
<?php
