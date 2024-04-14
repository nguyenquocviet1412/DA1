<h1>DON HANG</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>ID</th>
                <th>TRẠNG THÁI</th>
                <th>ID TÀI KHOẢN</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>TỔNG</th>
                <th>PTTT</th>
                <th>NGÀY HOÀN THÀNH</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value);
                $trangthaimoi = "Đang giao";
                $date = new DateTime($ngaydathang);
                $interval = new DateInterval('P3D'); // Cộng thêm 2 ngày
                date_add($date, $interval);
                $ngaynhan=date_format($date, 'd/m/Y');
                $ngaydathangnew = date('d/m/Y', strtotime($ngaydathang));
                $xemdh = '<a class="btn btn-primary text-decoration-none" href="index.php?btn_listct&iddonhang=' . $id_bill . '" role="button">chi tiết</a>';
            ?>
                <tr>
                    <td>
                        <?= $id_bill ?>
                    </td>
                    <td>
                        <?php if ($trangthai == "Đã đặt") { ?>
                            <a class="text-decoration-none" href="index.php?btn_dathang&id_bill=<?= $id_bill ?>&trangthai=<?= $trangthaimoi ?>">Xác nhận giao hàng</a>
                        <?php } else if ($trangthai == "Đang giao") {
                            echo "Đang giao";
                        }elseif($trangthai=="Đã nhận hàng"){
                            echo $trangthai;
                        } ?>
                    </td>
                    <td>
                        <?= $id_taikhoan ?>
                    </td>
                    <td>
                        <?= $ngaydathangnew ?>
                    </td>
                    <td>
                        <?= $price_tong ?>
                    </td>
                    <td>
                        <?= $payment ?>
                    </td>
                    <td>
                        <?php
                        if ($trangthai == "Đã đặt") {
                            echo "Dự kiến 3 ngày sau khi đơn hàng đã được xử lý";
                        } elseif ($trangthai == "Đang giao") {

                            echo $ngaynhan . " (dự kiến)";
                        }elseif($trangthai=="Đã nhận hàng"){
                            echo $ngayhoanthanh;
                        }
                        ?>
                    </td>
                    <td>
                        <?= $xemdh ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>