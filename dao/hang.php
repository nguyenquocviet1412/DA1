<?php
// Truy vấn loại đã nhập mới lên trước

function loai_selectall()
{
    $sql = "SELECT * FROM loaihang ORDER BY maloai ASC";
    pdo_query($sql);
    return pdo_query($sql);
}

function loai_insert($maloai,$tenloai)
{
    $sql = "INSERT INTO loaihang(maloai, tenloai) VALUES(?,?)";
    pdo_execute($sql,$maloai, $tenloai);
}

function loai_delete($maloai)
{
    $sql = "DELETE FROM loaihang WHERE maloai=?";
    pdo_execute($sql, $maloai);
}

function loai_getinfo($maloai)
{
    $sql = "SELECT*FROM loaihang WHERE maloai=?";
    return pdo_query_one($sql, $maloai);
}

function loai_update($maloai, $tenloai)
{
    $sql = "UPDATE loaihang SET maloai=?, tenloai=? WHERE maloai=?";
    pdo_execute($sql, $maloai, $tenloai, $maloai);
}
$dsloai=loai_selectall();
?>