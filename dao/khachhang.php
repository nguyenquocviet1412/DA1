<?php
// Truy vấn loại đã nhập mới lên trước

function khachhang_selectall()
{
    $sql = "SELECT * FROM khachhang";
    return pdo_query($sql);
}

function khachhang_insert($makh, $matkhau, $hoten, $email, $hinh, $kichhoat, $vaitro)
{
    $sql = "INSERT INTO khachhang(makhachhang,matkhau,hoten,email,hinh,kichhoat,vaitro) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $makh, $matkhau, $hoten, $email, $hinh, $kichhoat, $vaitro);
}

function khachhang_delete($makh)
{
    $sql = "DELETE FROM khachhang WHERE makhachhang=?";
    if (is_array($makh)) {
        foreach ($makh as $makh) {
            pdo_execute($sql, $makh);
        }
    } else {
        pdo_execute($sql, $makh);
    }
}

function khachhang_select_by_id($makh)
{
    $sql = "SELECT*FROM khachhang WHERE makhachhang=?";
    return pdo_query_one($sql, $makh);
}

function khachhang_update($makh, $matkhau, $hoten, $email, $hinh, $kichhoat, $vaitro)
{
    $sql = "UPDATE khachhang SET makhachhang=?,matkhau=?,hoten=?,email=?,hinh=?,kichhoat=?,vaitro=? WHERE makhachhang=?";
    pdo_execute($sql, $makh, $matkhau, $hoten, $email, $hinh, $kichhoat, $vaitro, $makh);
}
function khachhang_exist($makh)
{
    $sql = "SELECT count(*) FROM khachhang WHERE $makh=?";
    return pdo_query_value($sql, $makh);
}
function khachhang_select_by_role($vaitro)
{
    $sql = "SELECT * FROM khachhang WHERE vaitro==1";
    return pdo_query($sql, $vaitro);
}
function khachhang_change_matkhau($matkhau, $makh)
{
    $sql = "UPDATE khachhang SET matkhau=? WHERE makhachhang=?";
    pdo_execute($sql, $matkhau, $makh);
}
?>