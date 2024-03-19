<?php
// Truy vấn loại đã nhập mới lên trước

function danhmuc_selectall()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id ASC";
    pdo_query($sql);
    return pdo_query($sql);
}

function danhmuc_insert($tendanhmuc)
{
    $sql = "INSERT INTO danhmuc(name) VALUES(?)";
    pdo_execute($sql, $tendanhmuc);
}

function danhmuc_delete($madanhmuc)
{
    $sql = "DELETE FROM danhmuc WHERE id=?";
    pdo_execute($sql, $madanhmuc);
}

function danhmuc_getinfo($madanhmuc)
{
    $sql = "SELECT*FROM danhmuc WHERE id=?";
    return pdo_query_one($sql, $madanhmuc);
}

function danhmuc_update($madanhmuc, $tendanhmuc)
{
    $sql = "UPDATE danhmuc SET id=?, name=? WHERE id=?";
    pdo_execute($sql, $madanhmuc, $tendanhmuc, $madanhmuc);
}
$dsdanhmuc=danhmuc_selectall();
?>