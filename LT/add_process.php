<?php 
	session_start();
	if (isset($_GET['code'])&& isset($_GET['name'])&& isset($_GET['phone'])&& isset($_GET['email'])&& isset($_GET['address'])&&isset($_GET['address'])) {
		# code...
		$studen=array(
			'code'=> $_GET['code'],
			'name'=>$_GET['name'];
			'phone'=> $_GET['phone'],
			'email' => $_GET['email'];
			

		);
		$_SERVER['student']
	}
 ?>