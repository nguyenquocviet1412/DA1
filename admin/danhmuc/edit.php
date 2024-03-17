<h1>CHỈNH SỬA LOẠI HÀNG</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">MÃ HÃNG</label>
            <input type="text" name="math" id="" class="form-control" value="<?= $mahang ?>">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">TÊN HÃNG</label>
            <input type="text" name="tenth" id="" class="form-control" value="<?= $tenhang ?>">
        </div>
    </div>
    <button class="btn btn-outline-success" name="btn_update">Cập nhật</button>
    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
    <a class="btn btn-outline-success" href="index.php" role="button">Thêm mới</a>
    <a class="btn btn-outline-success" href="index.php?btn_list" role="button">Danh sách</a>
</form>