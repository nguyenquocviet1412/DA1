<?php
require_once ("../../dao/pdo.php");
require_once ("../../dao/thongke.php");

extract($_REQUEST);

if (exist_param("btn_list")) {
    $items = thongkehanghoa();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_listdh")) {
    $items = thongke_taikhoan_donhang();
    $VIEW_NAME = "listdh.php";
} elseif (exist_param("btn_listspyt")) {
    $items = sanpham();
    $VIEW_NAME = "listspyt.php";
}
else {
    $items = thongkehanghoa();
    $VIEW_NAME = "list.php";
}
require_once "../layout.php";
?>