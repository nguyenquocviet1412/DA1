<?php
require_once "../../dao/pdo.php";
require_once "../../dao/qldh.php";
extract($_REQUEST);
if (exist_param("btn_list")){
    $items = qldh_selectall();
    $VIEW_NAME = "list.php";
}else{
    $items = qldh_selectall();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
?>