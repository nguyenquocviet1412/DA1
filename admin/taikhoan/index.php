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
    $avatar = $_FILES['avatar']['name'];
    $kichhoat = $_POST['kichhoat'];
    $vaitro = $_POST['vaitro'];
    taikhoan_insert($makh, $matkhau, $hoten, $email, $avatar, $kichhoat, $vaitro);
    $items = taikhoan_selectall();
    $VIEW_NAME = "add.php";
} else if (exist_param("btn_edit")) {
    $id = $_REQUEST['id'];
    $taikhoaninfo = taikhoan_select_by_id($id);
    extract($taikhoaninfo);
    $items = taikhoan_selectall();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {
    $id = $_REQUEST['id'];
    taikhoan_delete($id);
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_update")) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        // Nếu có chọn file mới, lưu và sử dụng tên file mới
        $avatar = savefile('avatar', '../../upload/');
    } else {
        // Nếu không có chọn file mới, sử dụng lại tên file ảnh cũ
        $avatar = $_POST['avatarcu'];
    }
    $kichhoat = $_POST['kichhoat'];
    $vaitro = $_POST['vaitro'];
    taikhoan_update($makh, $matkhau, $hoten, $email, $avatar, $kichhoat, $vaitro, $gender);
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
} else {
    $items = taikhoan_selectall();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
?>