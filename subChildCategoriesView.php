	<?php 
		include_once 'classes/subSubCategoryClass.php';

		/*user session handling */
		/*session_start();
		if(!isset($_SESSION['user'])) {
			header("Location:index.php?error=You need to login first.");
		}*/

		/*user session handling end*/

	 ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>subCategories</title>
	    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/subCategories.css">
	</head>
	<body style=" background-image: url(images/bg.jpg);
			background-size: cover;">
			<?php $url = $_SERVER['HTTP_REFERER'] ?>
			<?php  include_once 'navbar.php'  ?><!-- nav bar for intermediate pages -->
			<div class = "containerfluid" >
					<div class="container">
							<div class = "row">
									<div class = "col-lg-12" >
										
										<div class = "col-lg-8 col-lg-offset-2" >
											
											<div id="list4">
											   	<ul class="list-group">

											     <li  class="list-group-item" style="font-size:20px;"><span>
											     <a href="<?php echo $url;?>"><img src="images/back1.jpeg" style="height: 25px; width: 25px;"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect from the listed items</span></li>
											    	<?php 
											    		$listObj = new subSubCategory;
											    		$listObj->id=$_GET['id'];
											    		$res=$listObj->allSubChildCategories();
														
											    	 ?>
											    	 <?php while($result = mysqli_fetch_array($res)){ 
											    	 		
											    	 	?>

											    	 <li class="list-group-item"><a href="checkout.php?sub_child_id=<?php echo $result['id'];?>&sub_id=<?php echo $_GET['id']?>&main_id=<?php echo $_GET['service_id'];?>" class="list-group-item"><span ><img src="images/fr.png" style="height: 25px; width: 25px;"></span><?php 
											    	 		echo $result['sub_child_category_name'];

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