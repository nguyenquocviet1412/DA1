<h1>thong ke</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>ma</th>
                <th>ten</th>
                <th>so luong</th>
                <th>gia cao nhat</th>
                <th>gia thap nhat</th>
                <th>gia trung binh</th>
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
</form>