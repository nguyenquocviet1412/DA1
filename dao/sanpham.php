<?php
// Truy vấn loại đã nhập mới lên trước

function sanpham_selectall()
{
    $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
    pdo_query($sql);
    return pdo_query($sql);
}

function sanpham_insert($name, $price, $img, $mota, $price_chiet, $sale, $id_danhmuc)
{
    $sql = "INSERT INTO sanpham(namesp, price, img, mota, price_chiet, sale, id_danhmuc) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $name, $price, $img, $mota, $price_chiet, $sale, $id_danhmuc);
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
    $sql = "SELECT*FROM sanpham WHERE id_danhmuc=? ORDER BY id_sanpham DESC";
    return pdo_query($sql, $id_danhmuc);
}

function sanpham_update($id, $name, $price, $img, $mota, $price_chiet, $sale, $id_danhmuc)
{
    $sql = "UPDATE sanpham SET id_sanpham=?,namesp=?,price=?,img=?,mota=?,price_chiet=?,sale=?,id_danhmuc=? WHERE id_sanpham=?";
    pdo_execute($sql, $id, $name, $price, $img, $mota, $price_chiet, $sale, $id_danhmuc, $id);
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
function sanpham_tangsoluotban($luotban,$id)
{
    $sql = "UPDATE sanpham SET luotban=luotban + ? WHERE id_sanpham=?";
    pdo_execute($sql,$luotban, $id);
}
function sanpham_selecttop10()
{
    $sql = "SELECT *FROM sanpham WHERE luotxem>0 ORDER BY luotxem DESC limit 0,10";
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
function sanpham_giamgia($price, $sale)
{
    $giasau = $price - $price * $sale / 100;
    return $giasau;
}

function loadall_sanpham($kyw)
{
    $sql = "SELECT*FROM sanpham sp JOIN danhmuc dm ON dm.id=sp.id_danhmuc WHERE dm.name LIKE ? OR sp.namesp LIKE ? ";
    return pdo_query($sql, '%' . $kyw . '%', '%' . $kyw . '%');
}

// function loadall_sanpham($kyw="",$iddm){
//     if($kyw!=""){
//         $sql="select * from sanpham where 1 and name like '%".$kyw."%'";
//     }
//     if($iddm>0){
//         $sql="select * from danhmuc where id=".$iddm;
//     }
//     $sql.=" order by id_sanpham desc";
//     $listsanpham=pdo_query($sql);
//     return $listsanpham;
// }

function load_ten_dm($iddm){
    if($iddm>0){
        $sql = "select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }  
}
?>