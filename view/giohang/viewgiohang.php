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
                foreach ($_SESSION['mycart'] as $cart) {
                    $ttien=$cart[3] * $cart[5];
                    $tong+=$ttien;
                    $xoasp='<a href="index.php?act=delcart&idgiohang='.$i.'"><input type="button" value="Xóa" class="btn btn-danger"></a>';
                    if($cart[6]==1){
                        $size="chiết";
                    }else{
                        $size="full";
                    }
                    echo'<tr>
                            <td><img src="'.$cart[4].'" height="80px"></td>
                            <td>'.$cart[2].'</td>
                            <td>'.$size.'</td>
                            <td>'.$cart[3].'$</td>
                            <td>'.$cart[5].'</td>
                            <td>'.$xoasp.'</td>
                        </tr>';
                        $i+=1;
                }
                echo'<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                        <td></td>
                    </tr>
                ';
            ?>
            <!-- <tr>
                <td>1</td>
                <td>dwadwd</td>
                <td>Doe</td>
                <td>2020-01-01</td>
                <td>123456</td>
                <td>F</td>
                <td>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr> -->

        </tbody>

    </table>
</main>

<div class="sub p-2">
    <button type="submit" class="btn btn-primary">Dat hang</button>
    <button type="submit" class="btn btn-primary">home</button>
</div>
