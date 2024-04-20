<?php
require_once "../../dao/pdo.php";
require_once "../../dao/sanpham.php";
require_once "../../dao/danhmuc.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = sanpham_selectall();
    $danhmuc_sanpham = danhmuc_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $error =[];
    if (empty($_POST["name"])) {
        $error['name'] = "<h4>Vui lòng nhập tên sản phẩm</h4>";
        $danhmuc_sanpham = danhmuc_selectall();
        
    }elseif (empty($_POST["price"])) {
        $error['price'] = "<h4>Vui lòng nhập giá</h4>";
        $danhmuc_sanpham = danhmuc_selectall();
    }
    if (count($error) >= 1) {
        $_SESSION["error"] = $error;
    }else{
    $iddm = $_POST['iddm'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $price_chiet = $_POST['price_chiet'];
    $sale = $_POST['sale'];
    $img = savefile('img', '../../upload/');
    $mota = $_POST['mota'];
    $danhmuc_sanpham = danhmuc_selectall();
    sanpham_insert($name, $price, $img, $mota, $price_chiet, $sale, $iddm);
    $items = sanpham_selectall();
    }
    unset($_SESSION["error"]);
    $VIEW_NAME = "add.php";
    
} else if (exist_param("btn_edit")) {
    $id = $_REQUEST['id'];
    $sanphaminfo = sanpham_getinfo($id);
    extract($sanphaminfo);
    $items = sanpham_selectall();
    $danhmuc_sanpham = danhmuc_selectall();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {
    $id = $_REQUEST['id'];
    sanpham_delete($id);
    $items = sanpham_selectall();
    $danhmuc_sanpham = danhmuc_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $iddm = $_POST['iddm'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $price_chiet = $_POST['price_chiet'];
    $sale = $_POST['sale'];
    $img = savefile('img', '../../upload/');
    $mota = $_POST['mota'];
    if ($_FILES['img']['error'] === UPLOAD_ERR_OK) {
        // Nếu có chọn file mới, lưu và sử dụng tên file mới
        $img = savefile('img', '../../upload/');
    } else {
        // Nếu không có chọn file mới, sử dụng lại tên file ảnh cũ
        $img = $_POST['oldimg'];
    }
    sanpham_update($id, $name, $price, $img, $mota, $price_chiet, $sale, $iddm);
    $danhmuc_sanpham = danhmuc_selectall();
    $items = sanpham_selectall();
    $VIEW_NAME = "list.php";
} else {
    $danhmuc_sanpham = danhmuc_selectall();
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>