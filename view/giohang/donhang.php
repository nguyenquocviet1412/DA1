<main class="justify-content-center col-12">
    <h3>Đơn hàng</h3>
    <h3 class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
          echo $thongbao;
        }
        ?>
      </h3>
    <table class="table table-bordered showsp">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Ngày giao</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($listbill as $lb) {
                extract($lb);
                $xemdh='<a href="index.php?act=chitietdonhang&idbill='.$id_bill.'"><input type="button" value="chi tiết" class="btn btn-danger"></a>';
                echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $id_bill . '</td>
                            <td>' . $ngaydathang . '</td>
                            <td>' . $ngaydathang . '</td>
                            <td>' . $trangthai . '</td>
                            <td>
                                '.$xemdh.'
                            </td>
                            
                        </tr>';
                $i += 1;
            }
            ?>
        
        </tbody>

    </table>
</main>