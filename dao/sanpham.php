<?php
// Truy vấn loại đã nhập mới lên trước

function sanpham_selectall()
{
    $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
    pdo_query($sql);
    return pdo_query($sql);
}

function sanpham_insert($id, $name, $price, $img, $mota, $price_chiet, $sale, $luotxem, $id_danhmuc)
{
    $sql = "INSERT INTO sanpham(id_sanpham, name, price, img, mota, price_chiet, sale, luotxem, id_danhmuc) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id, $name, $price, $img, $mota, $price_chiet, $sale, $luotxem, $id_danhmuc);
}

function sanpham_delete($id)
{
    $sql = "DELETE FROM sanpham WHERE id_sanpham=?";
    if (is_array($id)) {
        foreach ($id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id);
    }
}

function sanpham_getinfo($id)
{
    $sql = "SELECT*FROM sanpham WHERE id_sanpham=?";
    return pdo_query_one($sql, $id);
}
function sanpham_selectby_loai($id_danhmuc)
{
    $sql = "SELECT*FROM sanpham WHERE id_danhmuc=?";
    return pdo_query($sql, $id_danhmuc);
}
function sanpham_select_keyword($keyword)
{
    $sql = "SELECT*FROM sanpham sp JOIN danhmuc dm ON dm.id=sp.id_danhmuc WHERE dm.name LIKE ? OR sp.name LIKE ? ";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function sanpham_update($id, $name, $price, $img, $mota, $price_chiet, $sale, $luotxem, $id_danhmuc)
{
    $sql = "UPDATE sanpham SET id_sanpham=?,name=?,price=?,img=?,mota=?,price_chiet=?,sale=?,luotxem=?,id_danhmuc=? WHERE id_sanpham=?";
    pdo_execute($sql, $id, $name, $price, $img, $mota, $price_chiet, $sale, $luotxem, $id_danhmuc, $id);
}
function sanpham_exist($id)
{
    $sql = "SELECT COUNT(*) FROM sanpham WHERE id_sanpham=?";
    return pdo_query_value($sql, $id);
}
function sanpham_tangsoluotxem($id)
{
    $sql = "UPDATE sanpham SET luotxem=luotxem+1 WHERE id_sanpham=?";
    pdo_execute($sql, $id);
}
function sanpham_selecttop10()
{
    $sql = "SELECT *FROM sanpham WHERE luotxem>0 ORDER BY luotxem DESC(0,10)";
    return pdo_query($sql);
}
// function sanpham_selectdacbiet()
// {
//     $sql = "SELECT *FROM  sanpham WHERE trangthai=1";
//     return pdo_query($sql);
// }
function sanpham_home()
{
    $sql = "SELECT*FROM sanpham WHERE 1 ORDER BY id_sanpham DESC limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// function sanpham_giamgia($giatien, $giamgia)
// {
//     $giasau = $giatien - $giatien * $giamgia / 100;
//     return $giasau;
// }
?>