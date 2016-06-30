<?php 
	include_once '../classes/userInfoClass.php';

	$obj = new userInfoClass;

	if ($_GET['method']=='insertuser') {
		$obj->contact = $_GET['contact'];
		$obj->name = $_GET['name'];
		$obj->email = $_GET['email'];
		$obj->password = $_GET['password'];
		$obj->address = $_GET['address'];
		$obj->addUser();
	}

 ?>