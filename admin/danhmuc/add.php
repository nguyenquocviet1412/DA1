
<h1>Thêm danh mục</h1>
<form action="index.php" method="post">
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">Mã danh mục:</label>
        <input type="text" class="form-control disabled" id="" name="id" readonly>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Tên danh mục:</label>
        <input type="text" class="form-control" id="" name="name">
        <div class="err"><?= $error['name'] ?? ''; ?></div>
    </div>
    <div class="sub p-2">
        <button name="btn_insert" class="btn btn-primary">Thêm</button>
        <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
    </div>
</form>