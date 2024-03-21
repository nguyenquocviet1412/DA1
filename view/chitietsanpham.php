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
        .showsp{
             border: 1px solid #000000;
             border-radius: 5px;
             margin-bottom: 20px;
             padding: 10px;
 
        }
        .binhluan{
             border: 1px solid #000000;
             border-radius: 5px;
             margin-bottom: 20px;
             padding: 10px;
             height: 300px;
        }
        .thanhbl{
            margin-top: 20px;
        }
        .listbl{
             border: 1px solid #000000;
             height: 200px;
             border-radius: 5px;
        }
        .spcungloai{
             border: 1px solid #000000;
             border-radius: 5px;
             margin-bottom: 20px;
             padding: 10px;
             height: 200px;
        }

        .item{
            display: flex;
            padding: 10px;;
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

        .content{
            margin-left:600px ;
        }

        .user{
            margin-top: -82px;
        }

        .buy{
            margin-top: -82px;
        }
        .video{
            display: flex;
        }
    </style>
    
<main class="justify-content-center">
                <h3>Chi tiet san pham</h3>
                <div class="showsp">
                <?php 
                  extract($onesp);
                  sanpham_tangsoluotxem($id) ;
                  $img=$img_path.$img;
                  echo '
                    <div class="item">
                      <div class="item-image flex col-6">
                        <img src="'.$img.'" alt="" class="item-img" width="400px" height="400px">
                      </div>
                      <div class="item-content col-6">
                        <h3 class="item-title">'.$name.'</h3>
                        <p class=" h1 product-price">'.$price.'$</p>
                        <p class="item-text">
                            <pre>'.$mota.'</pre>
                        </p>
                        <div class="sub p-2">
                            <button type="submit" class="btn btn-danger">them vao gio hang</button>
                        </div>
                      </div>

                    </div>
                </div>
                ';
                ?>


                <h3>Binh Luan</h3>
                <div class="binhluan">
                    <div class="listbl">
                        
                    </div>
                    <div class="thanhbl">
                        <input type="text" name="" id="" class="btn btn-outline-secondary col-4" >
                        <button type="submit" class="btn btn-danger">Gửi</button>
                    </div>
                </div>
                <h3>San pham cung loai</h3>
                <div class="spcungloai">
                    fefefef
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