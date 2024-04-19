<aside class="justify-content-center">
    <p class="h2 m-3">Top sản phẩm được yêu thích</p>
    <div class="row">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
            $img = $img_path . $img;
            echo '
            <div class="col-1 m-2">
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
</aside>