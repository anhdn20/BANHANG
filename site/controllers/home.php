<?php
require_once "../system/config.php";
require_once "../system/model_system.php";
require_once "models/model_home.php"; //nạp model để có các hàm tương tác db
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class home {

     function __construct()   {
        $this->model = new model_home();
        $act = "home";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//chức năng user request
        switch ($act) {    
	         case "home": $this->home(); break;
	         case "detail": $this->detail(); break;
             case "cat": $this->cat(); break;
             case "donhangcuatoi": $this->donhangcuatoi(); break;
             case "binhluan": $this->binhluan(); break;
             case "login": $this->login(); break;
             case "dangky": $this->dangky(); break;
             case "huydonhang": $this->huydonhang(); break;
             case "logout": $this->logout();
             case "catloai": $this->catloai(); break;
             case "verify": $this->verify(); break;
             case "doimatkhau": $this->doimatkhau(); break;
            case "quenmatkhau": $this->quenmatkhau(); break;
            case "matkhaumoi": $this->matkhaumoi(); break;

        }
             //$this->$act;
     }
     function home(){
         /*  Chức năng trang chủ
         1. Gọi các hàm trong model lấy dữ liệu cần thiết
         2. Nạp view 
         */  
         $sphot = $this->model->sanphamhot();
         $spmoi = $this->model->sanphamMoi();    
         $spbanchay = $this->model->sanphamchay();
         $viewFile = "views/home_index.php";     
         require_once "layout.php";  
      
         echo __METHOD__;
     }
     function donhangcuatoi(){
        /*  Chức năng trang chủ
        1. Gọi các hàm trong model lấy dữ liệu cần thiết
        2. Nạp view 
        */  
        $idUser = $_SESSION['sid'];
        settype($idUser, "int");
        $donhang = $this->model->donhang($idUser);
        
        $viewFile = "views/donhangcuatoi.php";     
        require_once "layout.php";  
     
        echo __METHOD__;
    }
    function huydonhang(){
        /*  Chức năng trang chủ
        1. Gọi các hàm trong model lấy dữ liệu cần thiết
        2. Nạp view 
        */  
        $idDH = $_GET['idDH'];
        settype($idDH, "int");
        $this->model->huydon($idDH);
        $viewFile = "views/donhangcuatoi.php";     
        require_once "layout.php";  
     
        echo __METHOD__;
    }
     function detail(){
        /*  Chức năng hiện chi tiết sản phẩm,
        1. Tiếp nhận tham số 
        2. Gọi hàm trong model để lấy chi tiết sản phẩm từ db
        3.Nạp view
        */
        $idDT = $_GET['idDT'];
        settype($idDT, "int");
        $detail = $this->model->detailsp($idDT);
        $thongsodt = $this->model->thongso($idDT);
        $this->model->demview($idDT);
        $spmoi = $this->model->sanphamMoi();  
        $dsbl = $this->model->binhluan($idDT);  
        if(isset($_POST['addbinhluan'])&&($_POST['addbinhluan'])){
            // lay du lieu
            $name = $_POST['name'];
            $idDT = $_POST['idDT'];
            $idUser = $_SESSION['sid'];
            $binhluan = $_POST['binhluan'];
            //
            $this->model->themcmt($name ,$idUser, $idDT, $binhluan);
            $dsbl = $this->model->binhluan($idDT);  
        }
        $viewFile = "views/detail_index.php";     
        require_once "layout.php";  
        echo __METHOD__;
     }
      function quenmatkhau(){


         $viewFile = "views/forgotPassword.php";
         require_once "layout.php";
         echo __METHOD__;
      }
     function cat(){
      /* Chức năng hiện các sản phẩm theo loại (nhà sản xuất)
         1. Tiếp nhận tham số id
         2. Gọi hàm tromg model lấy dữ liệu         
         3. Nạp view
      */

      if(isset($_GET['trang'])&&($_GET['trang'])){
         $current_page=$_GET['trang'];
      }else{
            $current_page=1;
      }
      $countproduct=$this->model->countdt();
      foreach ($countproduct as $totalpro) {
            $totalproduct=$totalpro['tong'];
      }


      $totalpage=ceil($totalproduct/6);
      $offset=($current_page - 1) *6;


      $sampham = $this->model->showDT_pagination($offset);
      $viewFile = "views/cat_index.php";     
      require_once "layout.php";  


         echo __METHOD__;
     }
      function catloai(){
         /* Chức năng hiện các sản phẩm theo loại (nhà sản xuất)
            1. Tiếp nhận tham số id
            2. Gọi hàm tromg model lấy dữ liệu         
            3. Nạp view
         */
         $idNSX = $_GET['idNSX'];
         settype($idNSX, "int");
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
   
         $amount_dt = $this->model->countdtbyID($idNSX);
         $catloai = $this->model->showDT_pagination22($idNSX,$offset);

         $viewFile = "views/catloai.php";     
         require_once "layout.php";  


         echo __METHOD__;
      }
       function login(){
          /* Chức năng hiện các sản phẩm theo loại (nhà sản xuất)
             1. Tiếp nhận tham số id
             2. Gọi hàm tromg model lấy dữ liệu
             3. Nạp view
          */
           if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
               $user=$_POST['user-name'];
               $pass=$_POST['pass'];
               $pass_hash=md5($pass);
               $ctrl = $_POST['ctrl'];
               $act = $_POST['act'];
               if ($act != "" && $ctrl != ""){
                   $ctrl =$ctrl;
                   $act = $act;
               }else{
                   $act = "home";
                   $ctrl = "home";
               }
               if(empty($user) || empty($pass)){
                   $cbnull="Vui lòng nhập đầy đủ thông tin";
               }else{
                   $cbnull="";
                   $checktk=$this->model->checkexistuser($user);
                   if($checktk){
                       $tk= "";
                       $checkpass=$this->model->checkpassword($pass_hash);
                       if($checkpass){
                           $cbpass="";
                           $checkuser=$this->model->checkuser($user,$pass_hash);
                           if($checkuser){
                               $_SESSION['sid']=$checkuser['idUser'];
                               $_SESSION['suser']=$checkuser['Username'];

                               header("location: ?ctrl={$ctrl}&act={$act}");
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



          echo __METHOD__;
       }
       function dangky(){
           require '../vendor/phpmailer/phpmailer/src/Exception.php';
           require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
           require '../vendor/phpmailer/phpmailer/src/SMTP.php';


               if(isset($_POST['regis']) && $_POST['regis']){

                   $account=$_POST['username'];
                   $email=$_POST['email'];
                   $name=$_POST['username'];
                   $phone_number=$_POST['phonenumber'];
                   $pass=$_POST['pass'];

                   $pass_hash= md5($pass);
//
                   $vkey = md5(time());
                   if(!empty($account) && !empty($email)  && !empty($pass)){
                       $this->model->register($name,$account,$pass_hash,$email,$phone_number,$vkey);

                       // Load Composer's autoloader
                       require '../vendor/autoload.php';

                       // Instantiation and passing `true` enables exceptions
                       $mail = new PHPMailer(true);

                       try {
                           //Server settings
                           $mail->SMTPDebug = 2;                      // Enable verbose debug output
                           $mail->isSMTP();                                            // Send using SMTP
                           $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                           $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                           $mail->Username   = 'daonhatanh630@gmail.com';                     // SMTP username
                           $mail->Password   = 'Nhatanh1';                               // SMTP password
                           $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                           $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                           $mail->CharSet    = 'UTF-8';

                           //Recipients
                           $mail->setFrom('daonhatanh630@gmail.com', 'Verify Email');
                           $mail->addAddress("anhdnps12765@fpt.edu.vn","anh");     // Add a recipient


                           // Gửi đính kèm file và hình ảnh
                           // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                           // $mail->addAttachment('public/images/sp1.jpg');    // Optional name

                           // Content
                           $mail->isHTML(true);                                  // Set email format to HTML
                           $mail->Subject = 'Verification code for Very your email address';
                           $messenge="<a href='http://localhost/PHP2_thaylong/banhang/site/?ctrl=home&act=verify&vkey=$vkey'>Register Account</a>";
                           $mail->Body    = $messenge ;
                           $mail->smtpConnect( array(
                               "ssl" => array(
                                   "verify_peer" => false,
                                   "verify_peer_name" => false,
                                   "allow_self_signed" => true
                               )
                           ));
//                           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                           if ($mail->send()) {
                               echo '<script>alert("Xác nhận email của bạn")</script>';
                               // header('loaction: index.php?ctrl=verify='.$activation_code);
                           }else{
                               echo "lỗi" , $mail->ErrorInfo;
                           }

                           // $mail->send();
                           // echo 'Message has been sent';
                       } catch (Exception $e) {
                           // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                       }
                   }else{
                       $warning_null='bạn chưa điền đầy đủ thông tin';
                   }

               }
           $viewFile = "views/dangky.php";
           require_once "layout.php";

       }
       function verify(){

           $viewFile = "views/verify_register.php";
           require_once "layout.php";
       }
    function matkhaumoi(){

        $viewFile = "views/resetPassword.php";
        require_once "layout.php";
    }
       function doimatkhau(){

             if( isset($_POST['doimk']) && $_POST['doimk']){
                 $info = $this->model->getInfoUser($_SESSION['sid']);
                 $mkcu_data = $info['pass'];
                 $mkcu_input = $_POST['MK_cu'];
                 $mkcu_input_hash = md5($mkcu_input);
                 $mkmoi_input = $_POST['MK_moi'];
                 $mkmoi_input_hash = md5($mkmoi_input);
                 if($mkcu_data == $mkcu_input_hash){
                     $change_pass = $this->model->doimatkhaulunne($mkmoi_input_hash,$_SESSION['sid']);
                     $annouce_change_pass_success = "Thay đổi mật khẩu thành công";
                 }else{
                     $wanning_error_pass = "Mật khẩu cũ không đúng nè";
                 }

             }


           $viewFile = "views/doimatkhau.php";
           require_once "layout.php";
       }
       function logout(){
            unset($_SESSION['sid']);
            unset($_SESSION['suser']);
            unset($_SESSION['idDH']);
            unset($_SESSION['carts']);
            header("location: index.php");

       }

     
 } //class home