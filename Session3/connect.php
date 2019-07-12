<?php
	$server = 'localhost'; //$server = '127.0.0.1'
	$username = 'root'; // username default
	$password = ''; // password default1
	$database = '19php01_demo1'; // ket noi den database nay
	$connect = mysqli_connect($server , $username , $password , $database);
	if ($connect == FALSE) {
		echo "Connect Fail".mysqli_connect_error();
	}else{
		echo "Connect success!";
	}
	$name = 'Quang Le'; // $name = $_POST['name'];
	$email = 'lmqdn14898@gmail.com';
	$phone = '0763130155';
	$avatar = 'anh2.jpg';
	$city = 'Quang Nam';
	$gender = 'Nam';

	// cau lenh insert du lieu
	$sql = "INSERT INTO user (name , email, phone, avatar, city, gender) VALUES ('$name','$email','$phone','$avatar','$city','$gender')";

	// thuc thi cau lenh
	if (mysqli_query($connect, $sql) == TRUE) {
		echo "Register success!";
	}else{
		echo "Register error";
	}
?>