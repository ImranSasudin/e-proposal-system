<?php
	echo "Hello";
	include "connection.php";
	session_start();
	
	
		$id = $pass = "";
		$id = $_POST["id"];
		$pass = $_POST["password"];
		
		//find user info in db
		$sqlUserLogin = "select * from user where user_id = '$id' and user_password = '$pass'";
		$res = mysqli_query($conn,$sqlUserLogin);
		$count = mysqli_num_rows($res);
		
		//find admin info in db
		$sqlAdminLogin = "select * from admin where admin_id = '$id' and admin_password = '$pass'";
		$res2 = mysqli_query($conn,$sqlAdminLogin);
		$count2 = mysqli_num_rows($res2);
		
		if($count == 1){
			$_SESSION['user_id'] = $id;
			header("location:index.php?successLogin=true");
			}
		else if($count2 == 1){
			$_SESSION['admin_id'] = $id;
			header("location:index.php?successLogin=true");
		}
		else {
		header("location:login.php?msg=failed");
		}
		?>