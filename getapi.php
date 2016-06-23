<?php 
	include 'classes/userInfoClass.php';

	$getObj = new UserInfoClass;
	$insObj = new UserInfoClass;

	if($_GET['method']=="getuser"){
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



		echo json_encode($storearr);


		
	}


 ?>