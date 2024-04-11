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
                $xemdh='<a class="btn btn-primary" href="index.php?act=chitietdonhang&iddonhang='.$id_bill.'" role="button">chi tiết</a>';
                ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$id_bill?></td>
                            <td><?=$ngaydathang ?></td>
                            <td>
                                <?php
                                if($trangthai=="Đã đặt"){
                                    echo "Dự kiến 3 ngày sau khi đơn hàng đã được xử lý";
                                }elseif($trangthai=="Đang giao"){
                                    $date = new DateTime(''.$ngaydathang.'');
                                    $date->modify('+3 day');
                                    echo $date->format('Y-m-d')." (dự kiến)";
                                }elseif($trangthai=="Đã nhận hàng"){
                                    echo $ngayhoanthanh;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($trangthai=="Đã đặt"){
                                    echo $trangthai;
                                }elseif($trangthai=="Đang giao"){
                                    $today= date("Y-m-d");
                                    $date1 = new DateTime(''.$ngaydathang.'');
                                    $date1->modify('+3 day');
                                    $ngaynhan=$date1->format('Y-m-d');
                                    if (strtotime($today) < strtotime($ngaynhan)) {
                                        echo "Dự kiến 3 ngày sau khi đơn hàng đã được xử lý";
                                    }elseif(strtotime($today) >= strtotime($ngaynhan)){
                                    echo '
                                        <a href="index.php?act=nhanhang&id_bill='.$id_bill.'">Đang giao (Xác nhận đã nhận hàng)</a>
                                    ';}
                                }else{
                                    echo $trangthai;
                                }
                                ?>
                            </td>
                            <td><?=$xemdh?></td>
            
                        </tr>
                <?php
                $i += 1;
            }
            ?>
        
        </tbody>

    </table>
</main>