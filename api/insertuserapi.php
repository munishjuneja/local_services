<?php 
	include_once '../classes/userInfoClass.php';
	include_once '../classes/userClass.php';

	$obj = new userInfoClass;
	$checkemailobj = new user;

	if ($_GET['method']=='insertuser') {
		$arr = array();
		$i=0;
		$obj->contact = $_GET['contact'];
		$obj->name = $_GET['name'];
		$obj->email = $_GET['email'];
		$obj->password = $_GET['password'];;
		$checkemailobj->email = $_GET['email'];
		$check= $checkemailobj->checkemail();
		
		$rslt = 0;
		$message="";
		if($check>0){
			$rslt = 0;
			$message = "Email already registered";
		}
		else{
			$rslt = 1;
			$message = "Registered successfully";
		}
		$arr['result']=$rslt;
		$arr['message']=$message;

		echo json_encode($arr);
		if($rslt==1){
			$obj->addUser();
		}
		
		
	}

 ?>