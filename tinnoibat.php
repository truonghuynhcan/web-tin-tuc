<<<<<<< HEAD
<?php
require_once "./functions.php";
$sql = "SELECT * FROM tin where NoiBat=1 AND AnHien=1 ORDER BY Ngay desc limit 0,6 ";
$result1 = executeResult($sql);
?>
<div class="d-none d-md-grid layout">
<?php foreach ($result1 as $item) {?>
<a href='<?=BASE_DIR."bv/".$item['slug'].".html"?>' class='layout-item'>
    <img src='<?=$item['urlHinh']?>' alt=''>
    <h3><?=$item['TieuDe']?></h3>
</a>
<?php } ?>
=======
<?php
require_once "./functions.php";
$sql = "SELECT * FROM tin where NoiBat=1 AND AnHien=1 ORDER BY Ngay desc limit 0,6 ";
$result1 = executeResult($sql);
?>
<div class="d-none d-md-grid layout">
<?php foreach ($result1 as $item) {?>
<a href='<?=BASE_DIR."bv/".$item['slug'].".html"?>' class='layout-item'>
    <img src='<?=$item['urlHinh']?>' alt=''>
    <h3><?=$item['TieuDe']?></h3>
</a>
<?php } ?>
>>>>>>> 42f6431163bd0b26445e30a1a28c1de84d5f79a7
</div>