<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="text" class="form-label">ID sản phẩm:</label>
        <input type="text" class="form-control" id="" name="id" readonly>
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Hãng nước hoa: </label>
        <select name="iddm" class="form-select" id="">
            <option selected hidden>--Hãng--</option>
            <?php foreach ($danhmuc_sanpham as $key => $value) {
                extract($value);
                echo "<option value='$id'>$name</option>";
                ?>

            <?php } ?>
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Tên sản phẩm:</label>
        <input type="text" class="form-control" id="" name="name">
        <div class="err"><?= $error['name'] ?? ''; ?></div>
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Giá:</label>
        <input type="text" class="form-control" id="" name="price">
        <div class="err"><?= $error['price'] ?? ''; ?></div>
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Giá chiết:</label>
        <input type="text" class="form-control" id="" name="price_chiet">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Ảnh:</label>
        <input type="file" class="form-control" id="" name="img">
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Mô tả:</label> <br>
        <textarea name="mota" class="form-control" style="resize: none; height: 130px"></textarea>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Giảm giá:</label>
        <input type="text" class="form-control" id="" name="sale">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Lượt xem:</label>
        <input type="text" class="form-control" id="" name="luotxem" readonly>
    </div>

    <div class="sub p-2">
        <button name="btn_insert" class="btn btn-primary">Thêm</button>
        <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
    </div>
</form>