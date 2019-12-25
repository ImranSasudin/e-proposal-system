<?php
include 'connection.php';

$sql = "INSERT INTO user(user_id,user_name,user_password,user_course,user_semester) VALUES ('$_POST[id]','$_POST[name]',
						'$_POST[password]','$_POST[course]','$_POST[semester]')";

if(!mysqli_query($conn,$sql)){
	die('Erro:' . mysqli_error());
}

header("Location: login.php?successRegister=true");

?>