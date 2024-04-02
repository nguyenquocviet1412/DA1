<?php
require_once ("../../dao/pdo.php");
require_once ("../../dao/thongke.php");

extract($_REQUEST);

if (exist_param("btn_bieudo")) {
    $items = thongkebinhluan();
    $VIEW_NAME = "listbl.php";
} else {
    $items = thongkebinhluan();
    $VIEW_NAME = "listbl.php";
}
require_once "../layout.php";
?>