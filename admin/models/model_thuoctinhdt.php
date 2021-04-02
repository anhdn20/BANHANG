<?php
require_once '../system/model_system.php';
class model_thuoctinhdt extends model_system {
    function store($idDT,$ManHinh,$HeDieuHanh,$CameraSau,$CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSIM,$DungLuongPin){ //hàm lưu 1 record vào table
        $sql="INSERT INTO thuoctinhdt (idDT,ManHinh,HeDieuHanh,CameraSau,CameraTruoc,CPU,RAM,BoNhoTrong,TheNho,TheSIM,DungLuongPin) 
        values('$idDT','$ManHinh','$HeDieuHanh','$CameraSau','$CameraTruoc','$CPU','$RAM','$BoNhoTrong','$TheNho','$TheSIM','$DungLuongPin')";
        $kq= $this->query($sql);
        return $kq;
    }

    function update($idDT,$ManHinh,$HeDieuHanh,$CameraSau,$CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSIM,$DungLuongPin){ //hàm cập nhật 1 record vào table
        $sql = "UPDATE thuoctinhdt SET idDT='$idDT',ManHinh='$ManHinh',HeDieuHanh='$HeDieuHanh',CameraSau='$CameraSau',
        CameraTruoc='$CameraTruoc',CPU='$CPU',RAM='$RAM',BoNhoTrong='$BoNhoTrong',TheNho='$TheNho',TheSIM='$TheSIM',DungLuongPin='$DungLuongPin'
        where idDT=".$idDT;
        $kq = $this ->execute($sql);
        return $kq;
    }

    function delete($idDT){
        $sql="DELETE from thuoctinhdt WHERE idDT=".$idDT;
        $kq= $this->execute($sql);
        return $kq;
        //hàm xóa 1 record khỏi table
    }

    function listrecords(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM thuoctinhdt order by idDT";
        $kq= $this->query($sql);
        return $kq;
    }
    function detailrecord($idDT){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM thuoctinhdt where idDT=".$idDT;
        $kq= $this->queryOne($sql);
        return $kq;
    }
    function countdt(){
        $sql="SELECT count(idDT) as tong from thuoctinhdt";
        $kq= $this->query($sql);
        return $kq;
    }
    function showDT_pagination($offset){
        $sql="SELECT * FROM thuoctinhdt ORDER BY idDT ASC LIMIT 6 offset ".$offset;
        $kq= $this->query($sql);

        return $kq;
    }
}//class
