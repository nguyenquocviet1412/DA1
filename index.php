<?php 
session_start();
    include "dao/pdo.php";
    include "dao/sanpham.php";
    include "dao/danhmuc.php";
    include "dao/taikhoan.php";
    include "view/header.php";
    include "global.php";

    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();
    $dstop10=loadall_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case'':
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>