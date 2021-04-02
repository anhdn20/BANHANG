<form method="post" action="/<?=ADMIN_URL?>/?ctrl=donhang&act=update">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="idDH" value="<?=$row['idDH']?>" class="form-control" placeholder="ID DH" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="date" name="ThoiDiemDatHang" value="<?=$row['ThoiDiemDatHang']?>" class="form-control" placeholder="Thời Điểm đặt" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="TenNguoiNhan" value="<?=$row['TenNguoiNhan']?>" class="form-control" placeholder="Tên Người Nhận" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="EmailNguoiNhan" value="<?=$row['EmailNguoiNhan']?>" class="form-control" placeholder="Email Người Nhận" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="SdtNguoiNhan" value="<?=$row['SdtNguoiNhan']?>" class="form-control" placeholder="SDT KH" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="DiaChiNguoiNhan" value="<?=$row['DiaChiNguoiNhan']?>" class="form-control" placeholder="Địa chỉ" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Tiến Độ</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="TienDo">
            <option selected value="<?=$row['TienDo']?>"><?=$row['TienDo']?></option>
            <option value="Chờ Xác Nhận">Chờ Xác Nhận</option>
            <option value="Đang Giao Hàng">Đang Giao Hàng</option>
            <option value="Đã Giao">Đã Giao</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Phương thức thanh toán</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="PhuongThucThanhToan">
            <option selected value="<?=$row['PhuongThucThanhToan']?>"><?=$row['PhuongThucThanhToan']?></option>
            <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
            <option value="Thẻ tín dụng">Thẻ tín dụng</option>
            <option value="Ví AriPay">Ví AriPay</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Đơn vị vận chuyển</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="PhuongThucGiaoHang">
            <option selected value="<?=$row['PhuongThucGiaoHang']?>"><?=$row['PhuongThucGiaoHang']?></option>
            <option value="Giao hàng tiết kiệm">Giao hàng tiết kiệm</option>
            <option value="Viettel Post">Viettel Post</option>
            <option value="J&T Express">J&T Express</option>
            <option value="Giao Hàng Nhanh">Giao Hàng Nhan</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" name="GhiChuCuaKhach" value="<?=$row['GhiChuCuaKhach']?>" class="form-control" placeholder="Ghi chú" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="nutsave" class="btn btn-danger" value="nutsave">LƯU</button>
    </div>
    <input name="ma_loai" value="<?=$row['idNSX']?>" type="hidden">
</form>

<?php
