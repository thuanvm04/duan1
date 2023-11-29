<?php
include "model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/khoahoc.php";


session_start();

include "views/header.php";




$khnew = kh_selectAll_view();


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
       
        case 'login':
            
            include "views/login.php";
            break;
        case 'course':
            include "views/khoahoc.php";
            break;
            case 'detail':
                include "views/detail.php";
                break;
            case 'home':
                include "views/home.php";
                break;
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
} 

include "views/fotter.php";

  