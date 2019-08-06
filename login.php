<?php 
session_start();
if (isset($_POST['user'] )&& isset($_POST['pw'] )) {
		# code...
	$username= $_POST['user'];
	$pw= $_POST['pw'];
}
if ($username=="admin"&& $pw=="1234") {
		
	$_SESSION['username']=$username;
	$_SESSTION['password']=$pw;
	?>
	<!DOCTYPE>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
			<h1>HELLO!!!</h1>
			<form action="logout.php">
			<button type="submit" > LOGOUT</button>
			</form>
	</body>
	</html>
	<?php
}else{
	echo "BAN DA NHAP SAI EMAIL VA MAT KHAU";
	?>
	<!DOCTYPE>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
			<h1>NHAP LAI!!!</h1>
			<form action="logout.php">
			<button type="submit"  > NHAP LAI</button>
			</form>
	</body>
	</html>
	<?php
	header(loca)
}
?>
