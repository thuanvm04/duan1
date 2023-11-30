<?php



// Thêm khách hàng
function them_khach_hang($username, $password, $email) {
    $sql = "INSERT INTO users(password, username, email, role) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $password, $username, $email, 'user');
}

// Đăng nhập
function check_user($password, $username) {
    $sql = "SELECT * FROM users WHERE password=? AND username=?";
    return pdo_query_one($sql,$password, $username);
}

// Sửa khách hàng
function sua_khach_hang($ma_kh, $mat_khau, $ho_ten, $email,$username) {
    $sql = "UPDATE users SET password = ?, full_name = ?, email = ?, username =? WHERE user_id = ?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email,$username, $ma_kh);
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
