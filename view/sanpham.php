<style>
    .flex {
        display: flex;
    }

    .category {
        position: relative;
        display: inline-block;
    }

    .category-title {
        position: absolute;
        width: 200px;
    }

    .product-list {
        list-style: none;
        padding: 10px;
        margin: 0;
        display: none;
        position: absolute;
        background-color: #fff;
        width: 200px;
    }

    .product-list.active {
        display: block;
        transform: scaleY(0);
        transform-origin: left;
        transition: transform 1s ease-out;
    }


    .category:hover .product-list {
        display: block;
        transform: scaleY(1);
    }
    a.linksp {
        color: black;
        text-decoration: none;
    }
</style>
<div class="row justify-content-center">
    <div class="col-6 p-3">
        <div class="input-group">
            <form action="index.php" class="flex">
                <input type="text" name="kyw" class="form-control col-8" placeholder="Search for..."
                    aria-label="Search for..." size="40">
                <input class="btn btn-outline-secondary" type="submit" value="Tìm kiếm">
            </form>
        </div>
    </div>
</div>


<div class="baner img-thumbnail p-3">
    <div class="icon">
        <ul class="nav justify-content-end">
            <div class="user">
                <a class="nav-link" href="index.php?act=taikhoan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="text-light"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </a>
            </div>

            <div class="buy">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                    ?>
                    <a class="nav-link" href="index.php?act=viewcart">
                    <?php } else { ?>
                        <a class="nav-link" href="index.php?act=taikhoan" onclick="alert('Đăng nhập để xem giỏ hàng')">
                        <?php } ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="text-light"
                            class="bi bi-bag" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                        </svg>
                    </a>
            </div>

        </ul>
    </div>
    <?php
    // Đường dẫn đến thư mục chứa ảnh
    $dir = "upload/slide/";

    // Mảng để lưu trữ đường dẫn của các ảnh
    $imagePaths = [];

    // Kiểm tra xem thư mục tồn tại không
    if (is_dir($dir)) {
        // Mở thư mục
        if ($dh = opendir($dir)) {
            // Đọc tất cả các tệp trong thư mục
            while (($file = readdir($dh)) !== false) {
                // Loại bỏ các tệp không cần thiết
                if (!in_array($file, array('.', '..', '.DS_Store'))) {
                    // Tạo đường dẫn đầy đủ của ảnh và thêm vào mảng
                    $imagePaths[] = $dir . $file;
                }
            }
            // Đóng thư mục
            closedir($dh);
        }
    }
    // In ra mảng đường dẫn của các ảnh
    // print_r($imagePaths);
    ?>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($imagePaths as $img) { ?>
                <div class="carousel-item active">
                    <img src="<?= $img ?>" class="d-block w-100" alt="..." height="400px">
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</nav>
</header>
<main class="justify-content-center">
    <p class="h2 m-3">Sản phẩm
        <strong>
            <?php
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
                $tendm=load_ten_dm($iddm);
                echo 'hãng ' . $tendm;
            }
            if (isset($kyw) && ($kyw != "")) {
                echo $kyw;
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
            if ($price_chiet == 0) {
                $echo = "<p class='product-price'>Chiết: Hết size</p>";
            } else {
                $echo = "<p class='product-price'>Chiết: $price_chiet $</p>";
            }
            echo '
            <div class="col-2">
                <div class="product justify-content-center">
                    <a class="linksp" href="' . $linksp . '"><img src="' . $hinh . '" alt="Product Image"></a>
                    <div class="product-details p-2">
                        <a class="linksp" href="' . $linksp . '"><h3 class="product-title" style="height: 80px;">' . $namesp . '</h3></a>
                        <p class="product-price">Full: ' . $price . '$</p>
                        ' . $echo . '
                        <p>Đã bán:' . $luotban . '</p>
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