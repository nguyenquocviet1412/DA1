<?php
// Truy vấn loại đã nhập mới lên trước

function hanghoa_selectall()
{
    $sql = "SELECT * FROM hanghoa ORDER BY mahang DESC";
    pdo_query($sql);
    return pdo_query($sql);
}

function hanghoa_insert($mahh, $tenhh, $giatien, $giamgia, $hinh, $maloai, $trangthai, $ngaynhap, $mota)
{
    $sql = "INSERT INTO hanghoa(mahang,tenhang,giatien,giamgia,hinhanh,maloaihang,trangthai,ngaynhap,mota) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $mahh, $tenhh, $giatien, $giamgia, $hinh, $maloai, $trangthai, $ngaynhap, $mota);
}

function hanghoa_delete($mahh)
{
    $sql = "DELETE FROM hanghoa WHERE mahang=?";
    if (is_array($mahh)) {
        foreach ($mahh as $mahh) {
            pdo_execute($sql, $mahh);
        }
    } else {
        pdo_execute($sql, $mahh);
    }
}

function hanghoa_getinfo($mahh)
{
    $sql = "SELECT*FROM hanghoa WHERE mahang=?";
    return pdo_query_one($sql, $mahh);
}
function hanghoa_selectby_loai($maloai)
{
    $sql = "SELECT*FROM hanghoa WHERE maloaihang=?";
    return pdo_query($sql, $maloai);
}
function hanghoa_select_keyword($keyword)
{
    $sql = "SELECT*FROM hanghoa hh JOIN loaihang lo ON lo.maloai=hh.maloaihang WHERE tenhang LIKE ? OR tenloai LIKE ? ";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function hanghoa_update($mahh, $tenhh, $giatien, $giamgia, $hinh, $maloai, $trangthai, $ngaynhap, $mota)
{
    $sql = "UPDATE hanghoa SET mahang=?,tenhang=?,giatien=?,giamgia=?,hinhanh=?,maloaihang=?,trangthai=?,ngaynhap=?,mota=? WHERE mahang=?";
    pdo_execute($sql, $mahh, $tenhh, $giatien, $giamgia, $hinh, $maloai, $trangthai, $ngaynhap, $mota, $mahh);
}
function hanghoa_exist($mahh)
{
    $sql = "SELECT COUNT(*) FROM hanghoa WHERE mahang=?";
    return pdo_query_value($sql, $mahh);
}
function hanghoa_tangsoluotxem($mahh)
{
    $sql = "UPDATE hanghoa SET soluotxem=soluotxem+1 WHERE mahang=?";
    pdo_execute($sql,$mahh);
}
function hanghoa_selecttop10()
{
    $sql = "SELECT *FROM hanghoa WHERE soluotxem>0 ORDER BY soluotxem DESC(0,10)";
    return pdo_query($sql);
}
function hanghoa_selectdacbiet()
{
    $sql = "SELECT *FROM  hanghoa WHERE trangthai=1";
    return pdo_query($sql);
}
function hanghoa_home()
{
    $sql = "SELECT*FROM hanghoa WHERE 1 ORDER BY mahang DESC limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function hanghoa_giamgia($giatien,$giamgia){
    $giasau=$giatien-$giatien*$giamgia/100;
    return $giasau;
}
?>