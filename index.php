<?php
include "model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/khoahoc.php";

include "views/header.php";
$khnew= kh_selectAll_view();
$lsnew=lesson_select_one();
$act = isset($_GET['act']) ? $_GET['act'] : '';

switch ($act) {

    case 'login':
        include "login.php";
        break;
    case 'dangky':
        include "dangky.php";
        break;
    case 'dangxuat':
        include "logout.php";
        break;
        // case 'course':
            
           
            
        //     include "khoahoc.php";
        //     break;

    default:
        include "views/khoahoc.php";
        break;
}
 include "views/fotter.php";

?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="wrapper">
       

       session_start();
        include "model/taikhoan.php";
        include "model/danhmuc.php";
        include "model/khoahoc.php";
        include "views/header.php";
        include "views/main.php";
    
        include "views/fotter.php";
        ?>
    </div>
       
   

</body>

</html> -->