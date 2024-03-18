<?php
// Truy vấn loại đã nhập mới lên trước

function hang_selectall()
{
    $sql = "SELECT * FROM hang ORDER BY mahang ASC";
    pdo_query($sql);
    return pdo_query($sql);
}

function hang_insert($tenhang)
{
    $sql = "INSERT INTO hang(tenhang) VALUES(?)";
    pdo_execute($sql, $tenhang);
}

function hang_delete($mahang)
{
    $sql = "DELETE FROM hang WHERE mahang=?";
    pdo_execute($sql, $mahang);
}

function hang_getinfo($mahang)
{
    $sql = "SELECT*FROM hang WHERE mahang=?";
    return pdo_query_one($sql, $mahang);
}

function hang_update($mahang, $tenhang)
{
    $sql = "UPDATE hang SET mahang=?, tenhang=? WHERE mahang=?";
    pdo_execute($sql, $mahang, $tenhang, $mahang);
}
$dshang=hang_selectall();
?>