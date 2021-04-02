<?php
require_once '../system/model_system.php';
class model_dienthoai extends model_system {
    function store($TenDT,$Gia,$GiaKM,$urlHinh,$ThoiDiemNhap,$MoTa,$SoLuong,$AnHien,$NSX,$Hot){ //hàm lưu 1 record vào table
        $sql="INSERT INTO dienthoai (TenDT,GiaKM,Gia,urlHinh,ThoiDiemNhap,MoTa,SoLuongTonKho,AnHien,idNSX,Hot) 
        values('$TenDT','$Gia','$GiaKM','$urlHinh','$ThoiDiemNhap','$MoTa','$SoLuong','$AnHien','$NSX','$Hot')";
        $kq= $this->query($sql);
        return $kq;
    }

    function update($idDT,$TenDT,$Gia,$GiaKM,$urlHinh,$MoTa,$SoLuong,$AnHien,$NSX){ //hàm cập nhật 1 record vào table
        if($urlHinh!=""){
            $sql = "UPDATE dienthoai SET TenDT='$TenDT',Gia='$Gia',GiaKM='$GiaKM',urlHinh='$urlHinh',MoTa='$MoTa',SoLuongTonKho='$SoLuong',Anhien='$AnHien'
        ,idNSX='$NSX' where idDT=".$idDT;
        }
        else{
            $sql = "UPDATE dienthoai SET TenDT='$TenDT',Gia='$Gia',GiaKM='$GiaKM',MoTa='$MoTa',SoLuongTonKho='$SoLuong',Anhien='$AnHien'
        ,idNSX='$NSX' where idDT=".$idDT;
        }

        $kq = $this ->execute($sql);
        return $kq;
    }

    function delete($idDT){
        $sql="DELETE from dienthoai WHERE idDT=".$idDT;
        $kq= $this->execute($sql);
        return $kq;
        //hàm xóa 1 record khỏi table
    }

    function listrecords(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai order by idDT";
        $kq= $this->query($sql);
        return $kq;
    }
    function detailrecord($idDT){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM dienthoai where idDT=".$idDT;
        $kq= $this->queryOne($sql);
        return $kq;
    }
    function dtthuoctinh($idDT){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM dienthoai, thuoctinhdt WHERE dienthoai.idDT = thuoctinhdt.idDT AND dienthoai.idDT=".$idDT;
       
        $kq= $this->query($sql);
        return $kq;
    }
    function countdt(){
        $sql="SELECT count(idDT) as tong from dienthoai";
        $kq= $this->query($sql);
        return $kq;
    }
    function showDT_pagination($offset){

        $sql="SELECT * FROM dienthoai ORDER BY idDT ASC LIMIT 6 offset ".$offset;
        echo $sql;
        $kq= $this->query($sql);

        return $kq;
    }
}//class
