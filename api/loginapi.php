<?php 
	 include_once '../classes/userInfoClass.php';
	 $getObj = new UserInfoClass;
	 if ($_GET['method']=='login') {
	 	$getObj->email=$_GET['email'];
	 	$getObj->password=$_GET['password'];
	 	$result = $getObj->getUser();
	 	$arr=array();
	 	if (mysqli_num_rows($result)>0) {
	 		$res = mysqli_fetch_array($result);
	 		$arr['result']=1;
	 		$arr['message']="Logged In successfully";
	 		$newarr=[
					"id"=>$res['id'],	
			 		"username"=>$res['name'],
			 		"email"=>$res['email'],
			 		"Phone_number"=>$res['contact'],
			 			
	 			];
	 		$arr['user_details']=$newarr;

	 	}
	 	else{
	 		$arr['result']=0;
	 		$arr['message']="Incorrect email or password";
	 	}
	 	echo json_encode($arr);
	 }
 ?>