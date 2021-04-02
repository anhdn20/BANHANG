<?php
require_once 'layout2.php';
require_once "models/model_users.php"; //nạp model để có các hàm tương tác db
class users {
    function __construct()   {
        $this->model = new model_users();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {
            case "index": $this->index(); break;
            case "addnew": $this->addnew(); break;
            case "store": $this->store(); break;
            case "edit": $this->edit(); break;
            case "update": $this->update(); break;
            case "delete": $this->delete(); break;
        }
        //$this->$act;
    }
    function index(){
        $list = $this->model->listrecords();
        $page_title = "Danh sách người dùng";
        $page_file = "views/users_index.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function addnew(){
        /*  Chức năng nạp view thêm record,
            1.Nạp form,form này phải có method="post",action của form => store */
        $page_title = "Thêm người dùng";
        $page_file = "views/users_addnew.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function store(){
        /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
          1. Tiếp nhận các giá trị từ form addnew
          2. Kiểm tra hợp lệ các giá trị nhận được
          3. Gọi hàm chèn vào db
          4. Tạo thông báo
          5. Chuyển hướng đến trang cần thiết*/
        if(isset($_POST['nutsave'])){
            $Username = $_POST['UserName'];
            $Pass = $_POST['Pass'];
            $HoTen = $_POST['HoTen'];
            $urlHinh=$_FILES['urlHinh']['name'];

            //upload hinh
            $path="images/";
            $target_file = $path . basename($urlHinh);
//
            if(move_uploaded_file($_FILES['urlHinh']['tmp_name'],$target_file)){

            }
            $urlHinh = "images/".$urlHinh;
            $Email = $_POST['Email'];
            $Vaitro = $_POST['VaiTro'];
            if($_POST['AnHien'] == "An"){
                $AnHien = 0;
            }else $AnHien = 1;
            $row = $this->model ->store($Username,$Pass,$HoTen,$urlHinh,$Email,$Vaitro,$AnHien);

            echo '<script language="javascript">';
            echo 'alert(lưu thành công)';  //not showing an alert box.
            echo '</script>';
            header("location: /". ADMIN_URL . "/?ctrl=users&act=index");

        }
        echo __METHOD__;
    }
    function edit(){
        /* Chức năng hiện form edit 1 record
          1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
          2. Kiểm tra hợp lệ giá trị id
          3. Gọi hàm lấy record cần chỉnh (1 record)
          4. Nạp form chỉnh, trong form hiện thông tin của record,
          5. Form này cũng phải có method là Post, action trỏ lên act update*/
        $idUser = $_GET['idUser'];
        settype($idUser,"int");
        $row = $this->model ->detailrecord($idUser);
        $page_title=" Cập nhật User";
        $page_file = "views/users_edit.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function update(){
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
         1. Tiếp nhận các giá trị từ form edit
         2. Kiểm tra hợp lệ các giá trị nhận được
         3. Gọi hàm cập nhật vào db
         4. Tạo thông báo
         5. Chuyển hướng đến trang cần thiết */

        if(isset($_POST['nutsave'])){

            $idUser= $_POST['IDUSER'];
            $Username = $_POST['UserName'];
            $Pass = $_POST['Pass'];
            $HoTen = $_POST['HoTen'];
            $urlHinh=$_FILES['urlHinh']['name'];
            if($urlHinh != ""){
                $urlHinh=$_FILES['urlHinh']['name'];
                $path = "images/";
                $target_file =$path . basename($urlHinh);
                if(move_uploaded_file($_FILES['urlHinh']['tmp_name'], $target_file)){
                    $err_add = "Upload thanh cong";
                }else{
                    $err_add = "Upload That bai";
                }
                $urlHinh = "images/".$urlHinh;
            }else {
                $urlHinh = "";
            }

            $Email = $_POST['Email'];
            $Vaitro = $_POST['VaiTro'];
            if($_POST['AnHien'] == "An"){
                $AnHien = 0;
            }else $AnHien = 1;
//
                $row = $this->model ->update($idUser,$Username,$Pass,$HoTen,$urlHinh,$Email,$Vaitro,$AnHien);

            header("location: /". ADMIN_URL . "/?ctrl=users&act=index");


        }
        echo __METHOD__;
    }
    function delete(){
        /* Chức năng xóa record
         1. Tiếp nhận biến id của record cần xóa
         2. Gọi hàm xóa
         3. Tạo thông báo
         4. Chuyển đến trang cần thiết*/
        $idUser = $_GET['idUser'];
        settype($idUser,"int");
        $row = $this->model ->delete($idUser);

        $page_title = "Danh sách nhà sản xuất";
        $page_file = "views/users_index.php";
        header("location: /". ADMIN_URL . "/?ctrl=users&act=index");
        echo __METHOD__;
    }
} //class nhasanxuat