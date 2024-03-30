<?php
require_once("../../dao/pdo.php");
require_once("../../dao/binhluan.php");

extract($_REQUEST);

if (exist_param("btn_list")) {
    $items = binhluan_selectall();
    $VIEW_NAME = "list.php";
}else if (exist_param("btn_delete")) {
    $id = $_REQUEST['id'];
    binhluan_delete($id);
    $items = binhluan_selectall();
    $VIEW_NAME = "list.php";
} else{
    $items = binhluan_selectall();
    $VIEW_NAME = "list.php";
}

require "../layout.php";

?>