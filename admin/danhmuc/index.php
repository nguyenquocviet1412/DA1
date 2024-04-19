<?php
require_once "../../dao/pdo.php";
require_once "../../dao/danhmuc.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = danhmuc_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $error =[];
    if (empty($_POST["name"])) {
        $error['name'] = "<h4>Bạn chưa nhập tên hãng nước hoa</h4>";
    }
    if (count($error) >= 1) {
        $_SESSION['error'] = $error;
    } else {
    $name = $_POST['name'];
    danhmuc_insert($name);
    $items = danhmuc_selectall();
    }
    $VIEW_NAME = "add.php";
    unset($_SESSION["error"]);
} else if (exist_param("btn_edit")) {
    $id = $_REQUEST['id'];
    $danhmucinfo = danhmuc_getinfo($id);
    extract($danhmucinfo);
    $items = danhmuc_selectall();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {
    $id = $_REQUEST['id'];
    danhmuc_delete($id);
    $items = danhmuc_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_update")) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    danhmuc_update($id, $name);
    $items = danhmuc_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>
