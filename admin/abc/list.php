<h1>DANH SÁCH LOẠI HÀNG</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th></th>
                <th>MÃ LOẠI HÀNG</th>
                <th>TÊN LOẠI HÀNG</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value);
                ?>
                <tr>
                    <td><input type="checkbox" name="maloai[]" id="" value="<?= $maloai ?>"></td>
                    <td>
                        <?= $maloai ?>
                    </td>
                    <td>
                        <?= $tenloai ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-success" href="index.php?btn_edit&maloai=<?= $maloai ?>" role="button">Sửa</a>
                        <a class="btn btn-outline-success" href="index.php?btn_delete&maloai=<?= $maloai ?>"
                            role="button">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-outline-success" href="index.php" role="button">Thêm mới</a>



</form>