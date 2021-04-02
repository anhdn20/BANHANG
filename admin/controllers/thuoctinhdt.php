<?php
require_once "models/model_thuoctinhdt.php";
require_once "models/model_dienthoai.php"; //nạp model để có các hàm tương tác db
class thuoctinhdt {
    function __construct()   {
        $this->model = new model_thuoctinhdt();

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
        if(isset($_GET['trang'])&&($_GET['trang'])){
            $current_page=$_GET['trang'];
        }else{
            $current_page=1;
        }
        $countproduct=$this->model->countdt();
        foreach ($countproduct as $totalpro) {
            $totalproduct=$totalpro['tong'];
            // echo $totalproduct;
        }


        $totalpage=ceil($totalproduct/6);
        $offset=($current_page - 1) *6;


        $list = $this->model->showDT_pagination($offset);

        $page_title = "Danh sách điện thoại";
        $page_file = "views/thuoctinhdt_index.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function addnew(){
        $model = new model_dienthoai();

        /*  Chức năng nạp view thêm record,
            1.Nạp form,form này phải có method="post",action của form => store */
        $page_title = "Thêm điện thoại";
        $page_file = "views/thuoctinhdt_addnew.php";
        $row = $model->listrecords();
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
            $idDT = $_POST['idDT'];
            $ManHinh = $_POST['ManHinh'];
            $HeDieuHanh = $_POST['HeDieuHanh'];
            $CameraSau = $_POST['CameraSau'];
            $CameraTruoc = $_POST['CameraTruoc'];
            $CPU = $_POST['CPU'];
            $RAM = $_POST['RAM'];
            $BoNhoTrong = $_POST['BoNhoTrong'];
            $TheNho = $_POST['TheNho'];
            $TheSIM = $_POST['TheSIM'];
            $DungLuongPin = $_POST['DungLuongPin'];
            $row = $this->model ->store($idDT,$ManHinh,$HeDieuHanh,$CameraSau,$CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSIM,$DungLuongPin);
            echo '<script >';
            echo 'alert("lưu thành công")';  //not showing an alert box.
            echo '</script>';
            header("location: /". ADMIN_URL . "/?ctrl=thuoctinhdt&act=index");

        }
        echo __METHOD__;
    }
    function edit(){
        $model = new model_dienthoai();
        /* Chức năng hiện form edit 1 record
          1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
          2. Kiểm tra hợp lệ giá trị id
          3. Gọi hàm lấy record cần chỉnh (1 record)
          4. Nạp form chỉnh, trong form hiện thông tin của record,
          5. Form này cũng phải có method là Post, action trỏ lên act update*/
        $idDT = $_GET['idDT'];
        settype($idDT,"int");
        $dthoai = $model->listrecords();
        $row = $this->model ->detailrecord($idDT);
        $page_title=" Cập nhật thông tin điện thoại";
        $page_file = "views/thuoctinhdt_edit.php";
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
            $idDT = $_POST['idDT'];
            $ManHinh = $_POST['ManHinh'];
            $HeDieuHanh = $_POST['HeDieuHanh'];
            $CameraSau = $_POST['CameraSau'];
            $CameraTruoc = $_POST['CameraTruoc'];
            $CPU = $_POST['CPU'];
            $RAM = $_POST['RAM'];
            $BoNhoTrong = $_POST['BoNhoTrong'];
            $TheNho = $_POST['TheNho'];
            $TheSIM = $_POST['TheSIM'];
            $DungLuongPin = $_POST['DungLuongPin'];
            $row = $this->model ->update($idDT,$ManHinh,$HeDieuHanh,$CameraSau,$CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSIM,$DungLuongPin);
            echo '<script >';
            echo 'alert("cập nhật thành công");';  //not showing an alert box.
            echo '</script>';
            header("location: /". ADMIN_URL . "/?ctrl=thuoctinhdt&act=index");

        }
        echo __METHOD__;
    }
    function delete(){
        /* Chức năng xóa record
         1. Tiếp nhận biến id của record cần xóa
         2. Gọi hàm xóa
         3. Tạo thông báo
         4. Chuyển đến trang cần thiết*/
        $idDT = $_GET['idDT'];
        settype($idDT,"int");
        $row = $this->model ->delete($idDT);

        header("location: /". ADMIN_URL . "/?ctrl=thuoctinhdt&act=index");
        echo __METHOD__;
    }
} //class nhasanxuat