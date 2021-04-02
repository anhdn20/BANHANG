<div class="">
    <div id="basket" style="margin-left:200px;" class="col-lg-9">
    <div class="box">
        <h1>Đơn Hàng Của tôi</h1>
        <?php
            $i =0;
            foreach ($donhang as $row) {
                if ($row['TrangThai']==0){
                    $TrangThai = "Đang xử lí";
                }else{
                    $TrangThai = "Đã xử lí";
                }
                echo '
                <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th>Tên KH</th>
                    <th>SDT KH</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Thời điểm đặt</th>
                    <th>PTTT</th>
                    <th>DVVC</th>
                    <th>Trạng thái</th>
                    <th>Tiến Độ</th>
                    
                    </tr>
                </thead>
                <tbody>';
                    
                       
                            echo '
                            <tr>
                                <td>'.$row['TenNguoiNhan'].'</td>
                                <td>'.$row['SdtNguoiNhan'].'</td>
                                <td>'.$row['EmailNguoiNhan'].'</td>
                                <td>'.$row['DiaChiNguoiNhan'].'</td>
                                <td>'.$row['ThoiDiemDatHang'].'</td>
                                <td>'.$row['PhuongThucThanhToan'].'</td>
                                <td>'.$row['PhuongThucGiaoHang'].'</td>
                                <td>'.$TrangThai.'</td>
                                <td>'.$row['TienDo'].'</td>
                            </tr>
                            ';
                        
                    
                
               echo '</tbody>
                </table>
            </div>
            <div class="row">
                
            
        <p>
        <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapseExample'.$i.'" aria-expanded="false" aria-controls="collapseExample'.$i.'">
           Xem chi tiết
        </button>
        </p>
        ';
            if($row['TrangThai']==0){
                echo '
                <form action="?ctrl=home&act=huydonhang&idDH='.$row['idDH'].'" method="POST">
                    <button onclick="return confirm_delete()" class="btn btn-primary ml-4" type="submit">
                        Hủy đơn hàng
                    </button>
                </form>'
                ;
            }else{
                echo " ";
            }
        echo '
        </div>
        <div class="collapse" id="collapseExample'.$i.'">
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th colspan="2">Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    
                    </tr>
                </thead>
                <tbody> ';
                        $donhangct = $this->model->donhangcuatoi($row['idDH']);
                        if ($donhangct==NULL) echo "Chưa có dữ liệu";
                        else foreach ($donhangct as $row) {
                            echo '
                            <tr>
                                <td><a href="#"><img src="'.$row['urlHinh'].'" style="width:50px;" alt=""></a></td>
                                <td><a href="#">'.$row['TenDT'].'</a></td>
                                <td>
                                    <input style="width:50%;" type="number" value="'.$row['SoLuong'].'" class="form-control">
                                </td>
                                <td>$'.$row['Gia'].'</td>
                                
                            </tr>
                            ';
                        }
                   
                
                 echo '</tbody>
                </table>
            </div>
        </div>
        </div>
                ';
            $i++;
            }
        ?>
        
       
        <!-- /.table-responsive-->
        <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
            <div class="left"><a href="?ctrl=home" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Trang chủ</a></div>
        </div>
        
    </div>
    <!-- /.box-->
    </div>
</div>
<script>
    function confirm_delete(){
        if(confirm("Are you sure ?"))
            return true;

        return false;
    }
</script>