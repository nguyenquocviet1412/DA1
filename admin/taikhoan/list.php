<h1>DANH SÁCH KHÁCH HÀNG</h1>
<form action="index.php" method="post">
    <table class="table table-bordered rounded">
        <thead>
            <tr>
                <th>ID</th>
                <th>USER</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>TEL</th>
                <th>AVATAR</th>
                <th>GENDER</th>
                <th>ROLE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $key => $value) {
                extract($value);
                ?>
                <tr>
                    <td>
                        <?= $id_taikhoan ?>
                    </td>
                    <td>
                        <?= $user ?>
                    </td>
                    
                    <td>
                        <?= $email ?>
                    </td>
                    <td>
                        <?= $address ?>
                    </td>
                    <td>
                        <?= $tel ?>
                    </td>
                    <td>
                        <img src="../../upload/<?= $avatar ?>" alt="" width="200" height="100">
                    </td>
                    <td>
                        <?= $gender ?>
                    </td>
                    <td>
                        <?php if ($role == 1) {
                            echo "Admin";
                        } elseif ($role == 2) {
                            echo "Super admin";
                        } else {
                            echo "User";
                        }
                        ?>
                    </td>

                    <td>
                        <a class="btn btn-primary" href="index.php?btn_edit&id=<?= $id_taikhoan ?>" role="button">Sửa</a>
                        <a onclick="return confirm('Xoá?')" class="btn btn-primary"
                            href="index.php?btn_delete&id=<?= $id_taikhoan ?>" role="button">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>