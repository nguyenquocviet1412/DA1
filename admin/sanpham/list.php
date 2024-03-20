<h1>DANH SÁCH HÀNG HOÁ</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th></th>
                <th>MÃ HÀNG</th>
                <th>HÃNG</th>
                <th>TÊN HÀNG</th>
                <th>GIÁ FULL</th>
                <th>GIÁ CHIẾT</th>
                <th>GIẢM GIÁ</th>
                <th>HÌNH ẢNH</th>
                <th>MÔ TẢ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $key => $value) {
                extract($value);
                ?>
                <tr>
                    <td><input type="checkbox" name="id[]" id="" value="<?= $id ?>"></td>
                    <td>
                        <?= $id_sanpham ?>
                    </td>
                    <td>
                        <?php foreach ($danhmuc_sanpham as $key => $value) {
                            if ($id_danhmuc == $value['id']) {
                                echo $value['name'];
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <td>
                        <?= $price ?>
                    </td>
                    <td>
                        <?= $price_chiet ?>
                    </td>
                    <td>
                        <?= $sale ?>
                    </td>
                    <td>
                        <img src="/DA1/upload/<?= $img ?>" alt="" width="200" height="100">
                    </td>
                    <td>
                        <?= $mota ?>
                    </td>
                    <td>
                        <a class="btn btn btn-primary my-2" href="index.php?btn_edit&id=<?= $id_sanpham ?>"
                            role="button">Sửa</a>
                        <a class="btn btn btn-primary" href="index.php?btn_delete&id=<?= $id_sanpham ?>" role="button"
                            onclick="return confirm('Xoá?')">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn btn-primary" href="index.php" role="button">Thêm mới</a>

</form>