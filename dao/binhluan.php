<?php
// Truy vấn loại đã nhập mới lên trước

function binhluan_selectall()
{
    $sql = "SELECT * FROM binhluan bl ORDER BY ngaybinhluan DESC";
    pdo_query($sql);
    return pdo_query($sql);
}

function binhluan_insert($noidung, $id_sanpham, $id_taikhoan, $ngaybl)
{
    $sql = "INSERT INTO binhluan(noidung, id_sanpham, id_taikhoan, ngaybinhluan) VALUES(?,?,?,?)";
    pdo_execute($sql, $noidung, $id_sanpham, $id_taikhoan, $ngaybl);
}

function binhluan_delete($id)
{
    $sql = "DELETE FROM binhluan WHERE id=?";
    pdo_execute($sql, $id);
}

function binhluan_getinfo($id)
{
    $sql = "SELECT*FROM binhluan WHERE id=?";
    return pdo_query_one($sql, $id);
}

function binhluan_update($id, $noidung, $id_taikhoan, $id_sanpham, $ngaybl)
{
    $sql = "UPDATE binhluan SET noidung=?, id_sanpham=?, id_taikhoan=?, ngaybinhluan=? WHERE id=?";
    pdo_execute($sql, $noidung, $id_taikhoan, $id_sanpham, $ngaybl, $id);
}
function binhluan_exist($id){
    $sql="SELECT COUNT (*) FROM binhluan WHERE id=?";
    return pdo_query_value($sql, $id);
}
function binhluan_selectby_hanghoa($id_sanpham){
    $sql="SELECT b.* , s.namesp FROM binhluan b JOIN sanpham s ON b.id_sanpham=s.id_sanpham WHERE b.id_sanpham    =? ORDER BY ngaybinhluan DESC";
    return pdo_query($sql, $id_sanpham);
}
function binhluan_selectby_taikhoan($id_taikhoan){
    $sql="SELECT b.* , t.user, t.avatar FROM binhluan b JOIN taikhoan t ON b.id_taikhoan=t.id_taikhoan WHERE b.id_taikhoan    =? ORDER BY ngaybinhluan DESC";
    return pdo_query($sql, $id_taikhoan);
}

?>