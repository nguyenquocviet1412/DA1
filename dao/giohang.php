
<?php 
    function giohang_selectall()
    {
        $sql = "SELECT * FROM giohang ORDER BY id_giohang DESC";
        pdo_query($sql);
        return pdo_query($sql);
    }
    function check_soluong($id_taikhoan, $id_sanpham,$id_size){
        $sql = "SELECT * from giohang where id_taikhoan='" . $id_taikhoan . "' AND id_sanpham='" . $id_sanpham . "' AND id_size='" . $id_size . "'";
        $sp = pdo_query_one($sql);
        return $sp;
}
    function giohang_update_soluong($id_taikhoan, $id_sanpham, $id_size){
        $sql = "UPDATE giohang SET soluong=soluong+1 WHERE id_taikhoan=? AND id_sanpham=? AND id_size=?";
        pdo_execute($sql, $id_taikhoan, $id_sanpham, $id_size);
    }
    function giohang_tanggiam_soluong($id_giohang,$soluong){
        $sql = "UPDATE giohang SET soluong = $soluong WHERE id_giohang=$id_giohang";
        pdo_execute($sql, $id_giohang,$soluong);
    }
    function giohang_insert($id_taikhoan, $id_sanpham, $name_sanpham, $price, $img, $soluong, $id_size)
    {
        $sql = "INSERT INTO giohang(id_taikhoan, id_sanpham, name_sanpham, price, img, soluong, id_size) VALUES(?,?,?,?,?,?,?)";
        pdo_execute($sql, $id_taikhoan, $id_sanpham, $name_sanpham, $price, $img, $soluong, $id_size);
    }
    
    function giohang_delete($id_giohang){
        $sql = "DELETE FROM giohang WHERE id_giohang=?";
        if (is_array($id_giohang)) {
            foreach ($id_giohang as $id_giohang) {
                pdo_execute($sql, $id_giohang);
            }
        } else {
            pdo_execute($sql, $id_giohang);
        }
}

function giohang_delete_taikhoan($id_taikhoan)
{
    $sql = "DELETE FROM giohang WHERE id_taikhoan=?";
    if (is_array($id_taikhoan)) {
        foreach ($id_taikhoan as $id_taikhoan) {
            pdo_execute($sql, $id_taikhoan);
        }
    } else {
        pdo_execute($sql, $id_taikhoan);
    }
}

function load_giohang_taikhoan($id_taikhoan)
{
    $sql = "SELECT*FROM giohang WHERE id_taikhoan=?";
    return pdo_query($sql, $id_taikhoan);
}

function tong_don_hang($list)
{
    $tong = 0;
    foreach ($list as $list) {
        $tong_tien = (float)"$list[3]" * (float)"$list[4]";
        $tong += $tong_tien;
    }
    return $tong;
}
function tang_soluong($id_giohang){
    $sql = "UPDATE giohang SET soluong=soluong+1 WHERE id_giohang=?";
    pdo_execute($sql, $id_giohang);
}
function giam_soluong($id_giohang){
    $sql = "UPDATE giohang SET soluong=soluong-1 WHERE id_giohang=?";
    pdo_execute($sql, $id_giohang);
}

?>