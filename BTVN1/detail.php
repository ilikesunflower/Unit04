<?php 
session_start();
	$code= $_GET['code'];
	$sv = array();
	foreach ($_SESSION['student'] as $key => $std) {
		if ($key==$code) {
			# code...
			$sv= $_SESSION['student'][$code];
			
		}
		
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
				echo $sv['code'] ; ?></li>
				<br>
				<li>HỌ VÀ TÊN:<?php 
				echo $sv['name'] ; ?>
				</li>
				<br>
				<li>SỐ ĐIỆN THOẠI:<?php 
				echo $sv['phone'] ; ?></li><br>
				<li>EMAIL:<?php 
				echo $sv ['email']; ?></li><br>
				<li>GIỚI TÍNH:<?php 
				echo $sv['GT'] ; ?></li><br>
				<li>ĐỊA CHỈ:<?php 
				echo $sv['address'] ; ?></li><br>
			</ul>
		</body>
		</html>
	<?php
 ?>