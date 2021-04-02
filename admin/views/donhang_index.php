<div class="container">
<table class="table table-striped table-light" >
    <thead>
    <tr>
        <th scope="col">ID đơn hàng</th>
        <th scope="col">Thời điểm đặt</th>
        <th scope="col">Tên KH</th>
        <th scope="col">EMAIL KH</th>
        <th scope="col">SDT KH</th>
        <th scope="col">Địa chỉ</th>
        
        <th scope="col">Tiến độ</th>
        <th scope="col">PT Thanh toán</th>
        <th scope="col">PT Giao hàng</th>
        <th scope="col">Ghi chú KH</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
    </tr>
    </thead>
    <tbody>
<script>
    function confirm_delete(){
        if(confirm("Are you sure ?"))
            return true;

        return false;
    }
</script>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date("d-m-Y H:i:s ", time());
if ($list==NULL) echo "Chưa có dữ liệu";
else foreach ($list as $row) {
    $linkedit="/".ADMIN_URL."/?ctrl=donhang&act=edit&idDH=".$row['idDH'];
    $linkdel="/".ADMIN_URL."/?ctrl=donhang&act=delete&idDH=".$row['idDH'];
    echo '<tr>
        <td>',$row['idDH'],'</td>
        <td>',$row['ThoiDiemDatHang'],'</td>
        <td>',$row['TenNguoiNhan'],'</td>
        <td>',$row['EmailNguoiNhan'],'</td>
        <td>',$row['SdtNguoiNhan'],'</td>
        <td>',$row['DiaChiNguoiNhan'],'</td>
        
        <td>',$row['TienDo'],'</td>
        <td>',$row['PhuongThucThanhToan'],'</td>
        <td>',$row['PhuongThucGiaoHang'],'</td>
        <td>',$row['GhiChuCuaKhach'],'</td>
        <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
        echo '<td><a href="',$linkdel,'"  onclick= "return confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';

    echo '</tr>';
}?>
    </tbody>
</table>
</div>

