<?php

if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    session_unset(); // Xóa tất cả các biến session
    session_destroy(); // Hủy phiên session
}
?>
<!-- footer -->
<footer class="footer-bg footer-p fix" style="background-image: url(img/bg/footer-bg.png); background-repeat: no-repeat; background-position: center;">
    <div class="footer-top pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12">
                    <div class="footer-widget mb-30">
                        <img src="img/logo/f_logo.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-sm-12">
                    <div class="footer-widget footer-link mt-20 text-center">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html"> About Us</a></li>
                            <li><a href="main.php?act=course"> Courses </a></li>
                            <li><a href="contact.html"> Events</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-12">
                    <div class="footer-widget footer-social mt-15 text-right text-xl-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-center pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-between">
                <!-- ... (No changes in this part) ... -->
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    Copyright &copy; 2021 Luxia. All rights reserved.
                </div>
                <div class="col-lg-6 text-right text-xl-right">
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</footer>
<!-- footer-end -->
		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/js_isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/parallax-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/element-in-view.js"></script>
        <script src="js/main.js"></script>
        </body>


</html>