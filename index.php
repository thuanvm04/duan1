<?php
include "model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/khoahoc.php";

include "views/header.php";
$khnew = kh_selectAll_view();
$lsnew = lesson_select_one();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'login':
            include "login.php";
            break;
        case 'dangky':
            include "dangky.php";
            break;
        case 'dangxuat':
            include "logout.php";
            break;
        case 'course':
            include "views/khoahoc.php";
            break;
        default:
            include "views/khoahoc.php";
            break;
    }
} else {
    include "views/home.php";
}

include "views/fotter.php";
