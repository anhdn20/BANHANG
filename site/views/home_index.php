<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" style="height: 500px;" src="./images/main-slider1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" style="height: 500px;" src="./images/main-slider2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" style="height: 500px;" src="./images/main-slider3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Hot this week</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
                <?php
                    if ($sphot==NULL) echo "Chưa có dữ liệu";
                    else foreach ($sphot as $row) {
                        $slug = $this->model->change_title($row['idDT']);
                        echo '
                        <div class="item">
                        <div class="product">
                          <div class="flip-container">
                            <div class="flipper">
                              <div class="front"><a href="/'.ROOT_URL.'/sp/'.$slug['slug'].'.html"><img src="'.$row['urlHinh'].'" alt="" class="img-fluid"></a></div>
                              <div class="back"><a href="/'.ROOT_URL.'/sp/'.$slug['slug'].'.html"><img src="'.$row['urlHinh'].'" alt="" class="img-fluid"></a></div>
                            </div>
                          </div><a href="/'.ROOT_URL.'/sp/'.$slug['slug'].'.html" class="invisible"><img src="'.$row['urlHinh'].'" alt="" class="img-fluid"></a>
                          <div class="text">
                            <h3><a href="#">'.$row['TenDT'].'</a></h3>
                            <p class="price"> 
                              <del>'.$this->model->formatMoney($row['GiaKM']).'đ</del>&ensp;<a href="#" style="margin-left: 1px;">'.$this->model->formatMoney($row['Gia']).'đ</a>
                            </p>
                          </div>
                          <!-- /.text-->
                          <!-- /.ribbon-->
                          <div class="ribbon gift">
                            <div class="theribbon">GIFT</div>
                            <div class="ribbon-background"></div>
                          </div>
                          <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                          </div>
                        </div>
                        </div>
                        ';
                    }
                ?>
           
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <a href=""></a>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>SPOTLIGHT - JAN 2021</h3>
              <p class="lead">Get the inspiration from our world class designers</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="images/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="images/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="images/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">NEW PRODUCT</h3>
              <p class="lead mb-0">What's new in the world of fashion? <a href="#">Check our blog!</a></p>
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="col-md-12 jumbotron-fluid">
            <div id="blog-homepage" class="row">
            <?php
                if ($spmoi==NULL) echo "Chưa có dữ liệu";
                else foreach ($spmoi as $row) {
                    $slug = $this->model->change_title($row['idDT']);
                    echo '
                    <div class="col-sm-3">
                    <div class="post text-center p-sm-2">
                      <a href="/'.ROOT_URL.'/sp/'.$slug['slug'].'.html"><img class="rounded mx-auto d-block" alt="" src="'.$row['urlHinh'].'" alt=""></a>
                      <hr>
                      <p class="alert-link">'.$row['TenDT'].'</p>
                      <p class="price"> 
                        <del>'.$this->model->formatMoney($row['GiaKM']).'đ</del><a href="#" style="margin-left: 30px;">'.$this->model->formatMoney($row['Gia']).'đ</a>
                      </p>
                      <p class="read-more"><a href="#" class="btn btn-primary">BUY NOW</a></p>
                    </div>
                    </div>
                    ';
                }
            ?>
           
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">Selling Products</h3>
              <p class="lead mb-0">What's Selling in the world of fashion? <a href="#">Check our blog!</a></p>
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="col-md-12 jumbotron-fluid">
            <div id="blog-homepage" class="row">
            <?php
                if ($spbanchay==NULL) echo "Chưa có dữ liệu";
                else foreach ($spbanchay as $row) {
                    $slug = $this->model->change_title($row['idDT']);
                    echo '
                    <div class="col-sm-3">
                    <div class="post text-center p-sm-2">
                      <a href="/'.ROOT_URL.'/sp/'.$slug['slug'].'" ><img class="rounded mx-auto d-block" alt="" src="'.$row['urlHinh'].'" alt=""></a>
                      <hr>
                      <p class="alert-link">'.$row['TenDT'].'</p>
                      <p class="price"> 
                        <del>'.$this->model->formatMoney($row['GiaKM']).'đ</del><a href="#" style="margin-left: 30px;">'.$this->model->formatMoney($row['Gia']).'đ</a>
                      </p>
                      <p class="read-more"><a href="#" class="btn btn-primary">BUY NOW</a></p>
                    </div>
                    </div>
                    ';
                }
            ?>
           
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>