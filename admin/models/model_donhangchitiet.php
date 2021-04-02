<?php
require_once '../system/model_system.php';
class model_donhangchitiet extends model_system {

    function update($idCT,$idDH,$idDT,$TenDT,$Gia,$SoLuong){ //hàm cập nhật 1 record vào table
        $sql = "UPDATE donhangchitiet SET idDH='$idDH',idDT='$idDT',TenDT='$TenDT',
        Gia='$Gia',SoLuong='$SoLuong'
         where idCT=".$idCT;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function delete($idCT){  //hàm xóa 1 record khỏi table
        $sql="DELETE from donhangchitiet where idCT=".$idCT;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function listrecords(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM donhangchitiet";
        $kq= $this->query($sql);
        return $kq;
    }
    function detailrecord($idCT){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM donhangchitiet where idCT=".$idCT;
        $kq= $this->queryOne($sql);
        return $kq;
    }
}//class
