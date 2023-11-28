<?php
// views/header.php

// Ensure no output has been sent to the browser before starting the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educato - DEV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Other CSS and JS files with root-relative paths -->

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="font-flaticon/flaticon.css">
    <link rel="stylesheet" href="css/dripicons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- header -->
    <header class="header-area header-three">  
			<div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu" style="display: block;">
                                        <ul>
                                            <li class="sub">
												<a href="index.php?act=home">Home</a>
											</li>
                                            <li><a href="index.php?act=home">About Us</a></li>
                                           
                                            <li class="sub"> 
                                              <a href="index.php?act=course">Courses</a>
                                               
                                            </li>
                                             <li class="sub"> 
                                              <a href="events.html">Events</a>
                                            </li>
                                            
                                           <li class="sub"><a href="#">Pages</a>
											
											</li>
                                            
											<li class="sub"> 
                                                <a href="blog.html">News</a>
                                                <ul>													
													<li><a href="blog.html">News</a></li>
													<li><a href="blog-details.html">News Details</a></li>
												</ul>
                                            </li>
                                                                        
										  
                                            <li><a href="contact.html">Contact</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                            <div class="col-xl-2 col-lg-2 text-right d-none d-xl-block mt-30 mb-30">
                                <div class="search-top2">
                                   <ul>
                                       
                                        <li><a href="#" class="menu-tigger"><i class="fas fa-search"></i></a></li>
                                        <li><a href="#" class="menu-tigger"><img src="img/icon/menu.png" alt="logo"></a></li>
                                    </ul>
                                </div>
                            </div>
                          
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
