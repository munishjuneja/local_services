<?php 
	include '../classes/servicesClass.php';

	$getObj = new Service;
	if ($_GET['method']=='getservices') {
		$result = $getObj->allServices();
				$storearr = array();
				$i=0;
		while($resultintoarray = mysqli_fetch_array($result)){
			$intermediatearray = array();
			$intermediatearray['name']=$resultintoarray['name'];
			$storearr[$i]=$intermediatearray;
						$i++;

		}
		$newarry = array(
						$storearr
					);

				$finalarray['services']=$storearr;
				echo json_encode($finalarray);
		
	}
		

 ?>
