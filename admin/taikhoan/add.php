<h1>THÊM MỚI KHÁCH HÀNG</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">MÃ KHÁCH HÀNG (Tên đăng nhập)</label>
            <input type="text" name="makhachhang" id="" class="form-control">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">HỌ TÊN</label>
            <input type="text" name="hoten" id="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">MẬT KHẨU</label>
            <input type="password" name="matkhau" id="" class="form-control">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">EMAIL</label>
            <input type="email" name="email" id="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">XÁC NHẬN MẬT KHẨU</label>
            <input type="password" name="matkhau2" id="" class="form-control">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">HÌNH ẢNH</label>
            <input type="file" name="hinh" id="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">KÍCH HOẠT</label>
            <div class="radio">
                <input type="radio" name="kichhoat" id="no_activate" value="0">
                <label for="no_activate">Không kích hoạt</label>
                <input type="radio" name="kichhoat" id="activate" value="1" checked>
                <label for="activate">Kích hoạt</label>
            </div>
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">VAI TRÒ</label>
            <div class="radio">
                <input type="radio" name="vaitro" id="no_activate" value="0" checked>
                <label for="no_activate">Khách hàng</label>
                <input type="radio" name="vaitro" id="activate" value="1">
                <label for="activate">Nhân viên</label>
            </div>
        </div>
    </div>
    <button class="btn btn-outline-success" name="btn_insert">Thêm mới</button>
    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
    <a class="btn btn-outline-success" href="index.php?btn_list" role="button">Danh sách</a>
</form>
