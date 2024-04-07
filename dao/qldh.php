<?php
function qldh_selectall(){
    $sql = "SELECT * FROM bill";
    return pdo_query($sql);
}
?>