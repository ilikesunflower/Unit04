
<?php 
	session_start();


 ?><!DOCTYPE html>
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
    <style type="text/css">
    	td>a{
    		margin-left: 30px;
    	}
    	td{
    		color: #ffffff;
    		padding-left: 10px;
    	}
    	table{
    		
    		border-radius: 5px;
    		background-color: gray;
    	}
    	h4{
    		width: 15%;
    		background: gray;
    	}

    </style>
</head>
<body>
		<div class="container">
			<h1 align="center">DANG SÁCH SINH VIÊN</h1>
			<form action="add.php">
				<button type="submit" class="btn btn-primary">THÊM MỚI</button>
			</form>
			<?php 
					if (isset($_COOKIE['msg'])) {
						# code...
						
						?>
							<h4><?php echo $_COOKIE['msg']; ?></h4>
						<?php						
					}
			 ?>
			 <table width="80%;">
			 	<tr>
			 		<td>MÃ SỐ SINH VIÊN</td>
			 		<td>HỌ VÀ TÊN</td>
			 		<td style="padding-left: 100px;">ACTION</td>
			 	</tr>
			 	<?php 
			 		foreach ($_SESSION['student'] as $key => $value) {
			 			# code...
			 			?>
							<tr>
								<td><?php echo $value['code'] ;
								 ?></td>
								<td><?php echo  $value['name']  ?></td>
								<td><a href="delete.php?code=<?=$value['code']?>" class="btn btn-primary">DELETE</a>
									<a href="detail.php?code=<?=$value['code']?>" class="btn btn-primary">DETAIL</a></td>

							</tr>
			 			<?php

			 		}
			 	 ?>
			 </table>
		</div>
	
</body>
</html>