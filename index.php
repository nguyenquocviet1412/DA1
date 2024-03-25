<?php
session_start();
include "dao/pdo.php";
require_once "dao/pdo.php";
include "dao/sanpham.php";
include "dao/danhmuc.php";
include "dao/taikhoan.php";
include "view/header.php";
include "global.php";

$spnew = sanpham_selectall();
$dsdm = danhmuc_selectall();
$dstop10 = sanpham_selecttop10();

if ((isset ($_GET['act'])) && ($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset ($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset ($_POST['iddm']) && ($_POST['iddm'] > 0)) {
                $iddm = $_POST['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':

            if (isset ($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = sanpham_getinfo($id);
                extract($onesp);

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
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $checkuser=checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    //$thongbao="Bạn đã đăng nhập thành công!";
                    header('Location: index.php');
                }else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'trangdangky':
            include "view/taikhoan/dangky.php";
            break;
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $gender=$_POST['gender'];
                $avatar = savefile('avatar', 'upload/');
               

                taikhoan_insert($user,$pass,$email,$address,$tel,$avatar,$gender);
                $thongbao="Đã đăng kí thành công!!";
            }
            include "view/taikhoan/dangky.php";
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