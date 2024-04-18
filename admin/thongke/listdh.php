<h1>thong ke</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>User</th>
                <th>Tổng tiền</th>
                <th>ten san pham</th>
                <th>so luong san pham</th>
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
                        <?= $price_tong ?>
                    </td>
                    <td>
                        <?= $name_sanpham ?>
                    </td>
                    <td>
                        <?= $soluong ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">thong ke don hang</a>
    <a class="btn btn btn-primary" href="index.php?btn_listbl" role="button">thong ke binh luan</a>
</form>