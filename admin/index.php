<?php

include "../model/pdo.php";
include "../model/danhmuc.php";

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
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
