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
			                                            <!-- <th>Professionals</th>
			                                            <th>Contact</th> -->
			                                            <th>Status</th>
			                                        </tr>

			                                    </thead>
			                                    <tbody>
			                                    <?php 

			                                        $i=0;
			                                          

			                                                $obj = new AdminPanel;
			                                                $obj->user_id=$_SESSION['user_id'];
			                                                $result=$obj->getNewServices();
			                                                    while ($res=mysqli_fetch_array($result)) {
			                                                    	/*if($res['user_name'] == $_SESSION['user_id'] )*/
			                                                        $i++;
			                                         				
			                                                         ?>

			                                                            <tr >
			                                                                <td><?php echo $i; ?></td>
			                                                                <td><?php echo $res['user_name']; ?></td>
			                                                                <td><?php echo $res['main_service'];?></td>
			                                                                <td><?php echo $res['sub_category_name']; ?></td>
			                                                                <td><?php echo $res['sub_child_category_name']; ?></td>
			                                                                <td><?php echo $res['service_address']; ?></td>
			                                                                <!--<td>-->
			                                                                <?php //echo $res['pro_name']; ?>
			                                                                	
			                                                                <!--</td>-->
			                                                                <!--<td>-->
			                                                                <?php //echo $res['pro_contact']; ?>
			                                                                <!--</td>-->
			                                                                <td><?php if(0 ==$res['status']) {echo "Pending";} 
			                                                                else {echo "Complete";}
			                                                                ?></td>

			                                                            </tr>
			                                                    <?php 
			                                                        }
			                                ?>
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