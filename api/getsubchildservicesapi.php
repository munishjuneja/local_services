<?php 
	include '../classes/subSubCategoryClass.php';

	$getObj = new subSubCategory;
	if ($_GET['method']=='getsubchildservices') {
		$getObj->id = $_GET['id'];	
		$result = $getObj->allSubChildCategories();
				$storearr = array();
				$i=0;
		
		while($resultintoarray = mysqli_fetch_array($result)){
			$intermediatearray = array();
			$intermediatearray['id']=$resultintoarray['id'];
			// $intermediatearray['service_id']=$resultintoarray['service_id'];
			$intermediatearray['sub_child_category_name']=$resultintoarray['sub_child_category_name'];
			$storearr[$i]=$intermediatearray;
						$i++;

		}
	
		$newarry = array(
						$storearr
					);
				if(count($storearr)>0){
					$finalarray['result']=1;
				}
				else{
					$finalarray['result']=0;

				}
				$finalarray['subchildservices']=$storearr;
				echo json_encode($finalarray);
		
	}
		

 ?>
