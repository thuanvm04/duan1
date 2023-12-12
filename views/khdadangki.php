<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    margin: 0;


  }
  .content_khdki {
  
    margin: 20px 0 150px 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  table {
    border-collapse: collapse;
    margin: 20px;
    box-shadow: 0 1px 2px 0 rgba(39, 147, 231, 0.1), 0 2px 6px 2px rgba(0, 136, 240, 0.15);
    overflow: hidden;
    border-radius: 10px;
    background-color: #fff;
  }

  th,
  td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #4CAF50;
    color: white;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  .h1 {
    margin-top: 200px;
    text-align: center;
  }
</style>

<body>
 
    <div class="h1">
      <h1>Danh sách khoá học đã đăng kí</h1>
    </div>
    <div class="content_khdki">

      <table>
        <thead>
          <tr>


            <th>TÊN KHOÁ HỌC</th>
            <th>HỌC PHÍ</th>
            <th>GIÁO VIÊN</th>
            <th>LỚP</th>
            <th> KHAI GIẢNG</th>
            <th>THỜI GIAN BẮT ĐẦU</th>
            <th>THỜI GIAN KẾT THÚC</th>
            <th>THỜI GIAN ĐĂNG KÍ</th>
            <th>PHƯƠNG THỨC THANH TOÁN</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // Kiểm tra nếu $courses_dki trống
          if (is_array($courses_dki) && !empty($courses_dki)) {
            foreach ($courses_dki as $kh) {
              extract($kh);
              echo '<tr>
                    <td>' . htmlspecialchars($course_name) . '</td>
                    <td>' . htmlspecialchars($course_price) . '</td>
                    <td>' . htmlspecialchars($instructor) . '</td>
                    <td>' . htmlspecialchars($classname) . '</td>
                    <td>' . htmlspecialchars($thoigian) . '</td>
                    <td>' . htmlspecialchars($time_start) . '</td>
                    <td>' . htmlspecialchars($time_end) . '</td>
                    <td>' . htmlspecialchars($timestamp) . '</td>
                    <td>' . htmlspecialchars($pttt) . '</td>
                  </tr>';
            }
          } else {
            echo '<tr><td colspan="7" style="text-align: center;">Chưa đăng kí khoá học nào</td></tr>';
          }

          ?>



        </tbody>
      </table>
    </div>


</body>

</html>