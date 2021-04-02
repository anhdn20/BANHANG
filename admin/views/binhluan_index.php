<div class="container">
<table class="table table-striped table-light" >
    <thead>
    <tr>
        <th scope="col">ID BL</th>
        <th scope="col">Nội dụng BL</th>
        <th scope="col">ID DT</th>
        <th scope="col">ID User</th>
        <th scope="col">Thoi Gian BL</th>
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
    $linkedit="/".ADMIN_URL."/?ctrl=binhluan&act=edit&idBL=".$row['idBL'];
    $linkdel="/".ADMIN_URL."/?ctrl=binhluan&act=delete&idBL=".$row['idBL'];
    echo '<tr>
        <td>',$row['idBL'],'</td>
        <td>',$row['NoiDungBL'],'</td>
        <td>',$row['idDT'],'</td>
        <td>',$row['idUser'],'</td>
        <td>',$row['ThoiDiemBL'],'</td>
        <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
        echo '<td><a href="',$linkdel,'"  onclick= "return confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';

    echo '</tr>';
}?>
    </tbody>
</table>
</div>

