<?php

include "views/header.php";


if (isset($_GET['act'])&&($_GET['act'])!="") {
    $act = $_GET['act'];
    switch ($act) {
        case '':
          
            break;
       
        
        default:
            include "./views/home.php"; 
            break;
    }
}else{
   include_once "./views/home.php"; 
}
include "./views/fotter.php";

?>