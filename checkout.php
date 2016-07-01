<?php 
	include_once 'classes/connectionClass.php';
	include_once 'classes/subSubCategoryClass.php';
	include_once 'classes/userClass.php';
	include_once 'classes/checkoutClass.php';
	
	/*user session handling */
	/*session_start();*/
	if(!isset($_SESSION['user'])) {
		header("Location:index.php?error=You need to login first.");
	}

	/*user session handling end*/

	$obj    = new CheckoutClass;
	$finObj = new subSubCategory;
	$finObj->self_id = $_GET['id'];
	$res    =$finObj->geteverything();


	

	while($result = mysqli_fetch_array($res)){
		echo $result['name'].">";
		echo $result['sub_category_name'].">";
		echo $result['sub_child_category_name'];
	}

	$obj->user_id 		= 	$_SESSION['user_id'];
	$obj->service_id 	= 	$_GET['id'];
	$obj->service_status = 	0;/* value = 0 for new pending service 
						   * value = 1 for complete service
						   */
	/*echo $obj->user_id;
	echo $obj->service_id;
	echo $obj->service_status;*/
	$service_address = "";
	if(isset($_POST['go'])) {
		$service_address 	   = (string)$_POST['house'];
		$service_address 	  .= (string)" ".$_POST['apartment'];
		$service_address 	  .= (string)" ".$_POST['locality'];
		$service_address 	  .= (string)" ".$_POST['pin_code'];
		
		$obj->service_address = $service_address;
		echo $obj->service_address;

		$msg = $obj->add_user_service();
	}



 ?>
 <?php


 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>User Address</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/subCategories.css">

	</head>
	<body style=" background-image: url(images/bg.jpg);
			background-size: cover;">

		<div class = "containerfluid" >
			<div class="container" >
				<div class = "row">
					<div class = "col-lg-12" >
						<div class = "col-lg-8 col-lg-offset-2" >
							<div id = list4>
								<div class="panel panel-default ">
									<ul class="list-group">
										<li class="list-group-item" style="background-color: orange;">						
											<p style=" border-radius: 5px;font-size: 35px; text-align: center;">Enter Address</p>
											
											</li>
										<li>								
										<div class="panel-body">
											<form role="form" action="" method="post">
													<div class="form-group input-group">
											 			<span class="input-group-addon" style="min-width:110px;">House</span>
											 			<input type="text" name ="house"  class="form-control" placeholder="Flat No/House No" required>
											 		</div>
											 		<div class="form-group input-group">
											 			<span class="input-group-addon" style="min-width:110px;">Apartment</span>
											 			<input type="text" name ="apartment"  class="form-control" placeholder="Apartment/street name" required>
											 		</div>  
											 		<div class="form-group input-group">
											 			<span class="input-group-addon" style="min-width:110px;">locality</span>
											 			<input type="text" name ="locality"  class="form-control" placeholder="Locality/Area Name" required>
											 		</div>
											 		<div class="form-group input-group">
											 			<span class="input-group-addon" style="min-width:110px;">Chandigarh</span>
											 			<input type="number" name ="pin_code"  class="form-control" placeholder="Pincode" required>
											 		</div>
											 		
											 		<button class="btn  btn-block col-lg-12 btn-success" name="go">Submit</button>
											</form>	
						   				</div>
						   		      </li>
						   		     </ul>
						   		  </div>
						   		
							</div>
						</div>	 
					</div>
				</div>				
			</div>
		</div>
	</body>
</html>