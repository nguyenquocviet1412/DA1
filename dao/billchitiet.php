<?php
// Truy vấn loại đã nhập mới lên trước

function bill_chitiet_selectall()
{
    $sql = "SELECT * FROM bill_chitiet ORDER BY id_billchitiet ASC";
    pdo_query($sql);
    return pdo_query($sql);
}

function bill_chitiet_insert($idbill, $id_sanpham, $price, $soluong, $name_sanpham, $img_sanpham)
{
    $sql = "INSERT INTO bill_chitiet(id_bill, id_sanpham, price, soluong, name_sanpham, img_sanpham) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $idbill, $id_sanpham, $price, $soluong, $name_sanpham, $img_sanpham);
}

function bill_chitiet_delete($idbillchitiet)
{
    $sql = "DELETE FROM bill_chitiet WHERE id_billchitiet=?";
    pdo_execute($sql, $idbillchitiet);
}

function bill_chitiet_getinfo($idbill)
{
    $sql = "SELECT*FROM bill_chitiet WHERE id_bill=?";
    return pdo_query_one($sql, $idbill);
}

function bill_chitiet_update($idbillchitiet, $idbill, $id_sanpham, $price, $soluong, $name_sanpham, $img_sanpham)
{
    $sql = "UPDATE bill_chitiet SET id_bill_chitiet=?, trangthai=?, id_taikhoan=?, ngaydathang=?, price_tong=?, payment=? WHERE id_bill_chitiet=?";
    pdo_execute($sql, $idbillchitiet, $idbill, $id_sanpham, $price, $soluong, $name_sanpham, $img_sanpham, $idbillchitiet);
}
?>