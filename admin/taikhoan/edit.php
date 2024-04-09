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
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">EMAIL</label>
            <input type="email" name="email" id="" class="form-control" value="<?= $email ?>">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">MẬT KHẨU</label>
            <input type="password" name="pass" id="" class="form-control" value="<?= $pass ?>">
        </div>

    </div>

    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">SỐ ĐIỆN THOẠI</label>
            <input type="text" name="tel" id="" class="form-control" value="<?= $tel ?>">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">XÁC NHẬN MẬT KHẨU</label>
            <input type="password" name="pass2" id="" class="form-control" value="<?= $pass ?>">
        </div>

        <div class="row">
            <div class="col-6 my-2">
                <label class="fw-bold">ĐỊA CHỈ</label>
                <input type="text" name="address" id="" class="form-control" value="<?= $address ?>">
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

        </div>
        <div class="row">
            <div class="col-6 my-2">
                <label class="fw-bold">VAI TRÒ</label>
                <div class="radio">
                    <input type="radio" name="role" id="admin" value="1" <?= $role ? 'checked' : '' ?>>
                    <label for="no_activate">Admin</label>
                    <input type="radio" name="role" id="user" value="0" <?= !$role ? 'checked' : '' ?>>
                    <label for="activate">Khách hàng</label>
                </div>
            </div>
            <div class="col-6 my-2">
                <label class="fw-bold">HÌNH ẢNH</label>
                <input type="hidden" name="avatarcu" value="<?= $avatar ?>">
                <input type="file" name="avatar" id="" class="form-control">
                (
                <?= $avatar ?>)
            </div>
        </div>

    </div>
    <button class="btn btn-primary" name="btn_update">Cập nhật</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a class="btn btn-primary" href="index.php" role="button">Thêm mới</a>
    <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
</form>