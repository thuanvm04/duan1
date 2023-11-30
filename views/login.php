<?php
 


// session_start();

// Biến lưu trữ thông báo lỗi
$error_message = "";

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Sử dụng prepared statements để tránh SQL Injection
        $user = check_user($password, $username);

        if ($user) {
            // Đăng nhập thành công
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["role"] = $user["role"];

            // Redirect dựa vào vai trò của người dùng
            if ($_SESSION["role"] == "admin") {
                header("Location: admin"); // Điều hướng đến trang quản trị admin
            } else {
                header("Location: index.php"); // Điều hướng đến trang chính
            }
            exit();
        } else {
            // Đăng nhập không thành công, hiển thị thông báo lỗi
            $error_message = "Invalid email or password";
        }
    } elseif (isset($_POST["register"])) {
        // Xử lý đăng ký
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Kiểm tra tính hợp lệ của dữ liệu đăng ký
        if (empty($username) ||empty($email) ||  empty($password) ) {
            $error_message = "All fields are required for registration";
        } else {
            // Sử dụng prepared statements để tránh SQL Injection
            
            them_khach_hang($username,$password,  $email);

            header("Location: index.php?act=login");      
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
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="index.php?act=login" method="post" id="registerForm">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="username" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <input type="email" name="email" placeholder="Email">
                
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="index.php?act=login" method="post" id="loginForm">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" name="username" placeholder="User">
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

    <script src="js/login.js"></script>
</body>

</html>
