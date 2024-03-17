<?php
// Truy vấn loại đã nhập mới lên trước

function binhluan_selectall()
{
    $sql = "SELECT * FROM binhluan bl ORDER BY ngaybinhluan ASC";
    pdo_query($sql);
    return pdo_query($sql);
}

function binhluan_insert($noidung, $mahh, $makh, $ngaybl)
{
    $sql = "INSERT INTO binhluan(noidung, mahanghoa, makhachhang, ngaybinhluan) VALUES(?,?,?,?)";
    pdo_execute($sql, $noidung, $mahh, $makh, $ngaybl);
}

function binhluan_delete($mabl)
{
    $sql = "DELETE FROM binhluan WHERE mabinhluan=?";
    pdo_execute($sql, $mabl);
}

function binhluan_getinfo($mabl)
{
    $sql = "SELECT*FROM binhluan WHERE mabinhluan=?";
    return pdo_query_one($sql, $mabl);
}

function binhluan_update($mabl, $noidung, $makh, $mahh, $ngaybl)
{
    $sql = "UPDATE binhluan SET noidung=?, mahanghoa=?, makhachhang=?, ngaybinhluan=? WHERE mabinhluan=?";
    pdo_execute($sql, $noidung, $makh, $mahh, $ngaybl, $mabl);
}
function binhluan_exist($mabl){
    $sql="SELECT COUNT (*) FROM binhluan WHERE mabinhluan=?";
    return pdo_query_value($sql, $mabl);
}
function binhluan_selectby_hanghoa($mahh){
    $sql="SELECT b.* , h.tenhang FROM binhluan b JOIN hanghoa h ON b.mahanghoa=h.mahang WHERE b.mahanghoa=? ORDER BY ngaybinhluan DESC";
    return pdo_query($sql, $mahh);
}
?>