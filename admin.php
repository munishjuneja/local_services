<?php 
    include_once 'config_admin.php';
	include 'header.php';
	include 'sidebar.php';
    include_once 'classes/adminClass.php';
     
    $getusers = new AdminPanel;
    $rslt=$getusers->userServices();
    $statuschange = new AdminPanel;
    if (isset($_POST['changestatus'])) {
        $statuschange->id=$_POST['status'];
        $statuschange->changeStatus();      
    }
 
                            
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
                                            <th>Status</th>
                                            <!-- <th>Professionals</th>
                                            <th>Contact</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 

                                        $i=0;
                                          /* while($data=mysqli_fetch_array($rslt)){*/

                                                $obj = new AdminPanel;
                                                $result=$obj->viewServices();
    
                                                    while ($res=mysqli_fetch_array($result)) {
                                                        $i++;
                                         
                                                         ?>

                                                            <tr class="success">
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $res['user_name']; ?></td>
                                                                <td><?php echo $res['main_service'];?></td>
                                                                <td><?php echo $res['sub_category_name']; ?></td>
                                                                <td><?php echo $res['sub_child_category_name']; ?></td>
                                                                <td><?php echo $res['service_address']; ?></td>
                                                              <!-- <td>-->
                                                                 <?php 
                                                                 // echo $res['pro_name']; 
                                                                 ?>
                                                                    
                                                                <!-- </td>-->
                                                                <!-- <td>-->
                                                                <?php //echo $res['pro_contact']; 
                                                                ?><!-- </td>-->
                                                                <td>

                                                                 <form method="post" action="">
                                                                        <input type="hidden" name="status" method="post" value="<?php echo $res['id'];?>">
                                                                        <?php if ($res['status']==0): ?>
                                                                            <button type="submit" name="changestatus" class="btn btn-sm btn-danger" >
                                                                                Pending
                                                                            </button>
                                                                        <?php else: ?>
                                                                            <button class="btn btn-sm btn-info">Complete</button>
                                                                        <?php endif ?>

                                                                        

                                                                     </form>


                                                                </td>

                                                            </tr>
                                                    <?php 
                                                        }
                                           /* }*/
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