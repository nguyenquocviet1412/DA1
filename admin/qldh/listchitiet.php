<main class="justify-content-center col-12">
    <h3>Đơn hàng</h3>
    <form action="index.php" method="post">
    <table class="table table-bordered showsp">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th><img src="" height="80px"></th>
                <th>Size</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($listdonhangchitiet as $lb) {
                extract($lb);
                if ($id_size == 1) {
                    $size = "chiết";
                } else {
                    $size = "full";
                }
                echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $name_sanpham . '</td>
                            <td><img src="../../'.$img_sanpham.'" height="80px"></td>
                            <td>' . $size . '</td>
                            <td>' . $price . '</td>
                            <td>'.$soluong.'</td>
                        </tr>';
                $i += 1;
            }
            ?>

        </tbody>

    </table>
    </form>
</main>