<?php 
	$user = $_POST['name'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == 123456 ) {
		header("location:question.php");
	}
	else{
		header("location:index.php");
	}
 ?>