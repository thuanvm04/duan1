<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="../css/contentadmin.css">
<<<<<<< HEAD
	


	
	<title>ADMIN E-DEV💕</title>

=======
	<title>ADMIN DEV💕</title>
>>>>>>> 46db43c4e70bcd3cb63a4046e29f8a4fbf2a5d2f
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">E-DEV</span>
		</a>
		
		<ul class="side-menu top">
		<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'home') ? 'active' : ''; ?>">
				<a href="index.php?act=home">
					<i class='bx bxs-home' ></i>
					<span class="text">TRANG CHỦ</span>
				</a>
			</li>

			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'adddm') ? 'active' : ''; ?>">
				<a href="index.php?act=adddm">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">DANH MỤC</span>
				</a>
			</li>
			
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'addkh') ? 'active' : ''; ?>">
				<a href="index.php?act=addkh">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">KHOÁ HỌC</span>
				</a>
			</li>
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'tongtien') ? 'active' : ''; ?>">
				<a href="index.php?act=tongtien">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">TỔNG TIỀN</span>
				</a>
			</li>
<<<<<<< HEAD
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'binhluan') ? 'active' : ''; ?>">
				<a href="index.php?act=binhluan">
=======
			<li>
				<a href="index.php?act=dsbl">
>>>>>>> 46db43c4e70bcd3cb63a4046e29f8a4fbf2a5d2f
					<i class='bx bxs-message-dots' ></i>
					<span class="text">BÌNH LUẬN</span>
				</a>
			</li>
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'dstk') ? 'active' : ''; ?>">
				<a href="index.php?act=dstk">
					<i class='bx bxs-group' ></i>
					<span class="text">THÀNH VIÊN</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li> 
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<script src="./js/script.js"></script>
	<!-- SIDEBAR -->
