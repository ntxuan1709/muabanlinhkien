<?php 
	include 'config.php';
	$sql = "SELECT * FROM user inner join user_level on user.level_id = user_level.level_id ";
	$query = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<img src="img/logo.jpg" width="1200px" height="250px"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
	<link rel = "icon" href =  "img/grand.ico" type = "image/x-icon">
	<link rel = "stylesheet" href =  "bootstrap/css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class= "text-center">Đăng nhập</h1>
					<p>
						<?php 
							if(isset($_SESSION["thongbao"])) {
								echo $_SESSION["thongbao"];
								unset($_SESSION['thongbao']);
							}	
						?>
					</p>
				<form action="login_submit.php" method = "POST">

					<div class="form-group">
						<label for="username">Tên đăng nhập</label>
						<input type="text" class = "form-control" name= "username">
					</div>

					<div class="form-group">
						<label for="password">Mật khẩu</label>
						<input type="password" class = "form-control" name= "password">
					</div>

					<div class="form-group form-check">
						<input type="checkbox" class= "form-check-input" name = "remember-me">
						<label for="remember-me" class = "form-check-label">Nhớ mật khẩu</label>
					</div>

					<button type  = "submit" name = "submit" class = "btn btn-primary">Đăng nhập</button>
					<button type  = "reset" name = "reset" class = "btn btn-primary">Reset</button>

				</form>

				<form action="register.php" method = "POST">
					<h3>Bạn chưa có tài khoản?</h3>
					<button type  = "register" name = "register" class = "btn btn-primary">Đăng ký</button>
				</form>
			</div>
		</div>
	</div>
</body>
<footer align="center">
			<br />
			<marquee class="chuchay">One LOVE one FUTURE</marquee>
			<div>Mua bán linh kiện điện tử</a></div>
			<br />
			<b>Địa chỉ: Định Công Thượng, Hoàng Mai, Hà Nội</b>
			<br />
			<br />
			<p>Hotline : 0367899999 ~ 0968686868</p>
</footer>
</html>