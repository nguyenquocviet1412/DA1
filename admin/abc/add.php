<h1>THÊM MỚI LOẠI HÀNG</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 my-2">
            <label class="fw-bold">MÃ LOẠI</label>
            <input type="text" name="maloai" id="" class="form-control">
        </div>
        <div class="col-6 my-2">
            <label class="fw-bold">TÊN LOẠI</label>
            <input type="text" name="tenloai" id="" class="form-control">
        </div>
    </div>
    <button class="btn btn-outline-success" name="btn_insert">Thêm mới</button>
    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
    <a class="btn btn-outline-success" href="index.php?btn_list" role="button">Danh sách</a>
</form>
