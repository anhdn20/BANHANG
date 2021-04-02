<?php
require_once '../system/model_system.php';
class model_donhang extends model_system {
    function store($ThuTu,$tenNSX,$Anhien){ //hàm lưu 1 record vào table
        $sql = "INSERT INTO donhang (ThuTu, TenNSX,  AnHien)
        VALUES ('$ThuTu', '$tenNSX', '$Anhien')";
        $kq = $this -> query($sql);
        return $kq;
    }
    function update($idDH,$ThoiDiemDatHang,$TenNguoiNhan,$EmailNguoiNhan,$SdtNguoiNhan,$DiaChiNguoiNhan,$TienDo,$PhuongThucThanhtoan,$PhuongThucGiaoHang,$GhiChuCuaKhach){ //hàm cập nhật 1 record vào table
        $sql = "UPDATE donhang SET ThoiDiemDatHang='$ThoiDiemDatHang',TenNguoiNhan='$TenNguoiNhan',EmailNguoiNhan='$EmailNguoiNhan',
        SdtNguoiNhan='$SdtNguoiNhan',DiaChiNguoiNhan='$DiaChiNguoiNhan',TienDo='$TienDo',
        PhuongThucThanhtoan='$PhuongThucThanhtoan',PhuongThucGiaoHang='$PhuongThucGiaoHang',GhiChuCuaKhach='$GhiChuCuaKhach' where idDH=".$idDH;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function delete($idDH){  //hàm xóa 1 record khỏi table
        $sql="DELETE from donhang where idDH=".$idDH;
        $kq = $this ->execute($sql);
        return $kq;

    }
    function listrecords(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM donhang";
        $kq= $this->query($sql);
        return $kq;
    }
    function detailrecord($idDH){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM donhang where idDH=".$idDH;

        $kq= $this->queryOne($sql);
        return $kq;
    }
}//class
