<style>
    .container {
        background-color: rgb(255, 255, 255);
        width: 100%;
    }

    .baner {
        background-image: url("img/bn\ 4.jpg");
        height: 400px;
        width: 100%;
    }

    .user {
        margin-top: -82px;
    }

    .buy {
        margin-top: -82px;
    }

    .row {
        margin-top: 20px;
    }

    .showsp {
        border: 1px solid #000000;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 10px;
        

    }
</style>
<main class="justify-content-center col-12">
    <h3>Giỏ hàng</h3>
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
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Size</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $tong=0;
                $i=0;
                $tongsoluong=0;
                foreach ($listgiohang as $gh) {
                    extract($gh);
                    $ttien=$soluong * $price;
                    $tong+=$ttien;
                    $tongsoluong+=$soluong;
                    $xoasp='<a href="index.php?act=delcart&idgiohang='.$id_giohang.'"><input type="button" value="Xóa" class="btn btn-danger"></a>';
                    if($id_size==1){
                        $size="chiết";
                    }else{
                        $size="full";
                    }
                    echo'<tr>
                            <td><img src="'.$img.'" height="80px"></td>
                            <td>'.$name_sanpham.'</td>
                            <td>'.$size.'</td>
                            <td>'.$price.'$</td>
                            <td>
                                <a href="index.php?act=giam_soluong&idgiohang='.$id_giohang.'&soluong='.$soluong.'" class="btn btn-danger">-</a>
                                <input type="text" with="50px" style="width: 35px;height: 35px; text-align: center;" disabled value="'.$soluong.'" >
                                <a href="index.php?act=tang_soluong&idgiohang='.$id_giohang.'" class="btn btn-success">+</a> 
                            </td>
                            <td>'.$xoasp.'</td>
                        </tr>';
                        $i+=1;
                }
            echo '<tr>
                        <td colspan="3">Tổng đơn hàng</td>
                        <td>' . $tong . '$</td>
                        <td>' . $tongsoluong . '</td>
                        <td><a href="index.php?act=delcart_idtaikhoan&id_taikhoan=' . $id_taikhoan . '"><input type="button" value="Xóa" class="btn btn-danger"></a></td>
                    </tr>
                ';
            ?>

        </tbody>

    </table>
</main>

<div class="sub p-2">
    <a class="btn btn-primary" href="index.php?act=bill" role="button">Đặt hàng</a>
    <a class="btn btn-primary" href="index.php" role="button">Home</a>
</div>