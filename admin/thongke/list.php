<h1>Thống kê</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên Hãng</th>
                <th>Số lượng sản phẩm</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {

                extract($value); ?>
                <tr>
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <td>
                        <?= $soluong ?>
                    </td>
                    <td>
                        <?= $giamin ?>
                    </td>
                    <td>
                        <?= $giamax ?>
                    </td>
                    <td>
                        <?= $giaavg ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <a class="btn btn btn-info" href="index.php?btn_list" role="button">Thống kê danh mục</a>
    <a class="btn btn btn-primary" href="index.php?btn_listdh" role="button">Thống kê đơn hàng</a>
    <a class="btn btn btn-primary" href="index.php?btn_listspyt" role="button">Thống kê sản phẩm yêu thích</a>
</form>