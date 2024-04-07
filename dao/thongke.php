<?php
require_once "pdo.php";
function thongkehanghoa()
{
    $sql = "SELECT dm.id, dm.name,
        COUNT(*) soluong,
        MIN(sp.price) giamin,
        MAX(sp.price) giamax,
        AVG(sp.price) giaavg 
        FROM sanpham sp 
        JOIN danhmuc dm ON dm.id=sp.id_danhmuc 
        GROUP BY dm.id, dm.name";
    return pdo_query($sql);
}

function thongkebinhluan()
{
    $sql = "SELECT sp.id_sanpham, sp.name,
     COUNT(*) soluong, 
     MIN(bl.ngaybinhluan) cunhat, 
     MAX(bl.ngaybinhluan) moinhat 
     FROM binhluan bl
    JOIN sanpham sp ON bl.id = sp.id_sanpham
    GROUP BY sp.id_sanpham, sp.name
    HAVING soluong > 0";
    return pdo_query($sql);
}

function thongkedonhang()
{
    $sql = "SELECT tk.id, tk.user,
    SUM(dh.tongtien) AS tongtien,
    dh.name_sanpham AS tensanpham,
    COUNT(dh.name_sanpham) AS soluongsanpham
    FROM bill_chitiet dh
    JOIN taikhoan tk ON dh.id_taikhoan = tk.id
    GROUP BY tk.id, tk.user, dh.name_sanpham";

    return pdo_query($sql);
}
?>
