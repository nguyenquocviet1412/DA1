<h1>DANH SÁCH LOẠI HÀNG</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th></th>
                <th>MÃ THƯƠNG HIỆU</th>
                <th>TÊN THƯƠNG HIỆU</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value);
                ?>
                <tr>
                    <td><input type="checkbox" name="id[]" id="" value="<?= $id ?>"></td>
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="index.php?btn_edit&id=<?= $id ?>" role="button">Sửa</a>
                        <a class="btn btn-primary" href="index.php?btn_delete&id=<?= $id ?>"
                            role="button">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn btn-primary" href="index.php" role="button">Thêm mới</a>



</form>