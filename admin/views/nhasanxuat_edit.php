<form method="post" action="/<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=update">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="ten_NSX" value="<?=$row['TenNSX']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div><div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="thu_tu" value="<?=$row['ThuTu']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div><div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="an_hien" value="<?=$row['AnHien']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>

    </div>
    <input name="ma_loai" value="<?=$row['idNSX']?>" type="hidden">
</form>

<?php
