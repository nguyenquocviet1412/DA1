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
    $sql = "SELECT id_bill FROM bill WHERE id_taikhoan=? ORDER BY id_bill DESC LIMIT 1";
    return pdo_query_one($sql, $id_taikhoan);
}
function bill_getinfo($idbill)
{
    $sql = "SELECT*FROM bill WHERE id_bill=?";
    return pdo_query_one($sql, $idbill);
}

function bill_update($idbill, $trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment)
{
    $sql = "UPDATE bill SET id_bill=?, trangthai=?, id_taikhoan=?, ngaydathang=?, price_tong=?, payment=? WHERE id_bill=?";
    pdo_execute($sql, $idbill, $trangthai, $id_taikhoan, $ngaydathang, $price_tong, $payment, $idbill);
}
function loadall_bill($kyw = "", $id_tk = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($id_tk > 0)
        $sql .= " AND id_kh=$id_tk";
    if ($kyw != "")
        $sql .= " AND id_bill LIKE '%$kyw%'";
    $sql .= " ORDER BY id_bill DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}


?>