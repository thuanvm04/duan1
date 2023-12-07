
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border-radius: 10px;
      background-color: #fff;
    }

    th, td {
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
  </style>

<body>

<table>
  <thead>
    <tr>
      
    
      <th>Course Name</th>
      <th>Course Price</th>
      <th>Instructor</th>
      <th>Class Name</th>
      <th>Time Start</th>
      <th>Time End</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
                foreach ($listdki as $kh) {
                    extract($kh);
             

                    echo '<tr>
                            
                            <td>'.$course_name.'</td>
                            <td>'.$course_price.'</td>
                            <td>'.$instructor.'</td>
                            <td>'.$classname.'</td>
                            <td>'.$time_start.'</td>
                            <td>'.$time_end	.'</td>
                        </tr>'
                    ;
                }
            ?>
            
  </tbody>
</table>

</body>
</html>
