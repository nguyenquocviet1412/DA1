<?php
require_once "../../dao/pdo.php";
require_once "../../dao/hang.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = loai_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $tenloai = $_POST['tenhang'];
    $maloai = $_POST['mahang'];
    loai_insert($maloai,$tenloai);
    $items = loai_selectall();
    $VIEW_NAME = "add.php";
} else if (exist_param("btn_edit")) {
    $maloai = $_REQUEST['maloai'];
    $loaiinfo = loai_getinfo($maloai);
    extract($loaiinfo);
    $items = loai_selectall();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {
    $maloai = $_REQUEST['maloai'];
    loai_delete($maloai);
    $items = loai_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_update")) {
    $maloai = $_POST['maloai'];
    $tenloai = $_POST['tenloai'];
    loai_update($maloai, $tenloai);
    $items = loai_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "layout.php";
?>
