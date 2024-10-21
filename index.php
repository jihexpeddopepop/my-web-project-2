<!DOCTYPE html>
<html lang="en">
<?php
include("connectdb.php");
?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/home/img/banner/home-left-8.png" type="image/png">
        <title>โรงพยาบาลวานรนิวาส</title>

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/home/img/banner/home-left-8.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================--> 
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	

	<div class="limiter">
		<div class="container">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-05.png" alt="IMG">
					<br>
					<br>
				<!-- <div class="banner_content">
					<p align="center">โรงพยาบาลวานรนิวาส ตระหนักและให้ความสำคัญต่อความเป็นส่วนตัวของท่าน โดยจะเก็บรวบรวมใช้และเปิดเผยข้อมูลส่วนบุคคลและจะดูแลรักษาข้อมูลส่วนบุคคลภายใต้ พ.ร.บ.คุ้มครองข้อมูลส่วนบุคคล พ.ศ.2562</p>
				</div> -->
						
				</div>

				<form class="login100-form validate-form" action="login_check.php" method="post" class="form-group">
					<span class="login100-form-title">
						<h1>หนังสือเวียน<h1>
					</span>
					<br>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="text" name="txt_username" class="form-control rounded-left" placeholder="Username" autofocus required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<!-- <i class="bi bi-person-circle"></i> -->
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input"  data-validate = "Password is required">
							<input class="input100" type="password" name="txt_password" class="form-control rounded-left" placeholder="Password" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
						</div>
				</form>
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	<!--<h6 align="right">จัดทำโดย นางสาวรุ่งลาวัลย์ ไฮวัง &nbsp; &nbsp;</h6>-->
	
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>