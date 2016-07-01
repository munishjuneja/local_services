<?php 
	include_once '../classes/adminClass.php';
	$orderObj = new AdminPanel;

	if ($_GET['method']=='getorderhistory') {
		$orderObj->id=$_GET['user_id'];
		$result = $orderObj->getServices();

		$storearr = array();
				$i=0;

		while ($res = mysqli_fetch_array($result)) {
			$intermediatearray = array();
			$intermediatearray['order_id']=$res['service_id'];
			$intermediatearray['username']=$res['username'];
			$intermediatearray['service_name']=$res['service_name'];
			$intermediatearray['sub_category_name']=$res['sub_category_name'];
			$intermediatearray['sub_child_category_name']=$res['sub_child_category_name'];
			$intermediatearray['status']=$res['status'];

			// $intermediatearray['']
			$storearr[$i]=$intermediatearray;
			$i++;

		}
		$newarry = array(
						$storearr
					);
		$finalarray['order_details']=$storearr;
				echo json_encode($finalarray);

	}

 ?>