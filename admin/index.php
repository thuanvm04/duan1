<?php

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/khoahoc.php";
include "../model/taikhoan.php";


include "header.php";
include "boxleft.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // Danh Mục
        case 'adddm':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $category_name = $_POST['category_name'];
                them_danhmuc($category_name);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $danhmuc = danhmuc_selectAll();
            include "danhmuc/listdm.php";
            break;
        case 'xoadm':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category_id = $_GET['category_id'];
                xoa_loai($_GET['category_id']);
            }
            $danhmuc = danhmuc_selectAll();
            include "danhmuc/listdm.php";
            break;
        case 'suadm':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $dm = select_danhmuc_one($_GET['category_id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $category_id = $_POST['category_id'];
                $category_name = $_POST['category_name'];
                edit_danhmuc($category_id, $category_name);
                $thongbao = "cập nhật thành công";
            }
            $danhmuc = danhmuc_selectAll();
            include "danhmuc/listdm.php";
            break;
            // sản phẩm

        case 'addkh':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $ten_kh = $_POST['ten_kh'];
                $mo_ta = $_POST['mo_ta'];
                $don_gia = $_POST['don_gia'];
                $danhmuc = $_POST['danhmuc'];
                $buoihoc = $_POST['buoi_hoc'];
                $giangvien = $_POST['giang_vien'];
                $time=$_POST['thoigian'];
                $file = $_FILES['hinh'];
                $hinh = $file['name'];
                move_uploaded_file($file['tmp_name'], "./image/" . $hinh);

                add_course($ten_kh, $mo_ta, $hinh, $giangvien, $don_gia, $danhmuc, $buoihoc,$time);
                $thongbao = "Thêm thành công";
            }
            $danhmuc = danhmuc_selectAll();
            $buoihoc = lesson_selectAll();
            include "khoahoc/add.php";
            break;
        case 'listkh':
            if (isset($_POST['listloc']) && $_POST['listloc']) {
                $key = $_POST['key'];
                $category = $_POST['danhmuc'];
            } else {
                $key = '';
                $category = 0;
            }
            $listkh =  khoahoc_selectAll($key, $category);
            $danhmuc = danhmuc_selectAll();
            include "khoahoc/list.php";
            break;


        case 'xoakh':
            if (isset($_GET['course_id']) && ($_GET['course_id'] > 0)) {
                $course_id  = $_GET['course_id'];
                delete_kh($course_id);
            }
            $listkh = khoahoc_selectAll("", 0);
            include "khoahoc/list.php";
            break;
        case 'suakh':
            if (isset($_GET['course_id']) && ($_GET['course_id'] > 0)) {
                $course_id = $_GET['course_id'];
                $kh =  select_kh_one($course_id);
            }
            $danhmuc = danhmuc_selectAll();
            $buoihoc = lesson_selectAll();
            $listkh = khoahoc_selectAll("", 0);

            include "khoahoc/update.php";
            break;
        case 'updatekh':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $course_name = $_POST['course_name'];
                $course_id = $_POST['course_id'];
                $price = $_POST['don_gia'];
                $description = $_POST['mo_ta'];
                $category_id = $_POST['category'];
                $instructor = $_POST['giangvien'];
                $lesson_id = $_POST['lesson'];
                $time = $_POST['thoigian'];
                $file = $_FILES['hinh'];
                if ($file['size'] > 0) {
                    $hinh = $file['name'];
                    move_uploaded_file($file['tmp_name'], "./image/" . $hinh);
                } else {
                    // Nếu không có tệp tải lên, giữ nguyên ảnh cũ bằng cách lấy giá trị từ trường ẩn
                    $hinh = $_POST['old_image'];
                }
        
                cap_nhat_kh($course_name,$description,$hinh, $instructor,  $price,$category_id, $lesson_id, $course_id,$time);
             
                $thongbao = "cập nhật thành công";
            }
            $listkh = khoahoc_selectAll("", 0);
            include "khoahoc/list.php";
            break;
        default:
            include "home.php";
            break;
            // Tài khoản
            case 'dstk':
                $danhsachtk = hien_thi_khach_hang();
                include "taikhoan/list.php";
                break;
             case 'xoatk':
                    if(isset($_GET['user_id']) && ($_GET['user_id'] > 0)){
                        $ma_kh= $_GET['user_id'];
                        xoa_khach_hang($ma_kh);
                    }
                    $danhsachtk = hien_thi_khach_hang();
                    include "taikhoan/list.php";
                    break;
    }
} else {
    include "home.php";
}
