<h1>DANH SÁCH HÀNG HOÁ</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>MÃ HÀNG</th>
                <th>TÊN HÀNG</th>
                <th>GIÁ TIỀN</th>
                <th>GIẢM GIÁ</th>
                <th>HÌNH ẢNH</th>
                <th>TRẠNG THÁI</th>
                <th>SỐ LƯỢT XEM</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $key => $value) {
                extract($value);
                ?>
                <tr>
                    <td><input type="checkbox" name="mahh[]" id="" value="<?= $mahang ?>"></td>
                    <td>
                        <?= $maloaihang ?>
                    </td>
                    <td>
                        <?= $mahang ?>
                    </td>
                    <td>
                        <?= $tenhang ?>
                    </td>
                    <td>
                        <?= $giatien ?>
                    </td>
                    <td>
                        <?= $giamgia ?>
                    </td>
                    <td>
                        <img src="/shop/upload/<?= $hinhanh ?>" alt="" width="200" height="100">
                    </td>
                    <td>
                        <?= ($trangthai == 0) ? "Bình thường" : "Đặc biệt" ?>
                    </td>
                    <td>
                        <?= $soluotxem ?>
                    </td>

                    <td>
                        <a class="btn btn-outline-success my-2" href="index.php?btn_edit&mahh=<?= $mahang ?>" role="button">Sửa</a>
                        <a class="btn btn-outline-success" href="index.php?btn_delete&mahh=<?= $mahang ?>" role="button"
                            onclick="return confirm('Xoá?')">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-outline-success" href="index.php" role="button">Thêm mới</a>

</form>