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
				$finalarray['message']="<h3>Rate list</h3>
		<ul>
			<li>Window AC at Rs:690/AC</li>
			<li>Split AC at Rs: 1850/AC</li>
			
		</ul>

		<h3>What's included?</h3>
		<ul>
			<li>Includes labour charges only</li>
			<li>Any parts that requires replacement will be extra</li>
			<li>Minimum visiting charges are Rs.199 </li>
		</ul>";
				echo json_encode($finalarray);
		
	}
		

 ?>
