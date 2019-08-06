
<?php 
	// $user= $_GET['user'];
	// $pw= $_GET['pwd'];
	// echo $user;
	// echo "<br>".$pw;
if (isset($_POST['user'])) {
	# code...
	$user= $_POST['user'];
}
if (isset($_POST['pwd'])) {
	# code...
	$pw= $_POST['pwd'];
}
	echo $user;
	echo "<br>".$pw;
 ?>