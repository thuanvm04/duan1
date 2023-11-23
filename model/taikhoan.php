<?php

require_once "./pdo.php";

// Thêm khách hàng
function them_khach_hang($mat_khau, $ho_ten, $email) {
    $sql = "INSERT INTO users(password, full_name, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $mat_khau, $ho_ten, $email);
}

// Đăng nhập
function check_user($mat_khau, $ho_ten) {
    $sql = "SELECT * FROM users WHERE password=? AND full_name=?";
    return pdo_query_one($sql, $mat_khau, $ho_ten);
}

// Sửa khách hàng
function sua_khach_hang($ma_kh, $mat_khau, $ho_ten, $email) {
    $sql = "UPDATE users SET password = ?, full_name = ?, email = ? WHERE user_id = ?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $ma_kh);
}

// Xóa khách hàng
function xoa_khach_hang($ma_kh) {
    $sql = "DELETE FROM users WHERE user_id=?";
    pdo_execute($sql, $ma_kh);
}

// Quên mật khẩu
function check_email($email) {
    $sql = "SELECT * FROM users WHERE email=?";
    return pdo_query_one($sql, $email);
}

// Hiển thị khách hàng
function hien_thi_khach_hang() {
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}

// Hiển thị 1 khách hàng
function hien_thi_mot_khach_hang($ma_kh) {
    $sql = "SELECT * FROM users WHERE user_id=?";
    return pdo_query_one($sql, $ma_kh);
}
?>
