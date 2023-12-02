<?php
      //admin
      function add_course($course_name, $description, $image, $instructor, $price, $category_id, $lesson_id ,$thoigian,$intro,$time_start,$classname,$time_end) {

        $sql = "INSERT INTO courses(course_name, description, image, instructor, price, category_id, lesson_id, thoigian ,intro,time_start , classname, time_end) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?,?,?)";
        pdo_execute($sql, $course_name, $description, $image, $instructor, $price, $category_id, $lesson_id,$thoigian,$intro,$time_start,$classname,$time_end);
    }
    function cap_nhat_kh($course_name, $description, $image, $instructor, $price, $category_id, $lesson_id,$thoigian,$intro,$time_start,$classname,$time_end, $course_id){
        // Chuẩn bị truy vấn với tham số
        $sql = "UPDATE courses SET course_name=?, description=?, image=?, instructor=?, price=?, category_id=?, lesson_id=? , thoigian=?, intro=? ,time_start=? , classname=?, time_end=? WHERE course_id=?";
        pdo_execute($sql,$course_name, $description, $image, $instructor, $price, $category_id, $lesson_id,$thoigian,$intro,$time_start,$classname,$time_end, $course_id);
    
    }
function lesson_selectAll(){
    $sql = "SELECT * FROM lessons ORDER BY lesson_id ASC";
    return pdo_query($sql);
}
function khoahoc_selectAll($key, $category_id){
    $sql = "SELECT * FROM courses WHERE 1";
    
    if ($category_id > 0) {
        $sql .= " AND category_id ='".$category_id."'";
    }

    if ($key != "") {
        $sql .= " AND course_name LIKE '%".$key."%'";
    }

    $sql .=" ORDER BY course_id  DESC";
    return pdo_query($sql);
}

function delete_kh($course_id) {
    // Tiếp theo, xóa sản phẩm
    $sql = "DELETE FROM courses WHERE course_id = ?";
    pdo_execute($sql, $course_id);
}
function select_kh_one($course_id){
    $sql = "SELECT * FROM courses WHERE course_id=?";
    return pdo_query_one($sql, $course_id);
}

// view
function kh_selectAll_view(){
    $sql = "SELECT * FROM courses WHERE 1 ORDER BY course_id DESC LIMIT 0,9 ";
    return pdo_query($sql);
}

function search_selectAll_view($key, $category_id) {
    // Khởi tạo câu truy vấn SQL với điều kiện WHERE 1 để bắt đầu câu truy vấn
    $sql = "SELECT * FROM courses WHERE 1";

    // Thêm điều kiện vào câu truy vấn nếu $category_id lớn hơn 0
    if ($category_id > 0) {
        $sql .= " AND category_id ='" . $category_id . "'";
    }

    // Thêm điều kiện vào câu truy vấn nếu $key không rỗng
    if ($key != "") {
        $sql .= " AND course_name LIKE '%" . $key . "%'";
    }

    // Thêm phần sắp xếp và giới hạn số lượng kết quả trả về
    $sql .= " ORDER BY course_id DESC LIMIT 0,9 ";

    // Gọi hàm pdo_query với câu truy vấn đã tạo và trả về kết quả
    return pdo_query($sql);
}

function getLessonName($lessonId){
    $sql = "SELECT lesson_name FROM lessons ls , courses kh WHERE ls.lesson_id = kh.lesson_id AND ls.lesson_id = ?";
    return pdo_query_one($sql, $lessonId);
}

function get_course_details($course_id){
    $sql = "SELECT * FROM courses WHERE course_id=?";
    return pdo_query_one($sql, $course_id);
}
function getkhoahoc_user($user_id){
    $sql = "SELECT courses.*
    FROM enrollments en
    JOIN courses c ON en.course_id = c.course_id
    WHERE en.user_id = ? ";;
    return pdo_query_one($sql, $user_id);
}

?>