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
                        <select name="sort-by" class="form-control">
                          <option>Price</option>
                          <option>Name</option>
                          <option>Sales first</option>
                        </select>
                      </div>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" id="style-switch-button2">
                        <i class="fa fa-gift"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="row products">
                <?php
                  if ($amount_dt == 0) echo "<h1 class='ml-4'>hông có sản phẩm nào hết</h1>";
                  else foreach ($catloai as $row) {
                    $slug = $this->model->change_title($row['idDT']);
                      echo '
                      <div class="abc">
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
                            <del>'.$this->model->formatMoney($row['GiaKM']).'đ</del>&ensp;'.$this->model->formatMoney($row['Gia']).'đ
                          </p>
                          <p class="buttons"><a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                        </div>
                        <!-- /.text-->
                      </div>
                  
                    </div>';
                  }
                ?>
                <!-- /.products-->
              </div>

              <div class="pages">
                
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                  <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                      </a>
                  </li>
                      <?php
                      if ($amount_dt == 0){

                      }else{
                          $page=1;
                          for ($i=1; $i < $totalpage+1; $i++) {
                              if(isset($_GET['trang']) && ($_GET['trang'])){
                                  $page=$_GET['trang'];
                              }
                              if($i==$page){
                                  echo '<li class="page-item"><a class="page-link" href="?ctrl=home&act=catloai&idNSX='.$row['idNSX'].'&trang='.$i.'" class="active">'.$i.'</a></li>';
                              }else{
                                  echo '<li class="page-item"><a class="page-link" href="?ctrl=home&act=catloai&idNSX='.$row['idNSX'].'&trang='.$i.'">'.$i.'</a></li>';
                              }

                          }
                      }


                      ?>
                      <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                      <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                          </a>
                      </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>