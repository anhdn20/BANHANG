<?php
require_once "models/model_login.php"; //nạp model để có các hàm tương tác db
class login{
    function __construct()   {
        $this->model = new model_login();
        if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
            $user=$_POST['user-name'];
            $pass=$_POST['pass'];
            if(empty($user) || empty($pass)){
                $cbnull="Vui lòng nhập đầy đủ thông tin";
            }else{
                $cbnull="";
                $checktk=$this->model->checkexistuser($user);
                if($checktk){
                    $tk= "";
                    $checkpass=$this->model->checkpassword($pass);
                    if($checkpass){
                        $cbpass="";
                        $checkuser=$this->model->checkuser($user,$pass);
                        if($checkuser){
//                            $_SESSION['sid']=$checkuser['idUser'];
//                            $_SESSION['suser']=$checkuser['Username'];
                            if($checkuser['VaiTro']==1) header("location: layout.php");

                        }
                    }else{
                        $cbpass="Mật khẩu bạn nhập không đúng";
                    }
                }else{
                    $tk= "Tài khoản của bạn không tồn tại";
                }

            }


            //cảnh báo

        }


        require_once  "views/login.php";


    }




}