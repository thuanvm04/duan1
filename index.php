<?php
// include "views/header.php";

// $act = isset($_GET['act']) ? $_GET['act'] : '';

// switch ($act) {
//     case 'login':
//         include "./views/login.php";
        
//         break;

//     case 'dangky':
//         include "./views/dangky.php";
//         break;

//     default:
//         include "./views/home.php";
//         break;
// }

// include "./views/fotter.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="wrapper">
        <?php

        session_start();
        include "model/taikhoan.php";
        include "./views/header.php";
        include "./views/main.php";
        // include "./views/home.php";
        include "./views/fotter.php";
        ?>
    </div>
       
   

</body>

</html>