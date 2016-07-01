<?php 
    include_once 'config_admin.php';
	include 'header.php';
	include 'sidebar.php';
    include_once 'classes/adminClass.php';
     
    $getusers = new AdminPanel;
    $rslt=$getusers->userServices();
 
                            
 ?>

  	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
	            <div class="col-lg-12">
	            	<div class="panel panel-default">
                        <div class="panel-heading">
                            All services

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
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
                                                $obj->user_id=$data['user_id'];
                                                $result=$obj->viewServices();
    
                                                    while ($res=mysqli_fetch_array($result)) {
                                                        $i++;
                                         
                                                         ?>

                                                            <tr class="success">
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
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                        
                    </div>
	            </div><!-- col-lg-12 end -->
            </div><!-- row class end -->
    </div><!-- page-wrapper end -->



 <?php 
 include 'footer.php';
  ?>