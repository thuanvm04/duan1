<body>

    <div class="containerr" id="containerr">
        <div class="form-containerr sign-up">
            <form action="index.php?act=login" method="post" id="registerForm">
                <h1>Đăng ký</h1>
                
                <span>or use your email for registration</span>
                <input type="text" name="username" placeholder="Name" required>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="email" name="email" placeholder="Email" required>

                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-containerr sign-in">
            <form action="index.php?act=login" method="post" id="loginForm">

                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" name="username" placeholder="User" required>
                <input type="password" name="password" placeholder="Password" required>
                <p style="color: red; margin: 2px;"  class="error_message" >
                    <?php
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                    ?>
                </p>

                <a style="margin: 2px;" href="index.php?act=forgot_password">Forget Your Password?</a>
                <!-- <a style="margin: 2px;" href="index.php?act=doimatkhau">Change Password</a> -->
               
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="toggle-containerr">
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            <?php
            if ($isRegistrationSuccess) {
                echo 'alert("Registration successful! You can now log in.");';
            } elseif (!empty($error_message)) {
                echo 'alert("' . addslashes($error_message) . '");';
            }
            ?>
        });
    </script>
    
</body>

