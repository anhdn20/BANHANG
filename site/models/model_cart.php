<?php
 require_once '../system/model_system.php';
 class model_cart extends model_system {

    function store(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai where Hot=1 order by idDT limit 8";
        $kq= $this->query($sql);
        return $kq;
    }
    function storedetail(){ //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai where Hot=1 order by idDT limit 8";
        $kq= $this->query($sql);
        return $kq;
    }
    function getOneProduct($idDT){
        $sql="SELECT * from dienthoai where 1 AND idDT=".$idDT;
        return $this->queryOne($sql);
    }

    function addToCart($idDT){
        //lay thong tin san pham can them vao gio hang
        $product = $this->getOneProduct($idDT);
        $bool=false;
        $i=0;

        if(!isset($_SESSION['carts']))
        {
            $_SESSION['carts']=array( '0'=> array("idDT"=>$idDT,"TenDT"=> $product['TenDT'],  "Gia"=> $product['Gia'],  "GiaKM"=> $product['GiaKM'],"urlHinh"=> $product['urlHinh'],"quantity"=>1));
        }
        else
        {
            foreach ($_SESSION['carts'] as $item) {
                if($item['idDT']==$idDT){
                    array_splice($_SESSION['carts'],$i,1,array(array("idDT"=>$idDT,"TenDT"=> $product['TenDT'],  "Gia"=> $product['Gia'],  "GiaKM"=> $product['GiaKM'],"urlHinh"=> $product['urlHinh'],"quantity"=>$item['quantity']+1)));
                    $bool=true;
                }
                $i++;
            }
            if($bool==false){
                array_push($_SESSION['carts'],array("idDT"=>$idDT,"TenDT"=> $product['TenDT'],  "Gia"=> $product['Gia'],  "GiaKM"=> $product['GiaKM'],"urlHinh"=> $product['urlHinh'],"quantity"=>1));
            }
        }
    }// them san pham vao gio hang
    function luudonhangnhe($idDH, $hoten, $email,$sdt,$diachi,$ghichu,$thanhtoan,$giaohang,$idUser){
         if ($idDH==-1){
            $sql = "INSERT INTO donhang SET TenNguoiNhan='{$hoten}', TienDo='Chờ hàng',idUser='{$idUser}', emailNguoiNhan='{$email}',SdtNguoiNhan='{$sdt}',
            DiaChiNguoiNhan	='{$diachi}',GhiChuCuaKhach='{$ghichu}',PhuongThucThanhToan='{$thanhtoan}',
            PhuongThucGiaoHang='{$giaohang}',ThoiDiemDatHang=Now(), AnHien=1";
             $kq= $this->query($sql);
             if (!$kq) return FALSE;
             else return $this->conn->lastInsertId();
         } else {
             $sql = "UPDATE donhang SET TenNguoiNhan='{$hoten}',idUser='{$idUser}', emailNguoiNhan='{$email}',SdtNguoiNhan='{$sdt}',
            DiaChiNguoiNhan	='{$diachi}',GhiChuCuaKhach='{$ghichu}',PhuongThucThanhToan='{$thanhtoan}',
            PhuongThucGiaoHang='{$giaohang}',ThoiDiemDatHang=Now(), AnHien=1";
             $kq= $this->query($sql);
             if (!$kq) return FALSE;
             else return $idDH;
        }
     }//function luudonhangnh
     function luugiohangnhe($idDH, $giohang){
         $sql = "DELETE FROM donhangchitiet WHERE idDH='$idDH'";
         $this->query($sql);
         foreach ($giohang as $idDT=>$dt){
             $tenDT = $dt['TenDT'];
             $gia= $dt['Gia'];
             $urlHinh = $dt['urlHinh'];
             $Amount= $dt['quantity'];
             $sql = "INSERT INTO donhangchitiet SET idDH='$idDH', idDT= '$idDT',TenDT='{$tenDT}', Gia='{$gia}', urlHinh='{$urlHinh}', SoLuong='$Amount'";
             $kq= $this->query($sql);
         }//foreach
     }


      
 }//class 
 ?>