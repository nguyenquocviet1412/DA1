<h1>DON HANG</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>ID</th>
                <th>TRANG THAI</th>
                <th>IDTAIKHOAN</th>
                <th>NGAYDATHANG</th>
                <th>TONG</th>
                <th>PAYMENT</th>
                <th>NGAYHOANTHANH</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value);
                $xemdh='<a class="btn btn-primary" href="index.php?act=chitietdonhang&iddonhang='.$id_bill.'" role="button">chi tiết</a>';
                ?>
                <tr>
                    <td>
                        <?= $id_bill ?>
                    </td>
                    <td>
                        <?= $trangthai ?>
                    </td>
                    <td>
                        <?= $id_taikhoan?>
                    </td>
                    <td>
                        <?= $ngaydathang ?>
                    </td>
                    <td>
                        <?= $price_tong ?>
                    </td>
                    <td>
                        <?= $payment ?>
                    </td>
                    <td>
                        <?= $ngayhoanthanh ?>
                    </td>
                    <td>
                        <?= $xemdh?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="index.php" role="button">Thêm mới</a>
</form>