<!DOCTYPE html>
<html>
<head>
	<title>Register - Session 22</title>
	<style type="text/css">
		.error{
			color: :red;
		}
	</style>
</head>
<body>
	<?php
		$errName = '';
		$errEmail = '';
		$errPhone = '';
		$errBithday = '';
		$errCity = '';
		$errGender = '';

		if (isset($_POST['register'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$gender = isset($_POST['gender'])?$_POST['gender']:'';
			$bithday = $_POST['bithday'];
			$city = $_POST['city'];
			if ($name == '') {
				$errName = 'Please input your name ';
			}
				if ($email == '') {
				$errEmail = 'Please input your Email ';
		}
			if ($phone == '') {
				$errPhone = 'Please input your phone ';
		}
			if ($bithday == '') {
				$errBithday = 'Please input your bithday ';
		}
			if ($city == '') {
				$errCity = 'Please input your city ';
		}
			if ($gender == '') {
				$errGender = 'Please input your gender ';
		}
	 ?>
</body>
</html>