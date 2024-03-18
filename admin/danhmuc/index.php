<?php
require_once "../../dao/pdo.php";
// require_once "../../dao/hang.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = hang_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $tenhang = $_POST['tenhang'];
    hang_insert($tenhang);
    $items = hang_selectall();
    $HEADER="header.php";
    $VIEW_NAME = "add.php";
} else if (exist_param("btn_edit")) {
    $mahang = $_REQUEST['mahang'];
    $hanginfo = hang_getinfo($mahang);
    extract($hanginfo);
    $items = hang_selectall();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {
    $mahang = $_REQUEST['mahang'];
    hang_delete($mahang);
    $items = hang_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_update")) {
    $mahang = $_POST['mahang'];
    $tenhang = $_POST['tenhang'];
    hang_update($mahang, $tenhang);
    $items = hang_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>
