<?php
session_start();
require_once('../model/pdo.php');

if (isset($_POST['action']) && $_POST['action'] == 'dangky') {
    $taikhoan_dk = $_POST['taikhoan_dk'];
    $matkhau_dk = $_POST['password_dk'];
    $email_dk = $_POST['email_dk'];

    $sql_dk = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

    try {
        pdo_execute($sql_dk, $taikhoan_dk, $matkhau_dk, $email_dk);
        echo '<p style="color:green">Đăng ký thành công!</p>';
    } catch (PDOException $e) {
        echo '<p style="color:red">Đăng ký thất bại. ' . $e->getMessage() . '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Đăng Ký | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="">
                <h1>Đăng Ký</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng email và mật khẩu</span>
                <div class="taikhoan">
                    <label for=""> Tài Khoản</label><br>
                    <input type="text" name="taikhoan_dk">
                </div>
                <div class="matkhau">
                    <label for=""> Mật khẩu</label><br>
                    <input type="password" name="password_dk">
                </div>
                <div class="email">
                    <label for=""> Email</label><br>
                    <input type="text" name="email_dk">
                </div>
                <input type="hidden" name="action" value="dangky">
                <div>
                    <input type="submit" value="Đăng Ký">
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
