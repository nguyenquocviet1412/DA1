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
include "dao/bill.php";
include "dao/billchitiet.php";

$spnew = sanpham_selectall();
$dsdm = danhmuc_selectall();
$dstop10 = sanpham_selecttop10();

if (isset($_GET['act']) && ($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
                
            }else{
                $iddm=0;
            }
            $dssp=loadall_sanpham($kyw);
                $tendm=load_ten_dm($iddm);
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

        //Tài khoản

        case 'taikhoan':
            include "view/dangnhap.php";
            break;
        case 'dangnhap':
            $error = [];
            // unset($_SESSION['error']);
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {

                if (empty($_POST["user"])) {
                    $error['user'] = "*Vui lòng nhập tên tài khoản";
                }
                if (empty($_POST["pass"])) {
                    $error['pass'] = "*Vui lòng nhập mật khẩu";
                }
                if (count($error) >= 1) {
                    $_SESSION['error'] = $error;
                } else {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        header('Location: index.php');
                    } else {
                        $thongbao['1'] = "Tài khoản không tồn tại!";
                        $thongbao['2'] = "Vui lòng kiểm tra hoặc đăng kí!";
                    }
                }
            }
            include "view/dangnhap.php";
            unset($_SESSION['error']);
            break;
        case 'trangdangky':
            include "view/taikhoan/dangky.php";
            break;
        case 'dangky':
            $error = [];
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                if (empty($_POST["email"])) {
                    $error['email'] = "*Vui lòng nhập email";
                }
                if (empty($_POST["hoten"])) {
                    $error['hoten'] = "*Vui lòng nhập Họ và tên";
                }
                if (empty($_POST["user"])) {
                    $error['user'] = "*Vui lòng nhập tên user";
                }
                if (empty($_POST["pass"])) {
                    $error['pass'] = "*Vui lòng nhập pass";
                }
                if (empty($_POST["address"])) {
                    $error['address'] = "*Vui lòng nhập địa chỉ";
                }
                if (empty($_POST["tel"])) {
                    $error['tel'] = "*Vui lòng nhập số điện thoại";
                }
                if (!isset($_FILES["avatar"])) {
                    $error['avatar'] = "*Vui lòng chọn ảnh";
                }
                if (count($error) >= 1) {
                    $_SESSION['error'] = $error;
                } else {
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
                unset($_SESSION['error']);
                header("location: index.php?act=taikhoan");
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'trangcapnhat':
            include "view/taikhoan/capnhattaikhoan.php";
            break;
        case 'capnhattaikhoan':
            $error = [];
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                if (empty($_POST["email"])) {
                    $error['email'] = "*Vui lòng nhập email";
                }
                if (empty($_POST["hoten"])) {
                    $error['hoten'] = "*Vui lòng nhập Họ và tên";
                }
                if (empty($_POST["user"])) {
                    $error['user'] = "*Vui lòng nhập tên user";
                }
                if (empty($_POST["pass"])) {
                    $error['pass'] = "*Vui lòng nhập pass";
                }
                if (empty($_POST["address"])) {
                    $error['address'] = "*Vui lòng nhập địa chỉ";
                }
                if (empty($_POST["tel"])) {
                    $error['tel'] = "*Vui lòng nhập số điện thoại";
                }
                if (!isset($_FILES["avatar"])) {
                    $error['avatar'] = "*Vui lòng chọn ảnh";
                }
                if (count($error) >= 1) {
                    $_SESSION['error'] = $error;
                } else {
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
                unset($_SESSION['error']);
            }
            }
            include "view/taikhoan/capnhattaikhoan.php";
            break;
        case 'quenmk':
            $error = [];
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                if (empty($_POST["email"])) {
                    $error['email'] = "*Vui lòng nhập email";
                }
                if (empty($_POST["tel"])) {
                    $error['tel'] = "*Vui lòng nhập số điện thoại";
                }
                $phoneNumber = $_POST['tel']; // Thay thế bằng số điện thoại cần kiểm tra từ form
                if (validatePhoneNumber($phoneNumber)) {
                    
                } else {
                    $error['tel2']="*Số điện thoại không hợp lệ";
                }
                if (count($error) >= 1) {
                    $_SESSION['error'] = $error;
                } else {
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
            }
            include "view/taikhoan/quenmk.php";
            unset($_SESSION['error']);
            break;
        case 'chua_dn':
            if (isset($_POST['chua_dn']) && ($_POST['chua_dn'])) {
                $thongbao = "Đăng nhập để thêm sản phẩm vào giỏ hàng!";
            }
            include "view/dangnhap.php";
            break;

        //Giỏ hàng

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

                $checksoluong = check_soluong($id_taikhoan, $id_sanpham, $id_size);
                if (is_array($checksoluong)) {
                    giohang_update_soluong($id_taikhoan, $id_sanpham, $id_size);
                } else {
                    giohang_insert($id_taikhoan, $id_sanpham, $name_sanpham, $price, $img, $soluong, $id_size);
                }
                $listgiohang = load_giohang_taikhoan($id_taikhoan);
                $_SESSION['giohang'] = $listgiohang;
            }
            include "view/giohang/viewgiohang.php";
            break;
        case 'delcart':
            if (isset($_GET['idgiohang'])) {
                $listgiohang = giohang_selectall();
                $id_giohang = $_GET['idgiohang'];
                giohang_delete($id_giohang);
                include "view/giohang/viewgiohang.php";
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'delcart_idtaikhoan':
            giohang_delete_taikhoan($id_taikhoan);
            $listgiohang = load_giohang_taikhoan($id_taikhoan);
            include "view/giohang/viewgiohang.php";
            break;
        case 'viewcart':
            $listgiohang = load_giohang_taikhoan($id_taikhoan);
            include "view/giohang/viewgiohang.php";
            break;
        case 'update_soluong':
            giohang_tanggiam_soluong($id_giohang, $soluong);
            $listgiohang = load_giohang_taikhoan($id_taikhoan);
            include "view/giohang/viewgiohang.php";
            break;
        case 'tang_soluong':
            if (isset($_GET['idgiohang'])) {
                $id_giohang = $_GET['idgiohang'];
                tang_soluong($id_giohang);
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'giam_soluong':
            if (isset($_GET['idgiohang']) && $_GET['soluong'] > 1) {
                $id_giohang = $_GET['idgiohang'];
                giam_soluong($id_giohang);
            }
            header('Location: index.php?act=viewcart');
            break;
        // Đơn hàng

        case 'bill':
            $listgiohang = load_giohang_taikhoan($id_taikhoan);
            if ($listgiohang != []) {
                include "view/giohang/bill.php";
            } else {
                $thongbao = "Không thể đặt hàng khi không có sản phẩm!";
                include "view/giohang/viewgiohang.php";
            }
            break;
        case 'billconfirm':
            if (isset($_POST['dathang']) && ($_POST['dathang'])) {
                if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                    extract($_SESSION['user']);
                } else {
                    $id_taikhoan = 0;
                }
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('Y/m/d');
                $price_tong = $_POST['tong'];
                $trangthai = "Đã đặt";
                $payment = $_POST['pttt'];
                $listgiohang = load_giohang_taikhoan($id_taikhoan);
                bill_insert($trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment);
                $lay_id_bill = bill_loadidbill($id_taikhoan);
                extract($lay_id_bill);
                $ngaydathangnew = date('d/m/Y', strtotime($ngaydathang));
                foreach ($listgiohang as $gh) {
                    bill_chitiet_insert($id_bill, $gh['2'], $gh['4'], $gh['6'], $gh[3], $gh[5], $gh[7]);
                    sanpham_tangsoluotban($gh['6'],$gh['2']);
                }

                $_SESSION['bill'] = bill_getinfo($id_bill);
                $_SESSION['billct'] = bill_chitiet_getinfo($id_bill);
                $listdonhang = load_donhang_idbill($id_bill);
                giohang_delete_taikhoan($id_taikhoan);
                

            }
        
            include "view/giohang/billconfirm.php";
            break;
        
        case 'donhang':
            $listbill = loadall_bill($_SESSION['user']['id_taikhoan']);
            include "view/giohang/donhang.php";
            break;
        case 'chitietdonhang':
            if (isset($_GET['iddonhang'])) {
                $idbill = $_GET['iddonhang'];
                $listdonhangchitiet = load_donhang_idbill($idbill);
                include "view/giohang/chitietdonhang.php";
            } else {
                $thongbao = "Đơn hàng không tồn tại!";
                header('Location: index.php?act=donhang');
            }
            break;
        case 'nhanhang':
            if (isset($_GET['id_bill'])) {
                $id_bill = $_GET['id_bill'];
                $trangthaimoi = "Đã nhận hàng";
                $today = date("Y-m-d");
                bill_update_trangthai($trangthaimoi, $id_bill);
                bill_update_ngayhoanthanh($today, $id_bill);
            }
            $listbill = loadall_bill($_SESSION['user']['id_taikhoan']);
            include "view/giohang/donhang.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        default:
            include "view/home.php";
            break;
    }
} else if (isset($_GET['kyw']) && ($_GET['kyw']) && ($_GET['kyw'] != "")) {
    $kyw = $_GET['kyw'];
    $dssp = loadall_sanpham($kyw);
    include "view/sanpham.php";
} else if (isset($_GET['iddm']) && ($_GET['iddm']) && ($_GET['iddm'] != "")) {
    $iddm = $_GET['iddm'];
    $dssp = sanpham_selectby_loai($iddm);
    include "view/sanpham.php";
} else {
    include "view/home.php";
}
include "view/footer.php";
?>