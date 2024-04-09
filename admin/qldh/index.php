<?php
require_once "../../dao/pdo.php";
require_once "../../dao/qldh.php";
require_once "../../dao/bill.php";
extract($_REQUEST);
if (exist_param("btn_list")){
    $items = qldh_selectall();
    $VIEW_NAME = "list.php";
}elseif (exist_param("btn_dathang")){
    $id_bill=$_GET['id_bill'];
    $trangthaimoi=$_GET['trangthai'];
    bill_update_trangthai($trangthaimoi,$id_bill);
    $items = qldh_selectall();
    $VIEW_NAME = "list.php";
}else {
    # code...

    $items = qldh_selectall();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
?>