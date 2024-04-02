<?php
require_once ("../../dao/pdo.php");
require_once ("../../dao/thongke.php");

extract($_REQUEST);

if (exist_param("btn_list")) {
    $items = thongkehanghoa();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_listbl")) {
    $items = thongkebinhluan();
    $VIEW_NAME = "listbl.php";
} else {
    $items = thongkehanghoa();
    $VIEW_NAME = "listbl.php";
}
require_once "../layout.php";
?>