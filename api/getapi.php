<?php 
	include '../classes/userInfoClass.php';


			$getObj = new UserInfoClass;
			$insObj = new UserInfoClass;

			if($_POST['getuser']){
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
				$newarry = array(
						$storearr
					);

				echo json_encode((object)($newarry));

			}
			if ($_POST['adduser']) {
				
					$insObj->contact=$_POST['contact'];
					$insObj->name=$_POST['name'];
					$insObj->email=$_POST['email'];
					$insObj->password=$_POST['password'];
					$insObj->address=$_POST'address'];
					$insObj->addUser();		
			}


 ?>
