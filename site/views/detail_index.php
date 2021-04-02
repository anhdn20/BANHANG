<?php
    if(isset($_GET['add']) && $_GET['add']="success"){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert_add_success">
    <strong>Sản phẩm đã được thêm vào giỏ hàng</strong>
</div>';
    }else{
      echo "";
    }
?>
<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">DIEN THOAI</a></li>
                  
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">MỤC LỤC</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a class="nav-link active"data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">ĐIỆN THOẠI<span class="badge badge-secondary">42</span></a>
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <ul class="list-unstyled">
                          <li><a href="category.html" class="nav-link">APPLE</a></li>
                          <li><a href="category.html" class="nav-link">SAMSUM</a></li>
                          <li><a href="category.html" class="nav-link">OPPO</a></li>
                          <li><a href="category.html" class="nav-link">VIVO</a></li>
                          <li><a href="category.html" class="nav-link">NOKIA</a></li>
                        </ul>
                      </div>
                      
                    </li>
                    <li><a class="nav-link active" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">LAPTOP<span class="badge badge-light">123</span></a>
                      <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <ul class="list-unstyled">
                          <li><a href="category.html" class="nav-link">MACBOOK</a></li>
                          <li><a href="category.html" class="nav-link">DELL</a></li>
                          <li><a href="category.html" class="nav-link">ASUS</a></li>
                          <li><a href="category.html" class="nav-link">LENOVO</a></li>
                          <li><a href="category.html" class="nav-link">HP</a></li>
                        </ul>
                      </div>
                    </li>
                    <li><a class="nav-link active" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">ĐỒNG HỒ<span class="badge badge-warning">11</span></a>
                      <div class="collapse multi-collapse" id="multiCollapseExample3">
                        <ul class="list-unstyled">
                          <li><a href="category.html" class="nav-link">APPLE WATCH</a></li>
                          <li><a href="category.html" class="nav-link">MASSTEL</a></li>
                          <li><a href="category.html" class="nav-link">AMAZFIT</a></li>
                          <li><a href="category.html" class="nav-link">SAMSUM</a></li>
                        </ul>
                      </div>
                      
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">MỨC GIÁ <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i>Xóa</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Dưới 2 triệu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Từ 2 - 4 triệu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Từ 4 - 7 triệu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Từ 7 - 13 triệu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Từ 13 - 20 triệu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Trên 20 triệu
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i>Lọc Giá</button>
                  </form>
                </div>
              </div>
              
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="images/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <?php
                  if ($detail==NULL) echo "Chưa có dữ liệu";
                  else foreach ($detail as $row) {
                ?>
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="<?=$row['urlHinh'];?>" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="<?=$row['urlHinh'];?>" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="<?=$row['urlHinh'];?>" alt="" class="img-fluid"></div>
                  </div>
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?=$row['TenDT'];?></h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p>
                
                    <p class="price"><?=$this->model->formatMoney($row['Gia']);?>đ&ensp;<del><?=$this->model->formatMoney($row['GiaKM']);?>đ</del></p>
                    <p class="text-center buttons">
                        <a href="?ctrl=cart&act=buynow&idDT=<?=$row['idDT'];?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Mua Ngay</a>
                        <a href="?ctrl=cart&act=addcart&idDT=<?=$row['idDT'];?>" class="btn btn-outline-primary" id="add_cart"><i class="fa fa-heart"></i>Thêm vào giỏ</a>

                    </p>
                    <h6 style="margin-top:30px; margin-left:220px;">Số Lượt xem: <span style="color: #4fbfa8;"><?=$row['SoLanXem'];?></span></h6>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?=$row['urlHinh'];?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?=$row['urlHinh'];?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?=$row['urlHinh'];?>" alt="" class="img-fluid"></button>
                  </div>
                </div>
                <?php }?>
              </div>
              <div id="details" class="box">
                  <?php
                    if ($thongsodt==NULL) echo "Chưa có dữ liệu";
                    else foreach ($thongsodt as $row) {
                  ?>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="width: 200px; height: 40px; font-weight: 600; font-size: 15pt;border-radius: 6px; text-align: left;line-height: 20px;">Thông số kĩ thuật</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="width: 200px; height: 40px; font-weight: 600; font-size: 15pt;border-radius: 6px; text-align: left;line-height: 20px;">Mô tả</a>
                    <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="width: 200px; height: 40px; font-weight: 600; font-size: 15pt; border-radius: 6px; text-align: left;line-height: 20px;">Ưu đãi thêm</a>
                </div>
                <hr>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Màn hình:</td>
                                    <td><?=$row['ManHinh'];?></td>
                                </tr>
                                <tr>
                                    <td>Hệ điều hành:</td>
                                    <td><?=$row['HeDieuHanh'];?></td>
                                </tr>
                                <tr>
                                    <td>Camera sau:</td>
                                    <td><?=$row['CameraSau'];?></td>
                                </tr>
                                <tr>
                                    <td>Camera trước:</td>
                                    <td><?=$row['CameraTruoc'];?></td>
                                </tr>
                                <tr>
                                    <td>CPU:</td>
                                    <td><?=$row['CPU'];?></td>
                                </tr>
                                <tr>
                                    <td>RAM:</td>
                                    <td><?=$row['RAM'];?></td>
                                </tr>
                                <tr>
                                    <td>Bộ nhớ trong:</td>
                                    <td><?=$row['BoNhoTrong'];?></td>
                                </tr>
                                <tr>
                                    <td>Thẻ SIM</td>
                                    <td><?=$row['TheSIM'];?></td>
                                </tr>
                                <tr>
                                    <td>Dung lượng pin:</td>
                                    <td><?=$row['DungLuongPin'];?></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h3><?=$row['MoTa'];?></h3>
                    </div>
                    <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <p>Tặng cho khách lần đầu mua hàng online tại web BachhoaXANH.com</p>
                        <ul>
                          <li>100.000đ để mua đơn hàng BachhoaXANH từ 300.000đ</li>
                          <li>5 lần FREEship</li>
                        </ul>
                        <p>Áp dụng tại Tp.HCM và 1 số khu vực, 1 SĐT nhận 1 lần (Xem chi tiết)</p>
                    </div>

                </div>
                <hr>
                <div class="social">
                    <h4>Show it to your friends</h4>
                    <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
                <?php }?>
            </div>
              <div id="hot">
                <div class="box py-4">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="mb-0">Sản Phẩm Tương Tự</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row same-height-row">
                  <?php
                    if ($spmoi==NULL) echo "Chưa có dữ liệu";
                    else foreach ($spmoi as $row) {
                      echo '
                      <div class="col-md-4 col-sm-6">
                      <div class="product same-height">
                        <div class="flip-container">
                          <div class="flipper">
                            <div class="front"><a href="?ctrl=home&act=detail&idDT='.$row['idDT'].'"><img src="'.$row['urlHinh'].'" alt="" class="img-fluid"></a></div>
                            <div class="back"><a href="?ctrl=home&act=detail&idDT='.$row['idDT'].'"><img src="'.$row['urlHinh'].'" alt="" class="img-fluid"></a></div>
                          </div>
                        </div><a href="?ctrl=home&act=detail&idDT='.$row['idDT'].'" class="invisible"><img src="'.$row['urlHinh'].'" alt="" class="img-fluid"></a>
                        <div class="text">
                          <h3>'.$row['TenDT'].'</h3>
                          <p class="price">'.$this->model->formatMoney($row['Gia']).'đ</p>
                        </div>
                      </div>
                      <!-- /.product-->
                    </div>
                      ';
                    }
                  ?>
                
              </div>
              <div class="cmt">
              <?php
                if(isset($_SESSION['sid'])&&($_SESSION['sid']>0)){

                    if(isset($_SESSION['suser'])&&($_SESSION['suser']!="")){
                        $user = $_SESSION['suser'];

                    }else{
                        $user = "";
                    }
                    
                    // $dsbl = showbl();
            ?>
                <hr>
                <h3>Customer Comments <span><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></h3>
                <form action="#" method="post">
                <div class="input-group">
                  <div class="input-group-prepend">
                  <input type="text" name="name" id="" value="<?=$user?>">
                  <input type="hidden" name="idDT" value="<?=$_GET['idDT']?>">
                </div>
                  <textarea class="form-control" name="binhluan" aria-label="With textarea" cols="10" rows="1" placeholder="Hãy nhập bình luận của bạn ..."></textarea>
                  <input type="submit" value="ADD" name="addbinhluan">
                </div>
                </form>
              </div>
              <?php
                  foreach ($dsbl as $dsbl) {
                      echo "<div class='boxbinhluan'> <span><i class='far fa-user'></i></i></span> "
                          . $dsbl['HoTen'].' || <span><i class="far fa-newspaper"></i></i></span> '
                          .$dsbl['NoiDungBL']."</div>";
                  }
              ?>

              <?php
                  }else{

                      echo "<a href='?ctrl=home&act=logout' target='_parent'>VUI LÒNG ĐĂNG NHẬP</a>";
                      foreach ($dsbl as $dsbl) {
                        echo "<div class='boxbinhluan alert alert-danger'> <span><i class='far fa-user'></i></i></span> "
                            . $dsbl['HoTen'].' || <span><i class="far fa-newspaper"></i></i></span> '
                            .$dsbl['NoiDungBL']."</div>";
                    }
                      // header('location: dangnhap.php');
                  }
              ?>
            </div>
            <!-- /.col-md-9-->
          </div>
        </div>
      </div>
      
