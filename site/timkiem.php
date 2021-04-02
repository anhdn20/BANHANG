<?php
  
  require_once "../system/datatimkiem.php";
  
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = "select * from dienthoai where TenDT LIKE '%$inpText%' limit 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['movies' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();
    
    if ($result) {
      foreach ($result as $row) {
        echo '<a href="?ctrl=home&act=detail&idDT='.$row['idDT'].'" class="list-group-item list-group-item-action border-1">' . $row['TenDT'] . ' | <img src="'.$row['urlHinh'].'" style="width:30px; float: right"></img></a>';
      }
    } else {
      echo '<p class="list-group-item border-1">Sản phẩm này không tồn tại !!!</p>';
    }
  }
   
?>