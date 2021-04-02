<form method="post" action="<?=ADMIN_URL?>/?ctrl=thuoctinhdt&act=store" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">ID DT</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="idDT">
            <option selected>Chọn tên điện thoại</option>
            <?php
                if($row == null ) echo "Chưa Có Dữ Liệu";
                else {
                    foreach ( $row as $r){
                        echo '<option value="',$r['idDT'],'">',$r['TenDT'],'</option>';
                    }
                }
            ?>

        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="ManHinh" class="form-control" placeholder="Màn hình" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="HeDieuHanh" class="form-control" placeholder="Hệ điều hành" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="CameraSau" class="form-control" placeholder="Camera sau" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="CameraTruoc" class="form-control" placeholder="Camera trước" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="CPU" class="form-control" placeholder="CPU" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="RAM" class="form-control" placeholder="RAM" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="BoNhoTrong" class="form-control" placeholder="Bộ nhớ trong" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="TheNho" class="form-control" placeholder="Thẻ nhớ" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="TheSIM" class="form-control" placeholder="Thẻ Sim" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="DungLuongPin" class="form-control" placeholder="Dung lượng pin" aria-label="Username" aria-describedby="basic-addon2">
    </div>

   
    
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>

    </div>
</form>

<?php
