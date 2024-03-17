<?php
require_once "pdo.php";
function thongkehanghoa()
{
    $sql = "SELECT lo.maloai, lo.tenloai,"
        . "COUNT(*) soluong,"
        . "MIN (hh.giatien) giamin,"
        . "MAX (hh.giatien) giamax,"
        . "AVG (hh.giatien) giaavg"
        . "FROM hanghoa hh"
        . "JOIN loaihang lo ON lo.maloai=hh.maloaihang"
        . "GROUP BY lo.maloai, lo.tenloai";
    return pdo_query($sql);
}
function thongkebinhluan()
{
    $sql = "SELECT hh.mahang, hh.tenhang, COUNT(*) soluong, MIN(bl.ngaybinhluan) cunhat, MAX(bl.ngaybinhluan) moinhat FROM binhluan bl
    JOIN hanghoa hh ON bl.mahanghoa = hh.mahang
    GROUP BY hh.mahang, hh.tenhang
    HAVING soluong > 0";
    return pdo_query($sql);
}
?>