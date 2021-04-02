<?php
require_once "models/model_home.php";
require_once "models/model_cart.php"; //nạp model để có các hàm tương tác db
class cart {
     function __construct()   {
        $this->model = new model_cart();
        $this->model1 = new model_home();
        $act = "cart";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//chức năng user request
        switch ($act) {    
            case "cart": $this->viewcart(); break;
            case "addcart": $this->addcart(); break;
            case "delcart": $this->delcart(); break;
            case "updatecart": $this->updatecart(); break;
            case "pay": $this->pay(); break;
            case "luudonhang": $this->luudonhang(); break;
            case "thankyou": $this->thankyou(); break;
        }
             //$this->$act;
     }
     
      function delcart(){
        /* Chức năng hiện các sản phẩm theo loại (nhà sản xuất)
        1. Tiếp nhận tham số id
        2. Gọi hàm tromg model lấy dữ liệu         
        3. Nạp view
        */
       
        if(isset($_GET['vitri'])){
            array_splice($_SESSION['carts'], $_GET['vitri'], 1);
        }
        

        $viewFile = "views/giohang.php";     
        require_once "layout.php";  


         echo __METHOD__;
      }
    function viewcart(){


        $viewFile = "views/giohang.php";
        require_once "layout.php";


        echo __METHOD__;
    }

    function addcart(){


        $idDT = $_GET['idDT'];
        settype($idDT, "int");
        $row = $this->model->addtocart($idDT);
//        header("location: ?ctrl=home&act=detail&idDT={$idDT}&add=success");

        $viewFile = "views/giohang.php";
        require_once "layout.php";


        echo __METHOD__;
    }
    function updatecart(){
        if(isset($_POST['update_quantity'])){
            $oke = $_POST['soluong_update'];
            $i=0;
            foreach ($oke as $oke){
                $_SESSION["carts"][$i]['quantity']=$oke;
                $i++;
            }
        }
        header("location: ?ctrl=cart&act=cart");
//         $viewFile = "views/giohang.php";
//         require_once "layout.php";


        echo __METHOD__;
    }
    function pay(){

        $viewFile = "views/pay.php";
        require_once "layout.php";


        echo __METHOD__;
    }
    function luudonhang(){
        $idUser = trim(strip_tags($_SESSION['sid']));
        $hoten = trim(strip_tags($_POST['HoTen']));
        $email = trim(strip_tags($_POST['Email']));
        $sdt = trim(strip_tags($_POST['sdt']));
        $diachi = trim(strip_tags($_POST['DiaChi']));
        $ghichu = trim(strip_tags($_POST['GhiChu']));
        $thanhtoan = trim(strip_tags($_POST['thanhtoan']));
        $giaohang = trim(strip_tags($_POST['giaohang']));
        echo $hoten, $email,$sdt,$diachi,$ghichu,$thanhtoan,$giaohang;
        if (isset($_SESSION['idDH'])) $idDH= $_SESSION['idDH']; else $idDH="-1";
        $idDH = $this->model->luudonhangnhe($idDH, $hoten, $email,$sdt,$diachi,$ghichu,$thanhtoan,$giaohang,$idUser);
        if ($idDH){
            $_SESSION['idDH'] = $idDH;
//            unset($_SESSION['idDH']);
            $giohang = $_SESSION['carts'];
            $this->model->luugiohangnhe($idDH, $giohang);
            echo '
            <script>
                window.location.href = "?ctrl=cart&act=thankyou";
            </script>
        ';
        }//if ($idDH)





        echo __METHOD__;
    }
    function thankyou(){

         require_once "views/camondamuahang.php";
    }
     
 } //class cart