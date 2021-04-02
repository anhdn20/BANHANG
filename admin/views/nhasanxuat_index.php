<div class="container">
<table class="table table-striped table-light" >
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên</th>
        <th scope="col">Thứ tự</th>
        <th scope="col">Ẩn hiện</th>
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
    $linkedit="/".ADMIN_URL."/?ctrl=nhasanxuat&act=edit&idNSX=".$row['idNSX'];
    $linkdel="/".ADMIN_URL."/?ctrl=nhasanxuat&act=delete&idNSX=".$row['idNSX'];
    echo '<tr>
        <td>',$row['idNSX'],'</td>
        <td>',$row['TenNSX'],'</td>
        <td>',$row['ThuTu'],'</td>
        <td>',$row['AnHien'],'</td>
        <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
        echo '<td><a href="',$linkdel,'"  onclick= "return confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';

    echo '</tr>';
}?>
    </tbody>
</table>
</div>

