<?php
// Truy vấn loại đã nhập mới lên trước

function taikhoan_selectall()
{
    $sql = "SELECT * FROM taikhoan";
    return pdo_query($sql);
}

function taikhoan_insert($hoten, $user, $pass, $email, $address, $tel, $avatar, $gender, $role)
{
    $sql = "INSERT INTO taikhoan (hoten,user,pass,email,address,tel,avatar,gender,role) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $hoten, $user, $pass, $email, $address, $tel, $avatar, $gender, $role);
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

function taikhoan_update($id_taikhoan, $hoten, $user, $pass, $email, $address, $tel, $avatar, $gender, $role)
{
    $sql = "UPDATE taikhoan SET id_taikhoan=?,hoten=?,user=?,pass=?,email=?,address=?,tel=?,avatar=?, gender=?, role=? WHERE id_taikhoan=?";
    pdo_execute($sql, $id_taikhoan, $hoten, $user, $pass, $email, $address, $tel, $avatar, $gender, $role, $id_taikhoan);
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

function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checktel($tel)
{
    $sql = "select * from taikhoan where tel='" . $tel . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function validatePhoneNumber($phoneNumber) {
    // Biểu thức chính quy kiểm tra số điện thoại Việt Nam
    $pattern = '/^(0[1-9])+([0-9]{8})$/';
    if (preg_match($pattern, $phoneNumber)) {
        return true;
    } else {
        return false;
    }
}


?>