<h1>thong ke binh luan</h1>
<form action="index" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Số lượt bình luận</th>
                <th>Cũ nhất</th>
                <th>Mới nhất</th>
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
                        <?= $namesp ?>
                    </td>
                    <td>
                        <?= $soluong ?>
                    </td>
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
    <a class="btn btn btn-primary" href="index.php?btn_listdh" role="button">thong ke don hang</a>
    <a class="btn btn btn-primary" href="index.php?btn_list" role="button">Thong ke hang hoa</a>
</form>