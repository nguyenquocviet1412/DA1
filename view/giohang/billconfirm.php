<?php
var_dump($_SESSION['bill']);
?>
<div class="row">
    <div class="row mb">
        <div class="boxleft mr">
            <div class="row mb">
                <div class="boxtitle">CÁM ƠN</div>
                <div class="row boxcontent" style="text-align: center;">
                    <h2>Cám ơn quý khách đã đặt hàng !</h2>
                </div>
            </div>
            <?php

            ?>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <div class="row boxcontent" style="text-align: center;">
                    <li>Mã đơn hàng:
                        <?= $id_bill ?>
                    </li>
                    <li>Ngày đặt hàng:
                        <?= $ngaydathang ?>
                    </li>
                    <li>Tổng tiền của đơn hàng: $
                        <?= $price_tong ?>
                    </li>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <div class="row boxcontent billform">
                    <table>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td>
                                <?= $hoten ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <?= $email ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>
                                <?= $tel ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>
                                <?= $address ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent pttt">
                    <table>
                        <tr>
                            <?php if ($payment == "Trực tiếp") : ?>
                                <td>
                                    <?= $payment ?>. Trả tiền khi nhận hàng
                                </td>
                            <?php elseif ($payment == "Chuyển khoản") : ?>
                                <td>
                                    <?= $payment ?>. Chuyển khoản ngân hàng
                                </td>
                            <?php elseif ($payment == "Online") : ?>
                                <td>
                                    <?= $payment ?>. Thanh toán online
                                </td>
                            <?php endif ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
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