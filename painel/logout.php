<?php 

	require_once("classe/Login.php");

	$obj_login = new Login();

	$obj_login->logout();

	header("Location: login.php");