<?php

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


    default:
        include "./views/home.php";
        break;
}

?>
