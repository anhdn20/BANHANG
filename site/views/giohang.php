<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Giỏ Hàng</li>
                </ol>
              </nav>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box">

                  <h1>Giỏ Hàng</h1>
                  
                  <div class="table-responsive">
                    <table class="table">
                        <form action="?ctrl=cart&act=updatecart" method="post" enctype="multipart/form-data">
                      <?php
                            $total=0;
                            $tien = 0;
                            if ($_SESSION['carts']==NULL) echo "Bạn Chưa chọn sản phẩm nào cả!!!";
                            else{

                            echo '<thead>
                                  <tr>
                                    <th colspan="2">Sản Phẩm</th>
                                    <th width="30%">số lượng</th>
                                    <th>Giá</th>
                                    <th colspan="2">Tổng tiền</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>';
                            foreach ($_SESSION['carts'] as $row) {

                              $tongtien = $row['Gia'] * $row['quantity'];
                              $linkdel = "?ctrl=cart&act=delcart&vitri=".$tien;
                                echo '
                                <tr>
                                    <td><a href="#"><img src="'.$row['urlHinh'].'" alt="White Blouse Armani"></a></td>
                                    <td><a href="#">'.$row['TenDT'].'</a></td>
                                    <td>
                                    <button class="btn btn-primary dec" type="button" id="dec">-</button>
                                    <input aria-label="quantity" class="input-qty quantity" max="10" min="1" name="soluong_update[]" id="quantity" type="number" value="'.$row['quantity'].'">
                                    <button class="btn btn-danger inc" type="button" id="inc">+</button>
                                    </td>
                                    <td>'.$this->model1->formatMoney($row['Gia']).'đ</td>
                                    <td>'.$this->model1->formatMoney($tongtien).'đ</td>
                                    <td><a href="'.$linkdel.'"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                ';
                                $tien ++;
                                $total += $tongtien;

//                                array_push($_SESSION['update_quantity_cart'], $row['quantity']);

                            }
                            $tien_ship= $total * (1/100);
                            echo '</tbody>
                                  <tfoot>
                                    <tr>
                                      <th colspan="5">Tổng tiền</th>
                                      <th colspan="2">'.$this->model1->formatMoney($total).'đ</th>
                                    </tr>
                                  </tfoot>';
                          }
                        ?>  
                        
                      
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left"><a href="/<?=ROOT_URL?>/dien-thoai" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Trang chủ</a></div>
                    <div class="right">

                            <button class="btn btn-outline-secondary" name="update_quantity" value="update_quantity"><i class="fa fa-refresh"></i>Cập nhật giỏ hàng</button>
                        </form>
                        <?php
                            if(isset($_SESSION['sid'])){


                        ?>
                        <form action="?ctrl=cart&act=pay" method="post" enctype="multipart/form-data">
                            <button type="submit" class="btn btn-primary">tiến hành thanh toán <i class="fa fa-chevron-right"></i></button>
                        </form>
                        <?php }else{ ?>
                                <form enctype="multipart/form-data">
                                    <button type="button" data-toggle="modal" data-target="#login-modal" class="btn btn-primary">Đăng nhập để thanh toán <i class="fa fa-chevron-right"></i></button>

                                </form>
                        <?php } ?>


                    </div>
                  </div>

              </div>
              <!-- /.box-->
              
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
              <div id="order-summary" class="box">
                <div class="box-header">
                  <h3 class="mb-0">Thanh Toán</h3>
                </div>
                <p class="text-muted">Chi phí vận chuyển và chi phí bổ sung được tính dựa trên các giá trị bạn đã nhập.</p>
                <div class="table-responsive">
                  <table class="table" class="thongke_tien">
                    <tbody>
                      <tr>
                        <td>Tiền Hàng</td>
                        <th><?=$this->model1->formatMoney($total)?>đ</th>
                      </tr>
                      <tr>
                        <td>Phí Ship</td>
                        <th><?=$this->model1->formatMoney($tien_ship)?>đ</th>
                      </tr>
                      <tr class="total">
                        <td>Tổng</td>
                        <th><?=$this->model1->formatMoney($tien_ship + $total)?>đ</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box">
                <div class="box-header">
                  <h4 class="mb-0">Mã giảm giá</h4>
                </div>
                <p class="text-muted">Nếu bạn có mã phiếu giảm giá, vui lòng nhập mã đó vào ô bên dưới.</p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control"><span class="input-group-append">
                      <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                  </div>
                  <!-- /input-group-->
                </form>
              </div>
            </div>
            <!-- /.col-md-3-->
          </div>
        </div>
      </div>