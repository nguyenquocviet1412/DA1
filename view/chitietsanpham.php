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

    /* showsp*/
    .showsp {
        border: 1px solid #000000;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 10px;

    }

    .binhluan {
        border: 1px solid #000000;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 10px;
        height: 300px;
    }

    .thanhbl {
        margin-top: 20px;
    }

    .listbl {
        border: 1px solid #000000;
        height: 200px;
        border-radius: 5px;
    }

    .spcungloai {
        border: 1px solid #000000;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 10px;
        height: 200px;
    }

    .item {
        display: flex;
        padding: 10px;
        ;
    }

    .product-price {
        font-size: 1.1rem;
        color: #ef0606;
        margin-top: 5px;
        font-size: 40px;
    }


    /* top 10 */
    .product_top10 img {
        max-width: 100px;
        height: auto;
    }

    .content {
        margin-left: 600px;
    }

    .user {
        margin-top: -82px;
    }

    .buy {
        margin-top: -82px;
    }

    .video {
        display: flex;
    }
    .original-price span {
    text-decoration: line-through;
    color: red;
    }

    .sale-price span {
    color: green;
    font-weight: bold;
    }
</style>

<main class="">
    <h3>Chi tiết sản phẩm</h3>
    <div class="showsp">
        <?php
        extract($onesp);
        sanpham_tangsoluotxem($id_sanpham);
        $img = $img_path . $img;
        if($sale==""|| $sale==0){
        echo '
                <div class="item">
                    <div class="item-image flex col-5">
                        <img src="' . $img . '" alt="" class="item-img" width="400px" height="400px">
                    </div>
                        <div class="item-content col-6">
                            <h3 class="item-title">' . $name . '</h3>
                            <p class=" h1 product-price">' . $price . '$</p>
                            <p class="item-text ">
                            Mô tả: ' . $mota . '
                            </p>
                            <div class="mb-3 mt-3 m-3">
                                <label for="size2">Full</label>
                                <input type="radio" id="full" name="size" value="full"> 
                                ';
                if($price_chiet>0){
                    echo '
                               | <label for="size1">Chiết '.$price_chiet.'$</label>
                                <input type="radio" id="chiet" name="size" value="chiết">
                    ';
                }
        echo' 
                            </div>
                            <div class="sub p-2">
                                <button type="submit" class="btn btn-danger">them vao gio hang</button>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }else{
                $giasau=sanpham_giamgia($price, $sale);
                echo '
                <div class="item">
                    <div class="item-image flex col-5">
                        <img src="' . $img . '" alt="" class="item-img" width="400px" height="400px">
                    </div>
                        <div class="item-content col-6">
                            <h3 class="item-title">' . $name . '</h3>
                            <p class=" h1 product-price">
                            <div >
                                <p class="original-price">Giá gốc: <span>'.$price.'$</span></p>
                                <p class="sale-price">Giá sau giảm: <span>'.$giasau.'$</span></p>
                            </div>
                            </p>
                            <p class="item-text ">
                            Mô tả: ' . $mota . '
                            </p>
                            <div class="mb-3 mt-3 m-3">
                                <label for="size2">Full</label>
                                <input type="radio" id="full" name="size" value="full"> 
                                ';
                                if($price_chiet>0){
                                    echo '
                                        | <label for="size1">Chiết '.$price_chiet.'$</label>
                                        <input type="radio" id="chiet" name="size" value="chiết">
                                    ';
                                }
                        echo' 
                            </div>
                            <div class="sub p-2">
                                <button type="submit" class="btn btn-danger">them vao gio hang</button>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("view/binhluan/binhluanform.php", { id_sanpham: <?= $id_sanpham ?> });
            });
        </script>

        <h3>Binh Luan</h3>
        <div id="binhluan">

        </div>

    </div>
    <h3>Sản phẩm cùng hãng
        <?php extract($sp_cung_loai);
        echo $name; ?>
    </h3>
    <div class="spcungloai">
        <?php
        foreach ($sp_cung_loai as $sp_cung_loai) {
            extract($sp_cung_loai);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
        }
        ?>
    </div>
</main>

<div class="video justify-content-center">
    <video width="400px" controls>
        <source src="img/TVC QUẢNG CÁO NƯỚC HOA CAO CẤP COCO CHANEL (1).mp4" type="video/mp4">
        Your browser does not support HTML video.
    </video>

    <p>
    <pre>
                    COCO thể hiện nghệ thuật tương phản của Mademoiselle: cô là người đã tạo nên cuộc
                    cách mạng thời trang cho nữ giới, bằng ý niệm về sự giản dị và tinh tế, nhưng cũng
                    đồng thời yêu thích phong cách hoa mỹ kiểu Baroque. Hương nước hoa ẩn mình dưới nét
                    sang trọng khác biệt hiện có phiên bản EAU DE PARFUM, EAU DE TOILETTE và các sản phẩm
                    chăm sóc cơ thể.
                  </pre>
    </p>
</div>
<?php include "yeuthich.php"; ?>