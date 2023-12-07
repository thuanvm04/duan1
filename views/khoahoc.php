<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>TẤT CẢ KHOÁ HỌC</h2>
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php?act=home">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">
                                       
                                    
                                        <form action="index.php?act=listkh_view" method="POST" class="row2 breadcrumb">
                                            <input class="ml15 form_dm_listkh" type="text" name="key" width="30px">
                                            <select name="danhmuc" class="ml15 danhmuc">
                                                <option value="0" selected>TẤT CẢ</option>
                                                <?php
                                                foreach ($danhmuc as $dm) {
                                                    extract($dm);
                                                    echo '<option class=bgr_danhmuc value="' . $category_id . '">' . $category_name . '</option>';
                                                }
                                                ?>
                                            </select>

                                            <input class="danhmuc_option ml15" type="submit" name="listloc" value="TÌM KIẾM">
                                        </form>
                                    </li>
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
<div class="section-title center-align text-center mt-50">
    <H1>TẤT CẢ KHOÁ HỌC</H1>
</div>

<section class="shop-area pt-120 pb-120 p-relative " style=" background-image: url(img/bg/blog-bg-aliments.png); background-repeat: no-repeat; background-position: center center;background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">
            <?php
            if (isset($_POST['listloc'])) {
                $temp = $view;
            } else {
                $temp = $khnew;
            }
            foreach ($temp as $kh) {
                extract($kh);
                $lessonId = $lesson_id;
                $lessonName = getLessonName($lessonId);

                if (is_array($lessonName)) {
                    $lessonName = implode(', ', $lessonName);
                }
                echo '    <div class="col-lg-4 col-md-6">
                <div class="product couress-box mb-40">
                    <div class="product__img">
                        <a href="index.php?act=detail&spct=' . $course_id . '"><img src="admin/image/' . $image . '" alt=""></a>
                        <div class="mb">
                        
   

                        </div>
                    </div>
                    <div class="product__content pt-30">
                        <ul class="course-meta course-meta2 review style2 clearfix mb-30">
                            <li class="author">
                                <div class="thumb">
                                    <img src="img/testimonial/testi_avatar.png" alt="image">
                                </div>

                                <div class="text">
                                    <a href="#">' . $instructor . '</a>
                                    <p>Teacher</p>
                                </div>
                            </li>


                        </ul>
                        <div class="price">' . $price . '</div>
                        <h4 class="pro-title"><a href="index.php?act=detail&spct=">' . $course_name . '</a></h4>
                        <p>' . $description . '</p>
                        <ul class="course-meta desc">
                            <li>
                                <h6>'.$thoigian.'</h6>
                                <span> KHAI GIẢNG</span>
                            </li>

                            <li>
                                <h6>'.$classname.'</h6>
                                <span>LỚP</span>
                            </li>

                            <li>
                                <h6><span class="course-time">' . $lessonName . '</span></h6>
                                <span>BUỔI HỌC</span>
                            </li>
                        </ul>

                 </div>
             </div>
        </div>';
            }
            ?>
        </div>
    </div>
</section>