<?php
include "model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/khoahoc.php";


session_start();

include "views/header.php";
<<<<<<< HEAD

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
=======
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
>>>>>>> 25d22b4f5cf687c3814539427e30f738cc3710f5
