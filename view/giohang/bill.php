<style>
    .container {
        background-color: rgb(255, 255, 255);
        width: 100%;
    }

    .baner {
        background-image: url("img/bn\ 4.jpg");
        height: 400px;
        width: 100%;
    }

    .user {
        margin-top: -82px;
    }

    .buy {
        margin-top: -82px;
    }

    .row {
        margin-top: 20px;
    }

    .showsp {
        border: 1px solid #000000;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 10px;

    }
</style>
<main class="justify-content-center col-12">
    <form action="index.php?act=billconfirm" method="post">
        <div class="tttaikhoan col-6">
            <h3>THÔNG TIN USER</h3>
            <table class="table table-bordered col-6">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                } else {
                    $hoten = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="hoten" value="<?= $hoten ?>" class="form-control col-12" required></td>
                    <div class="err"><?= $error['hoten'] ?? ''; ?></div>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address" value="<?= $address ?>" class="form-control col-12" required></td>
                    <div class="err"><?= $error['address'] ?? ''; ?></div>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $email ?>" class="form-control col-12"></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="tel" value="<?= $tel ?>" class="form-control col-12" required></td>
                    <div class="err"><?= $error['tel'] ?? ''; ?></div>
                </tr>

            </table>

        </div>

        <div class="phuongttt ">
            <h3>PHƯƠNG THỨC THANH TOÁN</h3>
            <div class="m-2">
                <input type="radio" name="pttt" value="Trực tiếp" checked>Trả tiền khi nhận hàng
                <input type="radio" name="pttt" value="Chuyển khoản" class="ms-5">Chuyển khoản ngân hàng 
            </div>
            
        </div>

        <div class="giohang">
            <h3>Giỏ hàng</h3>
            <table class="table table-bordered showsp">
                <thead>
                    <tr>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Size</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tong = 0;
                    $i = 0;
                    $tongsoluong = 0;
                    foreach ($listgiohang as $gh) {
                        extract($gh);
                        $ttien = $soluong * $price;
                        $tong += $ttien;
                        $tongsoluong += $soluong;
                        $xoasp = '<a href="index.php?act=delcart&idgiohang=' . $id_giohang . '"><input type="button" value="Xóa" class="btn btn-danger"></a>';
                        if ($id_size == 1) {
                            $size = "chiết";
                        } else {
                            $size = "full";
                        }
                        echo '<tr>
                            <td><img src="' . $img . '" height="80px"></td>
                            <td>' . $name_sanpham . '</td>
                            <td>' . $size . '</td>
                            <td>' . $price . '$</td>
                            <td>
                                ' . $soluong . '
                            </td>
                        </tr>';
                        $i += 1;
                    }
                    echo '<tr>
                        <td colspan="3">Tổng đơn hàng</td>
                        <td>' . $tong . '$</td>
                        <td>' . $tongsoluong . '</td>
                    </tr>
                ';
                    ?>

                </tbody>

            </table>
        </div>
        <div class="sub p-2">
            <input type="hidden" value="<?= $tong ?>" name="tong">
            <input type="submit" class="btn btn-primary" name="dathang" value="Đặt hàng">
        </div>
    </form>
</main>