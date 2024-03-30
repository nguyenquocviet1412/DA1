<h1>Binh luan</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>id</th>
                <th>noi dung</th>
                <th>tai khoan</th>
                <th>san pham</th>
                <th>ngay</th>
                <th>action</th>
            </tr>

        </thead>
        <tbody>
        <?php foreach ($items as $key => $value){
            extract($value);
            ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $noidung ?></td>
                    <td><?= $id_taikhoan ?></td>
                    <td><?= $id_sanpham ?></td>
                    <td><?= $ngaybinhluan ?></td>

                    <td>
                    <a onclick="return confirm('Xoá?')" class="btn btn-primary"
                            href="index.php?btn_delete&id=<?= $id?>" role="button">Xoá</a>
                    </td>
                </tr>

        <?php }?>
        </tbody>

    </table>
</form>