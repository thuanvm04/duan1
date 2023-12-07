<?php
// process_payment.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $coursename = $_POST['course_name'];
    $price = $_POST['course_price'];
    $pttt = $_POST['pttt'];

    // ... Các thông tin khác

    // Gửi thông tin đến cổng thanh toán (nếu có)
    // Xác nhận thanh toán và cập nhật trạng thái trong cơ sở dữ liệu

    // Ví dụ: In ra thông báo thành công sau khi thanh toán

} else {
    // Xử lý nếu không có dữ liệu POST được gửi đến trang này
    echo "Invalid access!";
    exit();
}
?>
<section class="breadcrumb-area">
    <div class="container5">
        <!-- Hiển thị thông tin xác nhận -->
        <h2>CHÚC MỪNG <?php echo $fullname; ?> ĐÃ ĐĂNG KÍ KHOÁ HỌC THÀNH CÔNG</h2>
       
        <p><strong>Tên khóa học:</strong> <?php echo $coursename; ?></p>
        <p><strong>Giá khóa học:</strong> $<?php echo number_format($price, 2); ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Số điện thoại:</strong> <?php echo $phone; ?></p>
        <p><strong>Giáo Viên</strong> <?php echo $instructor; ?></p>
        <p><strong>Tên Lớp:</strong> <?php echo $classname; ?></p>
        <p><strong>Thời gian bắt đầu:</strong> <?php echo $time_start; ?></p>
        <p><strong>Thời gian kết thúc:</strong> <?php echo $time_end; ?></p>
        <p><strong>Phương thức thanh toán:</strong> <?php echo $pttt; ?></p>


    </div>
</section>