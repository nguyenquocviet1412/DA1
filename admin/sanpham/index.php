<?php
require_once "../../dao/pdo.php";
require_once "../../dao/hanghoa.php";
require_once "../../dao/loai.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = hanghoa_selectall();
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
    $maloai = $_POST['maloai'];
    $loai_hanghoa = loai_selectall();
    hanghoa_insert($mahh, $tenhh, $giatien, $giamgia, $hinh, $maloai, $trangthai, $ngaynhap, $mota);
    $items = hanghoa_selectall();
    $VIEW_NAME = "add.php";
} else if (exist_param("btn_edit")) {
    $mahh = $_REQUEST['mahh'];
    $hanghoainfo = hanghoa_getinfo($mahh);
    extract($hanghoainfo);
    $items = hanghoa_selectall();
    $loai_hanghoa = loai_selectall();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {
    $mahh = $_REQUEST['mahh'];
    hanghoa_delete($mahh);
    $items = hanghoa_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $mahh = $_POST['mahh'];
    $tenhh = $_POST['tenhh'];
    $giatien = $_POST['giatien'];
    $giamgia=$_POST['giamgia'];
    $mota = $_POST['mota'];
    $maloai = $_POST['maloai'];
    if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
        // Nếu có chọn file mới, lưu và sử dụng tên file mới
        $hinh = savefile('hinh', '../../upload/');
    } else {
        // Nếu không có chọn file mới, sử dụng lại tên file ảnh cũ
        $hinh = $_POST['hinhcu'];
    }
    hanghoa_update($mahh, $tenhh, $giatien, $giamgia, $hinh, $maloai, $trangthai, $ngaynhap, $mota);
    $items = hanghoa_selectall();
    $VIEW_NAME = "list.php";
} else {
    $loai_hanghoa = loai_selectall();
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>