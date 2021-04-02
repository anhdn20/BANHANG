<style>
    td.DT_mota{
        width: 110px;
        height: 160px;
        overflow: hidden;
        white-space: pre-wrap;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 6;

        -webkit-box-orient: vertical;
    }
    .pagination a.active {
        background-color: #c9a027;
        color: white;
    }

</style>
<table class="table table-striped table-light">
    <thead>
    <tr>
        <th scope="col">ID DT</th>
        <th scope="col">Man Hinh</th>
        <th scope="col">He Dieu Hanh</th>
        <th scope="col">CMR Sau</th>
        <th scope="col">CRM Truoc</th>
        <th scope="col">CPU</th>
        <th scope="col">Ram</th>
        <th scope="col">BNTrong</th>
        <th scope="col">The Nho</th>
        <th scope="col">The Sim</th>
        <th scope="col">DL Pin</th>
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


if ($dtthuoctinh==NULL) echo "Chưa có dữ liệu";
else foreach ($dtthuoctinh as $row) {
    $linkedit="/".ADMIN_URL."/?ctrl=thuoctinhdt&act=edit&idDT=".$row['idDT'];
    $linkdel="/".ADMIN_URL."/?ctrl=thuoctinhdt&act=delete&idDT=".$row['idDT'];
    echo '<tr>
        <td>',$row['idDT'],'</td>
        <td>',$row['ManHinh'],'</td>
        <td>',$row['HeDieuHanh'],'</td>
        <td>',$row['CameraSau'],'></td>
        <td>',$row['CameraTruoc'],'</td>
        <td>',$row['CPU'],'</td>
        <td>',$row['RAM'],'</td>
        <td>',$row['BoNhoTrong'],'</td>
        <td>',$row['TheNho'],'</td>
        <td>',$row['TheSIM'],'</td>
        <td>',$row['DungLuongPin'],'</td>
        <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
        echo '<td><a href="',$linkdel,'"  onclick= "confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';

    echo '</tr>';
}?>
    </tbody>
</table>


