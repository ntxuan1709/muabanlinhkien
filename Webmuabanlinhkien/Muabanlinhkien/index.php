<?php 
  session_start();
  include 'config.php';
  if( !isset($_SESSION["user"])){
    header('login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<img src="img/logo.jpg" width="1200px" height="250px"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Grand</title>
	<link rel = "icon" href =  "img/grand.ico" type = "image/x-icon">
</head>
<body>
	<?php

		if (isset($_GET['page_layout'])){
			switch ($_GET['page_layout']){
				case 'danhsach':
					require_once 'sanpham/danhsach.php';
					break;
				case 'them':
					require_once 'sanpham/them.php';
					break;
				case 'sua':
					require_once 'sanpham/sua.php';
					break;
				case 'xoa':
					require_once 'sanpham/xoa.php';
					break;
				case 'admin':
					require_once 'nguoidung/admin.php';
					break;
				case 'staff':
					require_once 'nguoidung/staff.php';
					break;
				case 'customer':
					require_once 'nguoidung/customer.php';
					break;
				case 'item':
					require_once 'action/item.php';
					break;
				case 'thongke':
					require_once 'action/thongke.php';
					break;
				case 'listuser':
					require_once 'action/listuser.php';
					break;
				case 'home':
					require_once 'home.php';
					break;
				case 'login':
					require_once 'login.php';
					break;
				case 'register':
					require_once 'register.php';
					break;
				default:
					require_once 'sanpham/danhsach.php';
					break;

			}
			}else{
				require_once 'login.php';
		}
	 ?>
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