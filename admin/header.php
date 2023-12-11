<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php?act=login");
    exit();
}
?>


<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Lập trình không khó</a>
		
			
		</nav>
  
		<!-- NAVBAR -->
	
  