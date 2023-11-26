<?php
include "model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/khoahoc.php";


session_start();

include "views/header.php";

$khnew= kh_selectAll_view();
$lsnew=lesson_select_one();
$act = isset($_GET['act']) ? $_GET['act'] : '';

switch ($act) {
    case 'login':
        include "./views/login.php";
        break;
    case 'detail':
        include "views/detail.php";
        break;
        
    case 'dangxuat':
        include "logout.php";
        break;
    default:
    include "views/khoahoc.php";
        break;
}
include "views/fotter.php";
?>
