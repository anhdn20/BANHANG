<div class="container p-0">
<table class="table table-striped table-light" >
    <thead>
    <tr>
        <th scope="col" width="5%">IDuser</th>
        <th scope="col" >Username</th>
        <th scope="col" >Mật khẩu</th>
        <th scope="col" >Họ Tên</th>
        <th scope="col" >Kích hoạt</th>
        <th scope="col" >URL hình</th>
        <th scope="col"  >Email</th>
        <th scope="col" >Vai trò</th>
        <th scope="col" >Ẩn hiện</th>
        <th scope="col" >#</th>
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
    $linkedit="/".ADMIN_URL."/?ctrl=users&act=edit&idUser=".$row['idUser'];
    $linkdel="/".ADMIN_URL."/?ctrl=users&act=delete&idUser=".$row['idUser'];
    echo '<tr>
        <td>',$row['idUser'],'</td>
        <td>',$row['Username'],'</td>
        <td>',$row['Password'],'</td>
        <td>',$row['HoTen'],'</td>
        <td>',$row['KichHoat'],'</td>
        <td><img src="',$row['urlHinh'],'"></td>
        <td >',$row['Email'],'</td>
        <td>',$row['VaiTro'],'</td>
        <td>',$row['AnHien'],'</td>
        <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
        echo '<td><a href="',$linkdel,'"  onclick= "return confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';

    echo '</tr>';
}?>
    </tbody>
</table>
</div>

