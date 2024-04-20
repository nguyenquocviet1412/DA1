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
        padding: 20px;
        height: 300px;
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

    .original-price {
        text-decoration: line-through;
        color: black;
        font-size: 20px;
        padding: 0 5px;
    }

    .original-price1 {
        color: red;
        font-weight: bold;
        font-size: 25px;
        margin: 0;
    }

    .sale-price {
        color: red;
        font-weight: bold;
        font-size: 25px;
        margin: 0;
    }

    .percent {
        color: red;
        font-size: 20px;
    }

.flex-form {
    display: flex;
    justify-content: space-between;
}
.err {
      color: red;
    }
    .flex{
         display: flex;
    }
</style>

<main class="">
    <h3>Chi tiết sản phẩm</h3>
    <?php 
    if (isset($_SESSION['error'])) {
        
    }
        
    ?>
    <div class="err"><?= $error['noidung'] ?? '' ?></div>
    <div class="showsp">

        <?php
        extract($onesp);
        sanpham_tangsoluotxem($id_sanpham);
        $img = $img_path . $img;
        if ($sale == "" || $sale == 0) {
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                $giohang1 = "themgiohang";
            } else {
                $giohang1 = "chua_dn";
            }
            ?>
            <div class="item">
                <form action="index.php?act=<?= $giohang1 ?>" method="post" class="flex-form col-12">
                    <div class="item-image flex col-6">
                        <img src="<?= $img ?>" alt="" class="item-img" width="400px" height="400px">
                    </div>
                    <div class="item-content col-6">
                        <h2 class="item-title">
                            <?php foreach ($danhmuc_sanpham as $key => $value) {
                                if ($id_danhmuc == $value['id']) {
                                    echo $value['name'];
                                }
                            }
                            ?>
                        </h2>
                        <h3 class="item-title">
                            <?= $namesp ?>
                        </h3>
                        <span>

                            <span class="original-price1">
                                Full:
                                <?= $price ?>$
                            </span><br>


                            <span class="original-price1">
                                Chiết:
                                <?= $price_chiet ?>$
                            </span>

                        </span>

                        <div class="mb-3 mt-3 m-3">
                            <input type="radio" class="btn-check" name="size" id="full" value="full" autocomplete="off"
                                checked>
                            <label class="btn btn-outline-danger" for="full">Full:
                                <?= $price ?>$
                            </label>
                            <?php if ($price_chiet > 0) { ?>
                                <input type="radio" class="btn-check" name="size" id="chiet" autocomplete="off">
                                <label class="btn btn-outline-danger" for="chiet" value="chiết">
                                    Chiết:
                                    <?= $price_chiet ?>$
                                </label>
                            <?php } ?>
                        </div>
                        <p class="item-text ">
                            Mô tả:
                            <?= $mota ?>
                        </p>
                    <?php } else {
            $salefull = sanpham_giamgia($price, $sale);
            $salechiet = sanpham_giamgia($price_chiet, $sale);
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                $giohang1 = "themgiohang";
            } else {
                $giohang1 = "chua_dn";
            }
            ?>
                        <div class="item">
                            <form action="index.php?act=<?= $giohang1 ?>" method="post" class="flex-form col-12">
                                <div class="item-image flex col-6">
                                    <img src="<?= $img ?>" alt="" class="item-img" width="400px" height="400px">
                                </div>
                                <div class="item-content col-6">
                                    <h2 class="item-title">
                                        <?php foreach ($danhmuc_sanpham as $key => $value) {
                                            if ($id_danhmuc == $value['id']) {
                                                echo $value['name'];
                                            }
                                        }
                                        ?>
                                    </h2>
                                    <h3 class="item-title">
                                        <?= $namesp ?>
                                    </h3>
                                    <span>
                                        <span class="sale-price">
                                            Full:
                                            <?= $salefull ?>$
                                        </span>
                                        <span class="original-price">
                                            <?= $price ?>$
                                        </span>
                                        <span class="percent">
                                            -
                                            <?= $sale ?>%
                                        </span> <br>
                                        <span class="sale-price">
                                            Chiết:
                                            <?= $salechiet ?>$
                                        </span>
                                        <span class="original-price">
                                            <?= $price_chiet ?>$
                                        </span>
                                        <span class="percent">
                                            -
                                            <?= $sale ?>%
                                        </span>
                                    </span>
                                    <div class="mb-3 mt-3 m-3">
                                        <input type="radio" class="btn-check" name="size" id="full" value="full"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-danger" for="full">Full:
                                            <?= $salefull ?>$
                                        </label>
                                        <?php if ($price_chiet > 0) { ?>
                                            <input type="radio" class="btn-check" name="size" id="chiet" autocomplete="off"
                                                required>
                                            <label class="btn btn-outline-danger" for="chiet" value="chiết">
                                                Chiết:
                                                <?= $salechiet ?>$
                                            </label>
                                        <?php } ?>
                                    </div>

                                    <p class="item-text ">
                                        Mô tả:
                                        <?= $mota ?>
                                    </p>


                                <?php }
        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
                                    <div class="sub p-2">
                                        <input type="hidden" name="id_taikhoan" value="<?= $id_taikhoan ?>">
                                        <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                                        <input type="hidden" name="name_sanpham" value="<?= $namesp ?>">
                                        <?php if ($sale == "" || $sale == 0) { ?>
                                            <input type="hidden" name="price" value="<?= $price ?>">
                                            <input type="hidden" name="price_chiet" value="<?= $price_chiet ?>">
                                        <?php } else { ?>
                                            <input type="hidden" name="price" value="<?= $salefull ?>">
                                            <input type="hidden" name="price_chiet" value="<?= $salechiet ?>">
                                        <?php } ?>
                                        <input type="hidden" name="img" value="<?= $img ?>">
                                        <input type="submit" class="btn btn-danger" name="themvaogiohang"
                                            value="Thêm vào giỏ hàng">
                                    </div>
                                <?php } else { ?>
                                    <div class="sub p-2">
                                        <input type="submit" class="btn btn-danger" name="themvaogiohang1"
                                            value="Thêm vào giỏ hàng"
                                            onclick="return alert('Đăng nhập để thêm sản phẩm vào giỏ hàng!')">
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
            </form>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    id_sanpham: <?= $id_sanpham ?>
                });
            });
        </script>


        <div class="" id="binhluan">

            <div class="err"><?= $error['noidung'] ?? '' ?></div>
        </div>

    </div>
    <h3>Sản phẩm cùng hãng
        <?php foreach ($danhmuc_sanpham as $key => $value) {
            if ($id_danhmuc == $value['id']) {
                echo $value['name'];
            }
        }
        ?>
    </h3>
    <div class="spcungloai flex col-11">
        <?php
        foreach ($sp_cung_loai as $spcl) {
            extract($spcl);
            $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
            $img = $img_path . $img;
            echo '
            <div class="col-1 m-3">
                <div class="product_top10">
                <a href="' . $linksp . '"><img src="' . $img . '" alt="Product Image"></a>
                    <div class="product-details">
                        <p>' . $namesp . '</p>
                    </div>
                </div>
            </div>
        ';
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