<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "model/khoahoc.php";

include "header.php";

$act = isset($_GET['act']) ? $_GET['act'] : '';
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
            
            $khnew= kh_selectAll_view();
            
            include "khoahoc.php";
            break;
// chi tiết khoá học
//   case 'chitietsp':
//     if(isset($_GET['course_id'])&&($_GET['course_id'] > 0)){
//         $course_id = $_GET['course_id'];
//         $chitietkh = select_kh_one($course_id);
//         extract($chitietkh);
//         // lấy mã danh mục
//         $sp_cung_loai = select_hang_hoa_cungloai($ma_hh, $ma_loai);
//         include "./view/chitietsp.php";  
//     }else{
//        include "./view/home.php"; 
//     }
//     break;


    default:
        include "./views/home.php";
        break;
}

?>
