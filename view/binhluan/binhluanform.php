<?php

session_start();
include "../../dao/pdo.php";
include "../../dao/binhluan.php";
include "../../dao/taikhoan.php";
$id_sanpham = $_REQUEST['id_sanpham'];
$dsbl = binhluan_selectby_hanghoa($id_sanpham);
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title> -->
    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 25%;
        }

        .binhluan table td:nth-child(2) {
            width: 60%;
            padding-left: 5px;
            padding-right: 5px;
        }

        .binhluan table td:nth-child(3) {
            width: 15%;
        }

        .row {
            justify-content: center;
            width: 100%;
        }

        .mb {
            margin-bottom: 20px;
        }

        .boxtitle {
            color: #333;
            padding: 10px;
            background-color: #EEE;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border: 1px #CCC solid;
        }

        .boxcontent2 {
            border-left: 1px #CCC solid;
            border-right: 1px #CCC solid;
            background-color: white;
            overflow: auto;
            max-height: 300px;
        }

        .boxfooter {
            padding: 10px;
            background-color: #EEE;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-left: 1px #CCC solid;
            border-right: 1px #CCC solid;
            border-bottom: 1px #CCC solid;
            margin-top: -20px;
        }
        .err {
      color: red;
    }
    </style>
<!-- </head> -->

<!-- <body> -->
    <!-- <div class="row"> -->
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2 binhluan">
            <table>
                <?php

                foreach ($dsbl as $bl) {
                    extract($bl);
                    $nd = taikhoan_select_by_id($id_taikhoan);
                    extract($nd);
                    $dsbl1 = binhluan_selectby_taikhoan($id_taikhoan);
                    echo '<tr> <td> <img src="upload/' . $avatar . '" style="width: 50px; height: 50px; " alt="Product"> ' . $user . ' </td>';

                    echo '<td>' . $noidung . '</td>';

                    echo '<td>' . $ngaybinhluan . '</td></tr>';

                }
                ?>
            </table>

        </div>

        <div class="boxfooter binhluanform">
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">

                    <input type="text" name="noidung" required>
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    <div class="err"><?= $error['noidung'] ?? '' ?></div>
                </form>
            <?php } else { ?>
                <p style=color:red;>Bạn phải đăng nhập để bình luận!</p>
            <?php } ?>
        </div>

        <?php
        $error = [];
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            if (empty($_POST['noidung'])) {
                $error['noidung'] = "*Vui lòng nhập nội dung";
            }
            if (count($error) >= 1) {
                $_SESSION['error'] = $error;
            } else {
            $noidung = $_POST['noidung'];
            $id_sanpham = $_POST['id_sanpham'];
            $id_taikhoan = $_SESSION['user']['id_taikhoan'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngaybinhluan = date('d/m/Y h:i:s ');
            binhluan_insert($noidung, $id_sanpham, $id_taikhoan, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            header("Location: ../../index.php?act=sanphamct&idsp=".$id_sanpham." " );
            
        }
        ?>

    <!-- </div> -->

<!-- </body>

</html> -->