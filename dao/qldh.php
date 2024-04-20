<?php
function qldh_selectall(){
    $sql = "SELECT * FROM bill ORDER BY ngaydathang DESC";
    return pdo_query($sql);
}
?>