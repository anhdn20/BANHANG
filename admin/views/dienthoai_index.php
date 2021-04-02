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
            <th scope="col">Tên DT</th>
            <th scope="col">#</th>
           
            <th scope="col">urlHinh</th>
            <th scope="col">TG nhập</th>
            <th scope="col" id="#DT_mota">Mô Tả</th>
            <th scope="col">#</th>
            <th scope="col">NSX</th>
            <th scope="col">Hot</th>
            <th scope="col">T.kho</th>
            <th scope="col">Ẩn hiện</th>
            <th scope="col">#</th>
            <th scope="col">#</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        
        <script>
            function confirm_delete(){
                if(confirm("Are you sure ?"))
                    return true;

                return false;
            }
        </script>
        <tbody>
    <?php
        if ($list==NULL) echo "Chưa có dữ liệu";
        else foreach ($list as $row) {
            $nsx = $model ->detailrecord($row['idNSX']);
            $thuoctinh="/".ADMIN_URL."/?ctrl=dienthoai&act=thuoctinh&idDT=".$row['idDT'];
            $linkedit="/".ADMIN_URL."/?ctrl=dienthoai&act=edit&idDT=".$row['idDT'];
            $linkdel="/".ADMIN_URL."/?ctrl=dienthoai&act=delete&idDT=".$row['idDT'];
            echo '<tr>
                <td>',$row['TenDT'],'</td>
                <td><h4>Giá: ',$row['Gia'],'</h4><hr><h4>Giá KM: ',$row['GiaKM'],'</h4></td>
                <td><img src="',$row['urlHinh'],'"></td>
                <td>',$row['ThoiDiemNhap'],'</td>
                <td class="DT_mota">',$row['MoTa'],'</td>
                <td><h4>L.xem: ',$row['SoLanXem'],'</h4><hr><h4>L.mua: ',$row['SoLanMuaa'],'</h4></td>
                
                <td>',$nsx['TenNSX'],'</td>
                <td>',$row['Hot'],'</td>
                <td>',$row['SoLuongTonKho'],'</td>
                <td>',$row['AnHien'],'</td>
                <td><a href="',$thuoctinh,'">Thuộc tính</a></td>
                <td><a href="',$linkedit,'"><i class="fas fa-edit"></i></a></td>';
                echo '<td><a href="',$linkdel,'"  onclick= "confirm_delete()"><i class="fas fa-minus-circle"></i></a></td>';
            echo '</tr>';
        }
    ?>
        </tbody>
    </table>
<div class="row mt-5">
    <div class="col-md-12">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php
                $page=1;
                for ($i=1; $i < $totalpage+1; $i++) {
                    if(isset($_GET['trang']) && ($_GET['trang'])){
                        $page=$_GET['trang'];
                    }
                    if($i==$page){
                        echo '<li class="page-item"><a class="page-link" href="?ctrl=dienthoai&act=index&trang='.$i.'" class="active">'.$i.'</a></li>';
                    }else{
                        echo '<li class="page-item"><a class="page-link" href="?ctrl=dienthoai&act=index&trang='.$i.'">'.$i.'</a></li>';
                    }

                }

                ?>
                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>
