<?php
      //admin
      function add_course($course_name, $description, $image, $instructor, $price, $category_id, $lesson_id ,$thoigian) {

        $sql = "INSERT INTO courses(course_name, description, image, instructor, price, category_id, lesson_id, thoigian) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
        pdo_execute($sql, $course_name, $description, $image, $instructor, $price, $category_id, $lesson_id,$thoigian);
    }
    function cap_nhat_kh($course_name, $description, $image, $instructor, $price, $category_id, $lesson_id,$thoigian, $course_id){
        // Chuẩn bị truy vấn với tham số
        $sql = "UPDATE courses SET course_name=?, description=?, image=?, instructor=?, price=?, category_id=?, lesson_id=? , thoigian=? WHERE course_id=?";
        pdo_execute($sql,$course_name, $description, $image, $instructor, $price, $category_id, $lesson_id,$thoigian, $course_id);
    
    }
function lesson_selectAll(){
    $sql = "SELECT * FROM lessons ORDER BY lesson_id ASC";
    return pdo_query($sql);
}
function khoahoc_selectAll($key, $category_id){
    $sql = "SELECT * FROM courses WHERE 1";
    if ($key != "") {
        $sql .= " AND course_name LIKE '%".$key."%'";
    }
    if ($category_id > 0) {
        $sql .= " AND category_id ='".$category_id."'";
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
function lesson_select_one(){
    $sql = "SELECT * FROM lessons ORDER BY lesson_id ASC";
    return pdo_query($sql);
}

?>