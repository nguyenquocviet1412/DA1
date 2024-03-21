<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỰ ÁN 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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
        }

        .product img {
            max-width: 150px;
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
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <header>
                <h1 class="name text-danger">Shop</h1>
                <nav>
                    <div class="menu">
                        <ul class="col-12 navbar navbar-expand-sm bg-dark navbar-dark">
                            <div class="container-fluid">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin/danhmuc/">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6 p-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                <select name="" id="" class="btn btn-outline-secondary">
                                    <option value="1">List</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="baner img-thumbnail p-3">
                        <div class="icon">
                            <ul class="nav justify-content-end">
                                <div class="user">
                                    <a class="nav-link" href="index.php?act=dangnhap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="text-light" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="buy">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="text-light" class="bi bi-bag" viewBox="0 0 16 16">
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                        </svg>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>