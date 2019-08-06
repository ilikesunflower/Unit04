<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	  <div class="container">
	  	<h1 align="center">ZENGROUP-PHP-SESSION</h1>
	  	<form action="add_process.php" method="GET">
			<label>Mã sinh viên</label>
	  		<input type="text" class="form-control" placeholder="NHập mã số sinh viên" name="code">
	  		<label>Họ và tên</label>
	  		<input type="text" class="form-control" placeholder="NHập họ và tên" name="name">
	  		<label>Số điện thoại</label>
	  		<input type="text" class="form-control" placeholder="NHập số điện thoại" name="phone">
	  		<label>Email</label>
	  		<input type="text" class="form-control" placeholder="NHập email" name="email">
	  		<label>Giới tính</label><br>
	  		<input type="radio" name="GT" value="Nam">Name
			<input type="radio" name="GT" value="nữ">Nữ<br>
			<label>Nhập địa chỉ</label>
			<input type="text" name="address"class="form-control"><br>
			<button  type="submit" class="btn btn-primary">Lưu thông tin</button>


	  	</form>

	  </div>
	
</body>
</html>