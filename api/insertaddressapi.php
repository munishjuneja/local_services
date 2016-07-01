<?php 
	include_once '../classes/subSubCategoryClass.php';

	$obj = new subSubCategory;
	if ($_GET['method']=='getaddress') {
		$obj->user_id = $_GET['user_id'];
		$obj->sub_child_id = $_GET['sub_child_id'];
		$obj->service_address = $_GET['service_address'];
		$obj->sub_id = $_GET['sub_id'];
		$obj->main_id = $_GET['main_id'];
		$obj->addUserServices();
		$arr['message']="Success";
		echo json_encode($arr);


	}

 ?>