<?php 

	include_once '../classes/userInfoClass.php';
	$obj = new UserInfoClass;

	if ($_GET['method']=='edituserdetails') {
		$obj->id = $_GET['user_id'];
		$obj->username = $_GET['username'];
		$obj->contact = $_GET['contact'];
		$obj->oldpassword = $_GET['oldpassword'];
		$obj->newpassword = $_GET['newpassword'];
		$output = $obj->editUser();
		if ($output==1) {
			$arr['result']=1;
			$arr['message']="Successfully updated";

			echo json_encode($arr);
		}
		else{
			$arr['result']=0;
			$arr['message']="Incorrect details entered";
			echo json_encode($arr);
		}

	}

 ?>