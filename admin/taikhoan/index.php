<?php
require_once "../../dao/pdo.php";
require_once "../../dao/taikhoan.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $makh = $_POST['mataikhoan'];
    $matkhau = $_POST['matkhau'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $hinh = $_FILES['hinh']['name'];
    $kichhoat = $_POST['kichhoat'];
    $vaitro = $_POST['vaitro'];
    taikhoan_insert($makh, $matkhau, $hoten, $email, $hinh, $kichhoat, $vaitro);
    $items = taikhoan_selectall();
    $VIEW_NAME = "add.php";
} else if (exist_param("btn_edit")) {
    $makh = $_REQUEST['makh'];
    $taikhoaninfo = taikhoan_select_by_id($makh);
    extract($taikhoaninfo);
    $items = taikhoan_selectall();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {
    $makh = $_REQUEST['makh'];
    taikhoan_delete($makh);
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_update")) {
    $makh = $_POST['mataikhoan'];
    $matkhau = $_POST['matkhau'];
    $hoten = $_POST['hoten'];
    $gender = 1;
    $email = $_POST['email'];
    if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
        // Nếu có chọn file mới, lưu và sử dụng tên file mới
        $hinh = savefile('hinh', '../../upload/');
    } else {
        // Nếu không có chọn file mới, sử dụng lại tên file ảnh cũ
        $hinh = $_POST['hinhcu'];
    }
    $kichhoat = $_POST['kichhoat'];
    $vaitro = $_POST['vaitro'];
    taikhoan_update($makh, $matkhau, $hoten, $email, $hinh, $kichhoat, $vaitro, $gender);
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
} else {
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
?>