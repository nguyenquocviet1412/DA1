<div class="row justify-content-center">
    <div class="col-6 p-3">
        <div class="input-group">
            <form action="index.php?act=sanpham" method="post">
                <input type="text" name="kyw" class="form-control" placeholder="Search for..."
                    aria-label="Search for...">
                <select name="iddm" id="" class="btn btn-outline-secondary">
                    <option value="0">Danh mục</option>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        echo ' <option value="' . $id . '" >' . $name . '</option>';
                    }
                    ?>
                </select>
                <input class="btn btn-outline-secondary" type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </div>
    </div>
</div>

<div class="baner img-thumbnail p-3">
    <div class="icon">
        <ul class="nav justify-content-end">
            <div class="user">
                <a class="nav-link" href="index.php?act=dangnhap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="text-light"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </a>
            </div>

            <div class="buy">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="text-light" class="bi bi-bag"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                    </svg>
                </a>
            </div>

        </ul>
    </div>
</div>
</nav>
</header>
<main class="justify-content-center">
    <p class="h2 m-3">Sản phẩm
        <strong>
            <?php
            if (isset ($tendm) && ($tendm != "")) {
                echo 'hãng ' . $tendm;
            }
            if (isset ($kyw) && ($kyw != "")) {
                echo 'có tên: ' . $kyw;
            }
            ?>
        </strong>

    </p>
    <div class="row justify-content-center">
        <!-- <div class="row"> -->
        <?php
        $i = 0;
        foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
            $hinh = $img_path . $img;
            echo '
            <div class="col-2">
                <div class="product justify-content-center">
                    <img src="' . $hinh . '" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">' . $name . '</h3>
                        <p class="product-price">' . $price . ' $</p>
                        <p>Đã bán:5</p>
                        <a href="' . $linksp . '"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            ';
            $i += 1;
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