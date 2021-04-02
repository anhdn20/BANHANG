<?php
//fetch_data.php

require_once "../../system/model_system.php";
require_once "../models/model_home.php";
 $model = new model_home();
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}

if(isset($_POST["action"]))
{
    $model = new model_system();
    function change_title($idDT){
      $model = new model_system();
      $sql="SELECT idDT,slug FROM dienthoai where idDT= ".$idDT;
      return $model->queryOne($sql);
    }
    $query = "
              SELECT * FROM dienthoai dt inner join thuoctinhdt ttdt ON dt.idDT = ttdt.idDT inner join nhasanxuat nsx ON nsx.idNSX = dt.idNSX
             ";
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query .= " AND dt.Gia BETWEEN ".$_POST["minimum_price"]." AND ".$_POST["maximum_price"]."";
    }
    if(isset($_POST["brand"]))
    {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
   AND TenNSX IN('".$brand_filter."')
  ";
    }
    if(isset($_POST["ram"]))
    {
        $ram_filter = implode("','", $_POST["ram"]);
        $query .= "
   AND ttdt.RAM IN('".$ram_filter."')
  ";
    }
    if(isset($_POST["key"]))
    {
        $key = $_POST["key"];
        $query .= " ORDER BY ".$key;
    }
    $kq_Dem = $model->query($query);
    $total_row = $kq_Dem->rowCount();
//    $totalpage=ceil($total_row/6);
//    $offset=($_POST['offset'] - 1) *6;
//    $query .=' WHERE 1 LIMIT 6 offset '.$offset;
//    echo $query;
    $kq = $model->query($query);

    $output = '';
    if($total_row > 0)
    {
        $output .= '<div class="row products ">';
        foreach($kq as $row)
        {
          $slug = change_title($row['idDT']);
            $output .= '<div class="abc">
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
                            <del>'.formatMoney($row['GiaKM']).'đ</del>&ensp;'.formatMoney($row['Gia']).'đ
                          </p>
                          <p class="buttons"><a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                        </div>
                        <!-- /.text-->
                      </div>
                  
                    </div>
            ';
        }
        $output .='</div>';
//        if($total_row > 6){
//            $output .= '
//            <div class="pages">
//                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
//                  <ul class="pagination">
//                  <li class="page-item">
//                      <a class="page-link" href="#" aria-label="Previous">
//                          <span aria-hidden="true">&laquo;</span>
//                          <span class="sr-only">Previous</span>
//                      </a>
//                  </li>';
//            $page=1;
//            for ($i=1; $i < $totalpage+1; $i++) {
//                if(isset($_GET['trang']) && ($_GET['trang'])){
//                    $page=$_GET['trang'];
//                }
//                if($i==$page){
//                    $output .= '<li class="page-item"><a class="page-link" href="?ctrl=home&act=cat&trang='.$i.'" class="active">'.$i.'</a></li>';
//                }else{
//                    $output .= '<li class="page-item"><a class="page-link" href="?ctrl=home&act=cat&trang='.$i.'">'.$i.'</a></li>';
//                }
//
//            }
//            $output .='<li class="page-item">
//                          <a class="page-link" href="#" aria-label="Next">
//                              <span aria-hidden="true">&raquo;</span>
//                              <span class="sr-only">Next</span>
//                          </a>
//                      </li>
//                  </ul>
//                </nav>
//              </div>';
//        }
    }
    else
    {
        $output = '<h3 class="ml-4">Hông có sản phẩm nào hết</h3>';
    }
    echo $output;
}