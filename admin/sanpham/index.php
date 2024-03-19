<?php
require_once "../../dao/pdo.php";
require_once "../../dao/sanpham.php";
require_once "../../dao/danhmuc.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = sanpham_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $mahh = $_POST['mahh'];
    $tenhh = $_POST['tenhh'];
    $giatien = $_POST['giatien'];
    $giamgia = $_POST['giamgia'];
    $hinh = savefile('hinh', '../../upload/');
    $trangthai = $_POST['trangthai'];
    $ngaynhap = $_POST['ngaynhap'];
    $mota = $_POST['mota'];
    $madanhmuc = $_POST['madanhmuc'];
    $danhmuc_sanpham = danhmuc_selectall();
    sanpham_insert($mahh, $tenhh, $giatien, $giamgia, $hinh, $madanhmuc, $trangthai, $ngaynhap, $mota);
    $items = sanpham_selectall();
    $VIEW_NAME = "add.php";
} else if (exist_param("btn_edit")) {
    $mahh = $_REQUEST['mahh'];
    $sanphaminfo = sanpham_getinfo($mahh);
    extract($sanphaminfo);
    $items = sanpham_selectall();
    $danhmuc_sanpham = danhmuc_selectall();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {
    $mahh = $_REQUEST['mahh'];
    sanpham_delete($mahh);
    $items = sanpham_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $mahh = $_POST['mahh'];
    $tenhh = $_POST['tenhh'];
    $giatien = $_POST['giatien'];
    $giamgia=$_POST['giamgia'];
    $mota = $_POST['mota'];
    $madanhmuc = $_POST['madanhmuc'];
    if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
        // Nếu có chọn file mới, lưu và sử dụng tên file mới
        $hinh = savefile('hinh', '../../upload/');
    } else {
        // Nếu không có chọn file mới, sử dụng lại tên file ảnh cũ
        $hinh = $_POST['hinhcu'];
    }
    sanpham_update($mahh, $tenhh, $giatien, $giamgia, $hinh, $madanhmuc, $trangthai, $ngaynhap, $mota);
    $items = sanpham_selectall();
    $VIEW_NAME = "list.php";
} else {
    $danhmuc_sanpham = danhmuc_selectall();
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>