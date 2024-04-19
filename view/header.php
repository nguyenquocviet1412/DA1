<?php
require_once "dao/pdo.php";
require_once "dao/danhmuc.php";
$dsdm = danhmuc_selectall();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỰ ÁN 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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

        /* menu */
        .menu {
            background-color: black;
            width: 100%;
        }

        .menu ul {
            list-style-type: none;
            padding: 10px;
        }

        .menu ul li {
            float: left;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
        }

        .menu ul li a {
            text-decoration: none;
            color: black;
        }

        .menu ul li a:hover {
            color: white;
            background-color: #ef0606;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.5s;
        }

        .dropdown-item {
            color: white;
            font-size: 16px;
        }

        ul.dropdown-menu.show li {
            width: 100%;
        }

        ul.dropdown-menu.show li a {
            width: 100%;
        }

        ul.dropdown-menu.show li a:hover {
            width: 100%;
            background-color: aquamarine !important;
        }

        .nav-link {
            color: white !important;
        }

        .nav-link:active {
            color: white;
        }



        /* danh muc */


        /* end */


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
            height: 132px;

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
            text-align: center;
        }
        .err {
      color: red;
    }
    </style>
</head>

<body>

    <div class="container" style="height: auto;">
        <div class="row">
            <header>
                <a href="index.php" style="text-decoration: none;">

                    <h1 class="name text-danger" style="text-align: center;">Shop</h1>
                </a>
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    ?>
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid menu">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">News</a>
                                    </li>
                                    <?php if (isset($role) && ($role == 1 || $role == 2)) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin/danhmuc">Admin</a>
                                        </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?act=thoat">Thoát</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?act=donhang">Đơn hàng</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Danh mục
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($dsdm as $dm) {
                                                extract($dm);
                                                $linkdm = "index.php?iddm=" . $id;
                                                echo '<li><a class="dropdown-item" href="' . $linkdm . '">' . $name . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                <?php } else { ?>
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid menu">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?act=taikhoan">Đăng nhập</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Danh mục
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($dsdm as $dm) {
                                                extract($dm);
                                                $linkdm = "index.php?iddm=" . $id;
                                                echo '<li><a class="dropdown-item" href="' . $linkdm . '">' . $name . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </nav>