<?php
require_once '../system/model_system.php';
class model_users extends model_system {
    function store($Username,$Password,$HoTen,$urlHinh,$Email,$Vaitro,$Anhien){ //hàm lưu 1 record vào table
        $sql = "INSERT INTO users (Username, pass,HoTen,urlHinh,Email,VaiTro,  AnHien)
        VALUES ('$Username','$Password','$HoTen','$urlHinh','$Email','$Vaitro', '$Anhien')";
        $kq = $this -> query($sql);
        return $kq;
    }
    function update($idNSX,$Username,$Password,$HoTen,$urlHinh,$Email,$Vaitro,$Anhien){ //hàm cập nhật 1 record vào table
        if($urlHinh!=""){
            $sql = "UPDATE users SET Username='$Username',pass='$Password',HoTen='$HoTen',urlHinh='$urlHinh',Email='$Email',Vaitro='$Vaitro',Anhien='$Anhien'
        where idUser=".$idNSX;
        }
        else{
            $sql = "UPDATE users SET Username='$Username',pass='$Password',HoTen='$HoTen',Email='$Email',Vaitro='$Vaitro',Anhien='$Anhien'
        where idUser=".$idNSX;
        }

        $kq = $this ->execute($sql);
        return $kq;

    }
    function delete($id){  //hàm xóa 1 record khỏi table
        $sql="DELETE from users where idUser=".$id;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function listrecords(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM users";
        $kq= $this->query($sql);
        return $kq;
    }
    function detailrecord($id){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM users where idUser=".$id;
        $kq= $this->queryOne($sql);
        return $kq;
    }
}//class
