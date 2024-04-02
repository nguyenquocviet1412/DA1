<?php
ob_start();
session_start();
include "dao/pdo.php";
include "dao/sanpham.php";
include "dao/danhmuc.php";
include "dao/taikhoan.php";
include "view/header.php";
include "global.php";
include "dao/giohang.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = sanpham_selectall();
$dsdm = danhmuc_selectall();
$dstop10 = sanpham_selecttop10();

if ((isset($_GET['act'])) && ($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = sanpham_getinfo($id);
                extract($onesp);
                $danhmuc_sanpham = danhmuc_selectall();
                $sp_cung_loai = sanpham_selectby_loai($id_danhmuc);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'taikhoan':
            include "view/dangnhap.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    //$thongbao="Bạn đã đăng nhập thành công!";
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'trangdangky':
            include "view/taikhoan/dangky.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $hoten = $_POST['hoten'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $gender = $_POST['gender'];
                $avatar = savefile('avatar', 'upload/');
                $role = 0;


                taikhoan_insert($hoten, $user, $pass, $email, $address, $tel, $avatar, $gender, $role);
                // $thongbao = "Đã đăng kí thành công!!";
                header("location: index.php?act=taikhoan");
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'trangcapnhat':
            include "view/taikhoan/capnhattaikhoan.php";
            break;
        case 'capnhattaikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $email = $_POST['email'];
                $hoten = $_POST['hoten'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $gender = $_POST['gender'];
                if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                    // Nếu có chọn file mới, lưu và sử dụng tên file mới
                    $avatar = savefile('avatar', 'upload/');
                } else {
                    // Nếu không có chọn file mới, sử dụng lại tên file ảnh cũ
                    $avatar = $_POST['avatarcu'];
                }

                taikhoan_update($id_taikhoan, $hoten, $user, $pass, $email, $address, $tel, $avatar, $gender, $role);
                $thongbao = "Đã cập nhật thành công!!";
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=capnhattaikhoan');
            }
            include "view/taikhoan/capnhattaikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $tel = $_POST['tel'];

                $checkemail = checkemail($email);
                $checktel = checktel($tel);
                if (is_array($checkemail) && is_array($checktel)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                } elseif (!is_array($checkemail)) {
                    $thongbao = "Email không tồn tại";
                } elseif (!is_array($checktel)) {
                    $thongbao = "Số điện thoại không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'chua_dn':
            if (isset($_POST['chua_dn']) && ($_POST['chua_dn'])) {
                $thongbao = "Đăng nhập để thêm sản phẩm vào giỏ hàng!";
            }
            include "view/dangnhap.php";
            break;
        case 'themgiohang':
            if (isset($_POST['themvaogiohang']) && ($_POST['themvaogiohang'])) {
                $id_taikhoan = $_POST['id_taikhoan'];
                $id_sanpham = $_POST['id_sanpham'];
                $name_sanpham = $_POST['name_sanpham'];
                $size = $_POST['size'];
                if ($size == "full") {
                    $price = $_POST['price'];
                    $id_size = 2;
                } else {
                    $price = $_POST['price_chiet'];
                    $id_size = 1;
                }
                $img = $_POST['img'];
                $soluong = 1;
                $ttien = $soluong * $price;

                check_soluong($id_taikhoan, $id_sanpham,$id_size);
                extract()
                if($checksoluong>0){
                    giohang_update_soluong($id_taikhoan, $id_sanpham,$id_size);
                }else{
                    giohang_insert($id_taikhoan, $id_sanpham, $name_sanpham, $price, $img, $soluong, $id_size);
                }
                    $listgiohang=load_giohang_taikhoan($id_taikhoan);
            }
            include "view/giohang/viewgiohang.php";
            break;
        case 'delcart':
            if (isset($_GET['idgiohang'])) {
                $listgiohang=giohang_selectall();
                include "view/giohang/viewgiohang.php";
            // } else {
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'delcart_idtaikhoan':
            giohang_delete_taikhoan($id_taikhoan);
            $listgiohang=load_giohang_taikhoan($id_taikhoan);
            include "view/giohang/viewgiohang.php";
            break;
        case 'viewcart':
            $listgiohang=load_giohang_taikhoan($id_taikhoan);
            include "view/giohang/viewgiohang.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>