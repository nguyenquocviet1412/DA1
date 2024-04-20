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

// function thongkebinhluan()
// {
//     $sql = "SELECT sp.id_sanpham, sp.namesp,
//      COUNT(*) soluong, 
//      MIN(bl.ngaybinhluan) cunhat, 
//      MAX(bl.ngaybinhluan) moinhat 
//      FROM binhluan bl
//     JOIN sanpham sp ON bl.id_sanpham = sp.id_sanpham
//     GROUP BY sp.id_sanpham, sp.namesp
//     HAVING soluong > 0";
//     return pdo_query($sql);
// }

function thongke_taikhoan_donhang()
{
    $sql = "SELECT tk.avatar AS avatar, tk.user AS user, 
    COUNT(bct.id_sanpham) AS soluong, 
    SUM(b.price_tong) AS price_tong FROM taikhoan tk 
    JOIN bill b ON tk.id_taikhoan = b.id_taikhoan 
    JOIN bill_chitiet bct ON b.id_bill = bct.id_bill 
    GROUP BY tk.user";

    return pdo_query($sql);
}

// function thongke_taikhoan_donhang()
// {
//     $sql = "SELECT taikhoan.*, bill.*, bill_chitiet.*
//     FROM taikhoan
//     JOIN bill ON taikhoan.id_taikhoan = bill.id_taikhoan
//     JOIN bill_chitiet ON bill.id_bill = bill_chitiet.id_bill";

//     return pdo_query($sql);
// }
function sanpham_yeuthich()
{
    $sql = "SELECT *FROM sanpham WHERE luotban>=1 ORDER BY luotban DESC limit 0,10";
    return pdo_query($sql);
}
?>