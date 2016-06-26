<?php 
	include_once 'classes/subCategoriesClass.php';

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
											<form role="form">
												<div class="form-group input-group">
										 			<span class="input-group-addon">House</span>
										 			<input type="text" name ="house"  class="form-control" placeholder="Flat No/House No">
										 		</div>
										 		<div class="form-group input-group">
										 			<span class="input-group-addon">Apartment</span>
										 			<input type="text" name ="house"  class="form-control" placeholder="Apartment/street name">
										 		</div>  
										 		<div class="form-group input-group">
										 			<span class="input-group-addon">locality</span>
										 			<input type="text" name ="house"  class="form-control" placeholder="Locality/Area Name">
										 		</div>
										 		<div class="form-group input-group">
										 			<span class="input-group-addon">Chandigarh</span>
										 			<input type="text" name ="house"  class="form-control" placeholder="Pincode">
										 		</div>
										 		
										 		<button class="btn  btn-block col-lg-12 btn-success">Submit</button>
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