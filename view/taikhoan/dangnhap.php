<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>taikhoan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
         background-image: url("img/thiet-ke-poster-nuoc-hoa-thu-hut-khach-hang1.jpg");
          padding: 10px;
          height: 840px;
      }
      .card{
        margin-left: 350px;
        margin-top: 30px;
        height: 650px;
      }
      .card h1{
        text-align: center;
        font-size: 30px;
        font-weight: bold;
      }
      .card img{
        width: 250px;
        height: 300px;
        padding: 20px;
        margin-left: 170px;
      }
  </style>
</head>
<body>
    <div class="container1">
        <div class="card" style="width:600px">
            <h1>DANG NHAP</h1>
            <img class="card-img-top rounded-circle" src="img/images.jpg" alt="Card image">
            <form action="">
                <div class="mb-3 mt-3 m-3">
                  <label for="text" class="form-label">User:</label>
                  <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="mb-3 m-3">
                  <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="pswd">
                </div>
                <div class="form-check mb-3 m-3">
                  <a href="#" class="text-decoration-none">dang ki tai khoan</a><br>
                  <a href="#" class="text-decoration-none">quen mat khau</a><br>
                  <a href="#" class="text-decoration-none">vai tro admin</a>
                </div>
                <button type="submit" class="btn btn-primary m-3">Submit</button><button type="home" class="btn btn-primary m-3">Home</button>
              </form>
        </div>
    </div>
    <br>
</body>
</html>