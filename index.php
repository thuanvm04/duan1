<?php
include "model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/khoahoc.php";
include "model/binhluan.php";
include "model/bill.php";
session_start();

include "views/header.php";

$categoryId = 7;
// $course_id = $_REQUEST['course_id'];   
// $listbl = hien_thi_bl($course_id);
$khnew = kh_selectAll_view();
$listbl = hien_thi_binh_luan();


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'login':
            // session_start();
            $error_message = "";
            // Xử lý khi form được submit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["login"])) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];



                    // Sử dụng prepared statements để tránh SQL Injection
                    $user = check_user($password, $username);

                    if ($user) {
                        // Đăng nhập thành công
                        $_SESSION["logged_in"] = true;
                        $_SESSION["user_id"] = $user["user_id"];
                        $_SESSION["email"] = $user["email"];
                        $_SESSION["username"] = $user["username"];
                        $_SESSION["role"] = $user["role"];

                        // Redirect dựa vào vai trò của người dùng
                        if ($_SESSION["role"] == "admin") {
                            header("Location: admin");
                        } else {

                            header("Location: index.php");
                        }
                        exit();
                    } else {

                        $error_message = "Invalid email or password";
                    }
                } elseif (isset($_POST["register"])) {
                    // Xử lý đăng ký
                    $email = $_POST["email"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    // Kiểm tra tính hợp lệ của dữ liệu đăng ký
                    if (empty($username) || empty($email) ||  empty($password)) {
                        $error_message = "All fields are required for registration";
                    } else {


                        them_khach_hang($username, $password,  $email);

                        header("Location: index.php?act=login");

                        exit();
                    }
                }
            }
            include "views/login.php";
            break;

        case 'listkh_view':
            if (isset($_POST['listloc']) && $_POST['listloc']) {
                $key = $_POST['key'];
                $category = $_POST['danhmuc'];
            } else {
                $key = '';
                $category = 0;
            }
            $view =  search_selectAll_view($key, $category);
            $danhmuc = danhmuc_selectAll();
            include "views/khoahoc.php";
            break;
        case 'addpayment':
            if (isset($_POST['submit_pay']) && $_POST['submit_pay']) {



                add_course($ten_kh, $mo_ta, $hinh, $giangvien, $don_gia, $danhmuc, $buoihoc, $thoigian, $intro, $time_start, $classname, $time_end);
                $thongbao = "Thêm thành công";
            }

            include "khoahoc/add.php";
            break;

            case 'listkh_view':
                if (isset($_POST['listloc']) && $_POST['listloc']) {
                    $key = $_POST['key'];
                    $category = $_POST['danhmuc'];
                } else {
                    $key = '';
                    $category = 0;
                }
                $view =  search_selectAll_view($key, $category);
                $danhmuc = danhmuc_selectAll();
                include "views/khoahoc.php";
                break;
                case 'addpayment':
                    if (isset($_POST['submit_pay']) && $_POST['submit_pay']) {
                       
                        add_course($ten_kh, $mo_ta, $hinh, $giangvien, $don_gia, $danhmuc, $buoihoc,$thoigian,$intro, $time_start, $classname, $time_end);
                        $thongbao = "Thêm thành công";
                    }
                    
                    include "khoahoc/add.php";
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
        case 'pay':
            if (isset($_GET['course_id']) && ($_GET['course_id'] > 0)) {
                $course_id = $_GET['course_id'];
                $price = $_POST['price'];
                $khnew =   get_course_details($course_id);
            }
            include "views/pay.php";
            break;
        case 'bill':
            include "views/bill.php";
            break;
        case 'invoice':
            if (isset($_POST['submit_pay']) && $_POST['submit_pay']) {
                $fullname = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $coursename = $_POST['course_name'];
                $price = $_POST['course_price'];
                $pttt = $_POST['pttt'];
                $instructor = $_POST['instructor'];
                $classname = $_POST['classname'];
                $time_start = $_POST['time_start'];
                $time_end = $_POST['time_end'];
                addbill($fullname, $email, $phone, $coursename, $price, $pttt, $instructor, $classname, $time_start, $time_end);

                $thongbao = "Thêm thành công";
            }

            include "views/invoice.php";
            break;

        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}

include "views/fotter.php";
