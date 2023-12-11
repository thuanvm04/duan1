<?php
// views/header.php

if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    session_unset(); // Xóa tất cả các biến session
    session_destroy(); // Hủy phiên session
}

// Ensure no output has been sent to the browser before starting the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educato - DEV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Other CSS and JS files with root-relative paths -->

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="font-flaticon/flaticon.css">
    <link rel="stylesheet" href="css/dripicons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/stylelogin.css">
</head>

<body>
    <!-- header -->
    <header class="header-area header-three">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">

                        <div class="col-xl-2 col-lg-2" style="height: 120px;">

                            <div class="logo">
                                <a href="index.php?act=home"><img src="img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li class="sub">
                                            <a href="index.php?act=home">Trang chủ</a>
                                        </li>
                                        <li><a href="index.php?act=home">Thông tin</a></li>

                                        <li class="sub">
                                            <a href="index.php?act=course">Khoá học</a>

                                        </li>
                                        <li><a href="">Liên hệ </a></li>
                                        <?php if (isset($_SESSION['username'])) { ?>
                                            <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == "user") {
                                                echo ' <li><a href="index.php?act=khdadangki">Khoá học đã đăng kí </a></li>';
                                            } else {
                                                echo '<li><a href="http://localhost/duan1/admin/">Admin</a></li>';
                                            }
                                            ?>
                                            <li><a href="index.php?dangxuat=1">Log Out</a></li>
                                        <?php } else { ?>
                                            <li><a href="index.php?act=login">Sign In</a></li>

                                        <?php } ?>


                                    </ul>
                                </nav>
                            </div>
                        </div>



                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>