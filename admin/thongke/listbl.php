<h1>thong ke binh luan</h1>
<form action="index.php" method="post">
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
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">Thong ke hang hoa</a>
</form>