<?php
require_once "./taikhoan.php"; 


session_start();

// Biến lưu trữ thông báo lỗi
$error_message = "";

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST")
         {
    if (isset($_POST["login"])) {
       
        $full_name = $_POST["full_name"];
        $password = $_POST["password"];

        $user = check_user($password, $full_name);

        if ($user) {
            echo "Login form submitted!";
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["username"] = $user["username"];
            
            // Chuyển hướng đến trang chính sau khi đăng nhập thành công
            header("Location: index.php");
            exit();

            
        } else {
            // Đăng nhập không thành công, hiển thị thông báo lỗi
            $error_message = "Invalid email or password";
        }
    } elseif (isset($_POST["register"])) {
        // Xử lý đăng ký
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fullName = $_POST["fullName"];

        // Kiểm tra tính hợp lệ của dữ liệu đăng ký
        if (empty($email) || empty($password) || empty($fullName)) {
            $error_message = "All fields are required for registration";
        } else {
            // Thực hiện đăng ký và chuyển hướng đến trang chính
            them_khach_hang($password, $fullName, $email);
            header("Location: login.php");
            exit();
        }
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
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="login.php" method="post" id="registerForm">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="fullName" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post" id="loginForm">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" name="full_name" placeholder="User">
                <input type="password" name="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>