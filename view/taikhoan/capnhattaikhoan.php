<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>taikhoan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      width: 100%;
      background-image: url("img/thiet-ke-poster-nuoc-hoa-thu-hut-khach-hang1.jpg");
      padding: 10px;
      height: 1300px;
    }

    .card {
      margin-left: 350px;
      margin-top: 30px;
      height: 1200px;
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
  </style>
</head>

<body>
  <div class="container1">
    <div class="card" style="width:600px;height: auto;">
      <?php
      if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
      }

      $avatar1 = "upload/" . $avatar;
      if (is_file($avatar1)) {
        $hinh = '<img class="card-img-top rounded-circle" src="' . $avatar1 . '" alt="Card image">';
      } else {
        $hinh = "no photo";
      }
      ?>
      <h1>Cập nhật tài khoản</h1>
      <?= $hinh ?>
      <h2 class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
          echo $thongbao;
        }
        ?>
      </h2>
      <form action="index.php?act=capnhattaikhoan" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3 m-3">
          <label for="text" class="form-label">Họ và tên: </label>
          <input type="text" class="form-control" id="" name="hoten" value="<?= $hoten ?>">
          <div class="err"><?= $error['hoten'] ?? '' ?></div>
        </div>
        <div class="mb-3 mt-3 m-3">
          <label for="text" class="form-label">User:</label>
          <input type="text" class="form-control" id="" name="user" value="<?= $user ?>">
          <div class="err"><?= $error['user'] ?? '' ?></div>
        </div>

        <div class="mb-3 m-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="" name="pass" value="<?= $pass ?>">
          <div class="err"><?= $error['pass'] ?? '' ?></div>
        </div>

        <div class="mb-3 m-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="" name="email" value="<?= $email ?>">
          <div class="err"><?= $error['email'] ?? '' ?></div>
        </div>

        <div class="mb-3 mt-3 m-3">
          <label for="text" class="form-label">Address:</label>
          <input type="text" class="form-control" id="" name="address" value="<?= $address ?>">
          <div class="err"><?= $error['address'] ?? '' ?></div>
        </div>

        <div class="mb-3 mt-3 m-3">
          <label for="text" class="form-label">Tell:</label>
          <input type="text" class="form-control" id="" name="tel" value="<?= $tel ?>">
          <div class="err"><?= $error['tel'] ?? '' ?></div>
        </div>

        <div class="mb-3 mt-3 m-3">
          <label for="file" class="form-label">Ảnh đại diện:</label>
          <input type="file" class="form-control" name="avatar">
          <div class="err"><?= $error['avatar'] ?? '' ?></div>
          <input type="hidden" name="avatarcu" value="<?= $avatar ?>">
          <?= $avatar ?>
        </div>

        <div class="mb-3 mt-3 m-3">
          <input type="radio" name="gender" id="male" value="Nam" <?= $gender == "Nam" ? 'checked' : '' ?>>
          <label for="male" class="me-2">Nam</label>
          <input type="radio" name="gender" id="female" value="Nữ" <?= $gender == "Nữ" ? 'checked' : '' ?>>
          <label for="female" class="me-2">Nữ</label>
          <input type="radio" name="gender" id="other" value="Khác" <?= $gender == "Khác" ? 'checked' : '' ?>>
          <label for="female">Khác</label>
        </div>
        <input type="hidden" name="id_taikhoan" value="<?= $id_taikhoan ?>">
        <input type="hidden" name="role" value="<?= $role ?>">
        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary m-3">
        <a href="index.php"><input type="button" value="Home" class="btn btn-primary m-3"></a>
      </form>
    </div>

  </div>
</body>

</html>