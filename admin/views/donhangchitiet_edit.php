<form method="post" action="/<?=ADMIN_URL?>/?ctrl=donhangchitiet&act=update" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="idCT" class="form-control" value="<?=$row['idCT']?>" placeholder="ID CT" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="idDH" class="form-control" value="<?=$row['idDH']?>" placeholder="ID DH" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="idDT" class="form-control" value="<?=$row['idDT']?>" placeholder="ID DT" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="TenDT" class="form-control" value="<?=$row['TenDT']?>" placeholder="Ten DT" aria-label="Username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="Gia" class="form-control" value="<?=$row['Gia']?>" placeholder="Gia SP" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="SoLuong" class="form-control" value="<?=$row['SoLuong']?>" placeholder="So Luong" aria-label="Username" aria-describedby="basic-addon2">
    </div>

  

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>

    </div>
</form>

<?php
