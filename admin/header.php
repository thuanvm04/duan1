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
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
			
		</nav>
  
		<!-- NAVBAR -->
	
  