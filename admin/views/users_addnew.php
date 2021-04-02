
<form method="post" action="<?=ADMIN_URL?>/?ctrl=users&act=store" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="UserName" class="form-control" placeholder="Username"  aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="password" name="Pass" class="form-control" placeholder="Mật khẩu"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="HoTen" class="form-control" placeholder="HoTen"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">@</span>
        <input type="text" name="Email" class="form-control" placeholder="Email"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="VaiTro">
            <option selected>Vai trò</option>
            <option value="0">Admin</option>
            <option value="1">Người Dùng</option>

        </select>
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

                <input type="radio" name="AnHien" value="Hien" aria-label="Radio button for following text input" id="basic-addon4">
            </div>
        </div>

    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="urlHinh"  aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>

    </div>
</form>

<?php
