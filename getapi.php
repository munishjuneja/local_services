<?php 
	include 'classes/userInfoClass.php';

	$getObj = new UserInfoClass;
	$insObj = new UserInfoClass;

	if($_POST['submit']){
		$result = $getObj->getAllUsers();
		$storearr = array();
		$i=0;

		while($resultintoarray = mysqli_fetch_array($result)){

				$intermediatearray = array();
				$intermediatearray['contact']=$resultintoarray['contact'];
				$intermediatearray['name']=$resultintoarray['name'];
				$intermediatearray['email']=$resultintoarray['email'];
				$intermediatearray['password']=$resultintoarray['password'];
				$intermediatearray['address']=$resultintoarray['address'];
				$storearr[$i]=$intermediatearray;
				$i++;

		}

	if ($_POST['insert']) {
				$getObj->contact = $_GET['contact'];
				$getObj->name = $_GET['name'];
				$getObj->email = $_GET['email'];
				$getObj->password = $_GET['password'];
				$getObj->address = $_GET['address'];
	}

		echo json_encode($storearr);


		
	}


 ?>