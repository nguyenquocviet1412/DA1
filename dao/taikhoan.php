<?php
// Truy vấn loại đã nhập mới lên trước

function taikhoan_selectall()
{
    $sql = "SELECT * FROM taikhoan";
    return pdo_query($sql);
}

function taikhoan_insert($user, $pass, $email, $address, $tel, $avatar, $gender)
{
    $sql = "INSERT INTO taikhoan (user,pass,email,address,tel,avatar,gender) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $user, $pass, $email, $address, $tel, $avatar, $gender);
}

function taikhoan_delete($matk)
{
    $sql = "DELETE FROM taikhoan WHERE id_taikhoan=?";
    if (is_array($matk)) {
        foreach ($matk as $matk) {
            pdo_execute($sql, $matk);
        }
    } else {
        pdo_execute($sql, $matk);
    }
}

function taikhoan_select_by_id($matk)
{
    $sql = "SELECT*FROM taikhoan WHERE id_taikhoan=?";
    return pdo_query_one($sql, $matk);
}

function taikhoan_update($matk, $user, $pass, $email, $address, $tel, $avatar, $gender)
{
    $sql = "UPDATE taikhoan SET id_taikhoan=?,user=?,pass=?,email=?,address=?,tel=?,avatar=?, gender=? WHERE id_taikhoan=?";
    pdo_execute($sql, $matk, $user, $pass, $email, $address, $tel, $avatar, $gender, $matk);
}
function taikhoan_exist($user)
{
    $sql = "SELECT count(*) FROM taikhoan WHERE user=?";
    return pdo_query_value($sql, $user);
}
function taikhoan_select_by_role($role)
{
    $sql = "SELECT * FROM taikhoan WHERE role==1";
    return pdo_query($sql, $role);
}
function taikhoan_change_matkhau($matkhau, $matk)
{
    $sql = "UPDATE taikhoan SET matkhau=? WHERE id_taikhoan=?";
    pdo_execute($sql, $matkhau, $matk);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
?>