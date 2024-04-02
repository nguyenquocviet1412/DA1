<h1>thong ke binh luan</h1>
<form action="blindex.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>ma</th>
                <th>ten</th>
                <th>cu nhat</th>
                <th>moi nhat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {

                extract($value); ?>
                <tr>
                    <td>
                        <?= $id_sanpham ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <!-- <td>
                        <?= $soluong ?>
                    </td> -->
                    <td>
                        <?= $cunhat ?>
                    </td>
                    <td>
                        <?= $moinhat ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <a href="index.php?btn_list"><button type="submit" class="btn btn-primary">bảng thống kê</button></a>
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">Thêm mới</a>
</form>