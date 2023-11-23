<?php
include "../views/header.php";

// Kiểm tra đăng nhập
if (isset($_SESSION['user_id'])) {
    // Đã đăng nhập
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case '':
                // Nội dung trang chủ khi đã đăng nhập
                break;
            default:
                include "../views/home.php";
                break;
        }
    } else {
        // Nội dung trang chủ khi đã đăng nhập
        include_once "../views/home.php";
    }
} else {
    // Chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit(); // Đảm bảo chuyển hướng thực hiện thành công
}

include "../views/fotter.php";
?>
