<div class="row">
    <div class="row mb">
        <div class="boxleft mr">
            <div class="row mb">
                <div class="row boxcontent" style="text-align: center;">
                    <h2>Cám ơn quý khách đã đặt hàng !</h2>
                    <h2>THÔNG TIN ĐƠN HÀNG</h2>
                </div>
            </div>
            <?php
            if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }
            ?>
            <div class="row mb">
                <div class="row boxcontent billform">
                    <table class="table table-bordered">
                        <tr>
                            <td class="col-4">Người đặt hàng: <?= $hoten ?></td>
                            <td class="col-4">Mã đơn hàng: <?= $id_bill ?></td>
                        </tr>
                        <tr>
                            <td class="col-4">Số điện thoại: <?= $tel ?></td>
                            <td class="col-4">Ngày đặt: <?= $ngaydathangnew ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-4">Email: <?= $email ?></td>
                            <td class="col-4">TỔNG TIỀN: <?= $price_tong ?></td>
                        </tr>
                        <tr>
                            <td class="col-4">Địa chỉ: <?= $address ?></td>
                            <?php if ($payment == "Trực tiếp"): ?>
                                <td>
                                    Trả tiền khi nhận hàng
                                </td>
                            <?php elseif ($payment == "Chuyển khoản"): ?>
                                <td>
                                    Chuyển khoản ngân hàng <br>
                                    <img src="upload/QR.jpg" alt="" width="100" height="143.6">
                                </td>
                                
                            <?php endif ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="row mb">
                <p class="h4">CHI TIẾT ĐƠN HÀNG</p>
                <div class="row boxcontent cart">
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
                            foreach ($listdonhang as $dh) {
                                extract($dh);
                                $ttien = $soluong * $price;
                                $tong += $ttien;
                                $tongsoluong += $soluong;
                                if ($id_size == 1) {
                                    $size = "chiết";
                                } else {
                                    $size = "full";
                                }
                                echo '<tr>
                            <td><img src="' . $img_sanpham . '" height="80px"></td>
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
            </div>
        </div>
    </div>
</div>