<h1>CHỈNH SỬA HÀNG HOÁ</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-4 my-2">
            <label class="fw-bold">MÃ HÀNG HOÁ</label>
            <input type="text" name="mahh" id="" class="form-control" value="<?= $mahang ?>" readonly>
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">TÊN HÀNG HOÁ</label>
            <input type="text" name="tenhh" id="" class="form-control" value="<?= $tenhang ?>">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">GIÁ TIỀN</label>
            <input type="number" name="giatien" id="" class="form-control" value="<?= $giatien ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-4 my-2">
            <label class="fw-bold">GIẢM GIÁ</label>
            <input type="number" name="giamgia" id="" class="form-control" min="0" max="100" value="<?= $giamgia ?>">
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">HÌNH ẢNH</label>
            <input type="file" name="hinh" id="" class="form-control">
            <input type="hidden" name="hinhcu" value="<?= $hinhanh ?>">
            <?= $hinhanh ?>
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">LOẠI HÀNG</label>
            <div class="input-group mb-3">
                <select name="maloai" class="form-select" id="inputGroupSelect01">
                    <?php foreach ($loai_hanghoa as $key => $value) {
                        extract($value);
                        $s = ($maloai == $maloaihang) ? "selected" : "";
                        echo "<option value='$maloai' $s >$tenloai</option>";
                    } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 my-2">
            <label class="fw-bold">TRẠNG THÁI</label>
            <div class="radio">
                <input type="radio" name="trangthai" id="normal" <?= !$trangthai ? 'checked' : '' ?>>
                <label for="no_activate">Bình thường</label>
                <input type="radio" name="trangthai" id="special" <?= $trangthai ? 'checked' : '' ?>>
                <label for="activate">Đặc biệt</label>
            </div>
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">NGÀY NHẬP</label><br>
            <input type="date" name="ngaynhap" id="" class="form-control" value="<?= $ngaynhap ?>" readonly>
        </div>
        <div class="col-4 my-2">
            <label class="fw-bold">SỐ LƯỢT XEM</label><br>
            <input type="number" name="view" id="" class="form-control" value="<?= $soluotxem ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-2">
            <label class="fw-bold">MÔ TẢ</label>
            <textarea name="mota" class="form-control" id="floatingTextarea"><?= $mota ?></textarea>
        </div>

    </div>

    <button class="btn btn-outline-success" name="btn_update">Cập nhật</button>
    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
    <a class="btn btn-outline-success" href="index.php" role="button">Thêm mới</a>
    <a class="btn btn-outline-success" href="index.php?btn_list" role="button">Danh sách</a>
</form>