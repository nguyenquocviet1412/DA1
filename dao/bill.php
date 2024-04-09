<?php
// Truy vấn loại đã nhập mới lên trước

function bill_selectall()
{
    $sql = "SELECT * FROM bill ORDER BY id_bill ASC";
    pdo_query($sql);
    return pdo_query($sql);
}

function bill_insert($trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment)
{
    $sql = "INSERT INTO bill(trangthai, id_taikhoan, ngaydathang, price_tong, payment) VALUES(?,?,?,?,?)";
    return pdo_execute($sql, $trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment);
}

function bill_delete($idbill)
{
    $sql = "DELETE FROM bill WHERE id_bill=?";
    pdo_execute($sql, $idbill);
}
function bill_loadidbill($id_taikhoan){
    $sql = "SELECT * FROM bill WHERE id_taikhoan=? ORDER BY id_bill DESC LIMIT 1";
    return pdo_query_one($sql, $id_taikhoan);
}
function bill_getinfo($id_bill)
{
    $sql = "SELECT*FROM bill WHERE id_bill=?";
    return pdo_query_one($sql, $id_bill);
}

function bill_update($idbill, $trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment)
{
    $sql = "UPDATE bill SET id_bill=?, trangthai=?, id_taikhoan=?, ngaydathang=?, price_tong=?, payment=? WHERE id_bill=?";
    pdo_execute($sql, $idbill, $trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment, $idbill);
}
function loadall_bill($id_taikhoan)
{
    $sql = "SELECT * FROM bill WHERE id_taikhoan=?";
    
    $listbill = pdo_query($sql,$id_taikhoan);
    return $listbill;
}
function bill_update_trangthai($trangthaimoi,$id_bill)
{
    $sql = "UPDATE bill SET trangthai=? WHERE id_bill=?";
    pdo_execute($sql, $trangthaimoi,$id_bill);
}
function bill_update_ngayhoanthanh($ngayhoanthanh,$id_bill)
{
    $sql = "UPDATE bill SET ngayhoanthanh=? WHERE id_bill=?";
    pdo_execute($sql, $ngayhoanthanh,$id_bill);
}
?>