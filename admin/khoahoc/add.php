
<main>
<div class="row2 container">
        <div class="row2 font_title">
        <h1>THÊM MỚI KHOÁ HỌC</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=addkh" method="POST" enctype="multipart/form-data">
            <!-- Mã -->
          <div class="row2 mb10 form_content_container">
          <h1>MÃ LỚP HỌC </h1> <br>
            <select name="danhmuc" id="">
              <option value="0" selected>Tất cả</option>
              <?php
                foreach ($danhmuc as $dm) {
                  extract($dm);
                  echo'<option value="'.$category_id.'">'.$category_name.'</option>';
                  
                }
              ?>
            </select>
          </div>
          <!-- Tên -->
          <div class="row2 mb10  form_content_container">
            <h1>TÊN KHOÁ HỌC</h1> <br>
            <input  class="" type="text" name="ten_kh" placeholder="Tên khoá học">
          </div>
          <!-- Mô tả -->
          <div class="row2 mb10">
            <h1>MÔ TẢ</h1> <br>
            <textarea  name="mo_ta" cols="70" rows="10"></textarea>
          </div>
          <!-- Đơn Giá -->
          <div class="row2 mb10  form_content_container">
            <H1>HỌC PHÍ</H1> <br>
            <input type="text" name="don_gia" placeholder="Học phí">
          </div>
          <!-- Hình ảnh -->
          <div class="row2 mb10">
           <H1>HÌNH ẢNH</H1><br>
            <input type="file" name="hinh" >
          </div>
          <!-- Giáo viên-->
          <div class="row2 mb10  form_content_container">
           <H1>GIẢNG VIÊN</H1><br>
            <input type="text" name="giang_vien" placeholder="Nhập vào tên giảng viên">
          </div>
          <!-- thời gian -->
           <!-- Giáo viên-->
           <div class="row2 mb10  form_content_container">
           <H1>THỜI GIAN</H1><br>
            <input type="text" name="thoigian" placeholder="Thời gian khoá học">
          </div>
          <!-- intro -->
          <div class="row2 mb10  form_content_container">
           <H1>INTRO</H1><br>
            <input type="text" name="intro" placeholder="Intro">
          </div>
         <!-- Buổi học -->
         <div class="row2 mb10">
           <H1>BUỔI HỌC</H1> <br>
            <select name="buoi_hoc" id="">
              <option value="0" selected>Tất cả</option>
              <?php
                foreach ($buoihoc as $bh) {
                  extract($bh);
                  echo'<option value="'.$lesson_id.'">'.$lesson_name.'</option>';
                  
                }
              ?>
            </select>
         
          </div>
          <div class="row mb10 btn_adddm">
          <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">

            <a href="index.php?act=listkh"><input class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
          
        </form>
        </div>
        <?php
            if (isset($thongbao) && $thongbao != "") {
              echo $thongbao;
            }
          ?>
</div>
</main>
		
	</section>