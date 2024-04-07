<h1>thong ke</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>ma</th>
                <th>ten</th>
                <th>tong tien</th>
                <th>ten san pham</th>
                <th>so luong san pham</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                 var_dump($value);

                extract($value); ?>
                
                <tr>
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $user ?>
                    </td>
                    <td>
                        <?= $tongtien ?>
                    </td>
                    <td>
                        <?= $tensanpham ?>
                    </td>
                    <td>
                        <?= $soluongsanpham ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">thong ke don hang</a>
    <a class="btn btn btn-primary" href="index.php?btn_listbl" role="button">thong ke binh luan</a>
</form>