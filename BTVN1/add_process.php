<?php 
 	session_start();
   // session_destroy();
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

    	$_SESSION['student'][$_GET['code']]=$student;
    
    	
		setcookie('msg', 'Thêm thành công', time()+ 120);
		header('Location: list.php');
	}
 ?>