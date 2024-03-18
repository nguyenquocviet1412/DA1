<h1>THÊM MỚI SẢN PHẨM</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-4 my-2">
            <label class="fw-bold">MÃ SẢN PHẨM</label>
            <input type="text" name="mahh" id="" class="form-control">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">TÊN SẢN PHẨM</label>
            <input type="text" name="tenhh" id="" class="form-control">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">GIÁ TIỀN</label>
            <input type="number" name="giatien" id="" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-4 my-2">
            <label class="fw-bold">GIẢM GIÁ</label>
            <input type="number" name="giamgia" id="" class="form-control" min="0" max="100">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">HÌNH ẢNH</label>
            <input type="file" name="hinh" id="" class="form-control">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">LOẠI HÀNG</label>
            <div class="input-group mb-3">
                <select name="maloai" class="form-select" id="inputGroupSelect01">
                    <option selected hidden>--Loại hàng--</option>
                    <?php foreach ($loai_hanghoa as $key => $value) {
                        extract($value);
                        echo "<option value='$maloai'>$tenloai</option>";
                        ?>

                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 my-2">
            <label class="fw-bold">TRẠNG THÁI</label>
            <div class="radio">
                <input type="radio" name="trangthai" id="normal" value="0" checked>
                <label for="normal">Bình thường</label>
                <input type="radio" name="trangthai" id="special" value="1">
                <label for="special">Đặc biệt</label>
            </div>
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">NGÀY NHẬP</label><br>
            <input type="date" name="ngaynhap" id="" class="form-control">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">SỐ LƯỢT XEM</label><br>
            <input type="number" name="view" id="" class="form-control" value="0" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-2">
            <label class="fw-bold">MÔ TẢ</label>
            <textarea name="mota" class="form-control" id="floatingTextarea"></textarea>
        </div>

    </div>

    <button class="btn btn-outline-success" name="btn_insert">Thêm mới</button>
    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
    <a class="btn btn-outline-success" href="index.php?btn_list" role="button">Danh sách</a>
</form>