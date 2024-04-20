<?php

function pdo_connection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "du-an-1";

    try {
        // Chuỗi kết nối
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
        // Set thuộc tính ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi kết nối CSDL: " . $e->getMessage();
    }
}

function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        // echo "Cập nhật thành công";
    } catch (PDOException $e) {
        echo "Lỗi thực thi";
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_execute_return_lastInsertId($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $conn->lastInsertId();
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $query = $stmt->fetchAll();
        return $query;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $queryone = $stmt->fetch(PDO::FETCH_ASSOC);
        return $queryone;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
function savefile($fieldname, $target_dir)
{
    $fileupload = $_FILES[$fieldname];
    $filename = basename($fileupload['name']);
    $target_path = $target_dir . $filename;
    move_uploaded_file($fileupload['tmp_name'], $target_path);
    return $filename;
}
function addcookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 + $day), "/");
}
function deletecookie($name)
{
    addcookie($name, "", -1);
}
function getcookie($name)
{
    return $_COOKIE[$name] ?? '';
}
function checklogin()
{
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['user']['vaitro']) == 1) {
            return;
        }
        if (strpos($_SERVER['REQUEST_URI'], "/admin/") == FALSE) {
            return;
        }
    }
    $_SESSION['REQUEST_URI'] = $_SERVER['REQUEST_URI'];
    header("location: /shop/site/taikhoan/dangnhap.php");
}

?>