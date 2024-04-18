<h1>thong ke</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>sanpham</th>
                <th>hinh anh</th>
                <th>mota</th>
                <th>luot ban</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value); ?>
                
                <tr>
                    <td>
                        <?= $namesp ?> $
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
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">thong ke don hang</a>
    <a class="btn btn btn-primary" href="index.php?btn_listbl" role="button">thong ke binh luan</a>
</form>