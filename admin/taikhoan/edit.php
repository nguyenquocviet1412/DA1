<h1>CHỈNH SỬA KHÁCH HÀNG</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 my-2">
            <input type="hidden" name="id" value="<?= $id_taikhoan ?>">
            <label class="fw-bold">USER</label>
            <input type="text" name="user" id="" class="form-control" value="<?= $user ?>">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">HỌ TÊN</label>
            <input type="text" name="hoten" id="" class="form-control" value="<?= $hoten ?>">
        </div>

    </div>
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
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">EMAIL</label>
            <input type="email" name="email" id="" class="form-control" value="<?= $email ?>">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">MẬT KHẨU</label>
            <input type="password" name="pass" id="pass" class="form-control" value="<?= $pass ?>">
            <input type="checkbox" class="form-check-input" onclick="showPass()">
            <label class="form-check-label">Hiển thị mật khẩu</label>
        </div>

    </div>

    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">SỐ ĐIỆN THOẠI</label>
            <input type="text" name="tel" id="" class="form-control" value="<?= $tel ?>">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">GIỚI TÍNH</label>
            <div class="radio">
                <input type="radio" name="gender" id="male" value="Nam" <?= $gender == "Nam" ? 'checked' : '' ?>>
                <label for="male">Nam</label>
                <input type="radio" name="gender" id="female" value="Nữ" <?= $gender == "Nữ" ? 'checked' : '' ?>>
                <label for="female">Nữ</label>
                <input type="radio" name="gender" id="other" value="Khác" <?= $gender == "Khác" ? 'checked' : '' ?>>
                <label for="female">Khác</label>
            </div>
        </div>

        <div class="row">
            <div class="col-6 my-2">
                <label class="fw-bold">ĐỊA CHỈ</label>
                <input type="text" name="address" id="" class="form-control" value="<?= $address ?>">
            </div>
            <div class="col-6 my-2">
                <label class="fw-bold">HÌNH ẢNH</label>
                <input type="hidden" name="avatarcu" value="<?= $avatar ?>">
                <input type="file" name="avatar" id="" class="form-control">
                (<?= $avatar ?>)
            </div>

        </div>
        <div class="row">
            <script>
                // Vô hiệu hóa tất cả input radio có name là 'role' trừ input radio có giá trị '1'
                function disableRadio() {
                    var radios = document.querySelectorAll('input[type=radio][name="role"]');
                    radios.forEach(function (radio) {
                        if (radio.value !== '1') {
                            radio.disabled = true;
                        }
                    });
                }
                // Gọi hàm disableRadio khi trang được tải
            </script>
            <?php if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                if ($_SESSION['user']['role'] !== 2) {
                    echo "<script>window.onload = disableRadio;</script>";
                }
            } ?>

            <div class="col-6 my-2">
                <label class="fw-bold">VAI TRÒ</label>
                <div class="radio">
                    <input type="radio" name="role" id="admin" value="1" <?= $role ? 'checked' : '' ?> <?= $s ?? "" ?>>
                    <label for="no_activate">Admin</label>
                    <input type="radio" name="role" id="user" value="0" <?= !$role ? 'checked' : '' ?> <?= $s ?? "" ?>>
                    <label for="activate">Khách hàng</label>
                    <input type="hidden" name="rolecu" value="<?= $role ?>">
                </div>
            </div>

        </div>

    </div>
    <button class="btn btn-primary" name="btn_update">Cập nhật</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
</form>