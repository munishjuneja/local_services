<?php 
	include_once 'classes/subSubCategoryClass.php';
	session_start();
	/*user session handling */
	if(!isset($_SESSION['user'])) {
		header("Location:index.php?error=You need to login first.");
	}

	/*user session handling end*/
    include_once 'classes/adminClass.php';
     
    $getusers = new AdminPanel;
    $rslt=$getusers->userServices();
 
                            
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
									<div class="panel">
									<div class="panel-body">
			                            <div class="table-responsive">
			                                <table class="table table-hover table-striped">
			                                    <thead class="thead-inverse">
			                                        <tr>
			                                            <th>#</th>
			                                            <th>User Name</th>
			                                            <th>Service</th>
			                                            <th>Sub Service</th>
			                                            <th>Sub Child Service</th>
			                                            <th>Address</th>
			                                            <th>Professionals</th>
			                                            <th>Status</th>
			                                        </tr>

			                                    </thead>
			                                    <tbody>
			                                    <?php 

			                                        $i=0;
			                                           while($data=mysqli_fetch_array($rslt)){

			                                                $obj = new AdminPanel;
			                                                $obj->user_id=$_SESSION['user_id'];
			                                                $result=$obj->viewServices();
			                                                    while ($res=mysqli_fetch_array($result)) {
			                                                        $i++;
			                                         
			                                                         ?>

			                                                            <tr >
			                                                                <td><?php echo $i; ?></td>
			                                                                <td><?php echo $res['user_name']; ?></td>
			                                                                <td><?php echo $res['name'];?></td>
			                                                                <td><?php echo $res['sub_category_name']; ?></td>
			                                                                <td><?php echo $res['sub_child_category_name']; ?></td>
			                                                                <td><?php echo $res['service_address']; ?></td>
			                                                                <td>professional</td>
			                                                                <td><?php echo $res['status']; ?></td>

			                                                            </tr>
			                                                    <?php 
			                                                        }
			                                            }
			                                ?>
			                                	<tr >
			                                		<td>1</td>
			                                		<td>skipper</td>
			                                		<td>AC</td>
			                                		<td>AC 1</td>
			                                		<td>AC 2</td>
			                                		<td>D-104</td>
			                                		<td>123456789</td>
			                                		<td>1</td>
			                                	</tr>
			                                	<tr >
			                                		<td>1</td>
			                                		<td>skipper</td>
			                                		<td>AC</td>
			                                		<td>AC 1</td>
			                                		<td>AC 2</td>
			                                		<td>D-104</td>
			                                		<td>123456789</td>
			                                		<td>1</td>
			                                	</tr>
			                                	<tr >
			                                		<td>1</td>
			                                		<td>skipper</td>
			                                		<td>AC</td>
			                                		<td>AC 1</td>
			                                		<td>AC 2</td>
			                                		<td>D-104</td>
			                                		<td>123456789</td>
			                                		<td>1</td>
			                                	</tr>
			                                    </tbody>
			                                </table>
			                            </div>
			                            <!-- /.table-responsive -->
			                        </div>
			                        <!-- /.panel-body -->
			                        </div><!-- panel class end -->
										
								</div>
						</div>				
				</div>
		</div>
</body>
</html>