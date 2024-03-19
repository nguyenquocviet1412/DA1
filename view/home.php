<main class="justify-content-center">
    <p class="h2 m-3">Danh sach sp</p>
    <div class="row justify-content-center">
        <!-- <div class="row"> -->
        <?php 
            $i=0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo '<div class="boxsp '.$mr.'">
                        <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                        <p>$'.$price.'</p>
                        <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                    $i+=1;
            }
        ?>
            <div class="col-2">
                <div class="product justify-content-center">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image" class="">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- dong 2 -->
        <!-- <div class="row"> -->
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product">
                    <img src="img/nuochoa.jpg" alt="Product Image">
                    <div class="product-details p-2">
                        <h3 class="product-title">Product Name</h3>
                        <p class="product-price">$19.99</p>
                        <p>Đã bán:5</p>
                        <a href="#"><button class="btn btn-dark">Xem chi tiet</button></a>
                    </div>
                </div>
            </div>
        <!-- </div> -->

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