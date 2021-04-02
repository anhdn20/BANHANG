<?php
  session_start();
  require_once("../system/config.php");
?>
<?php
   define("ARR_CONTROLLER", ["home","cart"]);
   $ctrl='home';
   if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];   
   if (in_array($ctrl, ARR_CONTROLLER)==false) die("Không tồn tại địa chỉ");
   $pathFile ="controllers/$ctrl.php"; 
   if (file_exists($pathFile) ==true) {
       require_once $pathFile;     
       $controllers = new $ctrl;
   }
   else echo "Controller $ctrl không tồn tại";
 ?> 