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

// function thongkedonhang()
// {
//     $sql = "SELECT tk.id, tk.user,
//     SUM(dh.tongtien) AS tongtien,
//     dh.name_sanpham AS tensanpham,
//     COUNT(dh.name_sanpham) AS soluongsanpham
//     FROM bill_chitiet dh
//     JOIN taikhoan tk ON dh.id_taikhoan = tk.id
//     GROUP BY tk.id, tk.user, dh.name_sanpham";

//     return pdo_query($sql);
// }

function thongke_taikhoan_donhang()
{
    $sql = "SELECT taikhoan.*, bill.*, bill_chitiet.*
    FROM taikhoan
    JOIN bill ON taikhoan.id_taikhoan = bill.id_taikhoan
    JOIN bill_chitiet ON bill.id_bill = bill_chitiet.id_bill";

    return pdo_query($sql);
}
function sanpham_yeuthich()
{
    $sql = "SELECT *FROM sanpham WHERE luotban>=10 ORDER BY luotban DESC limit 0,10";
    return pdo_query($sql);
}
?>
