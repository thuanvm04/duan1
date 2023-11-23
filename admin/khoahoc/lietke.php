<?php

$relativePath = '../model/pdo.php';

if (file_exists($relativePath)) {
    include_once($relativePath);

 
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Truy vấn để lấy thông tin về khóa học
            $query = "SELECT * FROM courses";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            // Hiển thị danh sách khóa học trong bảng
            echo "<p>Liệt kê khóa học</p>";
            echo "<table border='1' style='width: 100%; border-collapse: collapse;'>";
            echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Tên khóa học</td>";
            echo "<td>Mô tả</td>";
            echo "<td>Giảng viên</td>";
            echo "<td>Giá</td>";
            echo "</tr>";

            $i = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $i++;

                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['course_name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['instructor'] . "</td>";
                echo "<td>$" . $row['price'] . "</td>";
                echo "<td>";
                echo "<a href='delete_course.php?course_id=" . $row['course_id'] . "'>Xóa</a>|";
                echo "<a href='edit_course.php?course_id=" . $row['course_id'] . "'>Sửa</a>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Đóng kết nối
        $conn = null;
    } else {
        echo "Không thể tạo kết nối.";
    }
} else {
    echo "Connection file not found.";
}

// Thêm mã debug
echo "Debug: Entered lietke.php";
?>
