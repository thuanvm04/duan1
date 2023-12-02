<?php 

function hien_thi_bill($course_id) {
    $sql = "
        SELECT
            c.*,
            en.user_id,
            u.username,
            u.email
        FROM
            courses c
        JOIN enrollments en ON c.course_id = en.course_id
        JOIN users u ON en.user_id = u.user_id
        WHERE
            c.course_id = ?;
    ";

    // Sử dụng PDO để thực hiện truy vấn
    return pdo_query_one($sql, $course_id);
}
?>