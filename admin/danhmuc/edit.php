<h1>CHỈNH SỬA HÃNG</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Mã hãng:</label>
        <input type="text" class="form-control disabled" id="" name="mahang" disabled value="<?=$mahang?>">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Tên hãng:</label>
        <input type="text" class="form-control" id="" name="tenhang" value="<?=$tenhang?>">
    </div>
    <button class="btn btn-primary" name="btn_update">Cập nhật</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a class="btn btn-primary" href="index.php" role="button">Thêm mới</a>
    <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
</form>