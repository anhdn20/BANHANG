<div class="container">
<table class="table table-striped table-light" >
    <thead>
    <tr>
        <th scope="col">ID CT</th>
        <th scope="col">ID DH</th>
        <th scope="col">ID DT</th>
        <th scope="col">Tên DT</th>
        <th scope="col">Giá</th>
        <th scope="col">Số Lượng</th>

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
        $linkedit="/".ADMIN_URL."/?ctrl=donhangchitiet&act=edit&idCT=".$row['idCT'];
        $linkdel="/".ADMIN_URL."/?ctrl=donhangchitiet&act=delete&idCT=".$row['idCT'];
        echo '<tr>
            <td>',$row['idCT'],'</td>
            <td>',$row['idDH'],'</td>
            <td>',$row['idDT'],'</td>
            <td>',$row['TenDT'],'</td>
            <td>',$row['Gia'],'</td>
            <td>',$row['SoLuong'],'</td>
            
            <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
            echo '<td><a href="',$linkdel,'"  onclick= "return confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';

        echo '</tr>';
    }?>
    </tbody>
</table>
</div>

