<?php 
	include_once 'classes/subSubCategoryClass.php';

	/*user session handling */
	session_start();
	if(!isset($_SESSION['user'])) {
		header("Location:index.php?error=You need to login first.");
	}

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
		<?php  include_once 'navbar.php'  ?><!-- nav bar for intermediate pages -->
		<div class = "containerfluid" >
				<div class="container">
						<div class = "row">
								<div class = "col-lg-12" >
									<div class = "col-lg-8 col-lg-offset-2">
										<div id="list4">
										   	<ul class="list-group">
												<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
												<li class="list-group-item list-group-item">Cras sit amet nibh libero</li>
												<li class="list-group-item list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
										
									</div>
										
								</div>
						</div>				
				</div>
		</div>
</body>
</html>