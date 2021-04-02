<?php
    require_once "../system/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
      <base href="http://<?=$_SERVER['SERVER_NAME'];?>/PHP2_thaylong/banhang/site/"  />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WEB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Gorditas">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../public/node_modules/sweetalert2/dist/sweetalert2.css">
    <!-- Custom stylesheet - for your changes-->

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/favicon.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- HEADER-->

    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container flex-fill">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-sm">Mua Sắm Thả Ga</a><a href="#" class="ml-1">Chúc Mừng Năm Mới 2021 <i class="fa fa-heart"></i></a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item" data-toggle="tooltip" data-placement="left" title="Login"><a href="#" data-toggle="modal" data-target="#login-modal">
                        <?php if(isset($_SESSION['suser'])) echo $_SESSION['suser']. " | <a href='?ctrl=home&act=logout'>Thoát</a> 
                <li class='list-inline-item'><a href='?ctrl=home&act=donhangcuatoi&idUser=".$_SESSION['sid']."'>Đơn hàng của tôi</a></li>
                <li class='list-inline-item'><a href='?ctrl=home&act=doimatkhau&idUser=".$_SESSION['sid']."'>Đổi mật khẩu</a></li>
                "; else echo "Đăng Nhập |";
                        ?></>
                </li>
                
                <li class="list-inline-item"><a href="contact.html">Công nghệ 24H</a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Đăng nhập khách hàng</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="?ctrl=home&act=login" method="post">
                  <div class="form-group">
                      <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Tài khoản">
<!--                      <span class="ml-5 text-danger">--><?php //if(isset($tk) && $tk!="") echo $tk; ?><!--</span>-->
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" name="pass" id="pass" placeholder="Mật khẩu">
<!--                      <span class="ml-5 text-danger">--><?php //if(isset($cbnull) && $cbnull!="") echo $cbnull; ?><!--</span>-->
<!--                      <span class="ml-5 text-danger">--><?php //if(isset($cbpass) && $cbpass!="") echo $cbpass; ?><!--</span>-->
                  </div>
                    <input type="hidden" value="<?=$_GET['ctrl']?>" name="ctrl">
                    <input type="hidden" value="<?=$_GET['act']?>" name="act">
                    <div  class="form-text" id="check_form_dangnhap"></div>
                  <p class="text-center">
                    <button class="btn btn-primary" type="button" name="dangnhap" value="dangnhap" id="dangnhap_ajax"><i class="fa fa-sign-in"></i>Đăng Nhập</button>
                  </p>
                </form>
                <a href="/<?=ROOT_URL?>/quen-mat-khau" class="text-center text-muted">Quên mật khẩu</a>
                <p class="text-center text-muted"><a href="/<?=ROOT_URL?>/dang-ky"><strong>Đăng ký ngay!</strong></a>Nó dễ dàng và được thực hiện trong 1 phút và cho phép bạn tiếp cận với các chương trình giảm giá đặc biệt và hơn thế nữa!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="?ctrl=home" class="navbar-brand home"><img src="images/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="images/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link active">TRANG CHỦ</a></li>
            
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">SẢN PHẨM<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="/<?=ROOT_URL?>/dien-thoai">ĐIỆN THOẠI</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/apple" class="nav-link">Apple</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/samsung" class="nav-link">Samsum</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/oppo" class="nav-link">Oppo</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/vivo" class="nav-link">ViVo</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/xiaomi" class="nav-link">Xiaomi</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/nokia" class="nav-link">Nokia</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/LG" class="nav-link">LG</a></li>
                          <li class="nav-item"><a href="/<?=ROOT_URL?>/nsx/asus" class="nav-link">ASUS</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="#">LAPTOP</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">MacBook</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">ASUS</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Lenovo</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">DELL</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">HP</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">ACER</a></li>
                          
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="#">PHỤ KIỆN</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Pin sạc dự phòng</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sạc, cáp</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Ốp lưng điện thoại</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Kính cường lực</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Loa, tai nghe</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Ổ cứng di động</a></li>
                        </ul>
                        <h5><a href="#">ĐỒNG HỒ</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Apple Watch</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Masstel</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">AMAZFIT</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="banner"><a href="#"><img src="images/banner.jpg" alt="" class="img img-fluid"></a></div>
                        <div class="banner"><a href="#"><img src="images/banner2.jpg" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-large"><a href="#" data-delay="200" class="nav-link">KHUYẾN MÃI</a>
              <li class="nav-item menu-large"><a href="#" data-delay="200" class="nav-link">LIÊN HỆ</a>
                <li class="nav-item menu-large"><a href="#" data-delay="200" class="nav-link">SỬA CHỮA</a>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="/<?=ROOT_URL?>/gio-hang" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>GIỎ HÀNG</span> <?php if(isset($_SESSION['carts'])) $count = count($_SESSION['carts']); else $count = " "; echo $count?></a></div>
            </div>
          </div>
        </div>
      </nav>

      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto" action="#" method="POST">
            <div class="input-group">
            <input class="input form-control" type="text" name="timkiem"  id="timkiem" placeholder="Bạn đang tìm gì?">
              <div class="input-group-append">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
       <!-- show goi y tim kiem -->
       <div class="col-md-4" style="position: absolute;margin-top: -20px;margin-left: 52.6%; width:482px; z-index:100000;">
          <div class="list-group" id="show-list">
          <!-- <a href="#" class="list-group-item list-group-item-action border-1">' . $row['namemovies'] . '</a>
          <a href="#" class="list-group-item list-group-item-action border-1">' . $row['namemovies'] . '</a> -->   
          </div> 
      </div>   

    </header>
    <div id="all">
        <?php if (file_exists($viewFile)) require_once "$viewFile";?>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Pages</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">About us</a></li>
              <li><a href="text.html">Terms and conditions</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li><a href="register.html">Regiter</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Top categories</h4>
            <h5>Men</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">T-shirts</a></li>
              <li><a href="category.html">Shirts</a></li>
              <li><a href="category.html">Accessories</a></li>
            </ul>
            <h5>Ladies</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">T-shirts</a></li>
              <li><a href="category.html">Skirts</a></li>
              <li><a href="category.html">Pants</a></li>
              <li><a href="category.html">Accessories</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Where to find us</h4>
            <p><strong>Obaju Ltd.</strong><br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p><a href="layout.html">PS12796 Nguyen Thanh Duc</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Get the news</h4>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2019 Your name goes here.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/">Bootstrapious</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" id="style-switch-button">
      <i class="fa fa-adjust"></i>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Cài đặt màu sắc</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

                  <form>
                      <select class="form-control" name="colour" id="colour">
                          <option value="">Chọn màu sắc:</option>
                          <option value="default" style="color:#4fbfa8">turquoise</option>
                          <option value="brown" style="color:#B94629">brown</option>
                          <option value="pink" style="color:#dd8bc1">pink</option>
                          <option value="blue" style="color:#4993e4">blue</option>
                          <option value="red" style="color:#ff3f3f">red</option>
                          <option value="violet" style="color:#bd6db1">violet</option>
                          <option value="sea" style="color:#379392">sea</option>
                      </select>
                  </form>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>
  
 
    <!-- JavaScript files-->
    <script src="../public/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>

    <script src="js/front.js"></script>
    <script src="js/dangnhap.js"></script>
    <script src="js/resetPassword.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <!-- *** STYLE SWITCHER ***-->


    <script>
         $(document).ready(function () {
            // Send Search Text to the server
            $("#timkiem").keyup(function () {
            let searchText = $("#timkiem").val();
            if (searchText != "") {
                $.ajax({
                url: "timkiem.php",
                method: "post",
                data: {
                    query: searchText,
                },
                success: function (data) {
                    $("#show-list").html(data);
                },
                });
            } else {
                $("#show-list").html("");
            }
            });
            // Set searched text in input field on click of search button
            // $(document).on("click", "a", function () {
            //     $("#timkiem").val($(this).text());
            //     $("#show-list").html("");
            // });
        });
             
    </script>
  </body>
</html>