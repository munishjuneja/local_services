<?php 
	include '../classes/subCategoriesClass.php';

	$getObj = new subCategory;
	if ($_GET['method']=='getsubservice') {
		$getObj->id = $_GET['id'];	
		$result = $getObj->allSubCategories();
				$storearr = array();
				$i=0;
		
		while($resultintoarray = mysqli_fetch_array($result)){
			$intermediatearray = array();
			$intermediatearray['id']=$resultintoarray['id'];
			// $intermediatearray['service_id']=$resultintoarray['service_id'];
			$intermediatearray['sub_category_name']=$resultintoarray['sub_category_name'];
			$storearr[$i]=$intermediatearray;
						$i++;

		}
	
		$newarry = array(
						$storearr
					);
				
				$finalarray['subservices']=$storearr;
				echo json_encode($finalarray);
		
	}
		

 ?>
