<?php
require_once "models/model_donhangchitiet.php"; //nạp model để có các hàm tương tác db
require_once "models/model_nhasanxuat.php";
class donhangchitiet {
    function __construct()   {
        $this->model = new model_donhangchitiet();

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
        $page_title = "Danh sách đơn hàng chi tiết";
        $page_file = "views/donhangchitiet_index.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    
    
    function edit(){
      
        /* Chức năng hiện form edit 1 record
          1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
          2. Kiểm tra hợp lệ giá trị id
          3. Gọi hàm lấy record cần chỉnh (1 record)
          4. Nạp form chỉnh, trong form hiện thông tin của record,
          5. Form này cũng phải có method là Post, action trỏ lên act update*/
        $idCT = $_GET['idCT'];
        settype($idCT,"int");
        $row = $this->model ->detailrecord($idCT);
        $page_title=" Cập nhật thông tin đơn hàng chi tiết";
        $page_file = "views/donhangchitiet_edit.php";
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
            $idCT= $_POST['idCT'];
            $idDH = $_POST['idDH'];
            $idDT = $_POST['idDT'];
            $TenDT = $_POST['TenDT'];
            $Gia = $_POST['Gia'];
            $SoLuong = $_POST['SoLuong'];
            $row = $this->model ->update($idCT,$idDH,$idDT,$TenDT,$Gia,$SoLuong);
            echo '<script >';
            echo 'alert("cập nhật thành công");';  //not showing an alert box.
            echo '</script>';
            header("location: /". ADMIN_URL . "/?ctrl=donhangchitiet&act=index");

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

        header("location: /". ADMIN_URL . "/?ctrl=donhangchitiet&act=index");
        echo __METHOD__;
    }
} //class nhasanxuat