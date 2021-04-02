
<form method="post" action="<??>?ctrl=users&act=update" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="UserName" class="form-control" placeholder="Username" value="<?=$row['Username']?>" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="password" name="Pass" class="form-control" value="<?=$row['Password']?>" placeholder="Mật khẩu"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="HoTen" class="form-control" value="<?=$row['HoTen']?>" placeholder="HoTen"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="Email" class="form-control" value="<?=$row['Email']?>" placeholder="Email"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="VaiTro">
            <?php
                if($row['VaiTro'] == 1){
                    echo '<option value="1">Admin</option>
                            <option value="0">Người Dùng</option>';
                }else {
                    echo '<option value="0">Người Dùng</option>
                            <option value="1">Admin</option>';
                }
            ?>
        </select>
    </div>
    <div class="input-group mb-3">

        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Ẩn</span>
            <div class="input-group-text">

                <input type="radio" name="AnHien" value="An" aria-label="Radio button for following text input" id="basic-addon3" <?php if ($row['AnHien'] == 0) echo "checked"; else echo""; ?> >
            </div>
        </div>
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon4">Hiện</span>
            <div class="input-group-text">

                <input type="radio" name="AnHien" value="Hien" aria-label="Radio button for following text input" id="basic-addon4" <?php if ($row['AnHien'] == 1) echo "checked"; else echo""; ?> >
            </div>
        </div>

    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" value="<?=$row['urlHinh']?>" name="urlHinh" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01"><?=$row['urlHinh']?></label>
        </div>
    </div>
    <input type="hidden" value="<?php if(isset($_GET['idUser'])) echo $_GET['idUser']; ?>" name="IDUSER">
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>

    </div>
</form>

<?php
