<h1>Thống kê</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Lượt bán</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value); ?>
                
                <tr>
                    <td>
                        <?= $namesp ?>
                    </td>
                    <td>
                        <img src="../../upload/<?= $img?>" style="width: 50px; height: 50px; " alt="Product">
                    </td>
                    <td>
                        <?= $mota ?>
                    </td>
                    <td>
                        <?= $luotban ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">Thống kê danh mục</a>
    <a class="btn btn btn-primary" href="index.php?btn_listdh" role="button">Thống kê đơn hàng</a>
    <a class="btn btn btn-info" href="index.php?btn_listspyt" role="button">Thống kê sản phẩm yêu thích</a>
</form>