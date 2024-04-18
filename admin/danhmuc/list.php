<h1>DANH SÁCH LOẠI HÀNG</h1>
<form action="index.php" method="post">
    <a class="btn btn btn-primary my-3" href="index.php" role="button">Thêm mới</a>

    <table class="table table-bordered rounded">
        <thead>
            <tr>
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
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="index.php?btn_edit&id=<?= $id ?>" role="button">Sửa</a>
                        <a onclick="return confirm('Xác nhận xoá?')" class="btn btn-primary"
                            href="index.php?btn_delete&id=<?= $id ?>" role="button">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



</form>