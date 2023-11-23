


<?php
include_once('../connect.php');
$conn =pdo_get_connection();

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm khóa học</title>
</head>
<body>
    <h2>Thêm khóa học</h2>
    <form method="POST" action="xuly.php">
        <table border="1" width="50%" style="border-collapse: collapse;">
            <tr>
                <th colspan="2">Điền thông tin khóa học</th>
            </tr>
            <tr>
                <td>Tên khóa học</td>
                <td><input type="text" name="courseName" required></td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><textarea name="description" rows="5" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>Giảng viên</td>
                <td><input type="text" name="instructor" required></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="number" name="price" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Thêm khóa học" name="themkhoahoc"></td>
            </tr>
        </table>
    </form>
</body>
</html>
