<form method="post" action="<?=ADMIN_URL?>/?ctrl=dienthoai&act=store" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="TenDT" class="form-control" placeholder="Tên điện thoại" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="Gia" class="form-control" placeholder="Gia" aria-label="Username" aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="GiaKM" class="form-control" placeholder="Khuyến mãi" aria-label="Username" aria-describedby="basic-addon2">
    </div>
    <div class="form-group mb-3">
        <label for="exampleFormControlTextarea1">Mô tả</label>
        <textarea class="form-control" name="MoTa" placeholder="Viết mô tả" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="NSX">
            <option selected>Chọn nhà sản xuất</option>
            <?php
                if($row == null ) echo "Chưa Có Dữ Liệu";
                else {
                    foreach ( $row as $r){
                        echo '<option value="',$r['idNSX'],'">',$r['TenNSX'],'</option>';
                    }
                }
            ?>

        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="SoLuong" class="form-control" placeholder="Soluong" aria-label="Username" aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Điện Thoại Hot</span>
            <div class="input-group-text">

                <input type="radio" name="DThot" aria-label="Radio button for following text input" id="basic-addon3">
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Ẩn</span>
            <div class="input-group-text">

                <input type="radio" name="AnHien" value="An" aria-label="Radio button for following text input" id="basic-addon3">
            </div>
        </div>
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon4">Hiện</span>
            <div class="input-group-text">

                <input type="radio" name="AnHien" value="An" aria-label="Radio button for following text input" id="basic-addon4">
            </div>
        </div>

    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="urlHinh" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>

    </div>
</form>

<?php
