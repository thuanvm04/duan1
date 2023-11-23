<?php
include_once('../pdo.php');
$conn = pdo_get_connection();

// Kiểm tra xem biến $conn có giá trị không
if ($conn) {
    // Kiểm tra xem form đã được gửi chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["themkhoahoc"])) {
        // Lấy dữ liệu từ form
        $courseName = $_POST['courseName'];
        $description = $_POST['description'];
        $instructor = $_POST['instructor'];
        $price = $_POST['price'];

        // Truy vấn để thêm khóa học
        $sql_themkhoahoc = "INSERT INTO courses (course_name, description, instructor, price) 
                            VALUES (:courseName, :description, :instructor, :price)";
        
        $stmt = $conn->prepare($sql_themkhoahoc);
        $stmt->bindParam(':courseName', $courseName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':instructor', $instructor);
        $stmt->bindParam(':price', $price);

        if ($stmt->execute()) {
            echo "Thêm khóa học thành công!";
        } else {
            echo "Lỗi khi thêm khóa học: " . $stmt->errorInfo()[2];
        }
    }
} else {
    echo "Không thể kết nối đến cơ sở dữ liệu.";
}
?>
