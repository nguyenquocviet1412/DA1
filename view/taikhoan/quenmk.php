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

    .err {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container1">
    <div class="card" style="width:600px;height: 400px;">
      <h1>Quên mật khẩu</h1>
      <?php
      if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
      }
        if (isset($thongbao) && ($thongbao != "")) {
          echo '<h2 class="text-center">'.$thongbao.'</h2>';
        }
        ?>
      
      <form action="index.php?act=quenmk" method="post" enctype="multipart/form-data">
        <div class="mb-3 m-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="" name="email">
          <div class="err"><?= $error['email'] ?? '' ?></div>
        </div>

        <div class="mb-3 mt-3 m-3">
          <label for="text" class="form-label">Tell:</label>
          <input type="text" class="form-control" id="" name="tel">
          <div class="err"><?= $error['tel'] ?? '' ?></div>
          <div class="err"><?= $error['tel2'] ?? '' ?></div>
        </div>
        <input type="hidden" name="id_taikhoan" value="<?= $id_taikhoan ?>">
        <input type="submit" value="Gửi" name="guiemail" class="btn btn-primary m-3">
        <a class="btn btn-primary m-3" href="index.php" role="button">Home</a>
      </form>
    </div>

  </div>
</body>

</html>