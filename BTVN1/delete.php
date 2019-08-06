<?php 
	session_start();
	$xoa= $_GET['code'];
	foreach ($_SESSION['student'] as $key => $value) {
		# code...
		if ($key == $xoa) {
			# code...
			unset($_SESSION['student'][$xoa]);
			setcookie('mgs','XÓA THÀNH CÔNG', time()+60);
			header('Location: list.php');
		}
	}
 ?>