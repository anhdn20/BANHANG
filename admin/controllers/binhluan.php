<?php
require_once "models/model_binhluan.php"; //nạp model để có các hàm tương tác db
class binhluan {
    function __construct()   {
        $this->model = new model_binhluan();
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
        $page_title = "Danh sách Coment";
        $page_file = "views/binhluan_index.php";
        require_once "layout.php";
        echo __METHOD__;
    }
    function addnew(){
        /*  Chức năng nạp view thêm record,
            1.Nạp form,form này phải có method="post",action của form => store */
        $page_title = "Thêm Coment";
        $page_file = "views/binhluan_addnew.php";
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
            $idNSX = $_POST['ThuTu'];
            $tenNSX = $_POST['TenNSX'];
            $AnHien = $_POST['AnHien'];
            $row = $this->model ->store($idNSX,$tenNSX,$AnHien);
            echo '<script language="javascript">';
            echo 'alert(lưu thành công)';  //not showing an alert box.
            echo '</script>';
            header("location:". ADMIN_URL . "/?ctrl=binhluan&act=index");

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
        $idNSX = $_GET['idNSX'];
        settype($idNSX,"int");
        $row = $this->model ->detailrecord($idNSX);
        $page_title=" Cập nhật Coment";
        $page_file = "views/binhluan_edit.php";
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

            $idNSX = $_POST['ma_loai'];
            $ThuTu = $_POST['thu_tu'];
            $tenNSX = $_POST['ten_NSX'];
            $AnHien = $_POST['an_hien'];
            $row = $this->model ->update($idNSX,$ThuTu,$tenNSX,$AnHien);
            echo '<script language="javascript">';
            echo 'alert(cập nhật thành công)';  //not showing an alert box.
            echo '</script>';
            header("location:". ADMIN_URL . "/?ctrl=binhluan&act=index");

        }
        echo __METHOD__;
    }
    function delete(){
        /* Chức năng xóa record
         1. Tiếp nhận biến id của record cần xóa
         2. Gọi hàm xóa
         3. Tạo thông báo
         4. Chuyển đến trang cần thiết*/
        $idNSX = $_GET['idNSX'];
        settype($idNSX,"int");
        $row = $this->model ->delete($idNSX);

        $page_title = "Danh sách Coment";
        $page_file = "views/binhluan_index.php";
        header("location:". ADMIN_URL . "/?ctrl=binhluan&act=index");
        echo __METHOD__;
    }
} //class binhluan