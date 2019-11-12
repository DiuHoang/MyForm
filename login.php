<?php
	$username = "admin";
	$password = "admin";

	$inputUser = $_POST["username"];
	$inputPass = $_POST["pass"];

	if($username == $inputUser && $password == $inputPass){
		echo "Login thanh cong";
	}
?>