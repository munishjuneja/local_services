<?php 
	include_once 'classes/subCategoriesClass.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>subCategories</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/subCategories.css">
</head>
<body style=" background-image: url(images/bg.jpg);
		background-size: cover;">

		<div class = "containerfluid" >
				<div class="container">
						<div class = "row">
								<div class = "col-lg-12" >
									
									<div class = "col-lg-8 col-lg-offset-2" >
										
										<div id="list4">
										   	<ul class="list-group">

										     <li  class="list-group-item" style="font-size:20px;"><span><a href="#"><img src="images/back1.jpeg" style="height: 25px; width: 25px;"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect from the listed items</span></li>
										    	<?php 
										    		$listObj = new subCategory;
										    		$listObj->id=$_GET['id'];
										    		$res=$listObj->allSubCategories();
													while($result = mysqli_fetch_array($res)){
										    	 ?>
										    	 <li class="list-group-item"><a href="subChildCategoriesView.php?id=<?php echo $result['id'];?>" class="list-group-item"><span ><img src="images/fr.png" style="height: 25px; width: 25px;"></span><?php 
										    	 		
										    	 		echo $result['sub_category_name'];

										    	  ?></a>
										    	  <?php
										    	  	}
										    	  ?>
										      </li>
										   	</ul>
										</div>
										
									</div>	
										
								</div>
						</div>				
				</div>
		</div>
</body>
</html>