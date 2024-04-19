<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>taikhoan</title>
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
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      width: 100%;
      background-image: url("./img/thiet-ke-poster-nuoc-hoa-thu-hut-khach-hang1.jpg");
      padding: 10px;
      height: 840px;
    }

    .card {
      margin-left: 350px;
      margin-top: 30px;
      height: 650px;
    }

    .card h1 {
      text-align: center;
      font-size: 30px;
      font-weight: bold;
    }

    .card img {
      width: 250px;
      height: 300px;
      padding: 20px;
      margin-left: 170px;
    }

    .err {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container1">
    <div class="card" style="width:600px">
      <?php
      if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
        $avatar1 = $img_path . $avatar;
        ?>
        <h1>Chào <?= $user ?></h1>
        <img class="card-img-top rounded-circle" src="<?= $avatar1 ?>" alt="Card image">
        <h3 class="thongbao">
          <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
          ?>
        </h3>
        <form action="index.php?act=dangnhap" method="post">
          <div class="mb-3 m-3">
            <label for="email" class="form-label">Email: <?= $email ?></label>
          </div>

          <div class="mb-3 mt-3 m-3">
            <label for="text" class="form-label">Address: <?= $address ?></label>
          </div>

          <div class="mb-3 mt-3 m-3">
            <label for="text" class="form-label">Tell: <?= $tel ?></label>
          </div>
          <div class="form-check mb-3 m-3">
            <a href="index.php?act=trangcapnhat" class="text-decoration-none">Cập nhật tài khoản</a><br>
            <a href="index.php?act=quenmk" class="text-decoration-none">quen mat khau</a><br>
          </div>
          <a href="index.php"><input type="button" value="Home" class="btn btn-primary m-3"></a>
        </form>

      <?php } else { ?>

        <img class="card-img-top rounded-circle" src="./img/images.jpg" alt="Card image">
        <h3 class="thongbao">
          <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao['1'] . "<br>";
            echo $thongbao['2'];
          }
          ?>
        </h3>

        <script>
          function showPass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>

        <form action="index.php?act=dangnhap" method="post">
          <div class="mb-3 mt-3 m-3">
            <label for="text" class="form-label">User:</label>
            <input type="text" class="form-control" name="user">

            <div class="err"><?= $error['user'] ?? '' ?></div>
          </div>
          <div class="mb-3 m-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" name="pass" id="pass">
            <div class="err"><?= $error['pass'] ?? '' ?></div>
            <input type="checkbox" class="form-check-input" onclick="showPass()">
            <label class="form-check-label">Hiển thị mật khẩu</label>
          </div>

          <div class="form-check mb-3 m-3">
            <a href="index.php?act=trangdangky" class="text-decoration-none">Đăng ký tài khoản</a><br>
            <a href="index.php?act=quenmk" class="text-decoration-none">Quên mật khẩu</a><br>
          </div>
          <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-primary m-3">
          <a href="index.php"><input type="button" value="Home" class="btn btn-primary m-3"></a>
        </form>
      <?php } ?>
    </div>
  </div>
</body>

</html>