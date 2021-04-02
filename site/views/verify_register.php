
<?php
if(isset($_GET['vkey'])){
    $count=$this->model->getAccountverify($_GET['vkey']);
    if($count == 1){
        $this->model->UpdateAccountverify($_GET['vkey']);
        ?>
        <div class="container pb-5">
        <div class="row">
            <div class="boxcenter">
                <div class="titlelogin bg-white  p-3">
                    <div class="d-flex justify-content-center mt-4">
                        <h2>Đăng ký thành công</h2>
                    </div>

                    <div class="keyregis">

                        <div class="row d-flex justify-content-center">
                            <a class="btn btn-primary" href="index.php?ctrl=home" role="button" name="submit" id="regis">Đăng nhập ngay</a>
                            <!-- <a href="index.php?ctrl=signup"  type="submit" name="submit" id="regis" value="Đăng nhập ngay"> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }else{
        echo "<h1 class='text-center mb-5'>Tài Khoản Của Bạn Chưa Được Xác Thực</h1>";
    }
}else{
    ?>
    <div class="container">
        <div class="row">
            <div class="boxcenter">
                <div class="titlelogin bg-white  p-3">
                    <div class="d-flex justify-content-center mt-4">
                        <h2>Có gì đó không ổn</h2>
                    </div>
                    <div class="keyregis">
                        <div class="row">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>



