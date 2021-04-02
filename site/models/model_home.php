<?php
// require_once '../system/model_system.php';

//  require_once "../system/config.php";
// require_once "../system/database.php";
 class model_home extends model_system {

    function sanphamhot(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai where Hot=1 order by idDT limit 8";
        $kq= $this->query($sql);
        return $kq;
    }


    function sanphamMoi(){ //hàm lấy các record trong table
    $sql = "SELECT * FROM dienthoai order by idDT desc limit 8";
    $kq= $this->query($sql);
    return $kq;
    }

    function sanphamchay(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai order by SoLanMuaa desc limit 4";
        $kq= $this->query($sql);
        return $kq;
    }

    function sanpham(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai order by idDT";
        $kq= $this->query($sql);
        return $kq;
    }

    function donhang($idUser){ //hàm lấy các record trong table
        $sql = "SELECT * FROM donhang where idUser=$idUser order by idDH desc";
        $kq= $this->query($sql);
        return $kq;
    }

    function donhangcuatoi($idDH){ //hàm lấy các record trong table
        $sql = "SELECT * FROM donhangchitiet WHERE idDH=$idDH";
        $kq= $this->query($sql);
        return $kq;
    }
    function huydon($idDH){ //hàm lấy các record trong table
        $sql="DELETE from donhang WHERE idDH=".$idDH;
        $kq= $this->execute($sql);
        return $kq;
    }

    function detailsp($idDT){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai where idDT=$idDT";
        $kq= $this->query($sql);
        return $kq;
    }

    function binhluan($idDT){ //hàm lấy các record trong table
        $sql = "SELECT * FROM binhluan, users WHERE binhluan.idUser = users.idUser and idDT=$idDT";
        $kq= $this->query($sql);
        return $kq;
    }
    function themcmt($name ,$idUser, $idDT, $binhluan){ //hàm lưu 1 record vào table
        $sql = "INSERT INTO binhluan(Username , idUser, idDT, NoiDungBL) VALUES ('$name','$idUser', '$idDT', '$binhluan')";
        $kq = $this -> query($sql);
        return $kq;
    }
    
    function thongso($idDT){ //hàm lấy các record trong table
        $sql = "SELECT * FROM thuoctinhdt, dienthoai WHERE dienthoai.idDT=thuoctinhdt.idDT and thuoctinhdt.idDT=$idDT";
        $kq= $this->query($sql);
        return $kq;
    }
      
    function demview($idDT){ //hàm cập nhật 1 record vào table
          $sql="UPDATE dienthoai SET SoLanXem=SoLanXem+1 where idDT='$idDT'";
          $kq= $this->execute($sql);
        return $kq;
    } 



    function showDT_pagination($offset){
        $sql="SELECT * FROM dienthoai ORDER BY idDT ASC LIMIT 6 offset ".$offset;
        $kq= $this->query($sql);
        return $kq;
    }

    function showDT_pagination22($idNSX,$offset){
        $sql="SELECT * FROM dienthoai where idNSX=$idNSX ORDER BY idDT ASC LIMIT 6 offset ".$offset;
        $kq= $this->query($sql);
        return $kq;
    }
    function  countdtbyID($idNSX){
        $sql="SELECT * FROM dienthoai where idNSX=$idNSX";
        $kq= $this->query($sql);
        $dem = $kq ->rowCount();
        return $dem;
    }
     function countdt(){
         $sql="SELECT count(idDT) as tong from dienthoai";
         $kq= $this->query($sql);
         return $kq;
     }
     function formatMoney($number, $fractional=false) {
         if ($fractional) {
             $number = sprintf('%.2f', $number);
         }
         while (true) {
             $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
             if ($replaced != $number) {
                 $number = $replaced;
             } else {
                 break;
             }
         }
         return $number;
     }
     function checkexistuser($user){
         $sql="select * from users where Username in ('".$user."')";

         return $this->queryOne($sql);
     }
     function checkpassword($pass){
         $sql="select * from users where pass='".$pass."'";
         return $this->queryOne($sql);
     }
     function checkuser($user,$pass){
         $sql="select * from users where Username='".$user."' and pass='".$pass."'";
         return $this->queryOne($sql);
     }
     function getNameNsx(){
        $sql="SELECT * FROM nhasanxuat order by idNSX";
        return $this->query($sql);
     }

     function getStorageDt(){
         $sql="SELECT DISTINCT(RAM) FROM thuoctinhdt  ORDER BY RAM DESC";
         return $this->query($sql);
     }
//     user
    function register($name,$account,$pass,$email,$phone,$vkey){
        $sql=" INSERT INTO users (Hoten, Email, PhoneNumber, Username, pass ,vkey)
        VALUES ('$name', '$email', '$phone','$account', '$pass', '$vkey')";
        return $this->execute($sql);
        // echo $sql;
    }
    function checkexist_code_reset($code){
        $sql="select * from users where code_reset_pass in ('$code')";
        return $this->queryOne($sql);
    }
    function update_password($code_reset,$pass){
        $sql = "UPDATE users SET pass='$pass' where code_reset_pass=".$code_reset;
        return $this->execute($sql);
    }
    function update_code_reset_pass($email,$code){
        $sql = "UPDATE users SET code_reset_pass='$code' where email='$email'";
        return $this->execute($sql);
    }
    function getAccountverify($vkey){
        $sql='SELECT verified,vkey from users where verified = 0 AND vkey="'.$vkey.'"';
        $sql=$this->query($sql);
        $count = $sql -> rowCount();
        return $count;
    }
    function UpdateAccountverify($vkey){
        $sql='UPDATE users SET verified = 1 where vkey = "'.$vkey.'" LIMIT 1';
        return $this->query($sql);
    }
    function getInfoUser($idUser){
        $sql="SELECT * FROM users where idUser= ".$idUser;
        return $this->queryOne($sql);
    }
    function doimatkhaulunne($MK_moi,$idUser){
        $sql="UPDATE users SET pass = '$MK_moi' where idUser=".$idUser;
        $kq= $this->execute($sql);
        return $kq;
    }
    function change_title($idDT){
        $sql="SELECT idDT,slug FROM dienthoai where idDT= ".$idDT;
        return $this->queryOne($sql);
    }
 }//class

 ?>