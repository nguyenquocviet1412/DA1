<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">ID danh mục:</label>
        <select name="iddm" id="" class="form-select">
            <?php foreach ($danhmuc_sanpham as $key => $value) {
                $s = ($id_danhmuc == $value['id']) ? "selected" : "";
                echo "<option value='{$value['id']}' $s > {$value['name']} </option>";
            } ?>
        </select>

    </div>
    <div class="mb-3">
        <label for="text" class="form-label">ID sản phẩm:</label>
        <input type="text" class="form-control" id="" name="id" value="<?= $id ?>" readonly>
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Tên sản phẩm:</label>
        <input type="text" class="form-control" id="" name="name" value="<?= $namesp ?>">
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Giá:</label>
        <input type="text" class="form-control" id="" name="price" value="<?= $price ?>">
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Giá chiết:</label>
        <input type="text" class="form-control" id="" name="price_chiet" value="<?= $price_chiet ?>">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Ảnh:</label>
        <input type="file" class="form-control" id="" name="img">
        <?= $img ?>
        <input type="hidden" name="oldimg" value="<?= $img ?>">
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Mô tả:</label> <br>
        <textarea name="mota" class="form-control" style="resize: none; height: 130px"> <?= $mota ?></textarea>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Giảm giá:</label>
        <input type="text" class="form-control" id="" name="sale" value="<?= $sale ?>">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Lượt xem:</label>
        <input type="text" class="form-control" id="" name="luotxem" value="<?= $luotxem ?>" readonly>
    </div>
    <div class="sub p-2">
        <button class="btn btn-primary" name="btn_update">Cập nhật</button>
        <button type="reset" class="btn btn-primary">Nhập lại</button>
        <a class="btn btn-primary" href="index.php" role="button">Thêm mới</a>
        <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
    </div>
</form>