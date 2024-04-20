<h1>Thống kê</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>User</th>
                <th>Tổng tiền</th>
                <th>Số lượng sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value); ?>
                
                <tr>
                    <td>
                        <img src="../../upload/<?= $avatar?>" style="width: 50px; height: 50px; " alt="Product">
                    </td>
                    <td>
                        <?= $user ?>
                    </td>
                    <td>
                        <?= $price_tong ?> $
                    </td>
                    <td>
                        <?= $soluong ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">Thống kê danh mục</a>
    <a class="btn btn btn-info" href="index.php?btn_listdh" role="button">Thống kê đơn hàng</a>
    <a class="btn btn btn-primary" href="index.php?btn_listspyt" role="button">Thống kê sản phẩm yêu thích</a>
</form>