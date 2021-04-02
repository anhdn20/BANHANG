<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">TRANG CHỦ</a></li>
                  <li aria-current="page" class="breadcrumb-item active">ĐIỆN THOẠI</li>
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
                    <div class="list-group">
                        <input type="hidden" id="hidden_minimum_price" value="1000000" />
                        <label for="customRange3" class="form-label">1.000.000đ - 60.000.000đ</label>
                        <input type="range" class="form-range" min="1000000" max="60000000" step="1000000" id="hidden_maximum_price" value="60000000">
                        <span class="ml-0 mt-2" id="SHOW_PRICE_FILTER">60000000đ</span>
                    </div>
                </div>
              </div>
                <div class="card sidebar-menu mb-4">
                    <div class="card-header">
                        <h3 class="h4 card-title">HÃNG <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i>Xóa</a></h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <?php
                                    $get_name_NSX = $this->model->getNameNsx();
                                    foreach ($get_name_NSX as $row){
                                        echo '<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="common_selector brand" value="'.$row['TenNSX'].'"> &ensp;',ucfirst($row['TenNSX']),'
                                                </label>
                                            </div>';
                                    }
                                ?>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="card sidebar-menu mb-4">
                    <div class="card-header">
                        <h3 class="h4 card-title">RAM <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i>Xóa</a></h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <?php
                                $get_storage = $this->model->getStorageDt();
                                foreach ($get_storage as $row){
                                    echo '<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="common_selector ram" value="'.$row['RAM'].'"> &ensp;',$row['RAM'],'GB
                                                </label>
                                            </div>';
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="images/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
              <div class="box">
                <h1>ĐIỆN THOẠI NỔI BẬT NHẤT</h1>
  
              </div>
              <div class="box info-bar">
                <div class="row">
                  
                  <div class="col-md-12 col-lg-7 products-number-sort">
                    <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                      <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                      <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
                        <select name="sort-by" class="form-control" id="sort_by">
                          <option value="Gia DESC">Cao đến thấp</option>
                          <option value="Gia ASC">Thấp đến cao</option>
                          <option value="Hot DESC">Hot nhất</option>
                        </select>
                      </div>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" id="style-switch-button2">
                        <i class="fa fa-gift"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
                <div class="filter_data">
                    <input type="hidden" value="<?php if(isset($_GET['trang']))  echo $_GET['trang']; else echo 1;?>" id="offset">

                </div>

            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
