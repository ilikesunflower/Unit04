<?php 
 	session_start();

    
	if (isset($_GET['code']) && isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['email'])&& isset($_GET['address'])&& isset($_GET['GT'])) {
		# code...
		$student = array(
			'code' => $_GET['code'],
			'name'=> $_GET['name'],
			'email'=> $_GET['email'],
			'address'=> $_GET['address'],
			'phone'=> $_GET['phone'],
			'GT'=> $_GET['GT'],
    );
		$_SESSION['student']= $student;
		// $_SESSION['student']['name']= $_POST['name'];
		// $_SESSION['student']['email']= $_POST['email'];
		// $_SESSION['student']['address']= $_POST['address'];
		// $_SESSION['student']['phone']= $_POST['phone'];
		// $_SESSION['student']['GT']= $_POST['GT'];
	}
	?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
			<style type="text/css">
				li{
					float: left;
				}
			</style>
		</head>
		<body>
			<h1  align="center">THÔNG TIN SINH VIÊN</h1>
			<ul><li>MÃ SỐ SINH VIÊN:<?php 
				echo $_SESSION['student']['code'] ; ?></li>
				<br>
				<li>HỌ VÀ TÊN:<?php 
				echo $_SESSION['student']['name'] ; ?>
				</li>
				<br>
				<li>SỐ ĐIỆN THOẠI:<?php 
				echo $_SESSION['student']['phone'] ; ?></li><br>
				<li>EMAIL:<?php 
				echo $_SESSION['student']['email'] ; ?></li><br>
				<li>SỐ ĐIỆN THOẠI:
					<?php 
				echo $_SESSION['student']['phone'] ; ?>
				</li><br>
				<li>GIỚI TÍNH:<?php 
				echo $_SESSION['student']['GT'] ; ?></li><br>
				<li>ĐỊA CHỈ:<?php 
				echo $_SESSION['student']['address'] ; ?></li><br>
			</ul>
		</body>
		</html>
	<?php
 ?>