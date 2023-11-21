<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ DANH MỤC</th>
                <th>TÊN DANH MỤC</th>
                <th></th>
            </tr>

            <?php
                foreach ($danhmuc as $dm) {
                    extract($dm);
                    // $category_id= $dm['category_id']; // Lấy mã loại từ dữ liệu hiện tại
                    $suadm = "index.php?act=suadm&category_id=".$category_id;
                    $xoadm = "index.php?act=xoadm&category_id=".$category_id;

                    echo '<tr>
                            <td><input type="checkbox" name="" id="checkbox"></td>
                            <td>'.$category_id.'</td>
                            <td>'.$category_name.'</td>
                            <td> 
                                <a href="'.$suadm.'"><input type="button" value="Sửa"></a>  
                                <a href="'.$xoadm.'"><input type="button" value="Xóa"></td></a>
                        </tr>'
                    ;
                }
            ?>
            
           </table>
           </div>
           <div class="row mb10 ">
           <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>
        <?php
            if (isset($thongbao) && $thongbao != "") {
              echo $thongbao;
            }
          ?>
