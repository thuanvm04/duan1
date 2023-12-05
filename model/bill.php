<?php 

// function hien_thi_bill($course_id) {
//     $sql = "
//         SELECT
//             c.*,
//             en.user_id,
//             u.username,
//             u.email
//         FROM
//             courses c
//         JOIN enrollments en ON c.course_id = en.course_id
//         JOIN users u ON en.user_id = u.user_id
//         WHERE
//             c.course_id = ?;
//     ";

//     // Sử dụng PDO để thực hiện truy vấn
//     return pdo_query_one($sql, $course_id);
// }
// function createInvoice($full_name, $email, $phone, $address, $course_name, $course_price) {
//     // Tạo hóa đơn - bạn có thể thêm các thông tin khác cần thiết
//     $invoice = array(
//         'full_name' => $full_name,
//         'email' => $email,
//         'phone' => $phone,
//         'email' => $email,
//         'address' => $address,
//         'course_name' => $course_name,
//         'course_price' => $course_price,
//         'created_at' => date('Y-m-d H:i:s'),
//     );

//     return $invoice;
// }
function addbill($full_name, $email, $phone, $course_name, $course_price, $pttt, $instructor, $classname, $time_start, $time_end) {
    $sql = "INSERT INTO bills(full_name, email, phone, course_name, course_price, pttt, instructor, classname, time_start, time_end ) VALUES ('$full_name','$email', '$phone', '$course_name', '$course_price', '$pttt', '$instructor', '$classname', '$time_start', '$time_end' )";
        pdo_execute($sql);
   
}
?>