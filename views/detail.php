
    <!-- offcanvas-area -->
    <div class="offcanvas-menu">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
            <input type="text" name="s" id="search" value="" placeholder="Search" />
            <button><i class="fa fa-search"></i></button>
        </form>


        <div id="cssmenu3" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-2" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery Study</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
            </ul>
        </div>

        <div id="cssmenu2" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-1" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-end -->
    <main>
        <!-- search-popup -->
        <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content search-popup">
                    <div class="text-center">
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>


        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(../img/testimonial/test-bg.png)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Courses Details</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- Project Detail -->
        <section class="project-detail">
            <div class="container">
                <!-- Lower Content -->
                <div class="lower-content">
                    <div class="row">
                        <?php
                        
                        // Assume $courseId is the variable containing the selected course ID
                        $courseId = isset($_GET['spct']) ? $_GET['spct'] : 0;

                        // Fetch details based on $courseId and populate $course array
                        $course = get_course_details($courseId);

                        // Check if $course is not null before proceeding
                        if ($course) :
                        ?>
                            <!-- Display course details -->
                            <div class="text-column col-lg-8 col-md-8 col-sm-12">
                                <h2><?php echo $course['course_name']; ?></h2>
                                <ul class="course-meta review style2 clearfix mb-30">
                                    <li class="author">
                                        <div class="thumb">
                                            <img src="../img/testimonial/testi_avatar.png" alt="image">
                                        </div>
                                        <div class="text">
                                            <a href="#"><?php echo $course['instructor']; ?></a>
                                            <p>Teacher</p>
                                        </div>
                                    </li>
                                    <li class="categories">
                                        <a href="#" class="course-name"><?php echo $course['course_name']; ?></a>
                                        <p>Lesson Name</p>
                                    </li>
                                </ul>
                                <div class="upper-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">

                                        <figure class="image">
                                            <img src="../admin/image/<?php echo $course['image']; ?>" alt="">
                                        </figure>



                                    </div>
                                </div>
                                <div class="inner-column">
                                    
                                    <p><span class="dropcap">U</span> <?php echo $course['intro']; ?></p> <br>
                            
                            <h4>Study Options:</h4>
                            <table class="table table-bordered mb-30">
													<thead>
														<tr>
															<th>Qualification</th>
															<th>Length</th>
															<th>Code</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Bsc (Hons)</td>
															<td>3 years full time</td>
															<td>CDX3</td>
														</tr>
														<tr>
															<td>Bsc </td>
															<td>4 years full time</td>
															<td>CDX4</td>
														</tr>
													</tbody>
												</table>
                            <h4>What You Will Learn</h4>
                            <p> Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit </p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <ul class="pr-ul">
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                       Crawl accessibility so engines can read your website
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        Share-worthy content that earns links, citations
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                      Keyword optimized to attract searchers & engines
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                       Title, URL, & description to draw high CTR in the rankings
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                       Great user experience including a fast load speed
                                    </div>
                                </li>
                               
                            </ul>
                                </div>
                            </div>
                            <!-- Sidebar with course details -->
                            
                            <div class="col-lg-4">
                                <aside class="sidebar-widget">
                                    <section class="widget widget_search">
                                        <div class="course-widget-price">

                                            <h2 class="widget-title"><?php echo $course['course_name']; ?></h2>
                                            <ul>
                                                <!-- Additional details here -->
                                            </ul>
                                            <h6 class="pt-20 pb-20">HỌC PHÍ: <span><?php echo $course['price']; ?></span></h6>
                                            <a class="btn ss-btn" href="#">ĐĂNG KÍ KHOÁ HỌC</a>
                                        </div>
                                        <section id="categories-1" class="widget widget_categories">
                             <h2 class="widget-title">Categories</h2>
                             <ul>
                                <li class="cat-item cat-item-16"><a href="#">Branding</a> (4)</li>
                                <li class="cat-item cat-item-23"><a href="#">Corporat</a> (3)</li>
                                <li class="cat-item cat-item-18"><a href="#">Design</a> (3)</li>
                                <li class="cat-item cat-item-22"><a href="#">Gallery</a> (3)</li>
                             </ul>
                          </section>
                                    </section>
                                </aside>
                            </div>
                        <?php else : ?>
                            <div class="col-lg-12">
                                <p>Course not found!</p>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                
            </div>

            </div>
            

        </section>
        <!-- End Project Detail -->
        <!-- End Project Detail -->
    </main>
    <<!-- main-area-end -->


        <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Include other JS dependencies as needed -->
</body>

</html>