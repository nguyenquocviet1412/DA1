<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỰ ÁN 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .container {
            background-color: rgb(255, 255, 255);
            width: 100%;
        }

        .baner {
            background-image: url("img/bn\ 4.jpg");
            height: 400px;
            width: 100%;
        }

        /* product */

        .product {
            border: 2px solid #000000;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 15px;
            overflow: hidden;
        }

        .product img {
            width: 100%;
            height: auto;

        }

        .product-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .product-price {
            font-size: 1.1rem;
            color: #007bff;
            margin-top: 5px;
        }


        /* Để hiển thị hình ảnh chính giữa */


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

        .col-2 img {
            overflow: hidden;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .col-2 img:hover {
            transform: scale(1.2);

        }

        .thongbao {
            color: red;
        }
    </style>
</head>

<body>

    <div class="container" style="height: auto;">
        <div class="row">
            <header>
                <h1 class="name text-danger">Shop</h1>
                <nav>
                    <?php
                    if (isset ($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        ?>
                        <div class="menu">
                            <ul class="col-12 navbar navbar-expand-sm bg-dark navbar-dark">
                                <div class="container-fluid">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">News</a>
                                        </li>
                                        <?php if (isset ($role) && $role == 1) { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="admin/danhmuc/">Admin</a>
                                            </li>
                                        <?php } ?>
                                        <li class="nav-item">
                                            <a class="nav-link " href="index.php?act=thoat">Thoát</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="menu">
                            <ul class="col-12 navbar navbar-expand-sm bg-dark navbar-dark">
                                <div class="container-fluid">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">News</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                        <a class="nav-link" href="admin/danhmuc/">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="index.php?act=thoat">Thoát</a>
                                    </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    <?php } ?>