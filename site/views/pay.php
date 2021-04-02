<div class="container mb-5">
    <form action="?ctrl=cart&act=luudonhang" method="post" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-8 bg-light">
            <div class="row mt-3">
                <div class="col-md-12 m-0">
                    <p>Thông tin khách hàng (Người nhận)</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="inputtext1" class="col-sm-2 col-form-label">Họ Và Tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="HoTen" id="inputtext1" placeholder="họ và tên">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group row ">
                                    <label for="inputemail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="Email" id="inputemail" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row ">
                                    <label for="inputsdt" class="col-sm-3 col-form-label">Điện Thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sdt" id="inputsdt" placeholder="Số điện thoại">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="inputAddress" class="col-sm-2 col-form-label">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="DiaChi" id="inputAddress" placeholder="Địa chỉ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Ghi chú</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="GhiChu" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <p>Phương Thức Thanh Toán</p>
                    <div class="custom-control custom-radio custom-control-inline ">
                        <input type="radio" id="customRadioInline1" name="thanhtoan" value="chuyển khoản" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Chuyển khoản</label>
                    </div> <br>
                    <div class="custom-control custom-radio custom-control-inline ">
                        <input type="radio" id="customRadioInline2" name="thanhtoan" value="khi nhận hàng" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Khi nhận hàng</label>
                    </div><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="thanhtoan" value="Onepay" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">Onepay</label>
                    </div><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="thanhtoan" value="Ngân lượng" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline4">Ngân lượng</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Phương Thức Giao Hàng</p>
                        <div class="custom-control custom-radio custom-control-inline ">
                            <input type="radio" id="customRadioInline5" name="giaohang" value="giao nhanh" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline5">Giao hàng nhanh</label>
                        </div> <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline6" name="giaohang" value="tiết kiệm" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline6">Giao hàng tiết kiệm</label>
                        </div><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline7" name="giaohang" value="VN Post" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline7">VN Post</label>
                        </div><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline8" name="giaohang" value="Viettel" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline8">Viettel</label>
                        </div>

                </div>
            </div>
            <div class="row mb-3 p-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info">Mua Hàng</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<?php
